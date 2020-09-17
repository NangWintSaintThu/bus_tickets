<?php

namespace App\Http\Controllers;

use App\TravellerInfo;
use Illuminate\Http\Request;

class TravellerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travellerinfos=TravellerInfo::all();


        return view('backend.travellerinfos.index');


        //return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));

        // return view('backend.travellerinfos.index');


        return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));
}

        // return view('backend.travellerinfos.index');

     


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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TravellerInfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TravellerInfo $travellerInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TravellerInfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(TravellerInfo $travellerInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TravellerInfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravellerInfo $travellerInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TravellerInfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravellerInfo $travellerInfo)
    {
        //
    }
}
