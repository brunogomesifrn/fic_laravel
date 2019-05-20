<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    function area(){
        return $this->belongsTo('App\Area');
    }

    function publicos(){
        return $this->belongsToMany("App\Publico", "cursos_publicos");
 	}

 	function autores(){
        return $this->belongsToMany("App\User", "cursos_autores");
    }

    function inscritos(){
        return $this->belongsToMany("App\User", "cursos_autores");
	}



}
