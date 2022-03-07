<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use DB;
use File;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $json = File::get("database/data/states.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            State::create(array(
                'state_id' => $obj->state_id,
                'state_dsc' => $obj->state_dsc,
                'country' => $obj->country
            ));
        }
    }
}
