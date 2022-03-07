<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motivation;
use DB;
use File;

class MotivationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivations')->delete();
        $json = File::get("database/data/motivations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Motivation::create(array(
                'motivation_id' => $obj->motivation_id,
                'motivation_dsc' => $obj->motivation_dsc
            ));
        }
    }
}
