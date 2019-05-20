<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publico extends Model
{
    function cursos(){
        return $this->belongsToMany("App\Curso", "cursos_publicos");
	}

}
