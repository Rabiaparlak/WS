<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table='users';

    //guarded(korumalı), fillable(dısardan girilebilir)
    //guarded girmediğin alan default fillabledir

    protected $guarded = ['id'];

    //belongsto hasone hasmany
    public function getRole(){
        return $this->belongsTo('App\Models\Role','role_id','id');
    }
    public function getSkill(){
        return $this->hasMany('App\Models\Skill','user_id','id');
    }
    public function getView(){
        return $this->hasOne('App\Models\View','user_id','id');
    }
    public function getMessage(){
        return $this->hasMany('App\Models\Message','user_id','id');
    }
}
