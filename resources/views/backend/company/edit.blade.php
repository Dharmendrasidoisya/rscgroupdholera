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
		<div class="row" style="margin-top:38px;">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
					<h3 class="card-title"> Update Company</h3>
					</div>
					<!--begin::Form-->
					<form method="post" action="{{route('admin.companyupdate',$company->id)}}" enctype='multipart/form-data' >
						@csrf								
						<div class="row">
							<div class="col-md-12">
								<div class="box box-pink">
									<div class="box-content">
										<div role="form" class="form-horizontal">
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Company Name<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="company_name" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$company->company_name}}"/>
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
													<input name="gst_no" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$company->gst_no}}"/>
												</div>
											</div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Footer Description<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="footer_description" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$company->footer_description}}"/>
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
												<label class="col-sm-3 col-lg-2 control-label">Email 1<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
													
													<input name="email1" type="email"  class="form-control" data-rule-required="true" data-rule-email="true" value="{{$company->email1}}" />
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
													
													<input name="email2" type="email" class="form-control" value="{{$company->email2}}"/>
												</div>
											</div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Contact Number<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="contact_no1" type="text" class="form-control" data-rule-number="true" data-rule-required="true" data-mask="99999 99999" value="{{$company->contact_no1}}"/>
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
													<input name="contact_no2" type="text"  class="form-control" data-mask="99999 99999" value="{{$company->contact_no2}}" />
												</div>
												<div class="col-sm-9 col-lg-4 controls" style="display:none;">
													<span class="switch switch-sm">
														<label>
															<input type="checkbox" checked="checked" name="cont2" data-toggle="toggle" data-on="1" data-off="0" value="1">
															<span></span>
														</label>
													</span>
												</div>
											</div>

											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Contact Number</label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="contact_no3" type="text" class="form-control" data-mask="99999 99999" value="{{$company->contact_no3}}" />
												</div>
												<div class="col-sm-9 col-lg-4 controls" style="display:none;">
													<span class="switch switch-sm">
														<label>
															<input type="checkbox" checked="checked" name="cont3" data-toggle="toggle" data-on="1" data-off="0" value="1">
															<span></span>
														</label>
													</span>
												</div>
											</div>
											<div class="form-group-select" >
												<label class="col-sm-3 col-lg-2 control-label">Google Map Iframe</label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="map" type="text"  class="form-control" data-rule-url="true" data-rule-required="true"  value="{{$company->map}}"/>
													{!!($company->map)!!}
												</div>

											</div>
											

											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label" for="company_logo">Company logo<span style="color: #a94442;">*</span></label>
												<div class="col-sm-6 col-lg-4 controls">
													<img src="{{asset('uploads/image/'.$company->company_logo)}}" id="pic"  width="150px" height="150px">
													<input name="company_logo" type="file" class="form-control" value="{{$company->company_logo}}" data-rule-required="true" oninput="pic.src=window.URL.createObjectURL(this.files[0])" data-rule-minlength="3" value="{{$company->company_logo}}"/>
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
											<img src="{{asset('uploads/footer/'.$company->footer_logo)}}" id="pic1" width="150px" height="150px">

                                                <input name="footer_logo" type="file"  class="form-control" oninput="pic1.src=window.URL.createObjectURL(this.files[0])" data-rule-required="true" value="{{$company->footer_logo}}" data-rule-minlength="3" />
                                               
                                            </div>
                                        </div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Address <span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
													
													<textarea name="address1" rows="5" cols="20" id="txtaddress" class="form-control wysihtml5">{{$company->address1}}</textarea>
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
													<textarea name="address2" class="form-control wysihtml6" rows="6">{{$company->address2}}</textarea>
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
                                                    <label class="col-sm-3 col-lg-3 control-label" >Inquiry Fome Config</label>
                                                    <div class="col-sm-6 col-lg-4 controls">
                                                    
                                                        <input type="checkbox" id="scales" name="scales"  onclick="myFunction()" value="1" {{$company->scales == '1' ? 'checked': ''}}>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										@if($company->scales =='1')
                                        <div>
                                            <div class="box">
                                                <div class="box-content">
                                                    <div class="form-group-select">
                                                        <label class="col-sm-3 col-lg-2 control-label">Vind</label>
                                                        <div class="col-sm-6 col-lg-4 controls">
                                                        <input name="vind" type="text" id="vind" value="{{$company->vind}}"  ifkey="vind" class="form-control" placeholder="Enter Vind"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <div class="box-content">
                                                    <div class="form-group-select">
                                                        <label class="col-sm-3 col-lg-2 control-label">Ctype</label>
                                                        <div class="col-sm-6 col-lg-4 controls">
                                                            <input name="ctype" type="text" id="ctype"  ifkey="ctype"  value="{{$company->ctype}} " placeholder="Enter Ctype"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										@else
										<div id="popup">
                                           
                                           
										   <div class="box">
											   <div class="box-content">
												   <div class="form-group-select">
													   <label class="col-sm-3 col-lg-2 control-label">Vind</label>
													   <div class="col-sm-6 col-lg-4 controls">
													   <input name="vind" type="text" id="vind" value="0000"  ifkey="vind" class="form-control" placeholder="Enter Vind"/>
													   </div>
												   </div>
											   </div>
										   </div>
										   <div class="box">
											   <div class="box-content">
												   <div class="form-group-select">
													   <label class="col-sm-3 col-lg-2 control-label">Ctype</label>
													   <div class="col-sm-6 col-lg-4 controls">
														   <input name="ctype" type="text" id="ctype"  ifkey="ctype" value="0000" placeholder="Enter Ctype"  class="form-control" />
													   </div>
												   </div>
											   </div>
										   </div>
									   </div>
										@endif
											<div class="form-group-select">
												<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
												<div class="col-sm-6 col-lg-4 controls">
													<select class="form-control" aria-label="Default select example" name="status">
														<option value="1" {{$company->status == '1' ? 'selected': ''}}>Active</option>
														<option value="0" {{$company->status == '0' ? 'selected': ''}}>Inactive</option>
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
