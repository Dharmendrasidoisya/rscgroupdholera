<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedias;
class SocialMediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socals = SocialMedias::all();
        return view('backend.socialmedias.create',compact('socals'));
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
        
        $socals =new SocialMedias();
        $socals->facebook=$request->input('facebook');
        $socals->twitter=$request->input('twitter');
        $socals->youtube=$request->input('youtube');
        $socals->linkedin=$request->input('linkedin');
        $socals->instagram=$request->input('instagram');
        $socals->pinterest=$request->input('pinterest');
        $socals->status=$request->input('status');
        $socals->save();
        return redirect('admin/socialshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $socals = SocialMedias::get();
        return view('backend.socialmedias.index',compact('socals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socal = SocialMedias::findOrfail($id);
        return view('backend.socialmedias.edit',compact('socal'));
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
      
        $socal =SocialMedias::find($id);
        $socal->facebook=$request->input('facebook');
        $socal->twitter=$request->input('twitter');
        $socal->youtube=$request->input('youtube');
        $socal->linkedin=$request->input('linkedin');
        $socal->instagram=$request->input('instagram');
        $socal->pinterest=$request->input('pinterest');
        $socal->status=$request->input('status');
        $socal->update();
        return redirect('admin/socialshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SocialMedias::destroy($id);
        return redirect('admin/socialshow');
    }


    public function view($id)
    {
        $socal = SocialMedias::findOrfail($id);
        return view('backend.socialmedias.view',compact('socal'));
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $socal = SocialMedias::find($checkbox);
                    $socal->status = $request->status;
                    // dd($brand);
                    $socal->save();
                }

                return response()->json(['success'=>'Yas! A SocialMedias has been success status']);
            }else{
                #
            }
        }
    }
}
