@extends('frontend.layout.master')
@section('content')
    <div class="body">


        <div role="main" class="main">

            <section class="page-header page-header-modern bg-primary custom-page-header">

                <div
                    class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">

                </div>

                <style>
                    .py-34 {
                        padding-top: 13rem !important;
                        padding-bottom: 5rem !important;
                    }

                    .align-self-end1 {
                        margin-top: 90px;
                    }

                    @media only screen and (max-width: 600px) {
                        .lblmobile {
                            margin-bottom: 50px;
                        }

                        .align-self-end1 {
                            margin-top: 140px;
                        }

                        .displaylb {
                            display: contents !important;
                        }

                        .lbdeatils {
                            margin: 0px 0px 15px !important;
                        }

                        .lbottom {
                            padding-bottom: 15px !important;
                        }

                        .ldeatilswidth {
                            width: -webkit-fill-available !important;
                        }

                        .mobileleftright {
                            padding-left: 15px;
                            padding-right: 15px;
                        }

                        .page-header {
                            margin: 0 0 0px;
                        }

                        h2 {
                            margin: 0px -10px 0px !important;
                        }

                        p {
                            padding-left: 0px !important;
                        }

                        .mobilelr {
                            padding-left: 0px !important;
                            padding-right: 0px !important;
                        }


                    }

                    .leftdis {
                        padding-left: 10px;
                    }

                    /* .displaylb{
                            padding-right: calc(var(--bs-gutter-x) * .5);
                        } */
                    h2 {
                        margin: 0px -10px 0px !important;
                    }
                </style>
                @foreach ($categorypage as $category)
                    @if ($category->status == '1')
                        <div class="container position-relative  ">
                            <div class="row h-100">
                                <div class="col align-self-end">

                                    <ul class="breadcrumb breadcrumb-light d-block py-34 ">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li class="active"><a href="{{ route('project') }}">Our Projects</a></li>
                                        <li class="active">{{ $category->category_name }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </section>
            @foreach ($categorypage as $category)
                @if ($category->status == '0')
                    <script>
                        window.location = "{{ route('nofound') }}";
                    </script>
                @endif
            @endforeach
            @if ($categorypage->isNotEmpty())
            @else
                <script>
                    window.location = "{{ route('nofound') }}";
                </script>
            @endif

            @foreach ($categorypage as $category)
                <section class=" mt-xl-0 py-5 p-relative z-index-2 pb-2" style="margin-bottom: 60px !important;">
                    <div class="container mobilelr">
                        <div class="row displaylb">

                            @if ($category->brochure != null)
                                <div class="col">

                                    <h1 style="margin-top: 0px; line-height: 40px; margin-bottom: 0px;margin: 0px 0px 32px;"
                                        class="lbdeatils">
                                        <strong>{{ $category->category_name }}</strong>
                                    </h1>
                                </div>
                                <div class="col lbottom">

                                    <a href="{{ asset('uploads/pdf/' . $category->brochure) }}" target="_blank"
                                        class="text-decoration-none " style="    text-align: -webkit-right;">
                                        <div style="    padding: 10px !important;"
                                            class="service-card lblbrochur py-4 bg-color-hover-primary w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative">
                                            Download Brochure
                                        </div>
                                    </a>
                                </div>
                            @endif
                            <div class="col-xl-4 our-services" style="display: none;">
                                <h4
                                    class="text-color- custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary mb-4 pb-3">
                                    LOCATION ADVANTAGE</h4>
                                <div class="row flex-column pb-lg-5">
                                    <div class="col">
                                        <a href="#" class="text-decoration-none">
                                            <div
                                                class="service-card active ps-5 py-4 mb-4 bg-color-primary text-color-light w-100 font-weight-semibold custom-text-4 line-height-6 p-relative">
                                                Project Boundary
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="text-decoration-none">
                                            <div
                                                class="service-card ps-5 py-4 mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative">
                                                Meeting Room
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="text-decoration-none">
                                            <div
                                                class="service-card ps-5 py-4 mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative">
                                                Swimming Pool
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="text-decoration-none">
                                            <div
                                                class="service-card ps-5 py-4 mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative">
                                                Temple
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="text-decoration-none">
                                            <div
                                                class="service-card ps-5 py-4 mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative">
                                                Children Play Area
                                            </div>
                                        </a>
                                    </div>


                                    @if ($category->brochure != null)
                                        <div class="col">
                                            <a href="{{ asset('uploads/pdf/' . $category->brochure) }}" target="_blank"
                                                class="text-decoration-none">
                                                <div style="background-color: #ec3237 !important;"
                                                    class="service-card ps-5 py-4 mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative">
                                                    download brochure
                                                </div>
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-xl-12 mt-lg-5 mt-xl-0">

                                <div class=" col-xl-8   appear-animation" data-appear-animation="fadeIn"
                                    data-appear-animation-delay="800">
                                    <img src="{{ asset('uploads/image/' . $category->category_themnail) }}" width="1216px"
                                        class="fluid ldeatilswidth">
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
            @foreach ($categorypage as $category)
                <div class="container mobileleftright " style="display: none;">
                    <div class="row align-items-center displaylb leftdis">
                        {!! $category->category_description !!}

                    </div>
                </div>
            @endforeach
            <div class="container py-5 my-4" style="display: none;">
                <div class="row align-items-center">
                    <h2 class="font-weight-bold text-color-dark text-7 mb-4 text-center">Project Features & Amenities</h2>
                    <img src="{{ asset('frontend/imgnew/rscfeatures.png') }}"
                        class="img-fluid rounded-0 p-relative top-10 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" alt="" />
                </div>
            </div>

            <section class="our-services p-relative py-5 " style="display: none;">
                <span
                    class="custom-circle custom-circle-2 bg-color-quaternary appear-animation animated zoomIn appear-animation-visible"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100" style="animation-delay: 100ms;"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">Project Features & Amenities </h4>
                    </div>
                    <div class="row">
                        @foreach ($categorypage as $category)
                            @foreach ($projects as $project)
                                @if ($project->category_id === $category->id)
                                    @if ($project->status == '1')
                                        <div class="col-xl-3 appear-animation animated fadeInRightShorter appear-animation-visible"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                                            style="animation-delay: 400ms;">
                                            <a class="text-decoration-none">
                                                <img class=""
                                                    src="{{ asset('uploads/projectimage/' . $project->gallery_image) }}"
                                                    alt="" style="width: 100%;" loading="lazy">
                                                <h4
                                                    style="text-align: center; font-weight: 600; margin-bottom: 10px; margin-top: 10px;">
                                                    {{ $project->title }}</h4>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                    </div>



                    <div class="row justify-content-center" style="display: none;">
                        <div class="col-xl-9">
                            <p class="custom-text-4 mt-4 mb-0 text-center appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et
                                sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis
                                sed, mollis commodo orci.
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="container py-0 pb-5" style="display: none;">
                {{-- <h3 class="text-center mb-5" style="font-weight: 700;"></h3> --}}
                <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">Project Location</h4>
                <div class="ratio ratio-16x9" style="border-radius: 12px; overflow: hidden;">
                    @foreach ($categorypage as $category)
                        {!! $category->map_link !!}
                    @endforeach
                </div>
            </div>



            <section
                class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
                style="background-image: url({{ asset('frontend/imgnew/abc.jpg') }}); background-size: cover; background-position: center;">
                <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
                    data-appear-animation-delay="100"></span>
                <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
                    data-appear-animation-delay="100"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in
                                Touch</p>
                            <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                Connecting is a click away,<br />
                                Reach out to us today.
                            </h4>
                        </div>
                        <div
                            class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                            <a href="{{ route('contactus') }}"
                                class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s
                                Talk!</a>
                        </div>
                    </div>
                </div>
            </section>


        </div>

    </div>
@endsection
