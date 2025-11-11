<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutdholar;

class AboutediterSlidrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Aboutdholar::all();
        return view('backend.aboutdholara.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dholara = Aboutdholar::get();
        return view('backend.aboutdholara.create',compact('dholara'));
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
            'description'=>'required',]);
        $slider = new Aboutdholar();
        $slider->status = $request->input('status');
        $slider->description = $request->input('description');
       
        $slider->save();
        return redirect('admin/sliderediter/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Aboutdholar::FindOrFail($id);
        return view('backend.aboutdholara.view',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Aboutdholar::FindOrFail($id);
        return view('backend.aboutdholara.edit',compact('slider'));
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
        $slider = Aboutdholar::find($id);
        $slider->status = $request->input('status');
        $slider->description = $request->input('description');
       
        $slider->update();
        return redirect('admin/sliderediter/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slider = Aboutdholar::destroy($id);
       return redirect('admin/sliderediter/index');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $brand = Aboutdholar::find($checkbox);
                    $brand->status = $request->status;
                    // dd($brand);
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A content has been success status']);
            }else{
                #
            }
        }
    }
}
