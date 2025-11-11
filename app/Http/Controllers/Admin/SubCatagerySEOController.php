<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubcategorySEo;
use DB;
class SubCatagerySEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subseos = SubcategorySEo::all();
        return view('backend.seo.subcategory.index',compact('subseos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categorys = Category::pluck('category_name','id','status');                         
        // $products = Product::pluck('product_name','id'); 
        $categorys =  DB::table('categorys')->select('categorys.*')->where('status','1')->get();
        $products = DB::table('subcategorys')->select('subcategorys.*')->where('status','1')->get();
        $subseos = SubcategorySEo::get();
        return view('backend.seo.subcategory.create',compact('categorys','products','subseos'));
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
            'subcategory_id'=>'required',
            'product'=>'required',
            'category_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        // dd($request->all());
        $subseos = new SubcategorySEo();
        $subseos->subcategory_id=$request->input('subcategory_id');
        $subseos->category_id=$request->input('category_id');
        $subseos->meta_title=$request->input('meta_title');
        $subseos->keyword=$request->input('keyword');
        $subseos->description=$request->input('description');
        $subseos->canonical=$request->input('canonical');
        $subseos->product=$request->input('product');
        $subseos->status=$request->input('status');
        // dd($subseos);
        $subseos->save();
        return redirect('admin/seo/subindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorys =  DB::table('categorys')->select('categorys.*')->where('status','1')->get();
        $products = DB::table('subcategorys')->select('subcategorys.*')->where('status','1')->get();
        $subseo = SubcategorySEo::findOrfail($id);
        return  view('backend.seo.subcategory.show',compact('subseo','categorys','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     $categorys =  DB::table('categorys')->select('categorys.*')->where('status','1')->get();
        $products = DB::table('subcategorys')->select('subcategorys.*')->where('status','1')->get();
        $subseo = SubcategorySEo::findOrfail($id);
        return  view('backend.seo.subcategory.edit',compact('subseo','categorys','products'));
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
            'subcategory_id'=>'required',
            'product'=>'required',
            'category_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $subseo =  SubcategorySEo::find($id);
        $subseo->subcategory_id=$request->input('subcategory_id');
        $subseo->category_id=$request->input('category_id');
        $subseo->meta_title=$request->input('meta_title');
        $subseo->keyword=$request->input('keyword');
        $subseo->description=$request->input('description');
        $subseo->canonical=$request->input('canonical');
        $subseo->product=$request->input('product');
        $subseo->status=$request->input('status');
        $subseo->update();
        return redirect('admin/seo/subindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubcategorySEo::destroy($id);
        return redirect('admin/seo/subindex');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $subseo = SubcategorySEo::find($checkbox);
                    $subseo->status = $request->status;
                    // dd($product);
                    $subseo->save();
                }

                return response()->json(['success'=>'Yas! A Seo Product has been success status']);
            }else{
                #
            }
        }
    }
}
