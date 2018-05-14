<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function inscripciones(){
        return $this->hasMany(Inscripcion::class);
    }
}
