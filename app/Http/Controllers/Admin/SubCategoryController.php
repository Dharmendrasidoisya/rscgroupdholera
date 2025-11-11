<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use DB;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $subcategorys = SubCategory::get();
    //     $categorys = DB::table('categorys')->select('id','category_name')->get();
    //     return view('backend.sub_category.create',compact('subcategorys','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategorys = SubCategory::all();
        $categorys = DB::table('categorys')->select('id','category_name')->get();
        return view('backend.sub_category.create',compact('subcategorys','categorys'));
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
            'category_id'=>'required',
            'subcategory'=>'required',
            'subcategory_image'=>'required',
            
        ],
        [
            'category_id' => 'The category name field is required.'

        ]
    );
            $subcategorys = new SubCategory();
            $subcategorys->category_id=$request->input('category_id');
            $subcategorys->subcategory=$request->input('subcategory');
            $subcategorys->subcategory_description=$request->input('subcategory_description');
            $subcategorys->status=$request->input('status');
            $subcategorys->subcategory_image=$request->input('subcategory_image');

            if($request->hasfile('subcategory_image')) 
            { 
            $file = $request->file('subcategory_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $subcategorys->subcategory_image= $filename;
            }
            
            $subcategorys->save();

        return redirect('admin/subcategoryshow');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $subcategorys = SubCategory::all();
        return view('backend.sub_category.index',compact('subcategorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::findOrfail($id);
        $categorys = DB::table('categorys')->select('id','category_name')->get();
        return view('backend.sub_category.edit',compact('subcategory','categorys'));
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
            $subcategory = SubCategory::find($id);
            $subcategory->category_id=$request->input('category_id');
            $subcategory->subcategory=$request->input('subcategory');
            $subcategory->subcategory_description=$request->input('subcategory_description');
            $subcategory->status=$request->input('status');
            if($request->hasfile('subcategory_image')) 
            { 
            $file = $request->file('subcategory_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $subcategory->subcategory_image= $filename;
            }
            
            $subcategory->update();

        return redirect('admin/subcategoryshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::destroy($id);
        return redirect('admin/subcategoryshow');
    }

    public function view($id)
    {
        $subcategory = SubCategory::findOrfail($id);
        $categorys = DB::table('categorys')->select('id','category_name')->get();
        return view('backend.sub_category.view',compact('subcategory','categorys'));
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
}
