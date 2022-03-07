<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zone;
use DB;
use File;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->delete();
        $json = File::get("database/data/zones.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Zone::create(array(
                'zone_id' => $obj->zone_id,
                'zone_dsc' => $obj->zone_dsc
            ));
        }
    }
}

