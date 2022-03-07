<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sex;
use DB;
use File;

class SexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->delete();
        $json = File::get("database/data/sexes.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Sex::create(array(
                'sex_id' => $obj->sex_id,
                'sex_dsc' => $obj->sex_dsc
            ));
        }
    }
}
