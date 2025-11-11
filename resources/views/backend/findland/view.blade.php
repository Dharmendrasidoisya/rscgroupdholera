
@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row" style="margin-top:10px;">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Inquiry Find Land View</h3>
            <a class="btn btn-primary addbtn" href="{{route('admin.findlandindex')}}" style="margin-bottom: 20px !important"><i class="fa fa-list" aria-hidden="true"></i>Back List</a>
		</div>
		<!--begin::Form-->							
		<div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Name:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                            <label >{{$find->name}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Phone:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                            <label > +91 {{$find->phone}} </label >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Budget:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                    <label > {{$find->budget}} </label >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Zone:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                            <label > {{$find->zone}} </label >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Village:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                            <label > {{$find->village}} </label >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >TP:</label>
                            <div class="col-sm-6 col-lg-4 controls">
                            <label > {{$find->listing_loc}} </label >
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
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->
@endsection

