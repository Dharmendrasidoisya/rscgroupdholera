<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientLogo;

class ClientLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientlogo = ClientLogo::all();
        return view('backend.clientlogo.index',compact('clientlogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientlogo = ClientLogo::get();
        return view('backend.clientlogo.create',compact('clientlogo'));
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
            'image'=>'required',
         ]);
        $clientlogo = new ClientLogo();
        $clientlogo->status = $request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/clientlogo/', $filename);
        $clientlogo->image= $filename;
        }
        $clientlogo->save();
        return redirect('admin/logo/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientlogo = ClientLogo::FindOrFail($id);
        return view('backend.clientlogo.view',compact('clientlogo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientlogo = ClientLogo::FindOrFail($id);
        return view('backend.clientlogo.edit',compact('clientlogo'));
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
        
        $clientlogo = ClientLogo::find($id);
        $clientlogo->status = $request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/clientlogo/', $filename);
        $clientlogo->image= $filename;
        }
        $clientlogo->save();
        return redirect('admin/logo/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slider = ClientLogo::destroy($id);
       return redirect('admin/slider/index');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $brand = ClientLogo::find($checkbox);
                    $brand->status = $request->status;
                    // dd($brand);
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A ClientLogo has been success status']);
            }else{
                #
            }
        }
    }
}
