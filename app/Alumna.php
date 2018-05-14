<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Alumna extends Model
{
    public function inscripcion(){
        return $this->hasOne(Inscripcion::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
