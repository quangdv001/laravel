<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function showInfo(){
        echo "wtf";
        return redirect()->route('thanglong');
    }
}
