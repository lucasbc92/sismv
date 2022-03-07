<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IdentificationType;
use DB;
use File;

class IdentificationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identification_types')->delete();
        $json = File::get("database/data/identification_types.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            IdentificationType::create(array(
                'identification_type_id' => $obj->identification_type_id,
                'identification_type_dsc' => $obj->identification_type_dsc
            ));
        }
    }
}
