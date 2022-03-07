<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuthorSituation;
use DB;
use File;

class AuthorSituationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_situations')->delete();
        $json = File::get("database/data/author_situations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            AuthorSituation::create(array(
                'author_situation_id' => $obj->author_situation_id,
                'author_situation_dsc' => $obj->author_situation_dsc
            ));
        }
    }
}
