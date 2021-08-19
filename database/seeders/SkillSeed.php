<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeed extends Seeder
{
    public function run()
    {
        DB::table('skills')->insert([
            'skill_name'=>'Python',
            'success'=>'5',
            'skill_photo'=>'assas',
            'user_id'=>1,
        ]);
    }
}
