<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PolicePassageType;
use DB;
use File;

class PolicePassageTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('police_passage_types')->delete();
        $json = File::get("database/data/police_passage_types.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            PolicePassageType::create(array(
                'police_passage_type_id' => $obj->police_passage_type_id,
                'police_passage_type_dsc' => $obj->police_passage_type_dsc
            ));
        }
    }
}
