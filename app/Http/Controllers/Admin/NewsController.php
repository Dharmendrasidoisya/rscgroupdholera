<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('backend.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::get();
        return view('backend.news.create',compact('news'));
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
            'title'=>'required',
            'description'=>'required|max:255',
            'image'=>'required',
            
         ]);
        $news=new News();
        $news->title=$request->input('title');
        $news->leatest=$request->input('leatest');
        $news->long_description=$request->input('long_description');
        $news->description=$request->input('description');
        $news->status=$request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/news/', $filename);
        $news->image= $filename;
        }
        $news->save();
        return redirect('admin/newsindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::findOrfail($id);
        return view('backend.news.view',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::findOrfail($id);
        return view('backend.news.edit',compact('new'));
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
            'title'=>'required',
            // 'description'=>'required|max:255',
       
          
            
         ]);
        $news=News::find($id);
        $news->title=$request->input('title');
        $news->leatest=$request->input('leatest');
        $news->long_description=$request->input('long_description');
        // $news->description=$request->input('description');

        
        $news->status=$request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/news/', $filename);
        $news->image= $filename;
        }
        // dd($news);
        $news->update();
        return redirect('admin/newsindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect('admin/newsindex');
    }


    
    public function update_status(Request $request){
        

        if($request->ajax()){
            if(!empty($request->checkbox)){
         
                foreach($request->checkbox as $checkbox){

                    $new = News::find($checkbox);
                    $new->status = $request->status;
              
                    $new->save();
                }

                return response()->json(['success'=>'Yas! A New has been success status']);
            }else{
                #
            }
        }
    }

}
