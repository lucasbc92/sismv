<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use DB;
use File;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $json = File::get("database/data/cities.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            City::create(array(
                'city_id' => $obj->city_id,
                'city_dsc' => $obj->city_dsc,
                'state' => $obj->state,
                'ibge_code' => $obj->ibge_code
            ));
        }
    }
}

