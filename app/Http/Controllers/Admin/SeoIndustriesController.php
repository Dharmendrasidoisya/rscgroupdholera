<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\SeoIndustries;
use DB;
class SeoIndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seoindustries=SeoIndustries::all();
    
        return view('backend.seo.industries.index',compact('seoindustries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = DB::table('applications')->select('applications.*')->get();
        $seoindustries = SeoIndustries::get();
        return view('backend.seo.industries.create',compact('industries','seoindustries'));
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
            'industries'=>'required',
            'industrie_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $seoindustries = new SeoIndustries();
        $seoindustries->industries = $request->input('industries');
        $seoindustries->industrie_id = $request->input('industrie_id');
        $seoindustries->meta_title = $request->input('meta_title');
        $seoindustries->keyword = $request->input('keyword');
        $seoindustries->description = $request->input('description');
        $seoindustries->canonical = $request->input('canonical');
        $seoindustries->status = $request->input('status');
        $seoindustries->save();
        return redirect('admin\seoindustriesindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seoindustries = SeoIndustries::findOrfail($id);
        $industries = DB::table('applications')->select('applications.*')->get();
        return view('backend.seo.industries.show',compact('seoindustries','industries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seoindustries = SeoIndustries::findOrfail($id);
        $industries = DB::table('applications')->select('applications.*')->get();
        return view('backend.seo.industries.edit',compact('seoindustries','industries'));
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
            'industries'=>'required',
            'industrie_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $seoindustries = SeoIndustries::find($id);
        $seoindustries->industries = $request->input('industries');
        $seoindustries->industrie_id = $request->input('industrie_id');
        $seoindustries->meta_title = $request->input('meta_title');
        $seoindustries->keyword = $request->input('keyword');
        $seoindustries->description = $request->input('description');
        $seoindustries->canonical = $request->input('canonical');
        $seoindustries->status = $request->input('status');
        $seoindustries->update();
        return redirect('admin\seoindustriesindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeoIndustries::destroy($id);
        return redirect('admin\seoindustriesindex');
    }

    public function update_status(Request $request){
      
        if($request->ajax()){
            if(!empty($request->checkbox)){
           
                foreach($request->checkbox as $checkbox){

                    $subseo =  SeoIndustries::find($checkbox);
                    $subseo->status = $request->status;
                   
                    $subseo->save();
                }

                return response()->json(['success'=>'Yas! A SeoIndustries has been success status']);
            }else{
                #
            }
        }
    }
}
