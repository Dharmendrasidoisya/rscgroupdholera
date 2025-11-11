<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DholarCityImag;

class DholarCityImagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dholarcitys = DholarCityImag::all();
        return view('backend.dholarcityimage.create',compact('dholarcitys',));
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
        $dholarcitys = new DholarCityImag();
     
   
        $dholarcitys->status = $request->input('status');
        if($request->hasfile('image')) 
            { 
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/dholara/', $filename);
            $dholarcitys->image= $filename;
            }
            
            $dholarcitys->save();

        return redirect('admin/dholarcityshow'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dholarcitys = DholarCityImag::all();
        return view('backend.dholarcityimage.index',compact('dholarcitys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dholarcity = DholarCityImag::findOrfail($id);
        return view('backend.dholarcityimage.edit',compact('dholarcity'));
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
       
        $dholarcity = DholarCityImag::find($id);
        $dholarcity->status = $request->input('status');
        if($request->hasfile('image')) 
            { 
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/dholara/', $filename);
            $dholarcity->image= $filename;
            }
            
            $dholarcity->update();

        return redirect('admin/dholarcityshow'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DholarCityImag::destroy($id);
        return redirect('admin/dholarcityshow');
    }

    public function view($id)
    {
        $dholarcity = DholarCityImag::findOrfail($id);
        return view('backend.dholarcityimage.view',compact('dholarcity'));
    }

    public function update_status(Request $request){
   

        if($request->ajax()){
            if(!empty($request->checkbox)){
            
                foreach($request->checkbox as $checkbox){

                    $brand = DholarCityImag::find($checkbox);
                    $brand->status = $request->status;
                  
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A DholarCityImag has been success status']);
            }else{
                #
            }
        }
    }
}
