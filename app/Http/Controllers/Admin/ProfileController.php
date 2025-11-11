<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::get();
        return view('backend.profile.create',compact('profiles'));
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
            'lname'=>'required',
            'fname'=>'required',
            'address1'=>'required',
            'email'=>'required',
            'contact_no1'=>'required',
            'designation'=>'required',
            'profile'=>'required',
        ]);

        $profiles = new Profile();
        $profiles->fname=$request->input('fname');
        $profiles->lname=$request->input('lname');
        $profiles->designation=$request->input('designation');
        $profiles->email=$request->input('email');
        $profiles->email2=$request->input('email2');
        $profiles->address1=$request->input('address1');
        $profiles->address2=$request->input('address2');
        $profiles->contact_no1=$request->input('contact_no1');
        $profiles->contact_no2=$request->input('contact_no2');
        $profiles->contact_no3=$request->input('contact_no3');
        $profiles->des=$request->input('des');
        $profiles->ema=$request->input('ema');
        $profiles->con1=$request->input('con1');
        $profiles->con2=$request->input('con2');
        $profiles->con3=$request->input('con3');
        $profiles->status=$request->input('status');
        if($request->hasfile('profile')) 
            { 
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $profiles->profile= $filename;
            }
            
            $profiles->save();

        return redirect('admin/profileshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $profiles = Profile::all();
        return view('backend.profile.index',compact('profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile=Profile::findOrfail($id);
        return view('backend.profile.edit',compact('profile'));
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
            'lname'=>'required',
            'fname'=>'required',
            'address1'=>'required',
            'email'=>'required',
            'contact_no1'=>'required',
            'designation'=>'required',
            'profile'=>'required',
        ]);
        $profile = Profile::find($id);
        $profile->fname=$request->input('fname');
        $profile->lname=$request->input('lname');
        $profile->designation=$request->input('designation');
        $profile->email=$request->input('email');
        $profile->email2=$request->input('email2');
        $profile->address1=$request->input('address1');
        $profile->address2=$request->input('address2');
        $profile->contact_no1=$request->input('contact_no1');
        $profile->contact_no2=$request->input('contact_no2');
        $profile->contact_no3=$request->input('contact_no3');
        $profile->des=$request->input('des');
        $profile->ema=$request->input('ema');
        $profile->con1=$request->input('con1');
        $profile->con2=$request->input('con2');
        $profile->con3=$request->input('con3');
        $profile->status=$request->input('status');
        if($request->hasfile('profile')) 
            { 
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $profile->profile= $filename;
            }
            
            $profile->update();

        return redirect('admin/profileshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect('admin/profileshow');
    }

    public function view($id)
    {
        $profile=Profile::findOrfail($id);
        return view('backend.profile.view',compact('profile'));
    }
}
