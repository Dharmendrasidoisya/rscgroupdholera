<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $abouts = About::get();
        return view('backend.about.create',compact('abouts'));
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
           
            'shout_description'=>'required |max:500',
           
            'titel'=>'required',
            'onhome'=>'required',
         ]);
        $abouts = new About();
        $abouts->shout_description=$request->input('shout_description');
        $abouts->titel=$request->input('titel');
        $abouts->about_description=$request->input('about_description');
        $abouts->onhome=$request->input('onhome');
        $abouts->status=$request->input('status');
        if($request->hasfile('about_image')) 
        { 
        $file = $request->file('about_image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/image/', $filename);
        $abouts->about_image= $filename;
        }
        
        $abouts->save();

    return redirect('admin/aboutshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abouts = About::all();
        return view('backend.about.index',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrfail($id);
        return view('backend.about.edit',compact('about'));
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
            'shout_description'=>'required |max:500',
         ]);
         
        $about =About::find($id);
        $about->titel=$request->input('titel');
        $about->about_description=$request->input('about_description');
        $about->shout_description=$request->input('shout_description');
        $about->onhome=$request->input('onhome');
        $about->status=$request->input('status');
        if($request->hasfile('about_image')) 
        { 
        $file = $request->file('about_image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/image/', $filename);
        $about->about_image= $filename;
        }
        
        $about->update();

    return redirect('admin/aboutshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::destroy($id);
        return redirect('admin/aboutshow');
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
        $about = About::findOrfail($id);
        return view('backend.about.view',compact('about'));
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $about = About::find($checkbox);
                    $about->status = $request->status;
                    // dd($about);
                    $about->save();
                }

                return response()->json(['success'=>'Yas! A About has been success status']);
            }else{
                #
            }
        }
    }
}
