<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function users() {
        return $this->belongsTo('App\user');
    }
}
