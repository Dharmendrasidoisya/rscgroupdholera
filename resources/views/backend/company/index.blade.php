@extends('backend.layout.master')
@section('contant')
<style>

 #popup {
    display: none;
 }

</style>
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row rowcomp">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
                    <h3 class="card-title">Add Company </h3>
                </div>
                <!--begin::Form-->
                <form method="post" action="{{route('admin.companystore')}}" enctype='multipart/form-data' >
                    @csrf								
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-pink">
                                <div class="box-content">
                                    <div role="form" class="form-horizontal">
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Company Name<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="company_name" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3"/>
                                                <span class="text-danger">
                                                @error("company_name")
                                                {{$message}}
                                                @enderror
                                            </span>
                                            </div>
                                        </div>
                                        <div class="form-group-select" style="display:none;">
                                            <label class="col-sm-3 col-lg-2 control-label">GST Number</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="gst_no" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3"/>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Footer Description<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <textarea name="footer_description" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" rows="5" cols="3"></textarea>
                                                <span class="text-danger">
                                                    @error("footer_description")
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="col-sm-9 col-lg-4 controls" style="display:none;">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="des" data-toggle="toggle" data-on="1" data-off="0" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Email<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                
                                                <input name="email1" type="email"  class="form-control" data-rule-required="true" data-rule-email="true" />
                                                <span class="text-danger">
                                                    @error("email1")
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="col-sm-9 col-lg-4 controls" style="display:none;">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="em" data-toggle="toggle" data-on="1" data-off="0" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Email 2</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                
                                                <input name="email2" type="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Contact Number<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="contact_no1" type="text" class="form-control" data-rule-number="true" data-rule-required="true" data-mask="99999 99999"/>
                                                <span class="text-danger">
                                                    @error("contact_no1")
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="col-sm-9 col-lg-4 controls" style="display:none;">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="cont1" data-toggle="toggle" data-on="1" data-off="0" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">whatsapp Number</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="contact_no2" type="text"  class="form-control" data-mask="99999 99999"/>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Contact Number </label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="contact_no3" type="text" class="form-control" data-mask="99999 99999"  />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Google Map</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="website_url" type="text"  class="form-control" data-rule-url="true" data-rule-required="true"  />
                                            </div>
                                        </div>
                                        <div class="form-group-select" style="display:none;">
                                            <label class="col-sm-3 col-lg-2 control-label">Website Title</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <input name="website_title" type="text"  class="form-control" data-rule-required="true" data-rule-minlength="3" />
                                            </div>
                                            
                                        </div>

                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label" for="username">Company logo<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-6 col-lg-4 controls">
                                                <input name="company_logo" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])"  class="form-control" data-rule-required="true" data-rule-minlength="3" />
                                                <img id="pic"  />
                                                <span class="text-danger">
                                                    @error("company_logo")
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label" for="username">footer logo</label>
                                            <div class="col-sm-6 col-lg-4 controls">
                                                <input name="footer_logo" type="file"  class="form-control" data-rule-required="true" data-rule-minlength="3" oninput="pic1.src=window.URL.createObjectURL(this.files[0])"  />
                                                <img id="pic1"  />
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Address<span style="color: #a94442;">*</span></label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                
                                                <textarea name="address1" rows="5" cols="10" id="txtaddress" class="form-control wysihtml5"></textarea>
                                                <span class="text-danger">
                                                @error("address1")
                                                {{$message}}
                                                @enderror
                                            </span>
                                            </div>
                                            <div class="col-sm-9 col-lg-4 controls" style="display:none;">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" checked  checked="checked" name="add1" data-toggle="toggle" data-on="1" data-off="0" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label">Address 2</label>
                                            <div class="col-sm-9 col-lg-6 controls">
                                                <textarea name="address2" class="form-control wysihtml6" rows="6"></textarea>
                                            </div>
                                            <div class="col-sm-9 col-lg-4 controls" style="display:none;">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" checked="checked" name="add2" data-toggle="toggle" data-on="1" data-off="0" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="box-content">
                                                <div class="form-group-select">
                                                    <label class="col-sm-3 col-lg-3 control-label" >Connect to external features</label>
                                                    <div class="col-sm-6 col-lg-4 controls">
                                                    
                                                        <input type="checkbox" id="scales" value="1" name="scales"  onclick="myFunction()" >
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popup">
                                           
                                           
                                            <div class="box">
                                                <div class="box-content">
                                                    <div class="form-group-select">
                                                        <label class="col-sm-3 col-lg-2 control-label">Vind</label>
                                                        <div class="col-sm-6 col-lg-4 controls">
                                                        <input name="vind" type="text" id="vind"  ifkey="vind" class="form-control" value="0000" placeholder="Enter Vind"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <div class="box-content">
                                                    <div class="form-group-select">
                                                        <label class="col-sm-3 col-lg-2 control-label">Ctype</label>
                                                        <div class="col-sm-6 col-lg-4 controls">
                                                            <input name="ctype" value="0000" type="text" id="ctype"  ifkey="ctype" placeholder="Enter Ctype"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-select">
                                            <lable class="col-sm-3 col-lg-2 control-label">Status</lable>
                                            <div class="col-sm-6 col-lg-4 controls">
                                            <select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->
<script>
    function myFunction(){
    var x = document.getElementById("popup");
    var y = document.getElementById("popup1");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "block";
  } else {
  
    x.style.display = "block";
    y.style.display = "none";
  }
    }
</script>
@endsection
