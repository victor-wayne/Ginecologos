<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GinecologosController extends Controller
{
    public function index(){

        return view('ginecologos.inicio');
    }

    public function nosotros(){

        return view('ginecologos.nosotros2');
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
