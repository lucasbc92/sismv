<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profession;
use DB;
use File;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->delete();
        $json = File::get("database/data/professions.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Profession::create(array(
                'profession_id' => $obj->profession_id,
                'profession_dsc' => $obj->profession_dsc
            ));
        }
    }
}
