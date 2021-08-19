<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeed extends Seeder
{

    public function run()
    {
        DB::table('messages')->insert([
           'date'=>'22.34.21',
           'content'=>'dsadsdd',
           'user_id'=>1,
        ]);
    }
}
