<?php

namespace App\Http\Controllers;

use App\Models\amesing;
use Illuminate\Http\Request;

class AmesingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return amesing::all();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return amesing::create(['name'=> $request->name,
        'email'=>$request->email,'age'=>$request->age,'address'=>$request->address]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\amesing  $amesing
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return amesing::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\amesing  $amesing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\amesing  $amesing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return amesing::find($id)->update(['name'=> $request->name,
        'email'=>$request->email,'age'=>$request->age,'address'=>$request->address]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\amesing  $amesing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return amesing::find($id)->delete;
    }
}
