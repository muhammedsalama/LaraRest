<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeatherStatus extends Model
{
    protected $fillable = [
        'city_id',
        'provider',
        'temp_celsius',
        'status',
        'last_update'
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
