<?php
namespace App\Http\Controllers\Suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class SuscriptorController extends Controller
{
    //
    public function index(Request $request){
        $cursos = Curso::all();
        return view('suscriptor.index',['cursos'=> $cursos]);        
    }

    public function curso(Request $request, $id){
                
        $curso = Curso::with('temas')->find($id);

        if(!isset($curso))
            die('Not found');

        

        return view('suscriptor.curso',['curso'=>$curso]);
    }
}
