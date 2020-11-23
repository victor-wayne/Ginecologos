<?php

namespace App\Http\Controllers\Administrador;
use App\Curso;
use App\TemasCurso;
use App\Contacto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class AdministradorController extends Controller
{
    public function index(Request $request)
    {                
        $cursos = Curso::all();
        $contactos = Contacto::all();
        foreach($cursos as $curso){
            $curso->uri_miniatura = !empty($curso->uri_miniatura) && file_exists(public_path('assets/img/').$curso->uri_miniatura)?$curso->uri_miniatura:"dummies/browser.png";            
        }
        return view('administrador.index',['cursos'=> $cursos,'contactos'=>$contactos]);     	  
    }

    public function curso(Request $request,$id=null){

        

        $curso = ($id > 0) ? Curso::with('temas')->find($id) : new Curso();
        
        if($id>0){            
            $curso->uri_miniatura = !empty($curso->uri_miniatura) && file_exists(public_path('assets/img/').$curso->uri_miniatura)?$curso->uri_miniatura:"dummies/browser.png";                        
            foreach($curso->temas as $tema){                
                $tema->uri_miniatura = !empty($tema->uri_miniatura) && file_exists(public_path('assets/img/').$tema->uri_miniatura)?$tema->uri_miniatura:"dummies/browser.png";                
            }
        }
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

    public function cursodel(Request $request,$id){
        if($id>0){
            try{
                $curso =  Curso::find($id);
                if($curso==null){
                    throw new Exception('El curso no existe');
                }
                $curso->delete();     
                $status="Se eliminó el curso correctamente";       
            }catch(Exception $ex){
                $status="Ocurrio un error al eliminar el curso, intente mas tarde \n (CODE): ".$ex->getMessage(); 
            }            
        }else{
            $status="El curso seleccionado no existe"; 
        }
        return redirect('/admin')->with(compact('status'));
    }

    public function cursoform(Request $request,$idcurso){                        
        $curso =  Curso::find($idcurso);
        if($curso==null)
            $curso = new Curso();
        return view('administrador.cursoform',['curso'=>$curso]);
    }

    public function temacursoform(Request $request,$idcurso,$idtema=null){        
        $tema = ($idtema>0) ? TemasCurso::find($idtema) : new TemasCurso();        
        $curso = Curso::find($idcurso);
        return view('administrador.temacursoform',['tema'=>$tema,'curso'=>$curso]);
    }

    public function save(Request $request){        
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:100',
            //'uri_miniatura' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=800,max_height=600',
            'uri_miniatura' => 'image|mimes:jpeg,png,jpg|max:1024',
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
            
        if($curso == null){
            die("Curso no valido");
        }

        if(isset($request->uri_miniatura)){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_miniatura->extension();           
            $curso->uri_miniatura = 'dummies/'.$fileName;
            $request->uri_miniatura->move(public_path('assets/img/dummies'), $fileName);
        }elseif ($curso->id ==null || $curso->id <= 0){
            $curso->uri_miniatura = 'dummies/browser.png';
        }
                
        try{
            $curso->save();
            $status="Curso guardado correctamente";
        }catch(Exception $e){
            $status="Ocurrio un error al guardar el curso";
        }        
        return redirect()->route('administrador', array())->with(compact('status'));;        
    }

    public function savetema(Request $request){
                        
        $request->validate([
            'curso_id' => 'required|max:10',
            'nombre' => 'required|max:100',
            'autor' => 'required|max:100',
            'descripcion' => 'required|max:250',
            'uri_miniatura' => 'image|mimes:jpeg,png,jpg|max:1024',
            'uri_multimedia' => 'mimes:mp4'    
            //'uri_multimedia' => 'required'            
        ]);

        $id = $request->id;
        
        if(!isset($request->curso_id) || !isset($request->nombre) || !isset($request->autor) 
        || !isset($request->descripcion)){            
            throw ValidationException::withMessages(['uri_multimedia' => '(ERROR) Virifique su información']);            
        }
        
        $curso = Curso::find($request->curso_id);
        $TemasCurso = ($id>0) ? TemasCurso::find($id) : new TemasCurso();
            $TemasCurso->curso_id = $request->curso_id;
            $TemasCurso->nombre = trim($request->nombre);
            $TemasCurso->autor = trim($request->autor);
            $TemasCurso->descripcion = trim($request->descripcion);     
            $TemasCurso->duracion = trim($request->duracion);       
        
        if(isset($request->uri_miniatura) ){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_miniatura->extension();           
            $TemasCurso->uri_miniatura = 'miniaturas/'.$fileName;
            $request->uri_miniatura->move(public_path('assets/img/miniaturas'), $fileName);
        }elseif($id==null || $id<=0){          
            //Imagen por default  
            $TemasCurso->uri_miniatura = 'dummies/browser.png';
        }

        
        if(isset($request->uri_multimedia)){ 
            $fileName = md5($request->nombre.time()).'.'.$request->uri_multimedia->extension();           
            $TemasCurso->uri_multimedia = $curso->nombre.'/'.$fileName;
            $request->uri_multimedia->move(public_path('assets/videos/'.$curso->nombre), $fileName);
        }        
        elseif($id==null || $id<=0){
            //Si es un tema nuevo, debe tener un video obligatorio            
            throw ValidationException::withMessages(['uri_multimedia' => '(ERROR) Adjunte un archivo multimedia (video mp4)']);            
        }

        /*if($request->uri_multimedia!=""){
            try{
                $url = parse_url($request->uri_multimedia);            
                if($url["host"]!="youtu.be"){
                    throw ValidationException::withMessages(['uri_multimedia' => 'Este video no se encuentra en youtube.com']);  
                }
                if($url["path"]==""){
                    throw ValidationException::withMessages(['uri_multimedia' => 'Este video no se encuentra en youtube.com']);  
                }                
                $video_id=addslashes($url["path"]);
                $TemasCurso->uri_multimedia = $video_id;
            }catch(Exception $e){
                throw ValidationException::withMessages(['uri_multimedia' => '(ERROR) La ruta del video ingresada, no es valida']); 
            }
        }elseif($id==null || $id<=0){
            //Si el curso es nuevo, por fueza debe llevar uri_multimedia
            throw ValidationException::withMessages(['uri_multimedia' => '(ERROR) Adjunte la direccion del video']);            
        }*/
                
        try{
            $TemasCurso->save();            
            $status = $id>0?"Se actualizó el curso correctamente":"Se guardó el curso correctamente";
        }catch(Exception $e){
            $status = "Ocurrio un error al guardar los datos, intente mas tarde";
        }
        return redirect('admin/curso/'.$curso->id)->with(compact('status'));
    }
    
}
