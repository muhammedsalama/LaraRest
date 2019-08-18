<?php

use App\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $cities = [
            'london',
            'paris',
            'washington'
        ];

        foreach ($cities as $city){
            City::create([
                'name'=>$city
            ]);
        }
        Model::reguard();
    }
}
