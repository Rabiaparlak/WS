<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewSeed extends Seeder
{
    public function run()
    {
        DB::table('views')->insert([
           'wall_paper'=>'img',
           'note'=>'asdsfvflgj ksadmksf',
           'promotion'=>'sddafdsf xcfedfaefe' ,
            'user_id'=>1,
        ]);
    }
}
