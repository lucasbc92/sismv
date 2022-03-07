<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApurationInstitution;
use DB;
use File;

class ApurationInstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apuration_institutions')->delete();
        $json = File::get("database/data/apuration_institutions.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            ApurationInstitution::create(array(
                'apuration_institution_id' => $obj->apuration_institution_id,
                'apuration_institution_dsc' => $obj->apuration_institution_dsc
            ));
        }
    }
}
