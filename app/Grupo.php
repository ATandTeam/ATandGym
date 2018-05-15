<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['hora', 'cupo', 'turno'];
    public function inscripciones(){
        return $this->hasMany(Inscripcion::class);
    }
}
