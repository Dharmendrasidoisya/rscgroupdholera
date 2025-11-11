<style>
    .social-icons.social-icons-icon-light.social-icons-clean li a i.lblicon {
        color: #fff !important;
    }

    .footerabout {
        line-height: 1.6rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }
</style>
<footer id="footer" class="mt-0 py-5 blfooter" style=" padding-top: 1rem!important; padding-bottom: 0rem !important;">
    <div class="container lblfooter">
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-xl-3">
                @foreach ($companys as $company)
                    @if ($company->status == '1')
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                            <a href="{{ url('/') }}">
                                <img alt="RSC GROUP DHOLERA" src="{{ asset('uploads/footer/' . $company->footer_logo) }}"
                                    style="width: 115px;" src="">
                            </a>
                            <p class="mb-0 text-start text-4 font-weight-medium appear-animation footerabout"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                                {!! Str::limit($company->footer_description, 120) !!}..<a href="{{ route('aboutus') }}">Read more</a></p>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="col-sm-12 col-lg-2 col-xl-3 col-info-footer mt-4 mt-sm-5 mt-lg-0">
                <div class="row">
                    <div class="col-md-6">
                        <span
                            class="d-block text-start text-color-light font-weight-semibold text-5 pb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Quick Links</span>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="150"><a
                                href="{{ url('/') }}">Home</a></p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a
                                href="{{ route('aboutus') }}">About Us</a></p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            <a href="{{ route('dholera') }}" class="text-color-default">Dholera SIR</a>
                        </p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a
                                href="{{ route('dholerainsights') }}">News</a></p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a
                                href="{{ route('gallery') }}">Gallery</a></p>

                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a
                                href="{{ route('contactus') }}">Contact Us</a></p>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-lg-2 col-xl-2 col-info-footer mt-4 mt-sm-5 mt-lg-0">
                <div class="row">
                    <div class="col-md-6">
                        <span
                            class="d-block text-start text-color-light font-weight-semibold text-5 pb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Legal</span>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="150"><a target="_blank"
                                href="{{ route('disclaimer') }}">Disclaimer</a></p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><a target="_blank"
                                href="{{ asset('frontend/policy/policy-center.html') }}">Privacy Policy</a></p>
                        <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            <a target="_blank" href="{{ asset('frontend/policy/terms-conditions.html') }}">Terms &
                                Conditions</a>
                        </p>

                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-lg-4 col-xl-4 col-info-footer mt-4 mt-sm-5 mt-lg-0">
                <div class="row">
                    <div class="col-md-12">
                        <span
                            class="d-block text-start text-color-light font-weight-semibold text-5 pb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Contact Us</span>
                        @foreach ($companys as $company)
                            @if ($company->status == '1')
                                <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"> <i
                                        class="fa fa-building" aria-hidden="true"></i> {{ $company->company_name }}</p>
                                <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="150"> <i
                                        class="fa fa-map-marker" aria-hidden="true"></i> {{ $company->address1 }}</p>
                                <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"> <i
                                        class="fa fa-envelope" aria-hidden="true"></i> <a
                                        href="mailto:{{ $company->email1 }}"> {{ $company->email1 }} </a> </p>
                                <p class="mb-0 text-start text-4 font-weight-medium appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"> <i
                                        class="fa fa-phone" aria-hidden="true"></i> <a
                                        href="tel:+91{{ str_replace(' ', '', $company->contact_no1) }}">+91{{ $company->contact_no1 }}</a>
                                </p>
                            @endif
                        @endforeach
                        @foreach ($socialmedias as $socialmedia)
                            @if ($socialmedia->status == '1')
                                <ul
                                    class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-big d-lg-flex m-0 ms-lg-2">
                                    @if ($socialmedia->instagram != null)
                                        <li class="social-icons-instagram"><a href="{{ $socialmedia->instagram }}"
                                                class="text-4" title="Instagram" target="_black"><i
                                                    class="fab fa-instagram lblicon"></i></a></li>
                                    @endif
                                    @if ($socialmedia->twitter != null)
                                        <li class="social-icons-twitter"><a href="{{ $socialmedia->twitter }}"
                                                class="text-4" title="Twitter" target="_black"><i
                                                    class="fab fa-twitter lblicon"></i></a></li>
                                    @endif
                                    @if ($socialmedia->facebook != null)
                                        <li class="social-icons-facebook"><a href="{{ $socialmedia->facebook }}"
                                                class="text-4" title="Facebook" target="_black"><i
                                                    class="fab fa-facebook-f lblicon"></i></a></li>
                                    @endif

                                    @if ($socialmedia->linkedin != null)
                                        <li class="social-icons-linkedin"><a href="{{ $socialmedia->linkedin }}"
                                                class="text-4" title="Linkedin" target="_black"><i
                                                    class="fab fa-linkedin lblicon"></i></a></li>
                                    @endif
                                    @if ($socialmedia->youtube != null)
                                        <li class="social-icons-youtube"><a href="{{ $socialmedia->youtube }}"
                                                class="text-4" title="Youtube" target="_black"><i
                                                    class="fab fa-youtube lblicon"></i></a></li>
                                    @endif
                                </ul>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
        <!-- <div class="row justify-content-between">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <div class="d-flex justify-content-end custom-footer-copywriting mt-0 mt-lg-4">
                    <p class="mb-0 text-start text-center d-block w-100 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Copyright © <a href="{{ url('/') }}">  RSC GROUP DHOLERA</a>. Created By <a href="https://www.goadsindia.com/"> Ads India</a></p>
                </div>
            </div>
        </div> -->
        <div class="row justify-content-between">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <div class="">
                    <p class="text-center" data-appear-animation="fadeIn" data-appear-animation-delay="300">Copyright
                        © 2025 RSC GROUP DHOLERA. Created By <a href="https://www.goadsindia.com/" target="_blank">
                            Ads India</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
