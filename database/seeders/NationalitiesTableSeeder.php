<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nationality;
use DB;
use File;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();
        $json = File::get("database/data/nationalities.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Nationality::create(array(
                'nationality_id' => $obj->nationality_id,
                'nationality_dsc' => $obj->nationality_dsc
            ));
        }
    }
}
