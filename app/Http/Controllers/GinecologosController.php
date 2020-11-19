<?php

namespace App\Http\Controllers;
use App\Contacto;
use Illuminate\Http\Request;

class GinecologosController extends Controller
{
    public function index(){

        return view('ginecologos.inicio');
    }

    public function nosotros(){
        $archivos= scandir(str_replace('\\', '/', public_path()) . '/assets/img/galeria');
        if($archivos){
            unset($archivos[0]);
            unset($archivos[1]);
        }                
        return view('ginecologos.nosotros3',['galeria'=>$archivos]);
    }

    public function afiliacion(){

        return view('ginecologos.afiliacion');
    }

    public function contacto(){

        return view('ginecologos.contacto');
    }

    public function contactop(Request $request){        
        $request->validate([
            'email' => 'required|max:254|email',
            'body' => 'required||max:254',
            'message' => 'required|max:254',
        ]);        
        
        $contacto = new Contacto();

        $contacto->email = $request->email;
        $contacto->asunto = $request->body;
        $contacto->mensaje = $request->message;
        $contacto->created_at=now();
        $contacto->updated_at=now();

        try{
            $contacto->save();
            $status = 'Se envio el mensaje correctamente, en breve nos pondremos en contacto con usted!';
        }catch(Exception $e){
            $status = 'Ocurrio un error al enviar el mensaje, intente mas tarde';
        }                
        return redirect('/contacto')->with(compact('status'));
    }

    public function blog(){

        return view('ginecologos.bloc');
    }

}
