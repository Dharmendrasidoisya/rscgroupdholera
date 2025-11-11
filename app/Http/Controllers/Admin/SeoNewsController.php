<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoNews ;
use DB;
class SeoNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsseo=SeoNews::all();
        return view('backend.seo.news.index',compact('newsseo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = DB::table('news')->select('news.*')->get();
        $newsseo = SeoNews::get();
        return view('backend.seo.news.create',compact('news','newsseo'));
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
            'news'=>'required',
            'news_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $categorys = new SeoNews();
        $categorys->news = $request->input('news');
        $categorys->news_id = $request->input('news_id');
        $categorys->meta_title = $request->input('meta_title');
        $categorys->keyword = $request->input('keyword');
        $categorys->description = $request->input('description');
        $categorys->canonical = $request->input('canonical');
        $categorys->status = $request->input('status');
        $categorys->save();
        return redirect('admin\seonewsindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newseo = SeoNews::findOrfail($id);
        $news = DB::table('news')->select('news.*')->get();
        return view('backend.seo.news.show',compact('news','newseo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newseo = SeoNews::findOrfail($id);
        $news = DB::table('news')->select('news.*')->get();
        return view('backend.seo.news.edit',compact('newseo','news'));
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
            'news'=>'required',
            'news_id'=>'required',
            'meta_title'=>'required',
            'keyword'=>'required',
            'description'=>'required',
            'canonical'=>'required',
            'status'=>'required'
         ]);
        $category = SeoNews::find($id);
        $category->news = $request->input('news');
        $category->news_id = $request->input('news_id');
        $category->meta_title = $request->input('meta_title');
        $category->keyword = $request->input('keyword');
        $category->description = $request->input('description');
        $category->canonical = $request->input('canonical');
        $category->status = $request->input('status');
        $category->update();
        return redirect('admin\seonewsindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeoNews::destroy($id);
        return redirect('admin\seocategoryindex');
    }

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $subseo =  SeoNews::find($checkbox);
                    $subseo->status = $request->status;
                    // dd($product);
                    $subseo->save();
                }

                return response()->json(['success'=>'Yas! A Seo New has been success status']);
            }else{
                #
            }
        }
    }
}
