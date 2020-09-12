<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
         return view('backend.routes.index');
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
         $buses = Bus_type::all();
        return view('backend.routes.create',compact('buses'));
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        //dd($request);

        //Validation
         $request->validate([
            
            "departure_station"=> 'required',
            "arrival_station"=> 'required',
            "departure_time"=> 'required',
            "price"=> 'required',
            "seat"=> 'required',
            "bus_type"=> 'required',
        ]);
        //If include file,upload file

        //Data insert
        $route=new Route;
        $route->departure_station=$request->departure_station;
        $route->arrival_station=$request->arrival_station;
        $route->departure_time=$request->departure_time;
        $route->price=$request->price;
        $route->seat=$request->seat;
        $route->bus_type_id=$request->bus_type;
        $route->save();

         //redirect
            return redirect()->route('routes.index');
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
<<<<<<< HEAD
        //
=======
         $buses=Category::all();
        return view('backend.routes.edit',compact('buses','subcategory'));
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
<<<<<<< HEAD
        //
=======
         $request->validate([
            
            "departure_station"=> 'required',
            "arrival_station"=> 'required',
            "departure_time"=> 'required',
            "price"=> 'required',
            "seat"=> 'required',
            "bus_type"=> 'required'
             
        ]);
        //If include file,upload file
        
        //data update
           
        
        $route->departure_station=$request->departure_station;
        $route->arrival_station=$request->arrival_station;
        $route->departure_time=$request->departure_time;
        $route->price=$request->price;
        $route->seat=$request->seat;
        $route->bus_type_id=$request->bus_type;
        $route->save();

         //redirect
            return redirect()->route('routes.index');
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
<<<<<<< HEAD
        //
=======
        $route->delete();
        return redirect()->route('routes.index');
>>>>>>> 341717b99af415200ae9d8b6caf563bf7cd69cad
    }
}
