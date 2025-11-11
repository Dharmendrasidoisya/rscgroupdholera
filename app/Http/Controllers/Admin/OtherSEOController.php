<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OtherSEO;

class OtherSEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others= OtherSEO::all();
        return view('backend.seo.other.index',compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $others= OtherSEO::get();
        return view('backend.seo.other.create',compact('others'));
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
            'menu_home'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $others = new OtherSEO();
        $others->menu_home = $request->input('menu_home');
        $others->meta_title = $request->input('meta_title');
        $others->keyword = $request->input('keyword');
        $others->description = $request->input('description');
        $others->canonical = $request->input('canonical');
        $others->status = $request->input('status');
        $others->save();
        return redirect('admin\seoindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $other = OtherSEO::findOrfail($id);
        return view('backend.seo.other.show',compact('other')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $other = OtherSEO::findOrfail($id);
        return view('backend.seo.other.edit',compact('other'));
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
            'menu_home'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $other = OtherSEO::find($id);
        $other->menu_home = $request->input('menu_home');
        $other->meta_title = $request->input('meta_title');
        $other->keyword = $request->input('keyword');
        $other->description = $request->input('description');
        $other->canonical = $request->input('canonical');
        $other->status = $request->input('status');
        $other->update();
        return redirect('admin\seoindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OtherSEO::destroy($id);
        return redirect('admin/seoindex');
    }
    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $application = OtherSEO::find($checkbox);
                    $application->status = $request->status;
                    // dd($application);
                    $application->save();
                }

                return response()->json(['success'=>'Yas! A OtherSEO has been success status']);
            }else{
                #
            }
        }
    }
}
