<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SlidrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::get();
        return view('backend.slider.create',compact('sliders'));
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
            'short_description'=>'max:225',
       
            
         ]);
        $slider = new Slider();
        $slider->short_description = $request->input('short_description');
        $slider->title = $request->input('title');
        $slider->status = $request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/slider/', $filename);
        $slider->image= $filename;
        }
        $slider->save();
        return redirect('admin/slider/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::FindOrFail($id);
        return view('backend.slider.view',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::FindOrFail($id);
        return view('backend.slider.edit',compact('slider'));
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
        $this->validate($request,[
            'short_description'=>'max:225',
            
         ]);
        $slider = Slider::find($id);
        $slider->short_description = $request->input('short_description');
        $slider->title = $request->input('title');
        $slider->status = $request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/slider/', $filename);
        $slider->image= $filename;
        }
        $slider->save();
        return redirect('admin/slider/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slider = Slider::destroy($id);
       return redirect('admin/slider/index');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $brand = Slider::find($checkbox);
                    $brand->status = $request->status;
                    // dd($brand);
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A Slider has been success status']);
            }else{
                #
            }
        }
    }
}
