<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
