<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryTitl;

class GalleryTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = GalleryTitl::all();
        return view('backend.gallerytitle.create',compact('titles'));
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
         ]);
        $titles =new GalleryTitl();
        $titles->name=$request->input('name');
        $titles->status=$request->input('status');
        $titles->save();
        return redirect('admin/gtitleshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $titles = GalleryTitl::get();
        return view('backend.gallerytitle.index',compact('titles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = GalleryTitl::findOrfail($id);
        return view('backend.gallerytitle.edit',compact('title'));
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
            'name'=>'required',
         ]);
        $title =GalleryTitl::find($id);
        $title ->name=$request->input('name');
        $title ->status=$request->input('status');
        $title ->update();
        return redirect('admin/gtitleshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryTitl::destroy($id);
        return redirect('admin/gtitleshow');
    }


    public function view($id)
    {
        $title = GalleryTitl::findOrfail($id);
        return view('backend.gallerytitle.view',compact('title'));
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $title = GalleryTitl::find($checkbox);
                    $title->status = $request->status;
                    // dd($brand);
                    $title->save();
                }

                return response()->json(['success'=>'Yas! A GalleryTitl has been success status']);
            }else{
                #
            }
        }
    }
}
