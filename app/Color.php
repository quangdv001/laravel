<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = "colors";
    protected $fillable = ['name','image'];
    public $timestamps = false;
    public function car()
    {
        return $this->belongsToMany('App\Car','car__color');
    }
}
