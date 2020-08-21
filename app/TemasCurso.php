<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;

class TemasCurso extends Model
{
    //

    public function curso()

    {
        return $this->belongsTo(Curso::class);
    }
}
