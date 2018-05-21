<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $fillable = ['alumna_id','grupo_id','fecha','status'];

    public function antecedente(){
        return $this->belongsTo(Antecedente::class,'alumna_id','alumna_id');
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

}
