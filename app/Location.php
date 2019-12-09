<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $guarded = [];

    // public function infos()
    // {
    //     return $this->hasMany('App\Info', 'location_value', 'value');
    // }
}
