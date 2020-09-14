<?php

namespace App\Http\Controllers;

use App\BusType;
use Illuminate\Http\Request;

class BusTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bustypes=BusType::all();
        return view('backend.bustypes.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function show(BusType $busType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function edit(BusType $busType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusType $busType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusType $busType)
    {
        //
    }
}
