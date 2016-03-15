<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    public function section()
    {
        return $this->belongsTo('\App\Section');
    }

    public function subjects()
    {
        return $this->belongsToMany('\App\Subject');
    }
}
