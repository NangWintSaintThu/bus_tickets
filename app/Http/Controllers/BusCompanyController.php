<?php

namespace App\Http\Controllers;

use App\BusCompany;
use Illuminate\Http\Request;

class BusCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
         $buscompanies=BusCompany::all();
       //dd($items);
       return view('backend.buscompanies.index');
=======
        $buscompaines=BusCompany::all();
        return view('backend.buscompanies.index');
>>>>>>> 41f9ba8f7281fed02011c24edefab6fd86550459
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
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function show(BusCompany $busCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(BusCompany $busCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusCompany $busCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusCompany $busCompany)
    {
        //
    }
}
