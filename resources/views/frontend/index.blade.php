@extends('frontend.layout.master') @section('content')
    <div class="body">
        <div role="main" class="main">
            @foreach ($sliders as $slider)
                @if ($slider->status == '1')
                    <section class="section custom-circles-container section-angled bg-dark border-0 m-0"
                        style="background-image: url({{ asset('uploads/slider/' . $slider->image) }}); background-size: cover; background-position: center;">
                        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation"
                            data-appear-animation="zoomIn" data-appear-animation-delay="200"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation"
                            data-appear-animation="zoomIn" data-appear-animation-delay="300"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation"
                            data-appear-animation="zoomIn" data-appear-animation-delay="500"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation"
                            data-appear-animation="zoomIn" data-appear-animation-delay="600"
                            data-plugin-options="{'forceAnimation': true}"></span>
                        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"></div>
                        <div class="section-angled-content h-100">
                            <div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5">
                                <div class="row pb-lg-5 mt-5 mb-lg-5">
                                    <div class="col-lg-7 pt-5 pt-md-0 pb-lg-5 mt-5 mb-md-5">
                                        <h2 class="custom-title-with-icon custom-title-with-icon-primary font-weight-normal text-color-default text-5 mb-0 appear-animation"
                                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600"
                                            style="font-weight: 600!important;">{{ $slider->short_description }}</h2>
                                        <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-2 mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">
                                            {{ $slider->title }}</h1>
                                        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                            class="btn btn-outline custom-btn-outline btn-primary rounded-0 font-weight-semibold text-color-light bg-color-hover-primary custom-btn-with-arrow text-4 btn-px-4 py-3 mt-2 appear-animation"
                                            data-appear-animation="fadeInUpShorterPlus"
                                            data-appear-animation-delay="1100">Get Started</a>
                                    </div>
                                </div>
                                <div class="spacer py-5 mt-lg-5 mb-md-5"></div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach
            <section class="custom-cards p-relative mb-5 pb-5 z-index-2" style="display:none;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-custom-cards">
                            <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="100"
                                style="background-color: rgb(236 50 55)!important">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('frontend/imgnew/solution.png') }}" alt="Solution" class="mb-5">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Work Transparency & Commitment </h4>
                                    <p style="display:none" class="card-text text-center custom-text-4 font-weight-lighter">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac
                                        auctor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-custom-cards">
                            <div class="card border-0 bg-color-primary rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="200"
                                style="background-color: rgb(36 36 36) !important;">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('frontend/imgnew/advertising.png') }}" alt="Solution" class="mb-5">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Technical & Legal Support</h4>
                                    <p style="display:none"
                                        class="card-text text-center custom-text-4 font-weight-lighter text-color-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac
                                        auctor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-custom-cards">
                            <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300"
                                style="background-color: rgb(110 110 110) !important">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('frontend/imgnew/feedback.png') }}" alt="Solution" class="mb-5">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Investment Guardians</h4>
                                    <p style="display:none" class="card-text text-center custom-text-4 font-weight-lighter">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac
                                        auctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-approach  mb-4  mt-4 mt-xl-0 p-relative z-index-1 lmobile" id="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-8 d-flex flex-column justify-content-center align-items-start">
                            @if ($homeabouts->isNotempty())
                                @foreach ($homeabouts as $homeabout)
                                    @if ($homeabout->status == '1')
                                        <h4 class="custom-text-10 mb-4 pb-2 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                                            {{ $homeabout->titel }}</h4>
                                    @endif
                                @endforeach
                            @else
                                <h4 class="custom-text-10 mb-4 pb-2 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">About Us
                                </h4>
                            @endif
                            @foreach ($homeabouts as $homeabout)
                                @if ($homeabout->status == '1')
                                    <p class="lblmargin custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation text-justify"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                        {{ $homeabout->shout_description }}</p>
                                @endif
                            @endforeach
                            <a href="{{ route('aboutus') }}"
                                class="btn btn-outline custom-btn-outline btn-light border-0 rounded-0 text-color-primary custom-text-5 font-weight-bold custom-btn-with-arrow bg-transparent p-0 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Read More</a>
                        </div>
                        {{-- <div class="col-lg-4 py-4 py-lg-0">
                        @foreach ($homeabouts as $homeabout)
                        @if ($homeabout->status == '1')
                        <div class="">
                            <img src="{{asset('uploads/image/'.$homeabout->about_image)}}" alt="">
                        </div>
                        @endif
                        @endforeach
                    </div> --}}
                        <div class="col-lg-6 col-xl-4 d-flex align-items-center mt-4 mt-lg-0">
                            @foreach ($homeabouts as $homeabout)
                                @if ($homeabout->status == '1')
                                    <div>{!! $homeabout->about_description !!}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>

            </section>
            <style>
                h4 {
                    font-size: 1.4em;
                    font-weight: 600;
                    line-height: 27px;
                    margin: 0 0 0px;
                }
            </style>
            <section class="our-services p-relative my-5" style="padding: 50px 0; background-color: #f8f9fa;"> <span
                    class="custom-circle custom-circle-2 bg-color-quaternary appear-animation animated zoomIn appear-animation-visible"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100"
                    style="animation-delay: 100ms;"></span>
                <div class="container">
                    <h2 class="custom-text-10 mb-5 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                        style="font-size: 42px; letter-spacing: 1px;">Ongoing Projects </h2>
                    <div class="row gy-5" style="justify-content: center;">
                        @foreach ($categoryshome as $category)
                            @if ($category->status == '1')
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-4 project-item"
                                    data-menu="{{ $category->menu_id }}">
                                    <a href="{{ url(Str::slug($category->category_name)) }}/{{ $category->id }}" class="text-decoration-none d-block">
                                        <div class="card border-0 shadow-lg overflow-hidden position-relative"
                                            style="border-radius: 20px;">

                                            {{-- ✅ SOLD OUT ribbon --}}
                                            @if ($category->menu_id == 2)
                                                <div
                                                    style="
                                                    position: absolute;
                                                    top: 15px;
                                                    left: -35px;
                                                    background-color: red;
                                                    color: white;
                                                    font-weight: bold;
                                                    padding: 8px 35px;
                                                    transform: rotate(-45deg);
                                                    font-size: 14px;
                                                    z-index: 2;
                                                    text-transform: uppercase;
                                                ">
                                                    SOLD OUT
                                                </div>
                                            @endif

                                            {{-- Project Image --}}
                                            <img src="{{ asset('uploads/image/' . $category->category_themnail) }}"
                                                alt="{{ $category->category_name }}"
                                                style="width: 100%; height: 240px; object-fit: cover;" loading="lazy">

                                            <div class="card-body text-center p-3">
                                                <h4 style="font-weight: 600; color: #000;">{{ $category->category_name }}
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row justify-content-center" style="display: none;">
                        <div class="col-xl-9">
                            <p class="custom-text-4 mt-4 mb-0 text-center appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"> Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan,
                                dictum arcu eu, consectetur eros. </p>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .why-choose-us-section {
                    padding: 0px 0;
                    font-family: Arial, sans-serif;
                    /* background-color: #f8f8f8;  */
                }

                /* Flexbox container for side-by-side columns */
                .content-wrapper {
                    display: flex;
                    flex-wrap: wrap;
                    /* Allows stacking on small screens */
                    max-width: 1200px;
                    /* Example max width */
                    margin: 0 auto;
                    background-color: #fff;
                    /* White background for the card/main area */
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                }

                /* --- Features Column Styling (Left Side) --- */
                .features-column {
                    flex: 1 1 50%;
                    /* Takes 50% width on large screens */
                    padding: 30px;
                }

                .section-title {
                    color: #007bff;
                    /* Example primary color */
                    font-size: 2em;
                    margin-bottom: 5px;
                }

                .title-divider {
                    width: 30px;
                    border: 2px solid #a83f43;
                    /* Red accent line */
                    margin-left: 0;
                    margin-bottom: 20px;
                }

                .feature-list {
                    list-style: none;
                    padding: 0;
                }

                .feature-item {
                    display: flex;
                    align-items: center;
                    border: 1px solid #eee;
                    padding: 15px;
                    margin-bottom: 10px;
                    border-radius: 4px;
                    transition: background-color 0.3s;
                }

                .feature-item:hover {
                    background-color: #f0f0f0;
                }

                .icon {
                    font-size: 1.5em;
                    margin-right: 15px;
                }

                .cta-button {
                    display: inline-block;
                    background-color: #000;
                    color: #fff;
                    padding: 10px 20px;
                    text-decoration: none;
                    margin-top: 20px;
                    font-weight: bold;
                    transition: background-color 0.3s;
                }

                .cta-button:hover {
                    background-color: #333;
                }

                /* --- Image Column Styling (Right Side) --- */
                .image-column {
                    flex: 1 1 50%;
                    /* Takes 50% width on large screens */
                    position: relative;

                }

                .image-box {
                    position: relative;
                    overflow: hidden;
                    border-radius: 8px;

                }

                .main-image {
                    width: 100%;
                    height: auto;
                    display: block;
                    opacity: 0.6;
                    /* Slight dimming for the overlay text */
                }

                .overlay-text {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-align: right;
                    padding-right: 20px;
                    /* Gradient color from the image */

                }

                .overlay-title {
                    color: white;
                    font-size: 3em;
                    line-height: 1;
                    font-weight: 900;
                }

                .quote-box {
                    background-color: #000;
                    color: #fff;
                    padding: 10px 15px;
                    position: absolute;
                    bottom: 10px;
                    left: 20px;
                    max-width: 70%;
                    font-size: 0.9em;
                    border-radius: 4px;
                }

                .quote-mark {
                    font-size: 2em;
                    line-height: 0.5;
                    position: absolute;
                    top: -5px;
                    right: 10px;
                    color: #f79531;
                    /* Orange accent */
                }


                /* --- Responsive Design (for screens smaller than ~768px) --- */
                @media (max-width: 768px) {
                    .content-wrapper {
                        flex-direction: column;
                        /* Stacks columns vertically */
                    }

                    .features-column,
                    .image-column {
                        flex: 1 1 100%;
                        /* Takes full width */
                        padding: 20px;
                    }

                    .overlay-title {
                        font-size: 2em;
                        /* Smaller font on mobile */
                    }

                    .quote-box {
                        position: static;
                        /* Removes absolute positioning */
                        margin-top: 20px;
                        max-width: 100%;
                    }
                }
            </style>

            <section class="why-choose-us-section">
                <div class="container">
                    <div class="content-wrapper">
                        <div class="features-column">
                            <h2 class="custom-text-10 mb-5 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation animated appear-animation-visible"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                                style="font-size: 42px; letter-spacing: 1px;">Why Choose Our Properties </h2>
                            <hr class="title-divider">

                            <ul class="feature-list">
                                <li class="feature-item">
                                    <span class="icon">📍</span>
                                    <p style="margin: 0 0 0px;"><strong>NA, NOC, TITLE CLEAR PROJECT</strong></p>
                                </li>
                                <li class="feature-item">
                                    <span class="icon">⭐</span>
                                    <p style="margin: 0 0 0px;"><strong>PRIME & STRATEGIC LOCATION</strong></p>
                                </li>
                                <li class="feature-item">
                                    <span class="icon">📝</span>
                                    <p style="margin: 0 0 0px;"><strong>IMMEDIATE SALEDEED REGISTRATION</strong></p>
                                </li>
                                <li class="feature-item">
                                    <span class="icon">🏛️</span>
                                    <p style="margin: 0 0 0px;"><strong>LOCAL DEVELOPER</strong></p>
                                </li>
                                <li class="feature-item">
                                    <span class="icon">🏢</span>
                                    <p style="margin: 0 0 0px;"><strong>WORKING IN MORE THAN ONE SECTOR</strong></p>
                                </li>
                            </ul>

                            {{-- <a href="#" class="cta-button">VIEW MORE</a> --}}
                        </div>

                        <div class="image-column">
                            <div class="image-box">
                                <img src="img/why-choose-new.jpg" alt="Handshake over property map" class="main-image1">

                                <div class="overlay-text">
                                    <h2 class="overlay-title">WHY <br> CHOOSE <br> US?</h2>
                                </div>
                            </div>
                            <div class="quote-box">
                                <p style="    color: #fff;margin: auto;"> <strong>THINK NOW, INVEST TODAY AND SECURE YOUR
                                        FUTURE</strong></p>
                                <span class="quote-mark">”</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="our-work overflow-hidden" id="ourWork">
                <div class="container-fluid">
                    <div class="row bg-color-dark">
                        <div class="col-xl-9 px-0">
                            <div class="sort-destination w-100" data-sort-id="portfolio">
                                <div class="row w-100 m-0 isotope-item search-engine-optimize social-media-ads ui-design">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a class="d-block">
                                            <img src="{{ asset('frontend/imgnew/11.jpg') }}" class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Current Status (Activation Area)</h4>

                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none"
                                                        style="display:none;">View Work</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="row w-100 m-0 isotope-item content-marketing email-marketing search-engine-optimize ">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a class="d-block">
                                            <img src="{{ asset('frontend/imgnew/22.jpg') }}" class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Key Facts: Dholera SIR</h4>

                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none"
                                                        style="display:none;">View Work</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row w-100 m-0 isotope-item ui-design web-development b2b-software">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a class="d-block">
                                            <img src="{{ asset('frontend/imgnew/33.jpg') }}" class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Phase Wise Development of SIR</h4>

                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none"
                                                        style="display:none;">View Work</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="row w-100 m-0 isotope-item brand-and-identity content-strategy web-development">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a class="d-block">
                                            <img src="{{ asset('frontend/imgnew/44.jpg') }}" class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Industrial Corridors of India</h4>

                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none"
                                                        style="display:none;">View Work</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 bg-color-dark px-xl-0 sticky-container position-relative">
                            <div id="sidebar" class="side-menu-our-work sidebar position-relative">
                                <div data-plugin-sticky
                                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                                    <div class="py-5 my-2 ps-5 pe-0">
                                        <h4
                                            class="text-color-light custom-text-10 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">
                                            Market Focus</h4>
                                        <ul class="list-unstyled sort-source" data-sort-id="portfolio"
                                            data-option-key="filter">
                                            <li class="nav-item active">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Defence</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Manufacturing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Heavy Engineering</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Auto
                                                    & Auto Ancillaries</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Pharma
                                                    & Bio Tech (Formulation)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Electronics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Agro
                                                    and Food Processing (no &amp &amp farming considered)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Gujarat
                                                    offers an established port sector</a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Gujarat
                                                    also offers excellent technical education</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}



            <section id="s3"
                class="full_page custom_scroll_up s_three_columns bg-200-dicdl pb32 o_colored_level pt32 mt32"
                style="padding-top: 50px; display: none;">
                <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Advantage RSC
                            Reality</h4>
                    </div>
                    <div class="row d-flex align-items-stretch">
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/1.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Worldclass Infrastructure</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/2.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Ease of Governance</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/3.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Plug &amp; Play</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/4.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Social Infrastructure</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/5.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Ease of Business</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/6.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">External Connectivity</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/7.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Live, Work and Play</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/8.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Technology</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/9.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Sustainability</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/10.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Fast Track Approvals</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/11.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Security</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 s_col_no_bgcolor pt16 pb16">
                            <div class="dicdl-smart-card-main">
                                <a href="#">
                                    <div class="dicdl-smart-card bg-white">
                                        <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/12.png') }}"
                                            alt="" loading="lazy">
                                    </div>
                                    <h5 class="dicdl-smart-title">Internal Connectivity</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <style>
                .our-services .service-card {
                    padding: 20px 0 20px 0px;
                    text-align: center;
                }

                @media only screen and (max-width: 600px) {

                    .features-column,
                    .image-column {
                        flex: 1 1 100%;
                        padding: 20px;
                        width: -webkit-fill-available !important;
                    }

                    .content-wrapper {
                        flex-direction: inherit !important;
                    }
                }

                @media only screen and (max-width: 600px) {
                    .lmobile {
                        padding: 0px 0 !important;
                    }

                    .our-services .service-card {
                        padding: 65px 0 65px 0px !important;
                        text-align: center !important;
                    }

                    #popup {
                        background-image: none !important;
                    }

                    .our-approach {
                        padding: 0px 0 !important;
                    }

                    .py-5 {
                        padding-top: 0rem !important;
                        padding-bottom: 0rem !important;
                    }

                    .my-5 {
                        margin-top: 0rem !important;
                        margin-bottom: 0rem !important;
                    }

                    .our-insights {
                        padding-top: 0rem !important;
                        padding-bottom: 0px !important;
                    }

                    .owl-carousel {
                        margin-bottom: 0px !important;
                    }
                }
            </style>

            <section class="our-services p-relative py-5 my-5">
                <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Advantages of
                            Dholera Smart City</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="200">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/1.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">

                                    Worldclass Infrastructure
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="300">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/2.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">

                                    Ease of Governance
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="400">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/3.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">

                                    Plug & Play
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="500">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/4.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">

                                    Social Infrastructure
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="600">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/5.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                                    Ease of Business
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="700">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/6.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">

                                    External Connectivity
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="800">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/7.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">

                                    Live, Work and Play
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="900">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/8.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">

                                    Technology
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="1000">
                            <a class="text-decoration-none">
                                <img class="card-img-top" src="{{ asset('frontend/imgnew/icon/9.png') }}" alt=""
                                    loading="lazy">
                                <div
                                    class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">

                                    Sustainability
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <p class="custom-text-4 mt-4 mb-0 text-center appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                The notable features of Dholera include green spaces, commercial spaces, ICT based control
                                center and availability of residential area for the working capital. Dholera, with a huge
                                land parcel of 920 square kilometers promises to be a world-class destination
                                and is expected to be fully developed by 2030
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <style>
                .lblwidth {
                    height: auto;
                    width: auto;
                }
            </style>

            <section class="our-approach ">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-xl-4 pb-5 pb-xl-0 ">
                            <div class="approach-img bg-color-dark">

                            </div>
                        </div>
                        <div class="col-xl-8 d-flex flex-column justify-content-center align-items-start">
                            <p class="lblmargin custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation animated fadeInRightShorter appear-animation-visible"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                                style="animation-delay: 200ms;">
                                <span style="color: #ec3237; font-weight: 700;">Maple Township</span> Dholera Special
                                Investment Region(DSIR) is a Greenfield industrial city planned & located approximately 100
                                k.m. south-west of Ahmedabad. Dholera spans an area of 920 Sq. km. & the total SIR will be
                                completed in the next two decades. The 920 sq km of the Dholera Industrial City area has a
                                total developable area of about 580 sqkm since one third of the area falls within the
                                Coastal Regulation Zone(CRZ).
                            </p>
                            <div class="section-content" style="width: 100%;">
                                <div class="section-content owl-btn-vertical-center">
                                    <div class="owl-carousel home-client-carousel-2 " id="gallery1">
                                        @foreach ($dholeras as $dholera)
                                            @if ($dholera->status == '1')
                                                <div class="item">
                                                    <div class="ow-client-logo lblwidth">
                                                        <div class="client-logo client-logo-media">
                                                            <a href="javascript:void(0);"><img
                                                                    src="{{ asset('uploads/dholara/' . $dholera->image) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color-dark mb-5 mt-lg-5">
                <div class="container py-5">
                    <div class="row counters py-5">
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="200">
                                <strong data-to="13" data-append="+" class="mb-3">0</strong>
                                <label class=" text-color-light custom-text-8 opacity-7 font-weight-normal">Business
                                    Year</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="400">
                                <strong data-to="240" data-append="+" class="mb-3">0</strong>
                                <label class=" text-color-light custom-text-8 opacity-7 font-weight-normal">Satisfied
                                    Clients</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="600">
                                <strong data-to="10" data-append="+" class="mb-3">0</strong>
                                <label class=" text-color-light custom-text-8 opacity-7 font-weight-normal">Projects
                                    Delivery</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="800">
                                <strong data-to="27" data-append="+" class="mb-3">0</strong>
                                <label class=" text-color-light custom-text-8 opacity-7 font-weight-normal">Team
                                    Members</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-services p-relative ">
                <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Why Invest In
                            Dholera </h4>
                    </div>
                    <div class="row">
                        @foreach ($gallerys as $gallery)
                            @if ($gallery->status == '1')
                                <div class="col-xl-4 appear-animation animated fadeInRightShorter appear-animation-visible"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                                    style="animation-delay: 400ms;">

                                    <img class="" src="{{ asset('uploads/image/' . $gallery->gallery_image) }}"
                                        alt="" style="width: 100%;" loading="lazy">
                                    <h4
                                        style="text-align: center; font-weight: 600; margin-bottom: 10px; margin-top: 10px;">
                                        {{ $gallery->title }}</h4>

                                </div>
                            @endif
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

            <section class="our-insights bg-color-tertiary p-relative " style="background-color: #fff !important;">
                <span class="custom-circle custom-circle-2 bg-color-primary appear-animation"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                <span class="custom-circle custom-circle-3 bg-color-primary appear-animation"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">News & Update
                            </h4>
                        </div>
                    </div>
                    @foreach ($news as $new)
                        @if ($new->status == '1')
                            <div class="row">
                                <div class="col pb-5" id="new12">
                                    <article style="padding: 20px;" class="col-4">
                                        <img src="{{ asset('uploads/news/' . $new->image) }}" style="width: 100%;"
                                            class="mb-3">
                                    </article>
                                    <article style="padding: 20px;">
                                        <p class="custom-font-tertiary text-uppercase custom-text-2 mb-1 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                                            style="color:#ec3237 !important">
                                            {{ \Carbon\Carbon::parse($new->updated_at)->isoFormat('ddd DD MMM YYYY') }}
                                        </p>
                                        <h4 class="text-color-dark custom-text-8 font-weight-bold mb-3 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                            <a href="{{ url('news') }}/{{ Str::slug($new->title) }}/{{ $new->id }}"
                                                class="text-color-dark text-color-hover-primary">
                                                {{ $new->title }}
                                            </a>
                                        </h4>
                                        <p class="custom-text-4 mb-2 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                                            style="color: #000;">
                                            {!! Str::words(strip_tags($new->long_description), 15, '...') !!}
                                        </p>
                                        <a href="{{ url('news') }}/{{ Str::slug($new->title) }}/{{ $new->id }}"
                                            class="text-color-primary text-color-hover-secondary custom-text-4 font-weight-bold text-decoration-underline appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                                            Read More
                                        </a>
                                    </article>
                                </div>
                            </div>
                        @endif
                    @endforeach


                    <div class="row">
                        <div class="col" style="text-align: center;">
                            <a href="{{ route('dholerainsights') }}"
                                class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">View More</a>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .owl-item {
                    margin-right: 10px;
                    text-align: center;
                    margin-left: 25px;
                }
            </style>



            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

            <style>
                .lblimg {
                    width: 125px !important;
                    height: auto !important;
                }

                @media only screen and (max-width: 600px) {
                    .lblimg {
                        width: 90% !important;
                    }

                    #lblimg1 {
                        width: 90% !important;
                        margin-left: 10px;
                    }
                }

                .owl-dots {
                    display: none !important;
                }

                .item {
                    text-align: center !important;
                }

                #lblimg1 {
                    width: auto !important;
                    margin-left: 50px;
                }
            </style>

            <!----------HTML code starts here------->

            <div class="owl-carousel owl-theme owl-loaded owl-drag" style="padding-top: 50px; padding-bottom: 50px;">

                <div class="container owl-stage-outer">
                    <div class="col">
                        <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-5 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Big Brand Associated
                            With Dholera</h4>
                    </div>



                    <div class="owl-stage" id="owl-carousel"
                        style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                        @foreach ($clientlogos as $clientlogo)
                            @if ($clientlogo->status == '1')
                                <div class="owl-item " style=" margin-right: 10px;">
                                    <div class="item">
                                        <img class="lblimg" id="lblimg1"
                                            src="{{ asset('uploads/clientlogo/' . $clientlogo->image) }}" alt=""
                                            loading="lazy">
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>


            </div>




            <section
                class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
                style="background-image: url('{{ asset('frontend/imgnew/abc.jpg') }}'); background-size: cover; background-position: center;">
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
                                Connecting is a click away,<br /> Reach out to us today.
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
