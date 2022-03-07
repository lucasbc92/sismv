<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orcrim;
use DB;
use File;

class OrcrimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orcrims')->delete();
        $json = File::get("database/data/orcrims.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Orcrim::create(array(
                'orcrim_id' => $obj->orcrim_id,
                'orcrim_dsc' => $obj->orcrim_dsc,
                'orcrim_expl' => $obj->orcrim_expl,
            ));
        }
    }
}
