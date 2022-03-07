<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PolicePassage;
use DB;
use File;

class PolicePassagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('police_passages')->delete();
        $json = File::get("database/data/police_passages.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            PolicePassage::create(array(
                'police_passage_id' => $obj->police_passage_id,
                'police_passage_dsc' => $obj->police_passage_dsc
            ));
        }
    }
}

