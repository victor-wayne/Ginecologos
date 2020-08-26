<?php

namespace App\Http\Controllers\Administrador;
use App\Curso;
use App\TemasCurso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(Request $request)
    {                
        $cursos = Curso::all();
        return view('administrador.index',['cursos'=> $cursos]);     	  
    }

    public function curso(Request $request,$id=null){

        

        $curso = ($id > 0) ? Curso::with('temas')->find($id) : new Curso();
        
        /*$tema = new TemasCurso();
        $tema->nombre = "El curso de alta";        
        $curso->temas->push($tema);

        $tema = new TemasCurso();
        $tema->nombre = "El curso de alta numero 2";        
        $curso->temas->push($tema);

        dump($curso);        
        die();        */
        return view('administrador.curso',['curso'=>$curso]);

    }

    public function temacursoform(Request $request,$idcurso,$idtema=null){        
        $tema = ($idtema>0) ? TemasCurso::find($idtema) : new TemasCurso();        
        $curso = Curso::find($idcurso);
        return view('administrador.temacursoform',['tema'=>$tema,'curso'=>$curso]);
    }

    public function save(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'uri_miniatura' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=800,max_height=600',
        ]);

        $id = $request->id;
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;


        if(!isset($nombre) || !isset($descripcion)){
            die('Nombre o descripcion no establecidos');
        }
        
        $curso = ($id>0) ? Curso::find($id) : new Curso();
            $curso->nombre = $nombre;
            $curso->descripcion = $descripcion;            

        if(isset($request->uri_miniatura)){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_miniatura->extension();           
            $curso->uri_miniatura = 'dummies/'.$fileName;
            $request->uri_miniatura->move(public_path('assets/img/dummies'), $fileName);
        }elseif ($curso->id ==null || $curso->id <= 0){
            $curso->uri_miniatura = 'dummies/work7.jpg';
        }
        
        //dump($curso);
        $curso->save();

        return redirect('admin/curso/'.$curso->id);
    }

    public function savetema(Request $request){
                

        $request->validate([
            'curso_id' => 'required',
            'nombre' => 'required',
            'autor' => 'required',
            'descripcion' => 'required',
            'uri_miniatura' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=800,max_height=600',
            'uri_multimedia' => 'mimes:mp4'            
        ]);

        $id = $request->id;
        


        if(!isset($request->curso_id) || !isset($request->nombre) || !isset($request->autor) 
        || !isset($request->descripcion)){
            //dump($request);
            die('Datos incompletos');
        }
        
        $curso = Curso::find($request->curso_id);
        $TemasCurso = ($id>0) ? TemasCurso::find($id) : new TemasCurso();
            $TemasCurso->curso_id = $request->curso_id;
            $TemasCurso->nombre = trim($request->nombre);
            $TemasCurso->autor = trim($request->autor);
            $TemasCurso->descripcion = trim($request->descripcion);     
            $TemasCurso->duracion = trim($request->duracion);       

        if(isset($request->uri_miniatura)){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_miniatura->extension();           
            $TemasCurso->uri_miniatura = 'miniaturas/'.$fileName;
            $request->uri_miniatura->move(public_path('assets/img/miniaturas'), $fileName);
        }elseif($id==null || $id<=0){            
            $TemasCurso->uri_miniatura = 'dummies/work7.jpg';
        }

        if(isset($request->uri_multimedia)){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_multimedia->extension();           
            $TemasCurso->uri_multimedia = $curso->nombre.'/'.$fileName;
            $request->uri_multimedia->move(public_path('assets/videos/'.$curso->nombre), $fileName);
        }elseif($id==null || $id<=0){
            throw new Exception("No se cargo video");
        }
        
        
        $TemasCurso->save();
        return redirect('admin/curso/'.$curso->id);
    }
    
}
