@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	<!--begin::Card-->
	<div class="card card-custom gutter-b example example-compact">
		<div class="card-header">
			<h3 class="card-title">View Profile</h3>
		</div>
		<!--begin::Form-->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-pink">
					<div class="box-content">
							<div role="form" class="form-horizontal">
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">First Name</label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="fname" type="text"  class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$profile->fname}}"/>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Last Name</label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="lname" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$profile->lname}}"/>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Designation</label>
									<div class="col-sm-9 col-lg-6 controls">
										<textarea  name="designation" type="text"  class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$profile->designation}}">{{$profile->designation}}</textarea>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="des" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								
								<div style="display: none" class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Gender</label>
									<div class="col-sm-9 col-lg-6 controls">
										<label class="radio-inline">
											<input value="Male" name="gender" type="radio" id="txtgender1" checked="" />
											Male
										</label>
										<label class="radio-inline">
											<input value="Female" name="gender" type="radio" id="txtgender2" />
											Female
										</label>
									</div>
								</div>
								
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Email </label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="email" type="email" class="form-control" data-rule-required="true" data-rule-email="true" value="{{$profile->email}}"/>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="ema" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Email 2</label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="email2" type="email" class="form-control" value="{{$profile->email2}}"/>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Contact Number </label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="contact_no1" type="text"  class="form-control" data-rule-number="true" data-rule-required="true" data-mask="(999) 999-9999" value="{{$profile->contact_no1}}"/>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="con1" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Contact Number 2</label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="contact_no2" type="text"  class="form-control" data-mask="(999) 999-9999" value="{{$profile->contact_no2}}"/>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="con2" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Contact Number 3</label>
									<div class="col-sm-9 col-lg-6 controls">
										<input name="contact_no3" type="text" class="form-control" data-mask="(999) 999-9999"  value="{{$profile->contact_no2}}"/>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="con3" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								</div>

								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="username">Image Upload</label>
									<div class="col-sm-6 col-lg-4 controls">
                                    <img src="{{asset('uploads/image/'.$profile->profile)}}" width="150px" height="150px">
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Address </label>
									<div class="col-sm-9 col-lg-6 controls">
										
										<textarea name="address1" rows="5" cols="20" id="txtaddress" class="form-control wysihtml5">{{$profile->address1}}</textarea>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="add1" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Address </label>
									<div class="col-sm-9 col-lg-6 controls">
										<textarea name="address2" class="form-control wysihtml6" rows="6">{{$profile->address2}}</textarea>
									</div>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" value="1" name="add2">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Active</label>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="status" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Form-->
	</div>
	<!--end::Card-->
</div>
<!--end::Wrapper-->
@endsection
