@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">
				<div class="row" style="margin-top: 34px;">
					<div class="col-lg-6">
						<!--begin::Card-->
						<div class="card card-custom gutter-b example example-compact">
							<div class="card-header">
								<h3 class="card-title">Update Product </h3>
								
							</div>
							<!--begin::Form-->
							<form method="POST" action="{{route('admin.productupdate',$product->id)}}" enctype='multipart/form-data'>
								@csrf
								<div class="card-body">
									<div class="form-group ">
										<label for="select" class="col-sm-3 col-lg-4 control-label">Chosen Menu<span style="color: #a94442;">*</span></label>
										<div class="col-sm-6 col-lg-6 controls cont">
											<select name="menu_id"   class="form-control" data-rule-required="true">
											<option  value="{{$product->menu_id}}" selected>@if($product->menu_id == '1') Product @endif</option>
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
											<select name="category_id"  class="form-control select"  data-rule-required="true" id="category_id">
											@foreach ($categorys as $category)
												@if($category->status == '1')
													@if($category->menu_id == '1')
														@if($product->category_id === $category->id)
														<option selected="{{$category->category_name}}" value="{{$category->id}}">{{$category->category_name}}</option>
														
														@endif
														<option value="{{$category->id}}">{{$category->category_name}}</option>
													@endif
												@endif
											@endforeach
											</select>
											<span class="text-danger">
											@error("category_id")
											{{$message}}
											@enderror
										</span>
										</div>
									</div>
									<div class="form-group">
									<label for="select1" class="col-sm-3 col-lg-4 control-label">SubCategory</label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="subcategory_id"  class="form-control select" id="subcategory_id">
											@foreach ($subcategorys as $subcategory)
												<option selected="{{$subcategory->subcategory}}" value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
											@endforeach
										</select>
									</div>
								</div>
									<div class="form-group" style="display:none;">
										<label for="select1" class="col-sm-3 col-lg-2 control-label">Brand</label>
										<div class="col-sm-6 col-lg-6 controls cont">
											<select name="brand_id" id="brand" class="form-control" >
											@foreach ($brands as $brand)
												@if($brand->status == '1')
													@if($product->brand_id === $brand->id)
													<option  selected="{{$brand->brand_name}}" value="{{$brand->id}}">{{$brand->brand_name}}</option>
													@endif
													<option  value="{{$brand->id}}">{{$brand->brand_name}}</option>
												@endif
											@endforeach
											</select>
										</div>
									</div>
									<div class="form-group">
										<label>Product Name<span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-solid" name="product_name" placeholder="Enter Product Name" value="{{$product->product_name}}"/>
										<span class="text-danger">
											@error("product_name")
											{{$message}}
											@enderror
										</span>
									</div>
									<div class="form-group">
										<label>Product Image<span class="text-danger">*</span></label>
										<img src="{{asset('uploads/image/'.$product->product_image)}}" width="150px" height="150px">
										<input type="file" class="form-control form-control-solid" name="product_image" placeholder="Enter Product Image" value="{{$product->product_image}}"/>
										<lable style="color:red;">Image size Image size 1200*1000</lable>
									</div>
									<div class="form-group">
										<label for="product_description">Short Description<span class="text-danger">*</span></label>
										<textarea type="text" class="form-control ckeddesc" name="short_description" value="{{'$product->short_description'}}"  placeholder="Enter Short Description">{{$product->short_description}}</textarea>
										<span class="text-danger">
											@error("short_description")
											{{$message}}
											@enderror
										</span>
									</div>
									<div class="form-group">
										<label for="product_description">Product Description<span class="text-danger">*</span></label>
										<textarea type="text" class="form-control ckeddesc" name="product_description" value="{{$product->product_description}}" placeholder="Enter Product Description">{{$product->product_description}}</textarea>
										
									</div>
									<div class="form-group">
										<label for="product_specification">Product Specification<span class="text-danger">*</span></label>
										
										<textarea type="text" class="form-control ckedspec" id="full-featured-editor" name="product_specifiction"   placeholder="Enter Product Specification">{{$product->product_specifiction}}</textarea>
										<span class="text-danger">
											@error("product_specifiction")
											{{$message}}
											@enderror
										</span>
									</div>
									<div style="display:flex; padding-top:10px;">                          
										<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
										<div class="col-sm-6 col-lg-4 controls">
											<select class="form-control" aria-label="Default select example"  name="status">
												<option value="1" {{$product->status == '1' ? 'selected': ''}}>Active</option>
												<option value="0" {{$product->status == '0' ? 'selected': ''}}>Inactive</option>
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
								<!-- </form> -->
								<!--end::Form-->
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
												@if($product->product_price_include_gst != null)
											<img src="{{asset('backend/pdf.png')}}" width="150px" height="150px">
											{{$product->product_price_include_gst}}
											@endif
											<input type="file" class="form-control form-control-solid" name="product_price_include_gst" placeholder="Price" value="{{$product->product_price_include_gst}}" />
											<span class="text-danger">
												@error("product_price_include_gst")
												{{$message}}
												@enderror
											</span>
											</div>
											
										</div>
									

										<!-- <input name="in_gst" type="checkbox" {{$product->in_gst == 1 ? 'checked' : ''}}> -->
											<div class="col-sm-6 col-lg-4 controls" style="display:none">
												<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="in_gst">
												<option  value="{{$product->in_gst}}" selected>@if($product->in_gst == '0') Active @else Inactive @endif</option>
													<option value="0">Active</option>
													<option value="1">Inactive</option>
												</select>
											</div>
										<!-- <span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" value="1" name="in_gst">
												<span></span>
											</label>
										</span> -->
									</div>
									<div class="row" style="display:none">
										<div class="col">
											<div class="form-group">
												<label for="text">Product Price(Exclude GST)</label>
												<input type="text" class="form-control form-control-solid" name="product_price_exclude_gst" placeholder="Price" value="{{$product->product_price_exclude_gst}}"/>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4 controls">
											<select class="form-control" aria-label="Default select example" value="{{old('ex_gst')}}" name="ex_gst">
											<option  value="{{$product->ex_gst}}" selected>@if($product->ex_gst == '0') Active @else Inactive @endif</option>
												<option value="0">Active</option>
												<option value="1">Inactive</option>
											</select>
										</div>
										<!-- <span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="ex_gst" value="1">
												<span></span>
											</label>
										</span> -->
									</div>
									<div class="row" style="display:none">
										<div class="col">
											<div class="form-group">
												<label for="product_sku"> product SKU</label>
												<input type="text" class="form-control form-control-solid" name="product_sku" placeholder="SKU" value="{{$product->product_sku}}"/><span class="switch switch-sm">	
												</span>
											</div>	
										</div>
										<div class="col-sm-6 col-lg-4 controls">
											<select class="form-control" aria-label="Default select example" value="{{old('s_sku')}}" name="s_sku">
											<option  value="{{$product->s_sku}}" selected>@if($product->s_sku == '0') Active @else Inactive @endif</option>
												<option value="0">Active</option>
												<option value="1">Inactive</option>
											</select>
										</div>
										<!-- <span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="s_sku" value="1">
												<span></span>
											</label>
										</span> -->
									</div>
									<div class="row" style="display:none">
										<div class="col">
											<div class="form-group">
												<label for="product_mpn">product MPN</label>
												<input type="text" class="form-control form-control-solid" name="product_mpn" placeholder="mpn" value="{{$product->product_mpn}}"/>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4 controls">
											<select class="form-control" aria-label="Default select example" value="{{old('s_mpn')}}" name="s_mpn">
											<option  value="{{$product->s_mpn}}" selected>@if($product->s_mpn == '0') Active @else Inactive @endif</option>
												<option value="0">Active</option>
												<option value="1">Inactive</option>
											</select>
										</div>
										<!-- <span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="s_mpn" value="1">
												<span></span>
											</label>
										</span> -->
									</div>
									<div class="form-group" style="display:none">
										<label for="availability">Availability</label>
										<input type="text" class="form-control form-control-solid" name="availability" placeholder="Availability" value="{{$product->availability}}"/>
									</div>
									<div class="form-group" style="display:none">
										<label for="product_unit">Product Unit</label>
										<input type="text" class="form-control form-control-solid" name="product_unit" placeholder="Product Unit" value="{{$product->product_unit}}"/>
									</div>
									<div class="form-group" style="display:none">
										<label for="product_item">Product Item</label>
										<input type="number" class="form-control form-control-solid" name="product_item" placeholder="Product Item" min="1" value="{{$product->product_item}}"/>
									</div>
										<div class="form-group" style="display:none">
											<label for="product_shipping">Shipping</label>
											<input type="text" class="form-control form-control-solid" name="product_shipping" placeholder="Shipping" value="{{$product->product_shipping}}"/>
										</div>
										<div class="form-group" style="display:none">
											<label for="product_deliver">Product Deliver</label>
											<input type="text" class="form-control form-control-solid" name="product_deliver" placeholder="Product Deliver" value="{{$product->product_deliver}}"/>
										</div>
										<div class="form-group" style="display:none">
											<label for="product_returns">Product Returns</label>
											<input type="text" class="form-control form-control-solid" name="product_returns" placeholder="Product Returns" value="{{$product->product_returns}}"/>
										</div>
										<hr>
										<!-- <div class="form-group-select">
											<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
												<input type="submit"  value="Submit"  class="btn btn-primary" />
											</div>
										</div>		 -->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Card-->
					</div>
				</div>
			

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