<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class UserSeed extends Seeder
{

    public function run()
    {
        DB::table('roles')->insert([
            'role_name'=>'admin',
        ]);
        DB::table('roles')->insert([
            'role_name'=>'misafir'
        ]);
        DB::table('users')->insert([
            'name'=>'Ayşe',
            'surname'=>'Yıldız',
            'email'=>'ayseyildiz@gmail.com',
            'phone_number'=>'05423452345',
            'password'=>md5('10203040'),
            'photo'=>'xyz',
            'social_media'=>'www.abcd.com.tr',
            'remember_token'=>md5('10203040'),
            'role_id'=>1,
        ]);

        DB::table('users')->insert([
        'name'=>'Derya',
        'surname'=>'Yılmaz',
        'email'=>'derya_yılmaz@gmail.com',
        'phone_number'=>'05467389278',
        'password'=>md5('20394840'),
        'photo'=>'swdewe',
        'social_media'=>'www.asdfg.com.tr',
        'remember_token'=>md5('20394840'),
        'role_id'=>2,
    ]);
        DB::table('users')->insert([
            'name'=>'Mehmet',
            'surname'=>'Uğrak',
            'email'=>'mhmt_uğrk@gmail.com',
            'phone_number'=>'0988765433',
            'password'=>md5('0987655'),
            'photo'=>'swdewe',
            'social_media'=>'www.ghjkkl.com.tr',
            'remember_token'=>md5('0988765433'),
            'role_id'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>'Ali',
            'surname'=>'Yar',
            'email'=>'aliyar@gmail.com',
            'phone_number'=>'0988787543',
            'password'=>md5('jhgfds'),
            'photo'=>'jhgfds',
            'social_media'=>'www.jhgfds.com.tr',
            'remember_token'=>md5('jhgfds'),
            'role_id'=>2,
        ]);
    }
}
