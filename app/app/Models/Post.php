<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function subjects() {
        return $this->hasMany('App\Models\Subject');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function specialty() {
        return $this->belongsTo('App\Models\Specialty');
    }

    public function likes() {
        return $this->belongsToMany(
            'App\Models\User',
            'likes'
        );
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function marks() {
        return $this->belongsToMany(
            'App\Models\User',
            'marks'
        );
    }
}
