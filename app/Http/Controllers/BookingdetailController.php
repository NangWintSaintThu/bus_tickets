<?php

namespace App\Http\Controllers;

use App\Bookingdetail;
use Illuminate\Http\Request;

class BookingdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingdetails=Bookingdetail::all();
        return view('backend.bookingdetails.index',compact('bookingdetails'));
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
         $mycart = $request->mycart;
        $mycartArr = json_decode($mycart);
        $voucherno = uniqid();
        $total=0;

        foreach ($mycartArr as $row) {
            $total += $row->price * $row->qty;
        }
          $order = new Order;
        $order->voucherno=$voucherno;
        $order->orderdate = date('Y-m-d');
        $order->note = $request->note;
        $order->total=$total;
        $order->user_id = 1;
        $order->save();

        foreach ($mycartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }
        return "Order Success!!";


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingdetail $bookingdetail)
    {
        //
    }
}
