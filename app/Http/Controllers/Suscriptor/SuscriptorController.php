<?php
namespace App\Http\Controllers\Suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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

    public function user(Request $request){
        return view('suscriptor.user');
    }

    public function changePassword(Request $request){

        $data = [];

        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required',
            'rnew_password' => 'required|same:new_password',
        ]);
        $status = "";
        $user = Auth::user();
                        
        if(!Hash::check($request->current_password, $user->password)){            
            throw ValidationException::withMessages(['current_password' => 'La contraseña no coincide']);
        }
                        
        $user->password = Hash::make($request->new_password);        
        try{
            $user->save();
            $status = "Se actualizo la contraseña";
        }catch(Exception $e){
            $status = "Ocurrio un error al actualizar contraseña, intente mas tarde";            
        }                
        return redirect('/suscriptor/user')->with(compact('status'));

    }
}
