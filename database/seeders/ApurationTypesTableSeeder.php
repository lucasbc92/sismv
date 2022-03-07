<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApurationType;
use DB;
use File;

class ApurationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apuration_types')->delete();
        $json = File::get("database/data/apuration_types.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            ApurationType::create(array(
                'apuration_type_id' => $obj->apuration_type_id,
                'apuration_type_dsc' => $obj->apuration_type_dsc
            ));
        }
    }
}

