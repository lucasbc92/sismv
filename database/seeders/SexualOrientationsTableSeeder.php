<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SexualOrientation;
use DB;
use File;

class SexualOrientationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexual_orientations')->delete();
        $json = File::get("database/data/sexual_orientations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            SexualOrientation::create(array(
                'sexual_orientation_id' => $obj->sexual_orientation_id,
                'sexual_orientation_dsc' => $obj->sexual_orientation_dsc
            ));
        }
    }
}
