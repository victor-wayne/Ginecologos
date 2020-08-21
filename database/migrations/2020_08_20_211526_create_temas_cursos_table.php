<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id');
            $table->string('nombre');
            $table->string('autor');
            $table->string('duracion');
            $table->text('descripcion');
            $table->text('uri_multimedia');
            $table->text('uri_miniatura');
            $table->timestamps();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temas_cursos');
    }
}
