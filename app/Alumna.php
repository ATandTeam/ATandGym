<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Alumna extends Model
{
    public function antecedente(){
        return $this->hasOne(Antecedentes::class,'alumna_id','id');
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
