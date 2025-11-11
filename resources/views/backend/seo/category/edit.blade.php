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
			<h3 class="card-title"> Edit Category SEO</h3>
		</div>
		<!--begin::Form-->
		<form method="post" action="{{route('admin.seo.categoryupdate',$category->id)}}">
							@csrf
			<div class="row">
				<div class="col-md-12">
					<div class="box">
							<div class="box-content">
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Chose Menu<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" name="product" value="{{$category->product}}">
											<option value="Product">Product</option>
											
										</select>
										<span class="text-danger">
											@error("product")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Chose Menu<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" name="category_id" value="{{$category->category_id}}">
                                            
										
											@foreach ($categorys as $title)
											        @if($title->status == '1')
													
													<option  value="{{$title->id}}" @if($title->id == $category->category_id) selected @endif> {{$title->category_name}}</option>
													@else
													@endif
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="meta_title">Meta Title<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="meta_title" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Meta Title" value="{{$category->meta_title}}"/>
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
										<input name="keyword" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Key Word" value="{{$category->keyword}}"/>
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
										<textarea name="description" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Description..." value="{{$category->description}}" rows="6">{{$category->description}}</textarea>
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
										<input name="canonical" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Canonical..." value="{{$category->canonical}}"/>
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
										<select class="form-control" aria-label="Default select example"  name="status">
											<option value="1" {{$category->status == '1' ? 'selected' : ''}} >Active</option>
											<option value="0" {{$category->status == '0' ? 'selected' : ''}}>Inactive</option>
										</select>
									</div>
								</div>
								<hr>

								<div class="form-group-select">
									<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
										<input type="submit"  value="Submit"  class="btn btn-primary" />
									</div>
								</div>
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
