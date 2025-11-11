<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.create',compact('brands'));
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
            'brand_name'=>'required',
         ]);
        $brands=new Brand();
        $brands->brand_name=$request->input('brand_name');
        $brands->status=$request->input('status');
        $brands->save();
        return redirect('admin/brandshow');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $brands = Brand::get();
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrfail($id);
        return view('backend.brand.edit',compact('brand'));
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
            'brand_name'=>'required',
         ]);
        $brand = Brand::find($id);
        $brand->brand_name=$request->input('brand_name');
        $brand->status=$request->input('status');
        $brand->update();
        return redirect('admin/brandshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect('admin/brandshow');
    }

    public function view($id){
        $brand = Brand::findOrfail($id);
        return view('backend.brand.view',compact('brand'));
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $brand = Brand::find($checkbox);
                    $brand->status = $request->status;
                    // dd($brand);
                    $brand->save();
                }

                return response()->json(['success'=>'Yas! A Video has been success status']);
            }else{
                #
            }
        }
    }
}
