@extends('frontend.layout.master')
@section('content')
    <div class="body">


        <div role="main" class="main">

            <section class="page-header page-header-modern bg-primary custom-page-header">

                <div
                    class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">

                </div>

                <style>
                    /* .align-self-end1{
               margin-top: 90px;
              } */
                    @media only screen and (max-width: 600px) {
                        .lblmobile {
                            margin-bottom: 50px;
                        }

                        .align-self-end1 {
                            margin-top: 140px;
                        }
                    }

                    .py-34 {
                        padding-top: 13rem !important;
                        padding-bottom: 5rem !important;
                    }

                    h4 {
                        font-size: 1.4em;
                        font-weight: 600;
                        line-height: 5px;
                        margin: 0 0 0px;
                    }
                </style>
                <div class="container position-relative  ">
                    <div class="row h-100">
                        <div class="col align-self-end">

                            <ul class="breadcrumb breadcrumb-light d-block py-34 ">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="active">Our Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </section>
            <section class="our-services p-relative py-5 my-5">
                <span
                    class="custom-circle custom-circle-2 bg-color-quaternary appear-animation animated zoomIn appear-animation-visible"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100" style="animation-delay: 100ms;"></span>

                <div class="container">
                    <!-- Tabs -->
                    <ul class="nav nav-pills justify-content-center mb-4" id="projectTabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-filter="all">All</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="1">Ongoing</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-filter="2">Sold Out</button>
                        </li>
                    </ul>

                    <!-- Projects -->
                    <div class="row" id="projectContainer">
                        @foreach ($categorys as $category)
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

                                            <div class="card-body text-center p-4">
                                                <h4 style="font-weight: 600; color: #000;">{{ $category->category_name }}
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </section>

            <script>
                document.querySelectorAll('#projectTabs .nav-link').forEach(tab => {
                    tab.addEventListener('click', function() {
                        // Remove active class from all tabs
                        document.querySelectorAll('#projectTabs .nav-link').forEach(btn => btn.classList.remove(
                            'active'));
                        this.classList.add('active');

                        const filter = this.getAttribute('data-filter');
                        const projects = document.querySelectorAll('.project-item');

                        projects.forEach(project => {
                            const projectMenu = project.getAttribute('data-menu');

                            // Show all if 'all' selected, otherwise match menu_id
                            if (filter === 'all' || projectMenu === filter) {
                                project.style.display = 'block';
                            } else {
                                project.style.display = 'none';
                            }
                        });
                    });
                });
            </script>

            <style>
                .nav-pills .nav-link {
                    border-radius: 50px;
                    font-weight: 600;
                    color: #000;
                    padding: 8px 25px;
                    margin: 0 10px;
                    background-color: #f1f1f1;
                    transition: all 0.3s ease;
                }

                .nav-pills .nav-link.active {
                    background-color: #ec3237;
                    color: #fff;
                }
            </style>




            {{-- <section class="our-services p-relative py-5 my-5">
                <span
                    class="custom-circle custom-circle-2 bg-color-quaternary appear-animation animated zoomIn appear-animation-visible"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100" style="animation-delay: 100ms;"></span>
                <div class="container">

                    <div class="row">
                        @foreach ($categorys as $category)
                            @if ($category->status == '1')
                                <div class="col-xl-4 appear-animation animated fadeInRightShorter appear-animation-visible"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                                    style="animation-delay: 400ms;">
                                    <a href="{{ url(Str::slug($category->category_name)) }}/{{ $category->id }}"
                                        class="text-decoration-none">
                                        <img class="" src="{{ asset('uploads/image/' . $category->category_themnail) }}"
                                            alt="" style="width: 100%;" loading="lazy">
                                        <h4
                                            style="text-align: center; font-weight: 600; margin-bottom: 0px; margin-top: 10px;">
                                            <a
                                                href="{{ url(Str::slug($category->category_name)) }}/{{ $category->id }}">{{ $category->category_name }}</a>
                                        </h4>
                                    </a>
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
            </section> --}}




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
