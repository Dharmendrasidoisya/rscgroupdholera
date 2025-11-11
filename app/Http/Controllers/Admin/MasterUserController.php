<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MasterUser;
use App\Models\Admin;
use DB;
use Illuminate\Http\Request;

class MasterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = MasterUser::all();
        $admins = DB::table('admins')->select('admins.*')->get();
        return view('backend.user.create',compact('master','admins'));
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
        // dd($request->all()); 'username' => $data['name'] . str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT)

        // $memberString = implode(",", $request->get('assign_user'));
        $this->validate($request,[
            'user_id'=>'required',
            'user_type'=>'required',
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required',
            'password'=>'required',
         
         ]);
        $masters = new MasterUser();
        
        $masters->user_id = $request->input('user_id');
        $masters->user_type = $request->input('user_type');
        $masters->f_name = $request->input('f_name');
        $masters->l_name = $request->input('l_name');
        $masters->email = $request->input('email');
        $masters->password = $request->input('password');
        // $masters->assign_user = $memberString;
        $masters->assign_user=implode(',', (array) $request->input('assign_user'));
        $masters->status = $request->input('status');
        $masters->save();
        return redirect('admin\masterlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $masters = MasterUser::all();
        return view('backend.user.index',compact('masters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $master =MasterUser::findOrfail($id);
    //    dd(explode(" ",$master));
        $admins = DB::table('admins')->select('admins.*')->get();
        return view('backend.user.edit',compact('master','admins'));

    }
// explode(',', $user->hobbies)
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
            'user_id'=>'required',
            'user_type'=>'required',
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required',
            'password'=>'required',
         ]);
        $master = MasterUser::find($id);
        $master->user_id = $request->input('user_id');
        $master->user_type = $request->input('user_type');
        $master->f_name = $request->input('f_name');
        $master->l_name = $request->input('l_name');
        $master->email = $request->input('email');
        $master->password = $request->input('password');
        $master->assign_user=implode(',', (array) $request->input('assign_user'));
        $master->status = $request->input('status');
        $master->update();
        return redirect('admin\masterlist');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
