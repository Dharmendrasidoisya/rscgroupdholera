@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Add Application</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-content">
							<form method="post" action="{{route('admin.applictionstore')}}" enctype='multipart/form-data'>
								@csrf
								<div class="col-md-8" >
								<div class="form-group-sel">
										<label for="menu_id" class="col-sm-3 col-lg-3 control-label">Chosen Menu<span style="color: #a94442;">*</span></label>
										<div class="col-sm-6 col-lg-9 controls">
											<select name="menu_id" class="form-control" name="chosen-select" data-rule-required="true">
												<option selected="selected" value="">-- Please select --</option>
												<!-- @foreach ($menus as $menu)
													<option value="{{$menu->id}}">{{$menu->menu_name}}</option>
												@endforeach -->
												<option  value="2">Application</option>
												<span class="text-danger">
													@error("menu_id")
													{{$message}}
													@enderror
												</span>
											</select>
										</div>
									</div>
									<div class="form-group-sel">
										<label class="col-sm-3 col-lg-3 control-label select1" for="application_name">Application<span style="color: #a94442;">*</span></label>
										<div class="col-sm-9 col-lg-9 controls">
											<input name="application_name" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" />
											<span class="text-danger">
													@error("application_name")
													{{$message}}
													@enderror
											</span>
										</div>
									</div>
									<div class="form-group-sel" >
										<label class="col-sm-3 col-lg-4 control-label">Display</label>
										<div class="col-3">
											<span class="switch switch-sm">
												<label>
													<input type="checkbox" checked="checked" name="ad" value="1">
													<span></span>
												</label>ONHOME
											</span>
										</div>
									</div>
									<div class="form-group-sel">
										<label class="col-sm-3 col-lg-3 control-label select1" for="application_image">Image<span style="color: #a94442;">*</span></label>
										<div class="col-sm-6 col-lg-6 controls">
											<input name="application_image" type="file" class="form-control" data-rule-required="true" data-rule-minlength="3" oninput="pic.src=window.URL.createObjectURL(this.files[0])"/>
											<img id="pic"  />
											<label><strong>image size 500*500</strong></label>

											<span class="text-danger">
												
												@error("application_image")
												{{$message}}
												@enderror
											</span>
										</div>
									</div>
									<div style="display:none" class="form-group-sel">
										<label class="col-sm-3 col-lg-2 control-label">Brochure</label>
										<div class="col-sm-6 col-lg-6 controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-group">
													<div class="form-control uneditable-input">
														<i class="fa fa-file fileupload-exists"></i>
														<span id="img_bgallery1" class="fileupload-preview"></span>
													</div>
													<div class="input-group-btn">
														<a class="btn bun-default btn-file">
															<span class="fileupload-new">Select file</span>
															<span class="fileupload-exists">Change</span>
															<input type="file" name="filepimage1" id="filepimage1" type="file" class="file-input" />
															
														</a>
														<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									
									<div style="display:none" class="form-group-sel">
										<label for="numberfield" class="col-sm-3 col-lg-4 control-label">New Price</label>
										<div class="col-sm-6 col-lg-6 controls">
											
											<input name="newprice" type="text" id="newprice" class="form-control" placeholder="New Price" />
										</div>
										<div class="col-sm-2 col-lg-3 controls">
											<label class="checkbox-inline">
												<input name="chknewprice" type="checkbox" id="chknewprice"/>
												On Website
											</label>
										</div>
									</div>
									<div style="display:none" class="form-group-sel">
										<label for="numberfield" class="col-sm-3 col-lg-4 control-label">Old Price</label>
										<div class="col-sm-6 col-lg-3 controls">
											<input name="oldprice" type="text" id="oldprice" class="form-control" placeholder="Old Price.." data-rule-number="true" />
										</div>
										<div class="col-sm-2 col-lg-3 controls">
											<label class="checkbox-inline">
												<input name="chkoldprice" type="checkbox" id="chkoldprice" />
												On Website
											</label>
										</div>
									</div>
									
									<div class="form-group-sel">
										<label class="col-sm-3 col-lg-3 control-label" for="application_description">Description</label>
										<div class="col-sm-9 col-lg-9 controls">
											
											<textarea type="text" class="form-control ckedspec" name="application_description" value=""  placeholder="Enter Description" id="full-featured-editor"></textarea>
											
										</div>

									</div>

									<div class="form-group-sel" >
										<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
										<div class="col-sm-6 col-lg-6 controls">
											<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
												<option value="1" selected>Active</option>
												<option value="0">Inactive</option>
											</select>
										</div>
									</div>
								</div>
								
							
								<hr>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
										<input type="submit" value="Submit" class="btn btn-primary" />
									</div>
								</div>
							
							</form>
						</div>
					</div>
				</div>
			</div>
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
