<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->nombre = 'Curso de Ginecologia';
        $curso->descripcion = 'Curso dedicado al estudio de la ginecologia';
        $curso->uri_miniatura='https://www.google.com.mx';
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Curso de Obstetricia';
        $curso->descripcion = 'Curso dedicado al estudio de la obstetricia';
        $curso->uri_miniatura='https://www.google.com.mx';
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Curso de Medicina General';
        $curso->descripcion = 'Curso dedicado al estudio de la medicina';
        $curso->uri_miniatura='https://www.google.com.mx';
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Curso Complementario';
        $curso->descripcion = 'Curso complementario';
        $curso->uri_miniatura='https://www.google.com.mx';
        $curso->save();

    }
}
