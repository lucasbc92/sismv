<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnvironmentQualification;
use DB;
use File;

class EnvironmentQualificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environment_qualifications')->delete();
        $json = File::get("database/data/environment_qualifications.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EnvironmentQualification::create(array(
                'environment_qualification_id' => $obj->environment_qualification_id,
                'environment_qualification_dsc' => $obj->environment_qualification_dsc,
                'environment_classification' => $obj->environment_classification
            ));
        }
    }
}