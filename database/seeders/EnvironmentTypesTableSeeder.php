<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnvironmentType;
use DB;
use File;

class EnvironmentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environment_types')->delete();
        $json = File::get("database/data/environment_types.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EnvironmentType::create(array(
                'environment_type_id' => $obj->environment_type_id,
                'environment_type_dsc' => $obj->environment_type_dsc,
                'environment_classification' => $obj->environment_classification
            ));
        }
    }
}