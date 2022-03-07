<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnvironmentClassification;
use DB;
use File;

class EnvironmentClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environment_classifications')->delete();
        $json = File::get("database/data/environment_classifications.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EnvironmentClassification::create(array(
                'environment_classification_id' => $obj->environment_classification_id,
                'environment_classification_dsc' => $obj->environment_classification_dsc,
                'environment_localization' => $obj->environment_localization
            ));
        }
    }
}