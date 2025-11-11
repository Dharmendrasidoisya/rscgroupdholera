<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs =  Blog::get();
        return view('backend.blog.create',compact('blogs'));
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
            'shoutdescription'=>'required | max:255',
            'image'=>'required',
         ]);
        $blogs=new Blog();
        $blogs->title=$request->input('title');
        $blogs->shoutdescription=$request->input('shoutdescription');
        $blogs->longdescription=$request->input('longdescription');
        $blogs->status=$request->input('status');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/blog/', $filename);
        $blogs->image= $filename;
        }
        $blogs->save();
        return redirect('admin/blogindex');

    }
	
	public function ckupload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
      
            $request->file('upload')->move(public_path('uploads/ckmedia'), $fileName);
      
            $url = asset('uploads/ckmedia/' . $fileName);
  
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrfail($id);
        return view('backend.blog.view',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrfail($id);
        return view('backend.blog.edit',compact('blog'));
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
        $blog=Blog::find($id);
        $blog->title=$request->input('title');
        $blog->status=$request->input('status');
        $blog->shoutdescription=$request->input('shoutdescription');
        $blog->longdescription=$request->input('longdescription');
        if($request->hasfile('image')) 
        { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/blog/', $filename);
        $blog->image= $filename;
        }
        $blog->save();
        return redirect('admin/blogindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('admin/blogindex');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $about = Blog::find($checkbox);
                    $about->status = $request->status;
                    // dd($about);
                    $about->save();
                }

                return response()->json(['success'=>'Yas! A Blog has been success status']);
            }else{
                #
            }
        }
    }
}
