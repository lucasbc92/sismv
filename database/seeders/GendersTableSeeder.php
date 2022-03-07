<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;
use DB;
use File;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->delete();
        $json = File::get("database/data/genders.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Gender::create(array(
                'gender_id' => $obj->gender_id,
                'gender_dsc' => $obj->gender_dsc
            ));
        }
    }
}
