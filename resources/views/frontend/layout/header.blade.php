<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 lblbg box-shadow-none">
        <div class="header-container container" style="    height: 100px!important;">
            <div class="header-row">
                <div class="header-column header-column-logo">
                    <div class="header-row">
                        @foreach ($companys as $company)
                            @if ($company->status == '1')
                                <div class="header-logo">
                                    <a href="{{ url('/') }}">
                                        <img alt="RSC Group Dholera" style="width: 100px;"
                                            src="{{ asset('uploads/image/' . $company->company_logo) }}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="header-column header-column-nav-menu justify-content-end w-100">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 "
                                                href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('aboutus') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('dholera') }}">
                                                Dholera SIR
                                            </a>
                                        </li>


                                        <li class="dropdown" >
                                            <a class="nav-link  dropdown-toggle text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('project') }}">
                                                Our Projects
                                            </a>
                                            <ul class="dropdown-menu" style="display:none!important;" >
                                                @foreach ($categorys as $category)
                                                    @if ($category->status == '1')
                                                        <li>
                                                            <a class="dropdown-item font-weight-normal" href="{{ url(Str::slug($category->category_name)) }}/{{ $category->id }}">
                                                                {{ $category->category_name }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('dholerainsights') }}"> News
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('gallery') }}">Gallery</a>
                                        </li>


                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                href="{{ route('contactus') }}"> Contact Us
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">

                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end d-none d-lg-flex">
                    <div class="header-row" style="width: max-content;">
                        <ul
                            class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-big d-lg-flex m-0 ms-lg-2">
                            <a href="{{ route('contactus') }}" style="border: 1px solid;"
                                class="btn btn-outline nav-link text-capitalize font-weight-semibold custom-text-3 "
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"
                                style="animation-delay: 600ms;">Inquiry Now </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
