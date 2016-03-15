<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    public function sections()
    {
        return $this->hasOne('App\Section');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

}
