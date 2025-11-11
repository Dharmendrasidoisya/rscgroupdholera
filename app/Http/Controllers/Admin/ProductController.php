<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use App\Models\Menu;
use App\Models\Category;

class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('backend.product.create',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $menus = DB::table('menues')->select('id','menu_name')->get();
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        $subcategorys = DB::table('subcategorys')->select('subcategorys.*')->get();
        $brands = DB::table('brands')->select('id','brand_name')->get();
        return view('backend.product.create',compact('menus','categorys','products','brands','subcategorys'));
       
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
            'product_name'=>'required',
            'menu_id'=>'required',
       
            'category_id'=>'required',
            'product_image'=>'required',
            'product_description'=>'required',
            'product_specifiction'=>'required',
            'short_description'=>'required',
            'product_price_include_gst'=>'max:2048',
            
        ],
           ['product_price_include_gst'=>"PDF upload maxminu 2048 kb"]

        );
        $products = new Product();
        $products->product_name = $request->input('product_name');
        $products->menu_id =$request->input('menu_id');
        $products->category_id =$request->input('category_id');
        $products->subcategory_id =$request->input('subcategory_id');
        $products->brand_id =$request->input('brand_id');
        $products->product_description = $request->input('product_description');
        $products->product_specifiction = $request->input('product_specifiction');
        $products->status = $request->input('status');
        $products->product_price_include_gst = $request->input('product_price_include_gst');
        $products->in_gst = $request->input('in_gst');
        $products->product_price_exclude_gst = $request->input('product_price_exclude_gst');
        $products->ex_gst = $request->input('ex_gst');
        $products->product_sku = $request->input('product_sku');
        $products->s_sku= $request->input('s_sku');
        $products->product_mpn = $request->input('product_mpn');
        $products->short_description = $request->input('short_description');
        $products->s_mpn = $request->input('s_mpn');
        $products->availability = $request->input('availability');
        $products->product_unit = $request->input('product_unit');
        $products->product_item = $request->input('product_item');
        $products->product_shipping = $request->input('product_shipping');
        $products->product_deliver = $request->input('product_deliver');
        $products->product_returns = $request->input('product_returns');
        if($request->hasfile('product_image')) 
            { 
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $products->product_image= $filename;
            }
            if($request->hasfile('product_price_include_gst')) 
            { 
            $file = $request->file('product_price_include_gst');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/pdf/', $filename);
            $products->product_price_include_gst= $filename;
            }
            
            $products->save();

        return redirect('admin/productshow');       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrfail($id);
        $brands = DB::table('brands')->select('brands.*')->get();
        $categorys = DB::table('categorys')->select('categorys.*')->get();
        $menus = DB::table('menues')->select('menues.*')->get();
        $subcategorys = DB::table('subcategorys')->select('subcategorys.*')->get();
        return view('backend.product.edit',compact('product','menus','categorys','brands','subcategorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $this->validate($request,[
            'product_name'=>'required',
            'menu_id'=>'required',
            'category_id'=>'required',
            'short_description'=>'required',
            'product_price_include_gst'=>'max:2048',
            
        ],
           ['product_price_include_gst'=>"PDF upload maxminu 2048 kb"]

        );
        $product = Product::find($id);

        $product->product_name = $request->input('product_name');
        $product->menu_id = $request->input('menu_id');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->product_description = $request->input('product_description');
        $product->product_specifiction = $request->input('product_specifiction');
        $product->status = $request->input('status');
        $product->in_gst = $request->input('in_gst');
        $product->product_price_exclude_gst = $request->input('product_price_exclude_gst');
        $product->ex_gst = $request->input('ex_gst');
        $product->product_sku = $request->input('product_sku');
        $product->s_sku= $request->input('s_sku');
        $product->product_mpn = $request->input('product_mpn');
        $product->s_mpn = $request->input('s_mpn');
        $product->availability = $request->input('availability');
        $product->short_description = $request->input('short_description');
        $product->product_unit = $request->input('product_unit');
        $product->product_item = $request->input('product_item');
        $product->product_shipping = $request->input('product_shipping');
        $product->product_deliver = $request->input('product_deliver');
        $product->product_returns = $request->input('product_returns');
        if($request->hasfile('product_image')) 
            { 
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
       
            $file->move('uploads/image/', $filename);
            $product->product_image= $filename;
            }
        if($request->hasfile('product_price_include_gst')) 
            { 
                
            $file = $request->file('product_price_include_gst');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/pdf/', $filename);
            $product->product_price_include_gst= $filename;
            }
            
            $product->update();
            
        return redirect('admin/productshow'); 
    }

    public function changeStatus(Request $request)
    {
        $product = Product::find($request->id);
        $product->in_gst = $request->in_gst;
        $product->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('admin/productshow');
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

    public function view($id){
        $product = Product::findOrfail($id);
        $brands = DB::table('brands')->select('id','brand_name')->get();
        $categorys = DB::table('categorys')->select('id','category_name')->get();
        $menus = DB::table('menues')->select('id','menu_name')->get();
        $subcategorys = DB::table('subcategorys')->select('id','subcategory')->get();
        return view('backend.product.view',compact('product','menus','categorys','brands','subcategorys'));
    }

    public function delete(Request $request){
        if(!empty($request->checkbox)){
            Product::destroy($request->checkbox);
            return response()->json(['success'=>'yaj! A Product has been success delete']);
        }else{
            echo 'No';
        }
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $product = Product::find($checkbox);
                    $product->status = $request->status;
                    // dd($product);
                    $product->save();
                }

                return response()->json(['success'=>'Yas! A Product has been success status']);
            }else{
                #
            }
        }
    }

    
}
