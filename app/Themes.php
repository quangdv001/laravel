<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    //
    protected $table = "themes";
    protected $fillable = ['name','product_id'];
    public $timestamps = false;
    public function product(){
        return $this->belongsTo('App\Product');
//        return $this->hasMany('App\Themes', 'product_id', 'id');
    }
}
