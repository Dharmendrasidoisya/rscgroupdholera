<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('backend.testimonial.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonial =  Testimonial::get();
        return view('backend.testimonial.create',compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $testimonial=new Testimonial();
        $testimonial->name=$request->input('name');
        $testimonial->short_description=$request->input('short_description');
        $testimonial->status=$request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/testimonial/', $filename);
        $testimonial->image= $filename;
        }
        $testimonial->save();
        return redirect('admin/testimonialindex');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonials = Testimonial::findOrfail($id);
        return view('backend.testimonial.view',compact('testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials = Testimonial::findOrfail($id);
        return view('backend.testimonial.edit',compact('testimonials'));
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
        $testimonial=Testimonial::find($id);
        $testimonial->name=$request->input('name');
        $testimonial->short_description=$request->input('short_description');
        $testimonial->status=$request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/testimonial/', $filename);
        $testimonial->image= $filename;
        }
        $testimonial->update();
        return redirect('admin/testimonialindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
        return redirect('admin/testimonialindex');
    }

    public function update_status(Request $request){
    

        if($request->ajax()){
            if(!empty($request->checkbox)){
             
                foreach($request->checkbox as $checkbox){
                    $testimonial = Testimonial::find($checkbox);
                    $testimonial->status = $request->status;
                    $testimonial->save();
                }

                return response()->json(['success'=>'Yas! A Testimonial has been success status']);
            }else{
                #
            }
        }
    }
}
