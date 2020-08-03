<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    public function user() {
        $this->belongsTo('App\Secret');
    }
}
