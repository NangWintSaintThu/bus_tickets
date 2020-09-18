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
        return view('backend.bustypes.index',compact('bustypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bustypes.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
         
         //"id" => 'required',
         "name" => 'required',
         ]);
        $bustype=new BusType;
        //$bustype->id=$request->id;
        $bustype->name=$request->name;
        $bustype->save();
        //redirect
        return redirect()->route('bustypes.index');
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
         return view('backend.bustypes.edit');
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
         $request->validate([
         "id" => 'required',
         "name" => 'required',
         ]);
         $bustype->id=$request->id;
         $bustype->name=$request->name;
         $bustype->save();
        redirect
        return redirect()->route('bustypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusType $busType)
    {
         $bustype->delete();
        return redirect()->route('bustypes.index');
    }
}
