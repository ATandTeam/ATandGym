<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $fillable = ['alumna_id','grupo_id','fecha','status'];

    public function alumna(){
        return $this->belongsTo(Alumna::class);
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

}
