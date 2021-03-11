<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public $timestamps = false;

    // public function followers() {
    //     return $this->belongsTo('App\Models\User', 'follower_id');
    // }

    // public function followed() {
    //     return $this->belongsTo('App\Models\User', 'followed_id');
    // }
}
