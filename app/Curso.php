<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TemasCurso;
class Curso extends Model
{
    //protected $fillable = ['nombre', 'descripcion'];
    //protected $guarded = ['id'];

    public function temas()
    {
        return $this->hasMany(TemasCurso::class);
    }
}
