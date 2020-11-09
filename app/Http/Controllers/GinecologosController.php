<?php

namespace App\Http\Controllers;

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

    public function blog(){

        return view('ginecologos.bloc');
    }

}
