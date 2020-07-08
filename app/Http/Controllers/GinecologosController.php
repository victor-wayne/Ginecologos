<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GinecologosController extends Controller
{
    public function index(){

        return view('ginecologos.index');
    }
}
