@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row" style="margin-top: 34px;">
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Add Product </h3>
						</div>
						<!--begin::Form-->
						<form method="POST" action="{{route('admin.productstore')}}" enctype='multipart/form-data'>
							@csrf
							<div class="card-body">
								<div class="form-group ">
									<label for="select" class="col-sm-3 col-lg-4 control-label">Chosen Menu<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="menu_id"   class="form-control" data-rule-required="true">
											<option value="" selected="selected">-- Please select --</option>
											<!-- @foreach ($menus as $menu)
											<option  value="{{$menu->id}}">{{$menu->menu_name}}</option>
											@endforeach -->
											<option  value="1">our Project</option>
										</select>
										<span class="text-danger">
										@error("menu_id")
										{{$message}}
										@enderror
										</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="select1" class="col-sm-3 col-lg-4 control-label">Chosen Category<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="category_id" id="category_id" class="form-control select"  data-rule-required="true">
											<option selected="selected" value="">- - Please Select - -</option>
											@foreach ($categorys as $category)
											<option  value="{{$category->id}}">{{$category->category_name}}</option>
											@endforeach
										</select>
										<span class="text-danger">
										@error("category_id")
										{{$message}}
										@enderror
									</span>
									</div>
								</div>
								<div class="form-group" >
									<label for="select1" class="col-sm-3 col-lg-4 control-label">SubCategory</label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="subcategory_id" id="subcategory_id" class="form-control select" >
											<option selected="selected" value="">- - Please Select - -</option>
											@foreach ($subcategorys as $subcategory)
											<option data-value="{{$subcategory->category_id}}" value="{{$subcategory->id}}" >{{ $subcategory->subcategory}}</option>
												<!-- <option  value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option> -->
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group" style="display:none;">
									<label for="select1" class="col-sm-3 col-lg-2 control-label">Brand<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="brand_id" id="brand" class="form-control" name="select1">
											<option selected="selected" value="">- - Please Select - -</option>
											@foreach ($brands as $brand)
												<option  value="{{$brand->id}}">{{$brand->brand_name}}</option>
											@endforeach
										</select>
										
									</div>
								</div>
								<div class="form-group">
									<label>Product Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control form-control-solid" name="product_name" placeholder="Enter Product Name"/>
									<span class="text-danger">
										@error("product_name")
										{{$message}}
										@enderror
									</span>
								</div>
								<div class="form-group">
									<label>Product Image<span class="text-danger">*</span></label>
									<input type="file" class="form-control form-control-solid" name="product_image" placeholder="Enter Product Image"/>
									<lable style="color:red;">Image size 1200*1000</lable>
								</div>
								<span class="text-danger">
									@error("product_image")
									{{$message}}
									@enderror
								</span>
								<div class="form-group">
									<label for="product_description">Short Description<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control ckeddesc" name="short_description" value="{{old('product_description')}}"  placeholder="Enter Short Description"></textarea>
									<span class="text-danger">
										@error("short_description")
										{{$message}}
										@enderror
									</span>
								</div>
								<div class="form-group">
									<label for="product_description">Project Description<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control ckeddesc" name="product_description" value="{{old('product_description')}}"  placeholder="Enter Product Description"></textarea>
									<span class="text-danger">
										@error("product_description")
										{{$message}}
										@enderror
									</span>
								</div>
								<div class="form-group">
									<label for="product_specification">Project Specification<span class="text-danger">*</span></label>
									<textarea type="text" class="form-control ckedspec" name="product_specifiction" value="{{old('product_specification')}}"  placeholder="Enter Product Specification" id="full-featured-editor"></textarea>
									<span class="text-danger">
										@error("product_specifiction")
										{{$message}}
										@enderror
									</span>
								</div>
								<div style="display:flex; padding-top:10px;">                          
								<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
									<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
										<option value="1" selected>Active</option>
										<option value="0">Inactive</option>
									</select>
									</div>
								</div>
							</div>
							<hr>
							<div class="form-group-select">
								<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									<input type="submit"  value="Submit"  class="btn btn-primary" />
								</div>
							</div>
								
						</div>
					<!--end::Card-->
				</div>
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Additional information</h3>
							
						</div>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="text">Brochures</label>
										<input type="file" class="form-control form-control-solid" name="product_price_include_gst" placeholder="Price"/>
										<span class="text-danger">
										@error("product_price_include_gst")
										{{$message}}
										@enderror
									</span>
										</div>
									</div>
									
									<span class="switch switch-sm" style="display:none;">
										<label>
											<input type="checkbox" checked="checked" value="1" name="in_gst">
											<span></span>
										</label>
									</span>
								</div>
								<div class="row"  style="display:none;">
									<div class="col">
										<div class="form-group">
											<label for="text">Product Price(Exclude GST)</label>
											<input type="text" class="form-control form-control-solid" name="product_price_exclude_gst" placeholder="Price"/>
										</div>
									</div>
									<span class="switch switch-sm" style="display:none;">
										<label>
											<input type="checkbox" checked="checked" name="ex_gst" value="1">
											<span></span>
										</label>
									</span>
								</div>
								<div class="row"  style="display:none;">
									<div class="col">
										<div class="form-group">
											<label for="product_sku"> product SKU</label>
											<input type="text" class="form-control form-control-solid" name="product_sku" placeholder="SKU"/><span class="switch switch-sm">	
											</span>
										</div>	
									</div> 
									<span class="switch switch-sm" style="display:none;">
										<label>
											<input type="checkbox" checked="checked" name="s_sku" value="1">
											<span></span>
										</label>
									</span>
								</div>
								<div class="row"  style="display:none;">
									<div class="col">
										<div class="form-group">
											<label for="product_mpn">product MPN</label>
											<input type="text" class="form-control form-control-solid" name="product_mpn" placeholder="mpn"/>
										</div>
									</div>
									<span class="switch switch-sm" style="display:none;">
										<label>
											<input type="checkbox" checked="checked" name="s_mpn" value="1">
											<span></span>
										</label>
									</span>
								</div>
								<div class="form-group"  style="display:none;">
									<label for="availability">Availability</label>
									<input type="text" class="form-control form-control-solid" name="availability" placeholder="Availability"/>
								</div>
								<div class="form-group"  style="display:none;">
									<label for="product_unit">Product Unit</label>
									<input type="text" class="form-control form-control-solid" name="product_unit" placeholder="Product Unit"/>
								</div>
								<div class="form-group" style="display:none;">
									<label for="product_item">Product Item</label>
									<input type="number" class="form-control form-control-solid" name="product_item" placeholder="Product Item" min="1"/>
								</div>
									<div class="form-group"  style="display:none;">
										<label for="product_shipping">Shipping</label>
										<input type="text" class="form-control form-control-solid" name="product_shipping" placeholder="Shipping"/>
									</div>
									<div class="form-group"  style="display:none;">
										<label for="product_deliver">Product Deliver</label>
										<input type="text" class="form-control form-control-solid" name="product_deliver" placeholder="Product Deliver"/>
									</div>
									<div class="form-group"  style="display:none;">
										<label for="product_returns">Product Returns</label>
										<input type="text" class="form-control form-control-solid" name="product_returns" placeholder="Product Returns"/>
									</div>
									<hr>
											
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Wrapper-->
			
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
@endsection