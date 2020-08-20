<?php
/**Esta Controlador, va a determinar si es administrador o suscriptor**/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $isAdministrador = $request->user()->hasRole('administrador');

        if($isAdministrador){
            return redirect('admin');
        }else{
            return redirect('suscriptor');   
        }
    }
}
