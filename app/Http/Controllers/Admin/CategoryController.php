<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models\Menu;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
        return view('backend.category.create',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // $menus = Menu::pluck('menu_id')->get();
        $categorys = Category::all();
        $menus = DB::table('menues')->select('id','menu_name')->get();
        return view('backend.category.create',compact('menus','categorys'));
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
            'category_name'=>'required',
            'menu_id'=>'required',
            'category_themnail'=>'required',
         ]);
        // dd($request->all());
        $categorys = new Category();
        $categorys->category_name =$request->input('category_name');
        $categorys->menu_id =$request->input('menu_id');
        $categorys->video = $request->input('video');
        $categorys->category_description =$request->input('category_description');
        $categorys->status =$request->input('status');
           $categorys->map_link= $request->input('map_link');
        if($request->hasfile('category_themnail')) 
                { 
                $file = $request->file('category_themnail');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/image/', $filename);
                $categorys->category_themnail= $filename;
                }
        if($request->hasfile('brochure')) 
                { 
                $file = $request->file('brochure');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/pdf/', $filename);
                $categorys->brochure= $filename;
                }
                
           $categorys->save();
       
        return redirect('admin/categoryshow');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   $categorys = Category::all();
        return view('backend.category.index',compact('categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        $menus = DB::table('menues')->select('menues.*')->get();
        return view('backend.category.edit',compact('category','menus'));
        
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
            'category_name'=>'required',
            'menu_id'=>'required',
         ]);
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->menu_id = $request->input('menu_id');
        $category->video = $request->input('video');
        $category->map_link = $request->input('map_link');

        
        $category->category_description = $request->input('category_description');
        $category->status = $request->input('status');
            if($request->hasfile('category_themnail')) 
                { 
                $file = $request->file('category_themnail');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/image/', $filename);
                $category->category_themnail= $filename;
                }

            if($request->hasfile('brochure')) 
                { 
            $file = $request->file('brochure');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/pdf/', $filename);
            $category->brochure= $filename;
                }
           $category->update();
       
        return redirect('admin/categoryshow');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('admin/categoryshow');
    }

    public function view($id){
        $category =Category::findOrfail($id);
        $menus = DB::table('menues')->select('id','menu_name')->get();
        return view('backend.category.view',compact('category','menus'));
    }

    public function uploadimage(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName,PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . ' ' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/'. $fileName);

            return response()->json(['fileName'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
        }
        
    }

    

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $category = Category::find($checkbox);
                    $category->status = $request->status;
                    // dd($category);
                    $category->save();
                }

                return response()->json(['success'=>'Yas! A Category has been success status']);
            }else{
                #
            }
        }
    }
}
