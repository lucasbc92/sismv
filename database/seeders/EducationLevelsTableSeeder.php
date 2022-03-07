<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationLevel;
use DB;
use File;

class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_levels')->delete();
        $json = File::get("database/data/education_levels.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EducationLevel::create(array(
                'education_level_id' => $obj->education_level_id,
                'education_level_dsc' => $obj->education_level_dsc
            ));
        }
    }
}

