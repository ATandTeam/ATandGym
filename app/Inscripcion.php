<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    public function alumna(){
        return $this->belongsTo(Alumna::class);
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

}
