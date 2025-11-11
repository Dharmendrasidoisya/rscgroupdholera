<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::get();
        return view('backend.menu.create',compact('menus'));
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
            'menu_name'=>'required',
        ],
        [
          'menu_name' => 'The plot image field is required.' 
        ]
        );
        $menus = new Menu();
        $menus->status=$request->input('status');
        if($request->hasfile('menu_name')) 
        { 
        $file = $request->file('menu_name');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/plot/', $filename);
        $menus->menu_name= $filename;
        }
        $menus->save();
        return redirect('admin/menushow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $menus = Menu::all();
        return view('backend.menu.index',compact('menus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrfail($id);
        return view('backend.menu.edit',compact('menu'));
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
        // dd($request);
        $this->validate($request,[
            'menu_name'=>'required',
        ],
        [
          'menu_name' => 'The plot image field is required.' 
        ]
        );
        $menus = Menu::find($id);
        $menus->status=$request->input('status');
        if($request->hasfile('menu_name')) 
        { 
        $file = $request->file('menu_name');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/plot/', $filename);
        $menus->menu_name= $filename;
        }
        $menus->update();
        return redirect('admin/menushow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('admin/menushow');
    }

    public function view($id)
    {
        $menu = Menu::findOrfail($id);
        return view('backend.menu.view',compact('menu'));
    }


    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $menu = Menu::find($checkbox);
                    $menu->status = $request->status;
                    // dd($about);
                    $menu->save();
                }

                return response()->json(['success'=>'Yas! A plot has been success status']);
            }else{
                #
            }
        }
    }
}
