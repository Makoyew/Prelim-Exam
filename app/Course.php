<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainees() {
        return $this->belongsTo('App\trainee');
    }
}
