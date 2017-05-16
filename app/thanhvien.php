<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thanhvien extends Model
{
    //
    protected $table="thanhviens";
    protected $fillable = [
        'user', 'pass', 'lever',
    ];
    public $timestamps = false;
}
