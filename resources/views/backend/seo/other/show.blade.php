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
			<h3 class="card-title"> Other Page Meta Title</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
							<div class="box-content">
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Chose Menu<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" name="menu_home">
										
											<option value="0" {{$other->menu_home == '0' ? 'selected': ''}}>Home</option>
											<option value="1" {{$other->menu_home == '1' ? 'selected': ''}}>About Us</option>
											<option value="3" {{$other->menu_home == '3' ? 'selected': ''}}>Products</option>
											<option value="4" {{$other->menu_home == '4' ? 'selected': ''}}>Gallery</option>
											<option value="6" {{$other->menu_home == '6' ? 'selected': ''}}>Application</option>
											<option value="5" {{$other->menu_home == '5' ? 'selected': ''}}>Blogs</option>
											<option value="2" {{$other->menu_home == '2' ? 'selected': ''}}>Contact Us</option>
										</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="meta_title">Meta Title<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="meta_title" type="text"class="form-control" data-rule-required="true" value="{{$other->meta_title}}" data-rule-minlength="3" placeholder="Meta Title" readonly/>
										<span class="text-danger">
											@error("meta_title")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="keyword">Keyword<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="keyword" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Key Word" value="{{$other->keyword}}" readonly/>
										<span class="text-danger">
											@error("keyword")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="description">Description<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<textarea name="description" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Description..." value="{{$other->keyword}}" rows="6" readonly>{{$other->keyword}}</textarea>
										<span class="text-danger">
											@error("description")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="canonical">Canonical<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="canonical" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Canonical..." value="{{$other->canonical}}" readonly/>
										<span class="text-danger">
											@error("canonical")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example"  name="status" value="{{$other->status}}" >
                                        <option value="1" {{$other->status == '1' ? 'selected': ''}}>Active</option>
                                        <option value="0" {{$other->status == '0' ? 'selected': ''}}>Inactive</option>
										</select>
									</div>
								</div>
								<hr>
							</div>
					</div>
				</div>

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
@endsection
