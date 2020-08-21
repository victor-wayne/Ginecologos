<?php

use Illuminate\Database\Seeder;
use App\TemasCurso;

class TemaCursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Curso 1 **/
        $tema = new TemasCurso();
        $tema->curso_id = 1;
        $tema->nombre='Introduccion a la Ginecologia';
        $tema->autor='Carlos Chavez';
        $tema->duracion='5:56';
        $tema->descripcion='Curso de introduccion a estudio de la Ginecologia';    
        $tema->uri_multimedia='https://www.google.com.mx/';    
        $tema->uri_miniatura='https://www.google.com.mx/';    
        $tema->save();

        $tema = new TemasCurso();
        $tema->curso_id = 1;
        $tema->nombre='¿Que es la Ginecologia?';
        $tema->autor='Carlos Chavez';
        $tema->duracion='15:23';
        $tema->descripcion='Explicacion del estudio de la Ginecologia';    
        $tema->uri_multimedia='https://www.google.com.mx/';    
        $tema->uri_miniatura='https://www.google.com.mx/';    
        $tema->save();
            
         /** Curso 2 **/
         $tema = new TemasCurso();
         $tema->curso_id = 2;
         $tema->nombre='Introduccion a la Obstetricia';
         $tema->autor='Carlos Chavez';
         $tema->duracion='10:00';
         $tema->descripcion='Curso de introduccion a estudio de la Obstetricia';    
         $tema->uri_multimedia='https://www.google.com.mx/';    
         $tema->uri_miniatura='https://www.google.com.mx/';    
         $tema->save();

          /** Curso 3 **/
          $tema = new TemasCurso();
          $tema->curso_id = 3;
          $tema->nombre='Introduccion a la Medicina';
          $tema->autor='Carlos Chavez';
          $tema->duracion='7:23';
          $tema->descripcion='Curso de introduccion a estudio de la Medicina';    
          $tema->uri_multimedia='https://www.google.com.mx/';    
          $tema->uri_miniatura='https://www.google.com.mx/';    
          $tema->save();

           /** Curso 4 **/
           $tema = new TemasCurso();
           $tema->curso_id = 4;
           $tema->nombre='Curso Complementario';
           $tema->autor='Carlos Chavez';
           $tema->duracion='7:23';
           $tema->descripcion='Curso Complementario';    
           $tema->uri_multimedia='https://www.google.com.mx/';    
           $tema->uri_miniatura='https://www.google.com.mx/';    
           $tema->save();
            

    }
}
