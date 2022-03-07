<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CivilStatus;
use DB;
use File;

class CivilStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('civil_statuses')->delete();
        $json = File::get("database/data/civil_statuses.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            CivilStatus::create(array(
                'civil_status_id' => $obj->civil_status_id,
                'civil_status_dsc' => $obj->civil_status_dsc
            ));
        }
    }
}

