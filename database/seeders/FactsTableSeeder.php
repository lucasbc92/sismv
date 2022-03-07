<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fact;
use DB;
use File;

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->delete();
        $json = File::get("database/data/facts.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Fact::create(array(
                'fact_id' => $obj->fact_id,
                'fact_dsc' => $obj->fact_dsc
            ));
        }
    }
}
