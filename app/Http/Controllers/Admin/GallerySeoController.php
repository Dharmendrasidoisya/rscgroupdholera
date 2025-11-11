<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryTitl;
use App\Models\GallerySeo;
use DB;

class GallerySeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleryseo=GallerySeo::all();
    
        return view('backend.seo.gallery.index',compact('galleryseo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallerytitle = DB::table('gallerytitles')->select('gallerytitles.*')->get();
        $galleryseo = GallerySeo::get();
        return view('backend.seo.gallery.create',compact('gallerytitle','galleryseo'));
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
            'product'=>'required',
            'gallery_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $galleryseo = new GallerySeo();
        $galleryseo->product = $request->input('product');
        $galleryseo->gallery_id = $request->input('gallery_id');
        $galleryseo->meta_title = $request->input('meta_title');
        $galleryseo->keyword = $request->input('keyword');
        $galleryseo->description = $request->input('description');
        $galleryseo->canonical = $request->input('canonical');
        $galleryseo->status = $request->input('status');
        $galleryseo->save();
        return redirect('admin\seogalleryindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galleryseo = GallerySeo::findOrfail($id);
        return view('backend.seo.gallery.show',compact('galleryseo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleryseo = GallerySeo::findOrfail($id);
        $gallerytitle = DB::table('gallerytitles')->select('gallerytitles.*')->get();
        return view('backend.seo.gallery.edit',compact('galleryseo','gallerytitle'));
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
            'product'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $galleryseo = GallerySeo::find($id);
        $galleryseo->product = $request->input('product');
        $galleryseo->gallery_id = $request->input('gallery_id');
        $galleryseo->meta_title = $request->input('meta_title');
        $galleryseo->keyword = $request->input('keyword');
        $galleryseo->description = $request->input('description');
        $galleryseo->canonical = $request->input('canonical');
        $galleryseo->status = $request->input('status');
        $galleryseo->update();
        return redirect('admin\seogalleryindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GallerySeo::destroy($id);
        return redirect('admin\seogalleryindex');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $subseo =  GallerySeo::find($checkbox);
                    $subseo->status = $request->status;
                    // dd($product);
                    $subseo->save();
                }

                return response()->json(['success'=>'Yas! A Seo GallerySeo has been success status']);
            }else{
                #
            }
        }
    }
}
