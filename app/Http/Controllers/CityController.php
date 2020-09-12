<?php

namespace App\Http\Controllers;
use App\Route;
use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cities=City::all();
       //dd($items);
       return view('backend.cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.cities.create');
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
        $city=new City;
        $city->id=$request->id;
        $city->name=$request->name;
        $city->save();
        //redirect
        return redirect()->route('cities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('backend.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
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
        $city->id=$request->id;
        $city->name=$request->name;
       $city->save();
        //redirect
        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
}
