<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Race;
use DB;
use File;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->delete();
        $json = File::get("database/data/races.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Race::create(array(
                'race_id' => $obj->race_id,
                'race_dsc' => $obj->race_dsc
            ));
        }
    }
}
