<?php

namespace App\Http\Controllers;
use App\Route;
use App\Bus_type;
use Illuminate\Http\Request;

class Bus_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $bus_types=Bus_type::all();
       //dd($items);
       return view('backend.bus_types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        //Validation
         $request->validate([
         
         "id" => 'required',
         "name" => 'required',
         
         
         ]);
        //If include file,upload file
        /*$imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/brandimg'),$imageName);
        $path='backend/brandimg/'.$imageName;*/

        //Data insert
        $bus_type=new Bus_type;
        $bus_type->id=$request->id;
        $bus_type->name=$request->name;
        $bus_type->save();
        //redirect
        return redirect()->route('buses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus_type  $bus_type
     * @return \Illuminate\Http\Response
     */
    public function show(Bus_type $bus_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus_type  $bus_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus_type $bus_type)
    {
        return view('backend.buses.edit',compact('bus_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus_type  $bus_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus_type $bus_type)
    {
         $request->validate([
         "id" => 'required',
         "name" => 'required',
         
         
         
         ]);
        //file upload,if data
       /* if($request->hasFile('photo')){
        $imageName=time().'.'.$request->photo->extension();
       
        $request->photo->move(public_path('backend/brandimg'),$imageName);
        $path='backend/brandimg/'.$imageName;
    }else{
        $path=$request->oldphoto;
    }*/
        
        //data update
        $bus_type->id=$request->id;
        $bus_type->name=$request->name;
       $bus_type->save();
        //redirect
        return redirect()->route('buses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus_type  $bus_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus_type $bus_type)
    {
        //
    }
}
