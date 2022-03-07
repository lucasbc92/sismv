<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use DB;
use File;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $json = File::get("database/data/countries.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Country::create(array(
                'country_id' => $obj->country_id,
                'country_dsc' => $obj->country_dsc
            ));
        }
    }
}

