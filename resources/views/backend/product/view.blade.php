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
								<h3 class="card-title">Update Projects </h3>
								
							</div>
							<!--begin::Form-->
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
											<select name="category_id"  class="form-control"  data-rule-required="true">
											@foreach ($categorys as $category)
												<option selected="selected" value="{{$category->id}}">{{$category->category_name}}</option>
												@endforeach
											</select>
											<span class="text-danger">
											@error("category_id")
											{{$message}}
											@enderror
										</span>
										</div>
									</div>
									<div class="form-group" style="display:none">
									<label for="select1" class="col-sm-3 col-lg-4 control-label">Chosen SubCategory</label>
									<div class="col-sm-6 col-lg-6 controls cont">
										<select name="subcategory_id"  class="form-control" name="select1">
											@foreach ($subcategorys as $subcategory)
												<option selected="selected" value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
											@endforeach
										</select>
									</div>
								</div>
									<div class="form-group" style="display:none;">
										<label for="select1" class="col-sm-3 col-lg-2 control-label">Brand</label>
										<div class="col-sm-6 col-lg-6 controls cont">
											<select name="brand_id" id="brand" class="form-control" >
											@foreach ($brands as $brand)
												<option  value="{{$brand->id}}">{{$brand->brand_name}}</option>
											@endforeach
											</select>
										</div>
									</div>
									<div class="form-group">
										<label>SubProjects Name<span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-solid" name="product_name" placeholder="Enter Product Name" value="{{$product->product_name}}"/>
										<span class="text-danger">
											@error("product_name")
											{{$message}}
											@enderror
										</span>
									</div>
									<div class="form-group">
										<label>SubProjects Image<span class="text-danger">*</span></label>
										<img src="{{asset('uploads/image/'.$product->product_image)}}" width="150px" height="150px">
										<input type="file" class="form-control form-control-solid" name="product_image" placeholder="Enter Product Image" value="{{$product->product_image}}"/>
									</div>
									<div class="form-group">
										<label for="product_description">Short Description</label>
										<textarea type="text" class="form-control ckeddesc" name="short_description" value="{{'$product->short_description'}}"  placeholder="Enter Short Description" >{{$product->short_description}}</textarea>
									</div>
									<div class="form-group">
										<label for="product_description">SubProjects Description<span class="text-danger">*</span></label>
										<input type="text" class="form-control ckeddesc" name="product_description" value="{{$product->product_description}}" placeholder="Enter Product Description">
										
									</div>
									<div class="form-group">
										<label for="product_specification">SubProjects Specification<span class="text-danger">*</span></label>
										
										<textarea type="text" class="form-control ckedspec" name="product_specifiction"   placeholder="Enter Product Specification" id="full-featured-editor">{{$product->product_specifiction}}</textarea>
										<span class="text-danger">
											@error("product_specifiction")
											{{$message}}
											@enderror
										</span>
									</div>
									<div style="display:flex; padding-top:10px;">                          
										<label class="col-sm-3 col-lg-2 control-label">Active</label>
										<div class="col-sm-9 col-lg-4 controls">
											<span class="switch switch-sm">
												<label>
												<option  value="{{$product->status}}" selected>@if($product->status == '1') Active @else Inactive @endif</option>
													<span></span>
												</label>
											</span>
										</div>
									</div>
								</div>
								
								<hr>
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
												<label for="text">Product Price(Include GST)</label>
											<input type="text" class="form-control form-control-solid" name="product_price_include_gst" placeholder="Price" value="{{$product->product_price_include_gst}}" />
											</div>
										</div>
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" value="1" name="in_gst">
												<span></span>
											</label>
										</span>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="text">Product Price(Exclude GST)</label>
												<input type="text" class="form-control form-control-solid" name="product_price_exclude_gst" placeholder="Price" value="{{$product->product_price_exclude_gst}}"/>
											</div>
										</div>
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="ex_gst" value="1">
												<span></span>
											</label>
										</span>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="product_sku"> product SKU</label>
												<input type="text" class="form-control form-control-solid" name="product_sku" placeholder="SKU" value="{{$product->product_sku}}"/><span class="switch switch-sm">	
												</span>
											</div>	
										</div>
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="s_sku" value="1">
												<span></span>
											</label>
										</span>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="product_mpn">product MPN</label>
												<input type="text" class="form-control form-control-solid" name="product_mpn" placeholder="mpn" value="{{$product->product_mpn}}"/>
											</div>
										</div>
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="s_mpn" value="1">
												<span></span>
											</label>
										</span>
									</div>
									<div class="form-group">
										<label for="availability">Availability</label>
										<input type="text" class="form-control form-control-solid" name="availability" placeholder="Availability" value="{{$product->availability}}"/>
									</div>
									<div class="form-group">
										<label for="product_unit">Product Unit</label>
										<input type="text" class="form-control form-control-solid" name="product_unit" placeholder="Product Unit" value="{{$product->product_unit}}"/>
									</div>
									<div class="form-group">
										<label for="product_item">Product Item</label>
										<input type="number" class="form-control form-control-solid" name="product_item" placeholder="Product Item" min="1" value="{{$product->product_item}}"/>
									</div>
										<div class="form-group">
											<label for="product_shipping">Shipping</label>
											<input type="text" class="form-control form-control-solid" name="product_shipping" placeholder="Shipping" value="{{$product->product_shipping}}"/>
										</div>
										<div class="form-group">
											<label for="product_deliver">Product Deliver</label>
											<input type="text" class="form-control form-control-solid" name="product_deliver" placeholder="Product Deliver" value="{{$product->product_deliver}}"/>
										</div>
										<div class="form-group">
											<label for="product_returns">Product Returns</label>
											<input type="text" class="form-control form-control-solid" name="product_returns" placeholder="Product Returns" value="{{$product->product_returns}}"/>
										</div>
										<hr>
							<!--end::Form-->
						</div>
						<!--end::Card-->
					</div>
				</div>
			

</div>
<!--end::Wrapper-->
@endsection