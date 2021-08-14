<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('role_id');

            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number')->unique();
            $table->binary('photo');
            $table->string('social_media');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

              $table->foreign('role_id')->on('roles')->references('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}




