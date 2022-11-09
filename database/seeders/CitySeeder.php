<?php

namespace Database\Seeders;

use App\Models\Facturis\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name'=>'Casablanca',
                'slug'=>'casablanca',
                'code'=>1,
                'added_at'=>now(),
            ],
            [
                'name'=>'Rabat',
                'slug'=>'rabat',
                'code'=>2,
                'added_at'=>now(),
            ],
            [
                'name'=>'Marrakech',
                'slug'=>'marrakech',
                'code'=>3,
                'added_at'=>now(),
            ],
            [
                'name'=>'Tanger',
                'slug'=>'tanger',
                'code'=>4,
                'added_at'=>now(),
            ],
        ];

        foreach($cities as $city)
        {
            City::create($city);
        }
    }
}
