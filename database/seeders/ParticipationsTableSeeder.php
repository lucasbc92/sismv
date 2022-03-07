<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participation;
use DB;
use File;

class ParticipationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participations')->delete();
        $json = File::get("database/data/participations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Participation::create(array(
                'participation_id' => $obj->participation_id,
                'participation_dsc' => $obj->participation_dsc
            ));
        }
    }
}
