<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GinecologosController extends Controller
{
    public function index(){

        return view('ginecologos.inicio');
    }

    public function nosotros(){

        return view('ginecologos.nosotros');
    }

    public function afiliacion(){

        return view('ginecologos.afiliacion');
    }

}
