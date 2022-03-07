<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeminicideHasChildren;
use DB;
use File;

class FeminicideHasChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feminicide_has_children')->delete();
        $json = File::get("database/data/feminicide_has_children.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            FeminicideHasChildren::create(array(
                'feminicide_has_children_id' => $obj->feminicide_has_children_id,
                'feminicide_has_children_dsc' => $obj->feminicide_has_children_dsc
            ));
        }
    }
}

