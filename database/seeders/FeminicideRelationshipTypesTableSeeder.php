<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeminicideRelationshipType;
use DB;
use File;

class FeminicideRelationshipTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feminicide_relationship_types')->delete();
        $json = File::get("database/data/feminicide_relationship_types.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            FeminicideRelationshipType::create(array(
                'feminicide_relationship_type_id' => $obj->feminicide_relationship_type_id,
                'feminicide_relationship_type_dsc' => $obj->feminicide_relationship_type_dsc
            ));
        }
    }
}
