<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sellland ;
use Illuminate\Http\Request;

class SellLandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sells = Sellland::get();
        return view('backend.sellland.index',compact('sells'));
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
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'budget'=>'required',
            'zone'=>'required',
            'village'=>'required',
            'listing_loc'=>'required',
         ]);
        $sells=new Sellland();
        $sells->name=$request->input('name');
        $sells->phone=$request->input('phone');
        $sells->budget=$request->input('budget');
        $sells->zone=$request->input('zone');
        $sells->village=$request->input('village');
        $sells->listing_loc=$request->input('listing_loc');
        $sells->status=$request->input('status');
        $sells->save();
        return redirect('/thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sell = Sellland::findOrfail($id);
        return view('backend.sellland.view',compact('sell'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
