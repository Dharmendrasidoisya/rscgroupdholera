<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectsImage;
use App\Models\Category;
use DB;
class ProjectsImageController extends Controller
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
        $projects = ProjectsImage::all();
        $categorys = Category::select('category_name','id')->get();
        return view('backend.projectimage.create',compact('projects','categorys'));
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
            'category_id'=>'required',

         ]);
        
        $projects = new ProjectsImage();
     
        $projects->category_id = $request->input('category_id');
        $projects->title = $request->input('title');
        $projects->status = $request->input('status');
        if($request->hasfile('gallery_image')) 
        { 
            $file = $request->file('gallery_image');
            $extension = $file->getClientOriginalExtension(); 
            $filename =time().'.'.$extension;
            $file->move('uploads/projectimage/', $filename);
            $projects->gallery_image= $filename;
        }
            
        $projects->save();

        return redirect('admin/projectshow'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $projects = ProjectsImage::all();
        return view('backend.projectimage.index',compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = ProjectsImage::findOrfail($id);
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        // dd($categorys);
        return view('backend.projectimage.edit',compact('categorys','projects'));
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
        $project = ProjectsImage::find($id);
        $project->category_id = $request->input('category_id');
        $project->title = $request->input('title');
        $project->status = $request->input('status');
        if($request->hasfile('gallery_image')) 
        { 
            $file = $request->file('gallery_image');
            $extension = $file->getClientOriginalExtension(); 
            $filename =time().'.'.$extension;
            $file->move('uploads/projectimage/', $filename);
            $project->gallery_image= $filename;
        }
          
            
            $project->update();

        return redirect('admin/projectshow'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectsImage::destroy($id);
        return redirect('admin/projectshow');
    }

    public function view($id)
    {
        $projects = ProjectsImage::findOrfail($id);
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        return view('backend.projectimage.view',compact('projects','categorys'));
    }

    public function update_status(Request $request){

        if($request->ajax()){
            if(!empty($request->checkbox)){
            
                foreach($request->checkbox as $checkbox){

                    $brand = ProjectsImage::find($checkbox);
                    $brand->status = $request->status;
                  
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A ProjectsImage has been success status']);
            }else{

            }
        }
    }
}
