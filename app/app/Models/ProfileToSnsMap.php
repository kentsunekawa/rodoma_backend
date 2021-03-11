<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileToSnsMap extends Model
{
    public $timestamps = false;

    public function profile() {
        return $this->belogsTo('App\Models\Profile');
    }
}
