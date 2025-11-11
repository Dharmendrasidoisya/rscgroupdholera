<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategorySEO;
use DB;
class CategorySEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=CategorySEO::all();
        return view('backend.seo.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        $categoryseo = CategorySEO::get();
        return view('backend.seo.category.create',compact('categorys','categoryseo'));
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
            'category_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $categorys = new CategorySEO();
        $categorys->product = $request->input('product');
        $categorys->category_id = $request->input('category_id');
        $categorys->meta_title = $request->input('meta_title');
        $categorys->keyword = $request->input('keyword');
        $categorys->description = $request->input('description');
        $categorys->canonical = $request->input('canonical');
        $categorys->status = $request->input('status');
        $categorys->save();
        return redirect('admin\seocategoryindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = CategorySEO::findOrfail($id);
        return view('backend.seo.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategorySEO::findOrfail($id);
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        return view('backend.seo.category.edit',compact('category','categorys'));
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
            'category_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $category = CategorySEO::find($id);
        $category->product = $request->input('product');
        $category->category_id = $request->input('category_id');
        $category->meta_title = $request->input('meta_title');
        $category->keyword = $request->input('keyword');
        $category->description = $request->input('description');
        $category->canonical = $request->input('canonical');
        $category->status = $request->input('status');
        $category->update();
        return redirect('admin\seocategoryindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategorySEO::destroy($id);
        return redirect('admin\seocategoryindex');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $subseo =  CategorySEO::find($checkbox);
                    $subseo->status = $request->status;
                    // dd($product);
                    $subseo->save();
                }

                return response()->json(['success'=>'Yas! A Seo Category has been success status']);
            }else{
                #
            }
        }
    }
}
