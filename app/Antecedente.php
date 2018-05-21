<?php

namespace atandteam;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    protected $guarded = ['_token'];

    public function alumna(){
        return $this->belongsTo(Alumna::class);
    }
}
