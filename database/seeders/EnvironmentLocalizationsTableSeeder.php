<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnvironmentLocalization;
use DB;
use File;

class EnvironmentLocalizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environment_localizations')->delete();
        $json = File::get("database/data/environment_localizations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EnvironmentLocalization::create(array(
                'environment_localization_id' => $obj->environment_localization_id,
                'environment_localization_dsc' => $obj->environment_localization_dsc
            ));
        }
    }
}
