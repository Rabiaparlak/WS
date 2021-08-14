<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    protected $table='view';

    protected $guarded=['id'];

    public function getUser(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
