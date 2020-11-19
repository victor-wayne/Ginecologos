<?php

namespace App\Http\Controllers\Suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use App\User;

class PaymentController extends Controller
{
    private $apiContext;
    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    public function payWithPayPal()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('3000');
        $amount->setCurrency('MXN');

        $transaction = new Transaction();
        $transaction->setAmount($amount);        

        $callbackUrl = url('/suscriptor/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo "Error";
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {

        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');
        

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo procesar.';
            return redirect('/suscriptor')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved') {        
            $transaction_id=$result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getId();
            $transaction_status = $result->getState();            
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';                        
            $user = Auth::user();   
            $user->transaction_id=$transaction_id;  
            $user->transaction_status=$transaction_status; 
            $user->save();            
            return redirect('/suscriptor')->with(compact('status'));
        }
        
        $status = 'Lo sentimos! El pago a través de PayPal no se pudo procesar.';
        return redirect('/suscriptor')->with(compact('status'));
    }

}
