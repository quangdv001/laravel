<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_Color extends Model
{
    //
    protected $table = "car__color";
    protected $fillable = ['car_id','color_id'];
    public $timestamps = false;
}
