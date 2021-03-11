<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function Posts() {
        return $this->hasMany('App\Models\Posts');
    }
}
