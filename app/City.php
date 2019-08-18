<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];

    public function weather_stats(){
        return $this->hasMany(WeatherStatus::class);
    }
}
