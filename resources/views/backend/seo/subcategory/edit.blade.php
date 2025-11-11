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
			<h3 class="card-title"> Edit SubCategory SEO</h3>
		</div>
		<!--begin::Form-->
		<form method="post" action="{{route('admin.seo.update',$subseo->id)}}">
							@csrf
			<div class="row">
				<div class="col-md-12">
					<div class="box">
							<div class="box-content">
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-3 control-label">Chose Menu<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example"  name="product">
											<option data-value="0" value="Product">Product</option>
											
										</select>
										<span class="text-danger">
											@error("product")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-3 control-label">Chose Category<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control select" aria-label="Default select example" name="category_id" id="category_id">
									


										@if($categorys->isNotEmpty())
											@foreach ($categorys as $category)
												@if($category->status == '1')
												
												<option  value="{{$category->id}}" @if($category->id == $subseo->category_id) selected @endif> {{$category->category_name}}</option>
												@else
												@endif
												
											@endforeach
										@else
										@endif
										</select>
										<span class="text-danger">
											@error("category_id")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-3 control-label">Chose Product<span style="color: #a94442;">*</span></lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control select" aria-label="Default select example" name="subcategory_id" id="subcategory_id">
								
											@foreach($products as $product)
													@if($product->status == '1')
													<option data-value="{{$product->category_id}}" value="{{$product->id}}" @if($product->id == $subseo->subcategory_id) selected @endif>{{ $product->subcategory}}</option>
													@endif
											@endforeach
									
										</select>
									</div>
								</div>

								<div class="form-group-select">
									<label class="col-sm-3 col-lg-3 control-label" for="meta_title">Meta Title<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="meta_title" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Meta Title" value="{{$subseo->meta_title}}"/>
										<span class="text-danger">
											@error("meta_title")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-3 control-label" for="keyword">Keyword<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="keyword" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Key Word" value="{{$subseo->keyword}}"/>
										<span class="text-danger">
											@error("keyword")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-3 control-label" for="description">Description<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<textarea name="description" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Description..." value="{{$subseo->keyword}}" rows="6">{{$subseo->description}}</textarea>
										<span class="text-danger">
											@error("description")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-3 control-label" for="canonical">Canonical<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="canonical" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="Canonical..." value="{{$subseo->canonical}}"/>
										<span class="text-danger">
											@error("canonical")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-3 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example"  name="status">
											<option value="1"  {{$subseo->status =='1' ? 'selected': ''}}>Active</option>
											<option value="0"  {{$subseo->status =='0' ? 'selected': ''}}>Inactive</option>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

$(document).ready(function(){

// Save all selects' id in an array 
// to determine which select's option and value would be changed
// after you select an option in another select.
var selectors = ['category_id', 'subcategory_id']

$('.select').on('change', function() {
var index = selectors.indexOf(this.id)
var value = this.value

// check if is the last one or not
if (index < selectors.length - 1) {
var next = $('#' + selectors[index + 1])

// Show all the options in next select
$(next).find('option').show()
if (value != "") {
  // if this select's value is not empty
  // hide some of the options 
  $(next).find('option[data-value!=' + value + ']').hide()
}

// set next select's value to be the first option's value 
// and trigger change()
$(next).val($(next).find("option:first").val()).change()
}
})
});
</script>	