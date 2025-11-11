<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterform;

class MasterformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contacts = Masterform::get();
        // return view('fronted.contact',compact('contacts'));
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
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
           
         ]);
        // dd($request);
        $contacts = new Masterform();
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->pname = $request->input('pname');
        $contacts->subject = $request->input('subject');
        $contacts->message = $request->input('message');
        $contacts->save();
        
        // return response()->json(['success'=>'yaj! A from has been successfully']);
        return redirect('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contacts = Masterform::all();
        return view('backend.contact.index',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function view($id){
        $contact = Masterform::findOrfail($id);
        return view('backend.contact.view',compact('contact'));
    }

}
