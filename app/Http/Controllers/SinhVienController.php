<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
//use Validator;
use App\Http\Requests\SinhVienRequest;
class SinhVienController extends Controller
{
    public function them(SinhVienRequest $request){
//        $v = Validator::make($request->all(),[
//            'hoten'=>'required'
//        ],[
//            'hoten.required'=>'nhap ho ten'
//        ]);
//        if($v->fails()){
//            return redirect()->back()->withErrors($v->errors());
//        }
        $img = $request->file('image');
        $des = 'public/upload/images';
        $img_name = $img->getClientOriginalName();
        $request->file('image')->move($des,$img_name);

        $color = new Color();
        $color->name = $request->hoten;
        $color->image = $img_name;
        $color->save();
        return redirect('form/dangky');
//        echo "<pre>";
//        print_r($request->file('image')->extension());


    }
}
