@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row" style="margin-top:38px;">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
					<h3 class="card-title"> Only View</h3>
					</div>
					<!--begin::Form-->
					<form method="post" action="" enctype='multipart/form-data' >
						@csrf								
						<div class="row">
							<div class="col-md-12">
								<div class="box box-pink">
									<div class="box-content">
										<div role="form" class="form-horizontal">
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Company Name<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
												{{$company->company_name}}
												</div>
											</div>
											<div class="form-group-select" style="display:none;">
												<label class="col-sm-3 col-lg-2 control-label">GST Number</label>
												<div class="col-sm-9 col-lg-6 controls">
													<input name="gst_no" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$company->gst_no}}" readonly/>
												</div>
											</div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Footer Description<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
												{{$company->footer_description}}
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
												{{$company->email1}}
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
												{{$company->email2}}
												</div>
											</div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Contact Number<span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
												{{$company->contact_no1}}
												</div>
												<div class="col-sm-9 col-lg-4 controls" style="display:none;">
													<span class="switch switch-sm">
														<label>
															<input type="checkbox" checked="checked" name="cont1" data-toggle="toggle" data-on="1" data-off="0" value="1" readonly>
															<span></span>
														</label>
													</span>
												</div>
											</div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">whatsapp Number</label>
												<div class="col-sm-9 col-lg-6 controls">
												{{$company->contact_no2}}
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
												{{$company->contact_no3}}
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
												{!!($company->map)!!}
												</div>
											</div>
											

											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label" for="company_logo">Company logo<span style="color: #a94442;">*</span></label>
												<div class="col-sm-6 col-lg-4 controls">
													<img src="{{asset('uploads/image/'.$company->company_logo)}}" id="pic"  width="150px" height="150px">
													
													
												</div>
											</div>
											<div class="form-group-select">
                                            <label class="col-sm-3 col-lg-2 control-label" for="username">footer logo</label>

                                            <div class="col-sm-6 col-lg-4 controls">
											<img src="{{asset('uploads/footer/'.$company->footer_logo)}}" id="pic1" width="150px" height="150px">

                                             
                                               
                                            </div>
                                        </div>
											<div class="form-group-select">
												<label class="col-sm-3 col-lg-2 control-label">Address <span style="color: #a94442;">*</span></label>
												<div class="col-sm-9 col-lg-6 controls">
												{!!($company->address1)!!}
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
												{!!($company->address2)!!}
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
						<!-- <div class="card-footer">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</div> -->
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
@endsection
