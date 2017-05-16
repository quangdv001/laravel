<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    protected $fillable = ['id','name','price','cate_id'];
    public $timestamps = false;

    public function themes(){
        return $this->hasMany('App\Themes');
//        return $this->hasMany('App\Themes', 'product_id', 'id');
    }
}
