<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mean;
use DB;
use File;

class MeansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('means')->delete();
        $json = File::get("database/data/means.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Mean::create(array(
                'mean_id' => $obj->mean_id,
                'mean_dsc' => $obj->mean_dsc
            ));
        }
    }
}
