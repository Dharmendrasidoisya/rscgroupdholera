<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Application;
use DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('backend.application.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications = Application::all();
        $menus = DB::table('menues')->select('id','menu_name')->get();
        $categorys = DB::table('categorys')->select('id','category_name')->get();
        return view('backend.application.create',compact('applications','categorys','menus'));
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
            'menu_id'=>'required',
            'application_name'=>'required',
      
            'application_image' =>'required',
         ]);
        // dd($request->all());
        $applications = new Application();
        $applications->menu_id = $request->input('menu_id');
        $applications->category_id = $request->input('category_id');
        $applications->application_name = $request->input('application_name');
        $applications->application_description = $request->input('application_description');
        $applications->ad = $request->input('ad');
        $applications->status = $request->input('status');
        if($request->hasfile('application_image')) 
            { 
            $file = $request->file('application_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $applications->application_image = $filename;
            }
            
            $applications->save();

        return redirect('admin/applictionshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $applications = Application::all();
        return view('backend.application.index',compact('applications'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::findOrfail($id);
        $menus = DB::table('menues')->select('id','menu_name')->get();
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        return view('backend.application.edit',compact('application','categorys','menus'));
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
        $application = Application::find($id);
        $application->menu_id = $request->input('menu_id');
        $application->category_id = $request->input('category_id');
        $application->application_name = $request->input('application_name');
        $application->application_description = $request->input('application_description');
        $application->ad = $request->input('ad');
        $application->status = $request->input('status');
        if($request->hasfile('application_image')) 
            { 
            $file = $request->file('application_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $application->application_image = $filename;
            }
            
            $application->update();

        return redirect('admin/applictionshow'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Application::destroy($id);
        return redirect('admin/applictionshow'); 
    }

    public function view($id)
    {
        $application = Application::findOrfail($id);
        $menus = DB::table('menues')->select('id','menu_name')->get();
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        return view('backend.application.view',compact('application','categorys','menus'));
    }

    public function update_status(Request $request){
       

        if($request->ajax()){
            if(!empty($request->checkbox)){
            
                foreach($request->checkbox as $checkbox){

                    $application = Application::find($checkbox);
                    $application->status = $request->status;
                 
                    $application->save();
                }

                return response()->json(['success'=>'Yas! A Application has been success status']);
            }else{
                #
            }
        }
    }
}
