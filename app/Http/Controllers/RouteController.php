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

        $routes=Route::all();

         return view('backend.routes.index',compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view('backend.routes.create');
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
            "name"=>'required',
            "departurestation"=>'required',
            "arrivalstation"=>'required',
            "departuretime"=>'required',
            "price"=>'required',
            "bustypeid"=>'required',
            "busseat"=>'required'

        ]);
        

        $route=new Route;
        $route->name=$request->name;
        $route->departure_station=$request->departurestation;
        $route->arrival_station=$request->arrivalstation;
        $route->departure_time=$request->departuretime;
        $route->price=$request->price;
        $route->bus_type_id=$request->bustypeid;
        $route->seat=$request->busseat;
        $route->save();

        return redirect()->route('routes.index');
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
         return view('backend.routes.edit',compact('route'));

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
          $request->validate([
            "name"=>'required',
            "departurestation"=>'required',
            "arrivalstation"=>'required',
            "departuretime"=>'required',
            "price"=>'required',
            "bustypeid"=>'required',
            "busseat"=>'required'

        ]);
        
        $route->name=$request->name;
        $route->departure_station=$request->departurestation;
        $route->arrival_station=$request->arrivalstation;
        $route->departure_time=$request->departuretime;
        $route->price=$request->price;
        $route->bus_type_id=$request->bustypeid;
        $route->seat=$request->busseat;
        $route->save();

        return redirect()->route('routes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
         $route->delete();
        return redirect()->route('routes.index');
    }
}
