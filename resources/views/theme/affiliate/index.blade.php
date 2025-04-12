@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('js')
    <script src="{{ asset('public/assets/js/affiliate.js') }}"></script>
@endsection
@section('css')
<style type="text/css">
    .contact_main_sec {
        padding: 250px 0 50px !important;
    }

    #sliderVideo {
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1;
        width: 100%;
        height: 511px;
        max-height: 511px;
        object-position: center;
        object-fit: cover;
    }

    #home-hero {
        background: none !important;
    }

    #about-hero .overlay {
        position: absolute;
        content: '';
        top: 0;
        height: 511px;
        width: 100%;
        background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
        z-index: 0;
    }

    label.form-check-label  {
        color: var(--bs-body-color);
    }
    #contact_us form .form-control {
        margin-bottom: 7px;
    }
    .help-text {
        font-size: 9px;
    }
    @media only screen and (max-width: 575px) {
        #sliderVideo {
            height: 425px;
            max-height: 425px;
        }

        #about-hero .overlay {
            height: 425px;
        }

        #contact_us {
            margin-top: 0px;
        }
    }

    @media only screen and (max-width: 389px) {
        #sliderVideo {
            height: 441px;
            max-height: 441px;
        }

        #about-hero .overlay {
            height: 441px;
        }
    }

    @media only screen and (max-width: 359px) {
        #sliderVideo {
            height: 453px;
            max-height: 453px;
        }

        #about-hero .overlay {
            height: 453px;
        }
    }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="contact_main_sec"
    style="background-image: url( '{{ asset('public/assets/img/shapes-about.webp') }}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
    <div class="overlay"></div>
    <video autoplay muted loop id="sliderVideo">
        <source src="{{ asset('public/assets/videos/contact-us.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container-fluid">
        <div class="row">
            <div class="hero-head h_t col-lg-10">
                <h1 class="pb-2">
                    Connect with <br><span>StaffViz</span>
                </h1>
                <div class="col-md-8 hero-text">
                    <p>Have questions or need assistance? Reach out to our dedicated support team for personalized
                        assistance with our employee monitoring software. We're here to help you maximize productivity
                        and efficiency in your workplace. </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Banner -->

<section id="contact_us" class="position-relative">
    <img class="contact-corner" class="w-100" src="{{ asset('public/assets/img/') }}/contact-corner-element.webp" alt="Elemene">
    <div class="container-fluid p-5">
        <div class="row gx-md-5">
            <div class="col-xl-6 col-lg-6 col-md-6 px-md-0">
                <div class="d-md-block d-none financial_img">
                    <img class="w-100" src="{{ asset('public/assets/img/') }}/financial.webp" alt="Finance">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                @include("theme.affiliate.form")
            </div>

        </div>
    </div>

</section>

<section id="box_section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="card h-100 p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class=" mb-4">
                            <img src="{{ asset('public/assets/img/') }}/num.svg" alt="num">
                        </div>
                        <h3 class="h5 mb-3">Talk to Sales</h3>
                        <p>Speak to our sales team for<br> personalized assistance today:<br> 
                            <a class="num_color" href="tel:(855) 855-3140">(855) 855-3140</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="card h-100 p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class=" mb-4">
                            <img src="{{ asset('public/assets/img/') }}/Early-Bird.svg" alt="Early-Bird">
                        </div>
                        <h3 class="h5 mb-3">
                            Stay tuned with StaffViz
                            <!-- <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                        </h3>
                        <p>Don't miss out!</p>
                        <div class="social-media-icons d-flex align-items-center justify-content-center">
                            <a href="https://www.facebook.com/Staffviz/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none">
                                    <g clip-path="url(#clip0_4460_3138)">
                                        <path
                                            d="M10.625 0.277344C16.4238 0.277344 21.125 4.96495 21.125 10.747C21.125 16.529 16.4238 21.2166 10.625 21.2166C4.82621 21.2166 0.125 16.529 0.125 10.747C0.125 4.96495 4.82621 0.277344 10.625 0.277344ZM9.05451 15.7147V10.9486H8.37939C8.17432 10.9486 8.0082 10.7825 8.0082 10.5785V9.06937C8.0082 8.86611 8.17514 8.69966 8.37939 8.69966H9.05451V7.48625C9.05451 6.33909 9.98762 5.40909 11.1381 5.40909H12.8706C13.0757 5.40909 13.2418 5.57473 13.2418 5.77921V7.2879C13.2418 7.49238 13.0757 7.65802 12.8706 7.65802H11.8452C11.7283 7.65802 11.6319 7.75412 11.6319 7.87068V8.70048L12.848 8.69966C13.0531 8.71398 13.2192 8.8518 13.2192 9.06937C13.1831 9.58058 13.1331 10.0971 13.0896 10.6091C13.0736 10.8001 12.9124 10.9486 12.7201 10.9486H11.6319V15.7147C11.6319 15.918 11.4654 16.0844 11.2612 16.0844L9.4257 16.0848C9.22104 16.0848 9.05451 15.9188 9.05451 15.7147ZM9.53932 15.6023H11.1471V10.4652H12.6159L12.7246 9.18184H11.1471V7.87068C11.1471 7.48625 11.4597 7.17461 11.8452 7.17461H12.757V5.8925H11.1381C10.255 5.8925 9.53932 6.60615 9.53932 7.48625V9.18266H8.49301V10.4652H9.53932V15.6023ZM10.625 0.760337C5.09363 0.760337 0.609395 5.2316 0.609395 10.747C0.609395 16.2623 5.09363 20.7336 10.625 20.7336C16.1564 20.7336 20.6406 16.2623 20.6406 10.747C20.6406 5.2316 16.1564 0.760337 10.625 0.760337Z"
                                            fill="white"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4460_3138">
                                            <rect width="21" height="20.9392" fill="white"
                                                transform="translate(0.125 0.277344)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/staffviz/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22"
                                    fill="none">
                                    <g clip-path="url(#clip0_4460_3144)">
                                        <path
                                            d="M10.4963 0.28125C16.293 0.28125 20.9926 4.96722 20.9926 10.7472C20.9926 16.5272 16.293 21.2131 10.4963 21.2131C4.69957 21.2131 0 16.5272 0 10.7472C0 4.96722 4.69957 0.28125 10.4963 0.28125ZM6.1708 15.2508H7.65023V9.40699H6.1708V15.2508ZM10.79 12.1712C10.79 11.2494 11.2256 10.5104 12.2288 10.5104C13.2193 10.5104 13.5401 11.3067 13.5401 12.1712V15.2516H15.0105V11.4866C15.0105 10.1493 14.3608 9.21396 12.9441 9.21396C12.301 9.21396 11.5582 9.55013 11.244 10.1337L10.79 10.9594V9.40699H9.39012V15.2508H10.79V12.1712ZM11.2744 12.1712V15.7338H8.90572V8.924H11.2744V9.35874C11.742 8.94118 12.3162 8.73097 12.9441 8.73097C14.6282 8.73097 15.4949 9.88181 15.4949 11.4866V15.7325L13.0557 15.7329V12.1712C13.0557 11.5905 12.9273 10.9934 12.2288 10.9934C11.5004 10.9934 11.2744 11.5218 11.2744 12.1712ZM6.90129 8.09584C7.41398 8.09584 7.82045 7.67787 7.82045 7.16952C7.82045 6.66077 7.41398 6.24362 6.90129 6.24362C6.38859 6.24362 5.98213 6.66077 5.98213 7.16952C5.98213 7.67787 6.38818 8.09584 6.90129 8.09584ZM6.90129 8.57883C6.12322 8.57883 5.49773 7.94248 5.49773 7.16952C5.49773 6.39657 6.12322 5.76062 6.90129 5.76062C7.67895 5.76062 8.30484 6.39657 8.30484 7.16952C8.30484 7.94207 7.67895 8.57883 6.90129 8.57883ZM5.68641 15.7338V8.924H8.13463V15.7338H5.68641ZM10.4963 0.764652C4.96699 0.764652 0.484395 5.23387 0.484395 10.7472C0.484395 16.2605 4.96699 20.7297 10.4963 20.7297C16.0256 20.7297 20.5082 16.2605 20.5082 10.7472C20.5082 5.23387 16.0256 0.764652 10.4963 0.764652Z"
                                            fill="white"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4460_3144">
                                            <rect width="21" height="20.9392" fill="white"
                                                transform="translate(0 0.277344)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="https://twitter.com/StaffViz" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none">
                                    <g clip-path="url(#clip0_4460_3141)">
                                        <path
                                            d="M10.75 0.277344C16.5488 0.277344 21.25 4.96495 21.25 10.747C21.25 16.529 16.5488 21.2166 10.75 21.2166C4.95121 21.2166 0.25 16.529 0.25 10.747C0.25 4.96495 4.95121 0.277344 10.75 0.277344ZM10.75 0.760337C5.21863 0.760337 0.734395 5.2316 0.734395 10.747C0.734395 16.2623 5.21863 20.7336 10.75 20.7336C16.2814 20.7336 20.7656 16.2623 20.7656 10.747C20.7656 5.2316 16.2814 0.760337 10.75 0.760337Z"
                                            fill="white"></path>
                                        <path
                                            d="M11.6951 9.67499L16.0395 4.63965H15.01L11.2378 9.01177L8.22496 4.63965H4.75L9.30601 11.2511L4.75 16.5314H5.77953L9.76307 11.9143L12.9449 16.5314H16.4198L11.6949 9.67499H11.6951ZM10.285 11.3093L9.82342 10.651L6.15048 5.41242H7.73178L10.6959 9.64009L11.1575 10.2984L15.0105 15.7938H13.4292L10.285 11.3096V11.3093Z"
                                            fill="white"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4460_3141">
                                            <rect width="21" height="20.9392" fill="white"
                                                transform="translate(0.25 0.277344)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="card h-100 p-1 p-md-4 mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class=" mb-4">
                            <img src="{{ asset('public/assets/img/') }}/Email.svg" alt="Email">
                        </div>
                        <h3 class="h5 mb-3">Email us for Assistance</h3>
                        <p>Send us an email, and we we'll<br> respond promptly to your inquiries<br>
                            <a class="num_color" href="mailto:info@staffviz.com" style="text-decoration:underline;">
                                info@staffviz.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection