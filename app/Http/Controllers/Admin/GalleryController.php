<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Gallery;

class GalleryController extends Controller
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
        $gallerys = Gallery::all();
        $gallerytile = DB::table('gallerytitles')->select('gallerytitles.*')->get();
        return view('backend.gallery.create',compact('gallerys','gallerytile'));
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
       
            'title'=>'required',
            'gallery_image'=>'required',
            'gallerytitle_id'=>'required',
         ]);
        $gallerys = new Gallery();
     
        $gallerys->gallerytitle_id = $request->input('gallerytitle_id');
        $gallerys->title = $request->input('title');
        $gallerys->status = $request->input('status');
        if($request->hasfile('gallery_image')) 
            { 
            $file = $request->file('gallery_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $gallerys->gallery_image= $filename;
            }
            
            $gallerys->save();

        return redirect('admin/galleryshow'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $gallerys = Gallery::all();
        return view('backend.gallery.index',compact('gallerys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrfail($id);
        return view('backend.gallery.edit',compact('gallery'));
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
            'title'=>'required',
         ]);
        $gallery = Gallery::find($id);
        $gallery->title = $request->input('title');
        $gallery->status = $request->input('status');
        if($request->hasfile('gallery_image')) 
            { 
            $file = $request->file('gallery_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $gallery->gallery_image= $filename;
            }
            
            $gallery->update();

        return redirect('admin/galleryshow'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect('admin/galleryshow');
    }

    public function view($id)
    {
        $gallery = Gallery::findOrfail($id);
        return view('backend.gallery.view',compact('gallery'));
    }

    public function update_status(Request $request){
   

        if($request->ajax()){
            if(!empty($request->checkbox)){
            
                foreach($request->checkbox as $checkbox){

                    $brand = Gallery::find($checkbox);
                    $brand->status = $request->status;
                  
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A Gallery has been success status']);
            }else{
                #
            }
        }
    }
}
