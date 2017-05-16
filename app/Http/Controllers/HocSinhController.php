<?php

namespace App\Http\Controllers;

use App\HocSinh;
use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HocSinh::all();
        return View('hocsinh.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocsinh.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hocsinh = new Hocsinh;
        $hocsinh->ten = $request->ten;
        $hocsinh->toan = $request->toan;
        $hocsinh->ly = $request->ly;
        $hocsinh->hoa = $request->hoa;
        $hocsinh->save();
        return redirect()->route('hocsinh.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HocSinh  $hocSinh
     * @return \Illuminate\Http\Response
     */
    public function show(HocSinh $hocSinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HocSinh  $hocSinh
     * @return \Illuminate\Http\Response
     */
    public function edit(HocSinh $hocSinh, $id)
    {
        $data= $hocSinh->find($id);
        return View('hocsinh.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HocSinh  $hocSinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HocSinh $hocSinh, $id)
    {
        $hocSinh->find($id);
        $hocSinh->ten = $request->ten;
        $hocSinh->toan = $request->toan;
        $hocSinh->ly = $request->ly;
        $hocSinh->hoa = $request->hoa;
        $hocSinh->save();
        return redirect()->route('hocsinh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HocSinh  $hocSinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(HocSinh $hocSinh,$id)
    {
        //
//        echo "<pre>";
//        print_r($id) ;
        $hocSinh->destroy($id);
        return redirect()->route('hocsinh.index');
    }
}
