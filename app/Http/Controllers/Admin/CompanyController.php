<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $companys = Company::get();
        return view('backend.company.index',compact('companys'));
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
            'company_name'=>'required',
            'footer_description'=>'required',
            'email1'=>'required',
            'address1'=>'required',
            'contact_no1'=>'required',
            'company_logo'=>'required',
         ]);
        // dd($request->all());
        $companys = new Company();
        $companys->company_name=$request->input('company_name');
        $companys->footer_description=$request->input('footer_description');
        $companys->email1=$request->input('email1');
        $companys->email2=$request->input('email2');
        $companys->address1=$request->input('address1');
        $companys->address2=$request->input('address2');
        $companys->contact_no1=$request->input('contact_no1');
        $companys->contact_no2=$request->input('contact_no2');
        $companys->contact_no3=$request->input('contact_no3');
        $companys->map=$request->input('map');
        $companys->vind=$request->input('vind');
        $companys->ctype=$request->input('ctype');
        $companys->scales=$request->input('scales');
        $companys->status=$request->input('status');
       
        if($request->hasfile('company_logo')) 
                { 
                $file = $request->file('company_logo');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/image/', $filename);
                $companys->company_logo= $filename;
                }
        if($request->hasfile('footer_logo')) 
                { 
                $file = $request->file('footer_logo');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/footer/', $filename);
                $companys->footer_logo= $filename;
                }
        $companys->save();
        return redirect('admin/companylist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $companys=Company::all();
        return view('backend.company.list',compact('companys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrfail($id);
        return view('backend.company.edit',compact('company'));
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
            'company_name'=>'required',
            'footer_description'=>'required',
            'email1'=>'required',
            'address1'=>'required',
            'contact_no1'=>'required',
         ]);
        $company = Company::find($id);
        $company->company_name=$request->input('company_name');
        $company->footer_description=$request->input('footer_description');
        $company->email1=$request->input('email1');
        $company->email2=$request->input('email2');
        $company->address1=$request->input('address1');
        $company->address2=$request->input('address2');
        $company->contact_no1=$request->input('contact_no1');
        $company->contact_no2=$request->input('contact_no2');
        $company->contact_no3=$request->input('contact_no3');
        $company->map=$request->input('map');
        $company->vind=$request->input('vind');
        $company->ctype=$request->input('ctype');
        $company->scales=$request->input('scales');
        $company->status=$request->input('status');
    
        if($request->hasfile('company_logo')) 
                { 
                $file = $request->file('company_logo');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename =time().'.'.$extension;
                $file->move('uploads/image/', $filename);
                $company->company_logo= $filename;
                }
        if($request->hasfile('footer_logo')) 
        { 
        $file = $request->file('footer_logo');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/footer/', $filename);
        $company->footer_logo= $filename;
        }
        $company->update();
        return redirect('admin/companylist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect('admin/companylist');
    }

    public function view($id){
        $company =Company::findOrfail($id);
        return view('backend.company.view',compact('company'));
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

    public function update_status(Request $request){
        // dd($request->all());

        if($request->ajax()){
            if(!empty($request->checkbox)){
                // dd($request->all());
                foreach($request->checkbox as $checkbox){

                    $company = Company::find($checkbox);
                    $company->status = $request->status;
                    // dd($company);
                    $company->save();
                }

                return response()->json(['success'=>'Yas! A Company has been success status']);
            }else{
                #
            }
        }
    }

}
