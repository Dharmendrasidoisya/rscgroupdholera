<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="facebook-domain-verification" content="2199h63ls9m5mkwyp22y3063o47x24" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title>RSC GROUP DHOLERA</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/imgnew/favirsc.png') }}" type="image/x-icon" />

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/demos/demo-digital-agency-2.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('frontend/css/skins/skin-digital-agency-2.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/custom1.css') }}">


    <link rel="stylesheet" href="css/csschat/preloader.css">
    <!-- Style CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="css/csschat/style.css"> --}}
    <!-- Font Awesome CSS-->


    <!-- Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/csschat/animate.css">
    <!-- Percircle CSS -->
    <link rel="stylesheet" type="text/css" href="css/csschat/percircle.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/csschat/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/home.css') }}">


    <!-- Head Libs -->
    <script src="{{ asset('frontend/vendor/modernizr/modernizr.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1275147597985126');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1275147597985126&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>
<body>
    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')

    <script>
        $(".carousel").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });
    </script>




    <style>
        .carousel .card {
            color: #fff;
            text-align: center;
            margin: 20px 0;
            line-height: 250px;
            font-size: 90px;
            font-weight: 600;
            border-radius: 10px;
            border: none;
        }

        .owl-dots {
            text-align: center;
            margin-top: 40px;
        }

        .owl-dot {
            height: 15px;
            width: 45px;
            margin: 0 5px;
            outline: none;
            border-radius: 14px;
            border: 2px solid #0072bc !important;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .owl-dot.active,
        .owl-dot:hover {
            background: #0072bc !important;
        }

        #popup {
            background-image: url({{ asset('frontend/imgnew/logoabout.jpg') }});
            background-position: left;
        }

        ::placeholder {
            color: #fff !important;
        }
    </style>

    <section class="enquiry-modal d-flex justify-content-center" style="padding:0px;">
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable h-100 d-flex flex-column justify-content-center "
                role="document">
                <div class="row no-gutters">
                    <div class="col-md-6 d-lg-flex d-md-flex d-sm-none mobilenone" style="padding: 0;">
                        <div class="modal-body p-5 img d-flex" id="popup"></div>
                    </div>
                    <div class="col-md-6 d-flex" style="padding: 0;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button id="btnclose" type="button" style="float: right;" class="close"
                                    data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center" id="memberModalLabel">Get <span>In Touch</span></h4>
                            </div>
                            <div class="modal-body">
                                <h6 class="text-center mb-0"><b>Share Detail to Know RSC GROUP DHOLERA</b></h6>
                                {{-- <form method="post" name="form" id="form"> --}}
                                <form method="post" action="config.php" id="form">
                                    <input type="hidden" name="source" value="Popup Form">

                                    <input type="text" name="name" id="name" placeholder="Name"
                                        class="form-control" />
                                    <input type="text" name="email" id="email" placeholder="Email"
                                        class="form-control" />
                                    <input type="text" name="phone" id="phone" placeholder="Phone"
                                        class="form-control" />
                                    <input type="text" name="location" id="location" placeholder="Location"
                                        class="form-control" />
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                    <div class="g-recaptcha" data-sitekey="6LfgxgcsAAAAAEbaD4FTV__iuf7Jt8M5Aa-pz02G" style="margin:20px 0;"></div>

                                    <button type="submit" class="float-right sbn-btn">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($companys as $company)
        @if ($company->status == '1')
            @if ($company->contact_no2 != null)
                <a href="https://web.whatsapp.com/send?l=en&amp;&phone=+91{{ str_replace(' ', '', $company->contact_no2) }} &text= Hey! I am Interested."
                    class="float lbldes" target="_blank">
                    <img loading="lazy" src="{{ asset('frontend/imgnew/wt.png') }}" alt="whatsapp"
                        style="width: 50px;">
                </a>

                <a class="float iconwhatsup" target="_blank"
                    href="https://api.whatsapp.com/send?l=en&amp;phone=+91{{ str_replace(' ', '', $company->contact_no2) }} &amp;text= Hey! I am Interested.">
                    <img loading="lazy" src="{{ asset('frontend/imgnew/wt.png') }}" alt="whatsapp"
                        style="width: 50px;">
                </a>
                <a href="tel:+91{{ str_replace(' ', '', $company->contact_no1) }}" class="callbutton">
                    <img loading="lazy" src="{{ asset('frontend/imgnew/callnow.gif') }}" alt="whatsapp"
                        style="width: 98px;">
                </a>
            @endif
        @endif
    @endforeach
    <style>
        .callbutton {
            left: 94%;
            background-color: #fff;
            bottom: 58px;
            box-shadow: 0px 0px 0px #999;
            position: fixed;
            width: 56px;
            height: 50px;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100;
        }

        .callbutton img {
            margin-left: -22px;
            margin-top: -24px;
        }

        .float {
            position: fixed;
            width: 45px;
            height: 45px;
            bottom: 60px;
            left: 25px;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100;
        }

        .iconwhatsup {
            display: none;
        }

        @media only screen and (max-width: 600px) {
            .lbldes {
                display: none !important;
            }

            .iconwhatsup {
                display: block !important;
            }

            .callbutton {
                left: 80%;
            }

            .mobilenone {
                display: none !important;
            }

        }

        .owl-item {
            width: 225px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#memberModal").modal('show');
        });
    </script>
    <script>
        $('#btnclose').click(divFunction);

        function divFunction() {
            $("#memberModal").modal('hide');
        }
    </script>
    <script type="text/javascript" src="https://crm.rscrealtydholera.com/scripts/view/_ExternalPost.js"></script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,

            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 2,
                },

                1024: {
                    items: 4,

                },
                1366: {
                    items: 4,

                },
                1600: {
                    items: 4,

                },
                1920: {
                    items: 4,

                },
            }
        });
    </script>
    <!-- Vendor -->
    <script src="{{ asset('frontend/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('frontend/js/views/view.contact.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('frontend/js/theme.init.js') }}"></script>
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="w-full">

            <div class="formbold-action-buttons">
                <button class="formbold-action-btn open-button" style="z-index: 999;">
                    <span class="formbold-cross-icon">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.474874 0.474874C1.10804 -0.158291 2.1346 -0.158291 2.76777 0.474874L16.5251 14.2322C17.1583 14.8654 17.1583 15.892 16.5251 16.5251C15.892 17.1583 14.8654 17.1583 14.2322 16.5251L0.474874 2.76777C-0.158291 2.1346 -0.158291 1.10804 0.474874 0.474874Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.474874 16.5251C-0.158291 15.892 -0.158291 14.8654 0.474874 14.2322L14.2322 0.474874C14.8654 -0.158292 15.892 -0.158291 16.5251 0.474874C17.1583 1.10804 17.1583 2.1346 16.5251 2.76777L2.76777 16.5251C2.1346 17.1583 1.10804 17.1583 0.474874 16.5251Z"
                                fill="white" />
                        </svg>
                    </span>
                    <span class="formbold-chat-icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.8333 14.0002V3.50016C19.8333 3.19074 19.7103 2.894 19.4915 2.6752C19.2728 2.45641 18.976 2.3335 18.6666 2.3335H3.49992C3.1905 2.3335 2.89375 2.45641 2.67496 2.6752C2.45617 2.894 2.33325 3.19074 2.33325 3.50016V19.8335L6.99992 15.1668H18.6666C18.976 15.1668 19.2728 15.0439 19.4915 14.8251C19.7103 14.6063 19.8333 14.3096 19.8333 14.0002ZM24.4999 7.00016H22.1666V17.5002H6.99992V19.8335C6.99992 20.1429 7.12284 20.4397 7.34163 20.6585C7.56042 20.8772 7.85717 21.0002 8.16659 21.0002H20.9999L25.6666 25.6668V8.16683C25.6666 7.85741 25.5437 7.56066 25.3249 7.34187C25.1061 7.12308 24.8093 7.00016 24.4999 7.00016Z"
                                fill="white" />
                        </svg>
                    </span>
                </button>

            </div>
        </div>
    </div>
    <div class="chat-popup" style="z-index: 11111;">
        <form class="form-container lbl11">
            <h6 class="lblcross" onclick="closeForm2()">✕</h6>

            <div class="chat-box">
                <!-- Message bubble -->
                <div class="message-bubble">
                    <!-- <img src="https://i.ibb.co/2N0K7Bv/bot-avatar.png" alt="Bot" class="avatar"> -->
                    <span>Hi, How Can I help You?</span>
                </div>

                <!-- Buttons as fake textarea -->
                <div class="fake-textarea">
                    <button type="button" onclick="submitPopupForm('Want To Book Plot In Dholera?')">
                        Want To Book Plot In Dholera?
                    </button>

                    <button type="button"
                        onclick="submitPopupForm('Want To Know More About Ongoing Scheme In Dholera?')">
                        Want To Know More About Ongoing Scheme In Dholera?
                    </button>

                    <button type="button" onclick="submitPopupForm(' Want To Connect With Sales Team?')">
                        Want To Connect With Sales Team?
                    </button>
                </div>
            </div>

            <p class="lblp">
                Powered by <span> <a href="https://www.goadsindia.com/" target="_blank" style="color:#8b1d20;">&nbsp;
                        Ads India</a></span>
            </p>
        </form>

        <form id='webform223553000036407622' action='config.php' name=WebToContacts223553000036407622
            class="form-container lbl44" method="post" name="form" id="form"
            onSubmit='javascript:document.charset="UTF-8"; return checkMandatory223553000036407622()'
            accept-charset='UTF-8'>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span class="lblcross1" onclick="backToPreviousFormlast()" style="cursor: pointer;">
                    <i class="fa fa-arrow-left"></i>
                </span>
                <span class="lblcross" onclick="closeForm2()" style="cursor: pointer;">X</span>
            </div>
            <h3 class="lblh1" style="margin: 0px!important;">
                <img src="https://www.rscdholera.com/uploads/image/1762331023.png" alt="Indian Tradebird Logo12"
                    style="margin-bottom: 10px;width: 100px;">
            </h3>
            <input type='text' style='display:none;' name='xnQsjsdp'
                value='1c064f0e89b527f6af8258a6527a557646b1adc9e0497372b0ec48601e2dd57c'>
            </input>
            <input type='hidden' name='zc_gad' id='zc_gad' value=''>
            </input>
            <input type='text' style='display:none;' name='xmIwtLD'
                value='3d142f1e6102acf0707c5b975647f20bfa6bcef0d45364ecb754a903b889cb2c1ff4c38ebd0f0eb43f756b0f937a8d32'>
            </input>
            <input type='text' style='display:none;' name='actionType' value='Q29udGFjdHM='>
            </input>
            <input type='text' style='display:none;' name='returnURL'
                value='https&#x3a;&#x2f;&#x2f;gapgroup.in&#x2f;'>
            </input>
            <!-- Do not remove this code. -->
            <style>
                /* .modal-backdrop.show {
                    opacity: 0;
                    position: relative;
                } */

                /* .modal-backdrop {

                    z-index: 0;
                } */

                html,
                body {
                    margin: 0px;
                }

                .formsubmit.zcwf_button {
                    color: white !important;
                    background: transparent linear-gradient(0deg, #000 0%, #000 100%);
                }

                #crmWebToEntityForm.zcwf_lblLeft {
                    width: 100%;
                    padding: 25px;
                    margin: 0 auto;
                    box-sizing: border-box;
                }

                #crmWebToEntityForm.zcwf_lblLeft * {
                    box-sizing: border-box;
                }

                #crmWebToEntityForm {
                    text-align: left;
                }

                #crmWebToEntityForm * {
                    direction: ltr;
                }

                .zcwf_lblLeft .zcwf_title {
                    word-wrap: break-word;
                    padding: 0px 6px 10px;
                    font-weight: bold
                }

                .zcwf_lblLeft.cpT_primaryBtn:hover {
                    background: linear-gradient(#02acff 0, #006be4 100%)no-repeat padding-box !important;
                    box-shadow: 0 -2px 0 0 #0159b9 inset !important;
                    border: 0 !important;
                    color: #fff !important;
                    outline: 0 !important;
                }

                .zcwf_lblLeft .zcwf_col_fld input[ type=text],
                input[ type=password],
                .zcwf_lblLeft .zcwf_col_fld textarea {
                    width: 60%;
                    border: 1px solid #c0c6cc !important;
                    resize: vertical;
                    border-radius: 2px;
                    float: left;
                }

                .zcwf_lblLeft .zcwf_col_lab {
                    width: 30%;
                    word-break: break-word;
                    padding: 0px 6px 0px;
                    margin-right: 10px;
                    margin-top: 5px;
                    float: left;
                    min-height: 1px;
                }

                .zcwf_lblLeft .zcwf_col_fld {
                    float: left;
                    width: 68%;
                    padding: 0px 6px 0px;
                    position: relative;
                    margin-top: 5px;
                }

                .zcwf_lblLeft .zcwf_privacy {
                    padding: 6px;
                }

                .zcwf_lblLeft .wfrm_fld_dpNn {
                    display: none;
                }

                .dIB {
                    display: inline-block;
                }

                .zcwf_lblLeft .zcwf_col_fld_slt {
                    width: 60%;
                    border: 1px solid #ccc;
                    background: #fff;
                    border-radius: 4px;
                    font-size: 16px;
                    float: left;
                    resize: vertical;
                    padding: 2px 5px;
                }

                .zcwf_lblLeft .zcwf_row:after,
                .zcwf_lblLeft .zcwf_col_fld:after {
                    content: '';
                    display: table;
                    clear: both;
                }

                .zcwf_lblLeft .zcwf_col_help {
                    float: left;
                    margin-left: 7px;
                    font-size: 16px;
                    max-width: 35%;
                    word-break: break-word;
                }

                .zcwf_lblLeft .zcwf_help_icon {
                    cursor: pointer;
                    width: 16px;
                    height: 16px;
                    display: inline-block;
                    background: #fff;
                    border: 1px solid #c0c6cc;
                    color: #c1c1c1;
                    text-align: center;
                    font-size: 11px;
                    line-height: 16px;
                    font-weight: bold;
                    border-radius: 50%;
                }

                .zcwf_lblLeft .zcwf_row {
                    margin: 15px 0px;
                }

                .zcwf_lblLeft .formsubmit {
                    margin-right: 5px;
                    cursor: pointer;
                    color: #313949;
                    font-size: 16px;
                }

                .zcwf_lblLeft .zcwf_privacy_txt {
                    width: 90%;
                    color: rgb(0, 0, 0);
                    font-size: 16px;
                    font-family: Arial;
                    display: inline-block;
                    vertical-align: top;
                    color: #313949;
                    padding-top: 2px;
                    margin-left: 6px;
                }

                .zcwf_lblLeft .zcwf_button {
                    font-size: 16px;
                    color: #313949;
                    border: 1px solid #c0c6cc;
                    padding: 3px 9px;
                    border-radius: 4px;
                    cursor: pointer;
                    max-width: 120px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                .zcwf_lblLeft .zcwf_tooltip_over {
                    position: relative;
                }

                .zcwf_lblLeft .zcwf_tooltip_ctn {
                    position: absolute;
                    background: #dedede;
                    padding: 3px 6px;
                    top: 3px;
                    border-radius: 4px;
                    word-break: break-word;
                    min-width: 100px;
                    max-width: 150px;
                    color: #313949;
                    z-index: 100;
                }

                .zcwf_lblLeft .zcwf_ckbox {
                    float: left;
                }

                .zcwf_lblLeft .zcwf_file {
                    width: 55%;
                    box-sizing: border-box;
                    float: left;
                }

                .cBoth:after {
                    content: '';
                    display: block;
                    clear: both;
                }

                @media all and (max-width: 600px) {

                    .zcwf_lblLeft .zcwf_col_lab,
                    .zcwf_lblLeft .zcwf_col_fld {
                        width: auto;
                        float: none !important;
                    }

                    .zcwf_lblLeft .zcwf_col_help {
                        width: 40%;
                    }
                }

                .zcwf_row {
                    padding: 3px 0px;
                }
            </style>
            <style>
                .zcwf_col_fld {
                    display: flex;
                    gap: 10px;
                    /* space between buttons */
                }

                .zcwf_button {
                    padding: 2px 17px;
                    font-size: 16px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                #formsubmit {
                    background-color: #28a745;
                    /* green */
                    color: white;
                }

                .zcwf_button[type="reset"],
                input[name="reset"] {
                    background-color: #000;
                    /* red */
                    color: white;
                }
            </style>

            <!-- First Name hidden -->
            <!-- First Name (hidden) -->
            <form action="config.php" method="POST" id="popupForm">

                <input type="hidden" name="btn_action" id="btn_action" value="">
                <input type="hidden" name="ctype" id="ctype" value="I1114">

                <!-- Name -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='text' name='name' class="lbla" maxlength='80' placeholder='Name *'
                            required pattern="[A-Za-z\s]+" title="Only letters allowed" style="height: 38px;">
                    </div>
                </div>

                <!-- Email (changed to "mail") -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='email' id="email" name="email" class="lbla" maxlength='100'
                            placeholder='Email *' style="height: 38px;" required>
                    </div>
                </div>

                <!-- Phone (changed to "subj") -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='text' id="phone" name="phone" class="lbla" maxlength='10'
                            placeholder='Phone *' style="height: 38px;" required pattern="\d{10}"
                            title="Enter 10 digit phone number">
                    </div>
                </div>
                <input type="hidden" name="location" value="Null">

                <!-- Message -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <textarea name='message' placeholder='Message *' class="lbla" required style="height: 38px;"></textarea>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LfgxgcsAAAAAEbaD4FTV__iuf7Jt8M5Aa-pz02G" style="margin:20px 0;"></div> 

                <!-- Submit Button -->
                <div class='zcwf_row'>
                    <div class='zcwf_col_fld'>
                        <input type='submit' id='formsubmit1' class='formsubmit zcwf_button' value='Submit'>
                    </div>
                </div>

            </form>


            <script>
                function validateEmail223553000036407622() {
                    var form = document.forms['WebToContacts223553000036407622'];
                    var emailFld = form.querySelectorAll('[ftype=email]');
                    var i;
                    for (i = 0; i < emailFld.length; i++) {
                        var emailVal = emailFld[i].value;
                        if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                            var atpos = emailVal.indexOf('@');
                            var dotpos = emailVal.lastIndexOf('.');
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                                alert('Please enter a valid email address. ');
                                emailFld[i].focus();
                                return false;
                            }
                        }
                    }
                    return true;
                }

                function checkMandatory223553000036407622() {
                    var mndFileds = new Array('Last Name');
                    var fldLangVal = new Array('Last\x20Name');
                    for (i = 0; i < mndFileds.length; i++) {
                        var fieldObj = document.forms['WebToContacts223553000036407622'][mndFileds[i]];
                        if (fieldObj) {
                            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                if (fieldObj.type == 'file') {
                                    alert('Please select a file to upload.');
                                    fieldObj.focus();
                                    return false;
                                }
                                alert(fldLangVal[i] + ' cannot be empty.');
                                fieldObj.focus();
                                return false;
                            } else if (fieldObj.nodeName == 'SELECT') {
                                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                    alert(fldLangVal[i] + ' cannot be none.');
                                    fieldObj.focus();
                                    return false;
                                }
                            } else if (fieldObj.type == 'checkbox') {
                                if (fieldObj.checked == false) {
                                    alert('Please accept  ' + fldLangVal[i]);
                                    fieldObj.focus();
                                    return false;
                                }
                            }
                            try {
                                if (fieldObj.name == 'Last Name') {
                                    name = fieldObj.value;
                                }
                            } catch (e) {}
                        }
                    }
                    if (!validateEmail223553000036407622()) {
                        return false;
                    }
                    var urlparams = new URLSearchParams(window.location.search);
                    if (urlparams.has('service') && (urlparams.get('service') === 'smarturl')) {
                        var webform = document.getElementById('webform223553000036407622');
                        var service = urlparams.get('service');
                        var smarturlfield = document.createElement('input');
                        smarturlfield.setAttribute('type', 'hidden');
                        smarturlfield.setAttribute('value', service);
                        smarturlfield.setAttribute('name', 'service');
                        webform.appendChild(smarturlfield);
                    }
                    document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
                }

                function tooltipShow223553000036407622(el) {
                    var tooltip = el.nextElementSibling;
                    var tooltipDisplay = tooltip.style.display;
                    if (tooltipDisplay == 'none') {
                        var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                        for (i = 0; i < allTooltip.length; i++) {
                            allTooltip[i].style.display = 'none';
                        }
                        tooltip.style.display = 'block';
                    } else {
                        tooltip.style.display = 'none';
                    }
                }
            </script>
            <!-- Do not remove this --- Analytics Tracking code starts -->

            <!-- Do not remove this --- Analytics Tracking code ends. -->
        </form>




    </div>


    <script>
        function backToPreviousForm() {
            // Hide all popup forms
            document.querySelectorAll('.form-container').forEach(el => el.style.display = 'none');

            // Show lbl11 form (chat box)
            const form = document.querySelector('.lbl11');
            if (form) form.style.display = 'block';
        }
    </script>
    <script>
        function backToPreviousFormlast() {
            // Hide all popup forms
            document.querySelectorAll('.form-container').forEach(el => el.style.display = 'none');

            // Show lbl11 form (chat box)
            const form = document.querySelector('.lbl11');
            if (form) form.style.display = 'block';
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            const el = document.querySelector(".intro-text");

            if (!el) return; // Exit if element not found

            el.textContent = "";
            let i = 0;

            const interval = setInterval(() => {
                el.textContent += text[i];
                i++;
                if (i === text.length) clearInterval(interval);
            }, 50);
        });
    </script>

    <script>
        function openPopupForm(className) {
            document.querySelectorAll('.form-container').forEach(function(form) {
                form.style.display = 'none';
            });

            const target = document.querySelector('.' + className);
            if (target) {
                target.style.display = 'block';
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdown = document.getElementById("chatDropdown");

            if (dropdown) {
                dropdown.addEventListener("change", function() {
                    const selectedForm = this.value;

                    // Hide all forms first
                    document.querySelectorAll(".form-container").forEach(form => {
                        form.style.display = "none";
                    });

                    // Show the selected form
                    if (selectedForm) {
                        const selectedFormElement = document.querySelector("." + selectedForm);
                        if (selectedFormElement) {
                            selectedFormElement.style.display = "block";
                        }
                    }
                });
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textarea = document.querySelector(".textarea-container textarea");
            const chatForm = document.querySelector(".form-container.lbl11");
            const emailForm = document.querySelector(".form-container:not(.lbl11)");

            // Check if textarea exists before adding event listener
            if (textarea) {
                textarea.addEventListener("keypress", function(event) {
                    if (event.key === "Enter" && !event.shiftKey) {
                        event.preventDefault(); // Prevents new line
                        if (chatForm) chatForm.style.display = "none";
                        if (emailForm) emailForm.style.display = "block";
                    }
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sendIcon = document.querySelector(".send-icon");
            const chatForm = document.querySelector(".form-container.lbl11");
            const emailForm = document.querySelector(".form-container.lbl44");
            const emailForm22 = document.querySelector(".form-container.lbl22");

            if (sendIcon) {
                sendIcon.addEventListener("click", function() {
                    if (chatForm) chatForm.style.display = "none";
                    if (emailForm) emailForm.style.display = "block";
                    if (emailForm22) emailForm22.style.display = "block";
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textarea = document.querySelector(".textarea-container textarea");
            const sendIcon = document.querySelector(".send-icon");
            const chatForm = document.querySelector(".form-container.lbl11"); // Chat form
            const emailForm = document.querySelector(".form-container.lbl44"); // Email form
            const emailForm22 = document.querySelector(".form-container.lbl22"); // Email form

            // Only run if all required elements exist
            if (textarea && sendIcon) {
                // Disable send icon initially
                sendIcon.style.opacity = "0.5";
                sendIcon.style.pointerEvents = "none";

                // Enable send icon when there is text
                textarea.addEventListener("input", function() {
                    if (textarea.value.trim() !== "") {
                        sendIcon.style.opacity = "1";
                        sendIcon.style.pointerEvents = "auto";
                    } else {
                        sendIcon.style.opacity = "0.5";
                        sendIcon.style.pointerEvents = "none";
                    }
                });

                // Handle send icon click
                sendIcon.addEventListener("click", function() {
                    if (textarea.value.trim() !== "") {
                        if (chatForm) chatForm.style.display = "none";
                        if (emailForm) emailForm.style.display = "block";
                        if (emailForm22) emailForm22.style.display = "block";
                    }
                });
            }
        });

        function closeForm2() {
            document.querySelectorAll(".form-container").forEach(form => {
                form.style.display = "none";
            });
        }
    </script>


    <script>
        function showForm(formToShow) {
            var form1 = document.querySelector(".lbl11");
            var form2 = document.querySelector(".lbl22");
            var form3 = document.querySelector(".lbl33");
            var form4 = document.querySelector(".lbl44");

            form1 && (form1.style.display = "none");
            form2 && (form2.style.display = "none");
            form3 && (form3.style.display = "none");
            form4 && (form4.style.display = "none");

            if (formToShow === "lbl11") form1 && (form1.style.display = "block");
            else if (formToShow === "lbl22") form2 && (form2.style.display = "block");
            else if (formToShow === "lbl33") form3 && (form3.style.display = "block");
            else if (formToShow === "lbl44") form4 && (form4.style.display = "block");
        }

        function closeForm2() {
            var popup = document.querySelector(".chat-popup");
            if (popup) popup.style.display = "none";
        }

        // Show popup on phone icon click and open lbl44 form
        const phoneIcons = document.querySelectorAll("li i.fa-phone, li i.fas.fa-phone, li i.fa.fa-phone");
        phoneIcons.forEach(icon => {
            const link = icon.nextElementSibling;
            if (link && link.tagName === 'A') {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const popup = document.querySelector(".chat-popup");
                    if (popup) popup.style.display = "block";
                    showForm("lbl33");
                });
            }
        });

        // If needed: other handlers for other icons
        const emailIcons = document.querySelectorAll("li i.fas.fa-envelope-open, li i.lblemail");
        emailIcons.forEach(icon => {
            const link = icon.nextElementSibling;
            if (link && link.tagName === 'A') {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const popup = document.querySelector(".chat-popup");
                    if (popup) popup.style.display = "block";
                    showForm("lbl33");
                });
            }
        });

        const openBtn = document.querySelector(".open-button");
        if (openBtn) {
            openBtn.addEventListener("click", function() {
                const popup = document.querySelector(".chat-popup");
                if (popup) popup.style.display = "block";
                showForm("lbl11");
            });
        }
    </script>


    <!-- Email code start-->
    <script>
        function toggleFields(event) {
            event.preventDefault();
            var fields = document.getElementById('additionalFields');
            if (fields.style.display === 'none') {
                fields.style.display = 'block';
            } else {
                fields.style.display = 'none';
            }
        }

        function closeForm1() {
            // Add your close form logic here
        }
    </script>
    <!-- Email code end-->

    <script>
        function toggleOtherFields(event) {
            event.preventDefault(); // Prevent the default action of the link
            var otherFields = document.getElementById('other-fields');
            if (otherFields.style.display === "none") {
                otherFields.style.display = "block";
            } else {
                otherFields.style.display = "none";
            }
        }

        function closeForm2() {
            document.querySelector('.form-container').style.display = 'none';
        }
    </script>

    <script>
        function closeForm2() {
            document.querySelector(".chat-popup").style.display = "none";
        }
    </script>

    <script>
        function selectCategoryAndOpenForm(categoryName) {
            const input = document.getElementById('selected_category');
            if (input) {
                input.value = categoryName;
            }

            // Show the second form — you must already have this function
            openPopupForm('lbl44');
        }
    </script>
    <!--- Pop Up Box Form End --->

    <script>
        $(document).ready(function() {
            $("#memberModal").modal('show');
        });
    </script>

    {{-- <script>
        $('.close').click(divFunction);

        function divFunction() {
            $("#memberModal").modal('hide');
        }
    </script> --}}
    <script>
        function submitPopupForm(actionText) {
            // Set hidden input value
            document.getElementById('btn_action').value = actionText;

            // Popup open karavanu (tamaru existing code)
            openPopupForm('lbl44');
        }
    </script>
    <!-- Common JavaScript -->
    {{-- <script async type="text/javascript" src="js/jquery.min.js"></script> --}}
    {{-- <script async type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script async src="js/scrollreveal/scrollreveal.min.js"></script>
    <script async type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script async src="js/jquery.easing.min.js"></script>
    <script async src="js/percircle.js"></script>
    <script async src="js/creative.min.js"></script>
    <script async src="js/wow.min.js"></script>

    <script async type="text/javascript" src="js/jquery.counterup.js"></script>
    <script async type="text/javascript" src="js/jquery.waypoints.min.js"></script>

    <!-- Custom JavaScript -->
    <script async src="js/custom.js"></script> --}}
    <script>
        $(document).ready(function() {
            $("#memberModal").show();
        });

        $('#btnclose').on('click', function() {
            $("#memberModal").hide();
        });
    </script>
</body>

</html>
