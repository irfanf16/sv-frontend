<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['meta_title'] }}</title>
    <meta name="description" content="{{ $data['meta_descp'] }}">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('public/favicon.ico') }}">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('public/assets/css/new-style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('public/assets/css/itcn-css.css') }}" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        var app_ajax_url = '{{ getenv('APP_URL') }}/';
    </script>
    @if ( getenv('APP_URL') == url()->current() )
    <script type="text/javascript">
        var load_model = 1;
    </script>
    @else
    <script type="text/javascript">
        var load_model = 0;
    </script>
    @endif
    @yield("css")
    <!-- Trackdesk tracker begin -->
    <script async src="//cdn.trackdesk.com/tracking.js"></script>
    <script>
        (function(t, d, k) {
            (t[k] = t[k] || []).push(d);
            t[d] = t[d] || t[k].f || function() {
                (t[d].q = t[d].q || []).push(arguments)
            }
        })(window, "trackdesk", "TrackdeskObject");
        trackdesk("task-tracker", "click");
    </script>


    {{-- second company  firstpromoter--}}
    <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
    <script>
        (function(w) {
            w.fpr = w.fpr || function() {
                w.fpr.q = w.fpr.q || [];
                w.fpr.q[arguments[0] == 'set' ? 'unshift' : 'push'](arguments);
            };
        })(window);
        fpr("init", {
            cid: "k9lodisv"
        });
        fpr("click");
    </script>



</head>

<body class="index-page">
    <div class="creloader">
        <div class="loader-cre">
            <div class="lds-default">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- ITCN Banner Starts -->
    <section class="itcn-banner">
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('public/assets/img/StaffViz-white-logo.svg') }}" class="logo" alt="Logo">
                    </a>
                    <button class="navbar-toggler order-lg-2 order-md-4 order-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                        <ul class="navbar-nav d-flex align-items-lg-center mx-auto mb-lg-2 mb-lg-0">
                            <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/features') }}">Features</a>
                  </li> -->
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Features
                                    </button>
                                    <ul class="dropdown-menu fullwidth-screen">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3 tab-start-text">
                                                    <h6>Our Features</h6>
                                                    <p>Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                                                    <img class="d-md-block d-none" src="{{ asset('public/assets/img/feature-navbar-img.webp') }}" class="logo" alt="Logo">
                                                </div>
                                                <div class="col-lg-8 col-md-9 offset-lg-1">
                                                    <div class="list-heading">
                                                        <h6>Features</h6>
                                                    </div>
                                                    <ul class="two-col-list feature-list list">
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/hr-management')}}">HR Management</a>
                                                            <p>Consolidated tools for onboarding and staff management.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/monitoring')}}">Monitoring</a>
                                                            <p>Real-time insights into activities that you should know about.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/training-management')}}">Training Management</a>
                                                            <p>Optimize training and track progress in one complete system.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/tracking')}}">Tracking</a>
                                                            <p>Comprehensive task performance, time spent, and outcomes.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/client-management')}}">Client Management</a>
                                                            <p>Coordinate and manage client interactions & relationships.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/productivity-analytics')}}">Productivity Analytics</a>
                                                            <p>Create efficient processes with actionable data insights.</p>
                                                        </li>
                                                        <li class="single-link">
                                                            <a href="{{url('/feature/project-management')}}">Project & Task Management</a>
                                                            <p>Stay connected and aligned to meet every deadline.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="container-fluid text-center">
                                                <a href="{{ url('/features') }}" class="see-all">See all Features
                                                    <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                                                </a>
                                            </div>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                How It Works
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-12 mb-4 tab-start-text">
                      <h6>How It Works</h6>
                      <p>Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                      <img class="mt-5 d-md-block d-none" src="{{ asset('public/assets/img/how-it-work-navbar-img.webp') }}" class="logo" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Solutions</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link">
                          <a href="#">Fully Remote Teams / Workers</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Hybrid Teams / Workers</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">In-Office</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Enterprise</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Shift & Break Management</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">SME & SMB</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                      <hr>
                      <a href="{{ url('/solutions') }}" class="see-all">See all Solutions
                        <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Integrations</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link">
                          <a href="#">Salesforce Integration</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Zapier Integration</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                      </ul>
                      <hr>
                      <a href="{{ url('/integrations') }}" class="see-all">See all Integrations
                        <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Industries</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link">
                          <a href="#">Startups</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">IT & Tech Companies</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Freelancing</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Hospitality & Tourism</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Shift & Break Management</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link">
                          <a href="#">Logistics & Transportation</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                      <hr>
                      <a href="{{ url('/industries') }}" class="see-all">See all Industries
                        <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                      </a>
                    </div>
                  </div>
              </ul>
            </div>
          </li> -->
                            <li class="nav-item position-relative">
                                <div class="dropdown">
                                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        How It Works
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('/solutions') }}">Solutions</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/integrations') }}">Integrations</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/industries') }}">Industries</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/pricing-plans') }}">Pricing</a>
          </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/apps') }}">Apps</a>
                            </li>
                            <!-- <li class="nav-item">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Apps
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-12 mb-4 tab-start-text">
                      <h6>Our Apps</h6>
                      <p>Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                      <img class="d-md-block d-none" src="{{ asset('public/assets/img/app-navbar-img.webp') }}" class="logo" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Desktop</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link">
                          <a href="#">Windows</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Mac</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Linux</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Chrome OS</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                      <hr>
                      <a href="{{ url('/apps') }}" class="see-all">Download the app
                        <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Mobile</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link disabled">
                          <a href="#">iOS</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Android</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Web</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link disabled">
                          <a href="#">Google Chrome Extension</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                    </div>
                  </div>
              </ul>
            </div>
          </li> -->
                        </ul>
                    </div>
                    <!-- <div class="d-flex nav-btns justify-content-md-left justify-content-center order-lg-4 order-md-2 order-4 mt-md-0 mt-3">
                        <button class="trial-btn" type="button" data-bs-toggle="modal" data-bs-target="#modalId">RESERVE MY SPOT</button>
                        <a href="https://app.staffviz.com" target="_blank" class="login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                <mask id="mask0_4283_1137" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22"
                                    height="23">
                                    <rect y="0.771484" width="22" height="22" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_4283_1137)">
                                    <path
                                        d="M10.9938 19.5638V18.1888H17.1372C17.2077 18.1888 17.2723 18.1594 17.3311 18.1006C17.3899 18.0419 17.4192 17.9772 17.4192 17.9067V5.63753C17.4192 5.56701 17.3899 5.50236 17.3311 5.44358C17.2723 5.38483 17.2077 5.35545 17.1372 5.35545H10.9938V3.98047H17.1372C17.6002 3.98047 17.9921 4.14089 18.313 4.46172C18.6338 4.78255 18.7942 5.17449 18.7942 5.63753V17.9067C18.7942 18.3697 18.6338 18.7617 18.313 19.0825C17.9921 19.4033 17.6002 19.5638 17.1372 19.5638H10.9938ZM9.75101 15.6855L8.79912 14.6913L11.0308 12.4596H3.21094V11.0846H11.0308L8.79912 8.8529L9.75101 7.8587L13.6644 11.7721L9.75101 15.6855Z"
                                        fill="white" />
                                </g>
                            </svg>
                            LOGIN</a>
                    </div> -->
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="stick-left-text">
                <div class="white-bg">
                    <h5>25th ITCN ASIA - August 27th - 29th</h5>
                </div>
                <div class="black-bg">
                    <h5>Firsthand Experience Awaits You</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 main-text text-center">
                    <h1>Discover StaffViz at ITCN Asia 2024</h1>
                    <h2>World’s #1 Workforce Analytics Platform</h2>
                    <p>Slay Organizational Productivity & Management Without Stepping Over Performance!</p>
                    <div class="links d-md-flex align-items-center justify-content-center">
                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" target="_blank">
                            SCHEDULE A CALL
                        </a>
                        <a href="{{url('/')}}/itcn-contact-us">
                            CONTACT US
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ITCN Banner Ends -->

    <!-- Track Second Section -->
    <section class="track-second-section">
        <img src="{{ asset('public/assets/itcn-images/red-shadow.webp') }}" class="red-shadow" alt="red shadow">
        <img src="{{ asset('public/assets/itcn-images/blue-shadow.webp') }}" class="blue-shadow" alt="blue shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center start-text">
                    <h2>Why We <span>Stand Out from the Crowd</span></h2>
                    <p>Our tailored innovations and customer-centric approach set us apart.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg col-md-3 col-6 mb-lg-0 mb-4 text-center features">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50.6612 9.83756C41.1175 -0.517767 41.8333 0.258883 41.5947 0.0862943C41.5151 0.0862943 41.3561 0 41.3561 0H15.9857C15.5085 0 15.1904 0.345178 15.1904 0.862944V10.0964C14.5542 10.6142 13.9974 11.132 13.4407 11.6497C7.87356 17.6904 7.55544 27.4416 12.884 33.9137L10.8162 36.1574L9.62324 34.8629C9.30512 34.5178 8.82793 34.5178 8.50981 34.8629L0.954371 43.0609C-0.318124 44.4416 -0.318124 46.599 0.954371 47.9797L1.11343 48.1523C2.38593 49.533 4.3742 49.533 5.64669 48.1523L13.2021 39.9543C13.5203 39.6091 13.5203 39.0914 13.2021 38.7462L12.0092 37.3655L14.077 35.1218C14.4746 35.467 14.7927 35.8122 15.1904 36.1574V50.1371C15.1904 50.6548 15.5085 51 15.9857 51H50.184C50.6612 51 50.9793 50.6548 50.9793 50.1371V10.6142C51.0588 10.269 50.8998 10.0102 50.6612 9.83756ZM4.53326 46.8579C3.89701 47.5482 2.86311 47.5482 2.3064 46.8579L2.14733 46.6853C1.51109 45.9949 1.51109 44.9594 2.14733 44.269L9.14605 36.6751L10.339 37.9695L11.532 39.264L4.53326 46.8579ZM48.2753 9.66498H42.1514V2.93401L48.2753 9.66498ZM14.5542 12.9442C19.7237 7.33503 28.1539 7.33503 33.403 12.9442C38.5725 18.5533 38.5725 27.7005 33.403 33.3959C28.2335 39.0051 19.8032 39.0051 14.5542 33.3959C9.38465 27.7005 9.38465 18.5533 14.5542 12.9442ZM49.3887 49.3604H16.781V37.2792C22.4277 40.6447 29.665 39.7817 34.5164 34.6041C40.3222 28.3046 40.3222 18.0355 34.5164 11.736C29.665 6.47208 22.4277 5.60914 16.781 9.06091V1.72589H40.5608V10.5279C40.5608 11.0457 40.8789 11.3909 41.3561 11.3909H49.3887V49.3604Z" fill="#0074BC" />
                        <path d="M15.0317 30.4613C15.3499 30.8927 15.668 31.3242 16.0656 31.7557C20.4398 36.5019 27.5181 36.5019 31.8923 31.7557C32.2899 31.3242 32.6081 30.8927 32.9262 30.4613C32.9262 30.4613 32.9262 30.4613 33.0057 30.375C36.2665 25.6288 35.8688 18.8978 31.9718 14.5831C27.5976 9.83689 20.5194 9.83689 16.1452 14.5831C12.0891 18.8978 11.771 25.6288 15.0317 30.4613C15.0317 30.375 15.0317 30.375 15.0317 30.4613ZM17.1791 30.5476C17.02 30.375 16.7814 30.1161 16.6224 29.8572C18.2925 27.1821 20.9966 25.6288 23.9392 25.6288C26.8818 25.6288 29.5859 27.1821 31.256 29.8572C31.097 30.1161 30.9379 30.2887 30.6993 30.5476C27.0409 34.6034 20.917 34.6034 17.1791 30.5476ZM20.6784 20.2785C20.6784 18.2937 22.1895 16.6542 24.0187 16.6542C25.8479 16.6542 27.359 18.2937 27.359 20.2785C27.359 22.2633 25.8479 23.9029 24.0187 23.9029C22.1895 23.9029 20.6784 22.2633 20.6784 20.2785ZM17.1791 15.7912C20.917 11.7354 26.9614 11.7354 30.7789 15.7912C33.9601 19.243 34.4373 24.3344 32.2899 28.3902C30.9379 26.4917 29.1087 25.1973 27.1204 24.5069C28.2339 23.5577 28.9496 22.0044 28.9496 20.3648C28.9496 17.4308 26.7228 15.0146 24.0187 15.0146C21.3147 15.0146 19.0878 17.4308 19.0878 20.3648C19.0878 22.0044 19.8036 23.5577 20.917 24.5069C18.8492 25.1973 17.02 26.4917 15.7475 28.3902C13.6002 24.4206 14.0774 19.243 17.1791 15.7912Z" fill="#0074BC" />
                        <path d="M19.7246 44.4411C19.7246 44.9588 20.0427 45.304 20.5199 45.304H46.3675C46.8447 45.304 47.1628 44.9588 47.1628 44.4411C47.1628 43.9233 46.8447 43.5781 46.3675 43.5781H20.5199C20.1223 43.5781 19.7246 44.0096 19.7246 44.4411Z" fill="#0074BC" />
                        <path d="M43.4242 23.2142H45.0148C45.492 23.2142 45.8101 22.869 45.8101 22.3512C45.8101 21.8335 45.492 21.4883 45.0148 21.4883H43.4242C42.947 21.4883 42.6289 21.8335 42.6289 22.3512C42.6289 22.869 42.947 23.2142 43.4242 23.2142Z" fill="#0074BC" />
                        <path d="M43.4242 17.6907H45.0148C45.492 17.6907 45.8101 17.3456 45.8101 16.8278C45.8101 16.31 45.492 15.9648 45.0148 15.9648H43.4242C42.947 15.9648 42.6289 16.31 42.6289 16.8278C42.6289 17.2593 42.947 17.6907 43.4242 17.6907Z" fill="#0074BC" />
                        <path d="M43.4242 28.6497H45.0148C45.492 28.6497 45.8101 28.3045 45.8101 27.7868C45.8101 27.269 45.492 26.9238 45.0148 26.9238H43.4242C42.947 26.9238 42.6289 27.269 42.6289 27.7868C42.6289 28.3045 42.947 28.6497 43.4242 28.6497Z" fill="#0074BC" />
                        <path d="M43.4242 34.1712H45.0148C45.492 34.1712 45.8101 33.826 45.8101 33.3083C45.8101 32.7905 45.492 32.4453 45.0148 32.4453H43.4242C42.947 32.4453 42.6289 32.7905 42.6289 33.3083C42.6289 33.826 42.947 34.1712 43.4242 34.1712Z" fill="#0074BC" />
                        <path d="M43.4242 39.6946H45.0148C45.492 39.6946 45.8101 39.3495 45.8101 38.8317C45.8101 38.3139 45.492 37.9688 45.0148 37.9688H43.4242C42.947 37.9688 42.6289 38.3139 42.6289 38.8317C42.6289 39.3495 42.947 39.6946 43.4242 39.6946Z" fill="#0074BC" />
                    </svg>
                    <p>Human<br> Resource Management</p>
                </div>
                <div class="col-lg col-md-3 col-6 mb-lg-0 mb-4 text-center features">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_5173_1304" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-1" y="0" width="52" height="51">
                            <path d="M50.9473 50.9502V0.0498085H0.046875V50.9502H50.9473Z" fill="white" stroke="white" stroke-width="0.0996094" />
                        </mask>
                        <g mask="url(#mask0_5173_1304)">
                            <path d="M9.14029 41.0391C7.07857 41.0391 5.40723 39.3678 5.40723 37.3061V36.2215C5.40723 34.1597 7.07857 32.4884 9.14029 32.4884C11.202 32.4884 12.8733 34.1597 12.8733 36.2215V37.3061C12.8733 39.3678 11.202 41.0391 9.14029 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.1515 41.0378H6.13073C3.28738 41.0378 0.982422 43.3428 0.982422 46.1862V50.0039H17.2998V46.1862C17.2998 43.3428 14.9949 41.0378 12.1515 41.0378Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M25.4577 41.0391C23.396 41.0391 21.7246 39.3678 21.7246 37.3061V36.2215C21.7246 34.1597 23.396 32.4884 25.4577 32.4884C27.5194 32.4884 29.1907 34.1597 29.1907 36.2215V37.3061C29.1907 39.3678 27.5194 41.0391 25.4577 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M29.9803 50.0039H33.6162V46.1862C33.6162 43.3428 31.3113 41.0378 28.4679 41.0378H22.4471C19.6038 41.0378 17.2988 43.3428 17.2988 46.1862V50.0039H21.0155" fill="white" />
                            <path d="M29.9803 50.0039H33.6162V46.1862C33.6162 43.3428 31.3113 41.0378 28.4679 41.0378H22.4471C19.6038 41.0378 17.2988 43.3428 17.2988 46.1862V50.0039H21.0155" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M41.7751 41.0391C39.7133 41.0391 38.042 39.3678 38.042 37.3061V36.2215C38.042 34.1597 39.7133 32.4884 41.7751 32.4884C43.8368 32.4884 45.5081 34.1597 45.5081 36.2215V37.3061C45.5081 39.3678 43.8368 41.0391 41.7751 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M44.7853 41.0378H38.7645C35.9212 41.0378 33.6162 43.3428 33.6162 46.1862V50.0039H49.9336V46.1862C49.9336 43.3428 47.6287 41.0378 44.7853 41.0378Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28.1337 11.2943C27.8624 10.1961 27.4289 9.16186 26.8594 8.21876L28.3798 6.69832L24.581 2.89962L23.0606 4.41996C22.1175 3.85049 21.0833 3.41699 19.9851 3.14555V0.995884H14.6129V3.14555C13.5146 3.41699 12.4803 3.85049 11.5373 4.41996L10.017 2.89962L6.21809 6.69832L7.73853 8.21876C7.16896 9.16186 6.73546 10.1961 6.46412 11.2943H4.31445V16.6666H6.46412C6.73546 17.7647 7.16896 18.7991 7.73853 19.7421L6.21809 21.2624L10.017 25.0612L11.5373 23.5408C12.4803 24.1104 13.5146 24.5439 14.6129 24.8152V26.9648H19.9851V24.8152C21.0833 24.5439 22.1175 24.1104 23.0606 23.5408L24.581 25.0612L28.3798 21.2624L26.8594 19.7421C27.4289 18.7991 27.8624 17.7647 28.1337 16.6666" fill="white" />
                            <path d="M28.1337 11.2943C27.8624 10.1961 27.4289 9.16186 26.8594 8.21876L28.3798 6.69832L24.581 2.89962L23.0606 4.41996C22.1175 3.85049 21.0833 3.41699 19.9851 3.14555V0.995884H14.6129V3.14555C13.5146 3.41699 12.4803 3.85049 11.5373 4.41996L10.017 2.89962L6.21809 6.69832L7.73853 8.21876C7.16896 9.16186 6.73546 10.1961 6.46412 11.2943H4.31445V16.6666H6.46412C6.73546 17.7647 7.16896 18.7991 7.73853 19.7421L6.21809 21.2624L10.017 25.0612L11.5373 23.5408C12.4803 24.1104 13.5146 24.5439 14.6129 24.8152V26.9648H19.9851V24.8152C21.0833 24.5439 22.1175 24.1104 23.0606 23.5408L24.581 25.0612L28.3798 21.2624L26.8594 19.7421C27.4289 18.7991 27.8624 17.7647 28.1337 16.6666" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.7024 12.0983C21.9241 9.86355 19.7987 8.26004 17.2987 8.26004C14.1393 8.26004 11.5781 10.8213 11.5781 13.9806C11.5781 17.14 14.1393 19.7012 17.2987 19.7012C19.7867 19.7012 21.9038 18.1128 22.6911 15.8948" fill="white" />
                            <path d="M22.7024 12.0983C21.9241 9.86355 19.7987 8.26004 17.2987 8.26004C14.1393 8.26004 11.5781 10.8213 11.5781 13.9806C11.5781 17.14 14.1393 19.7012 17.2987 19.7012C19.7867 19.7012 21.9038 18.1128 22.6911 15.8948" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M40.3125 11.3164C37.8671 11.3164 35.8848 9.33408 35.8848 6.88877V5.60222C35.8848 3.15681 37.8671 1.17448 40.3125 1.17448C42.7578 1.17448 44.7402 3.15681 44.7402 5.60222V6.88877C44.7402 9.33408 42.7578 11.3164 40.3125 11.3164Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M45.1963 23.0996V18.0972V23.0996Z" fill="white" />
                            <path d="M45.1963 23.0996V18.0972" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M43.8825 11.3179H37.1934H24.7008C23.2292 11.3179 22.0361 12.511 22.0361 13.9825C22.0361 15.4541 23.2292 16.6472 24.7008 16.6472H34.0626V23.1816H49.9889V17.4244C49.9889 14.0518 47.2549 11.3179 43.8825 11.3179Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                    <p>Employee Onboarding & Trainings</p>
                </div>
                <div class="col-lg col-md-3 col-6 mb-lg-0 mb-4 text-center features">
                    <svg width="57" height="51" viewBox="0 0 57 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.927 22.5596H11.0806C10.7205 22.5596 10.3751 22.4188 10.1204 22.1682C9.86573 21.9175 9.72266 21.5775 9.72266 21.223C9.72266 20.8685 9.86573 20.5286 10.1204 20.2779C10.3751 20.0272 10.7205 19.8864 11.0806 19.8864H17.569V11.03C17.569 10.6755 17.7121 10.3355 17.9668 10.0848C18.2214 9.83418 18.5668 9.69336 18.927 9.69336C19.2871 9.69336 19.6326 9.83418 19.8872 10.0848C20.1419 10.3355 20.285 10.6755 20.285 11.03V21.223C20.285 21.5775 20.1419 21.9175 19.8872 22.1682C19.6326 22.4188 19.2871 22.5596 18.927 22.5596Z" fill="#0074BC" />
                        <path d="M43.9157 51.0009H30.7488C29.8572 51.0009 28.9743 50.828 28.1505 50.4922C27.3267 50.1563 26.5782 49.664 25.9477 49.0434C25.3172 48.4229 24.8171 47.6861 24.4758 46.8753C24.1346 46.0645 23.959 45.1954 23.959 44.3178V22.5202C23.959 22.1657 24.1021 21.8257 24.3567 21.5751C24.6114 21.3244 24.9568 21.1836 25.317 21.1836H49.3476C49.7078 21.1836 50.0532 21.3244 50.3079 21.5751C50.5625 21.8257 50.7056 22.1657 50.7056 22.5202V44.3178C50.7056 45.1954 50.53 46.0645 50.1888 46.8753C49.8475 47.6861 49.3474 48.4229 48.7169 49.0434C48.0864 49.664 47.3379 50.1563 46.5141 50.4922C45.6903 50.828 44.8074 51.0009 43.9157 51.0009ZM26.6749 23.8568V44.3178C26.6749 45.3813 27.1041 46.4012 27.8682 47.1532C28.6322 47.9052 29.6684 48.3276 30.7488 48.3276H43.9157C44.9962 48.3276 46.0324 47.9052 46.7964 47.1532C47.5604 46.4012 47.9897 45.3813 47.9897 44.3178V23.8568H26.6749Z" fill="#0074BC" />
                        <path d="M52.9254 42.7601H49.3404C48.9802 42.7601 48.6348 42.6193 48.3802 42.3686C48.1255 42.118 47.9824 41.778 47.9824 41.4235C47.9824 41.069 48.1255 40.729 48.3802 40.4784C48.6348 40.2277 48.9802 40.0869 49.3404 40.0869H52.9254C53.2856 40.0869 53.631 39.946 53.8857 39.6954C54.1403 39.4447 54.2834 39.1047 54.2834 38.7503V33.377C54.2834 33.0225 54.1403 32.6826 53.8857 32.4319C53.631 32.1812 53.2856 32.0404 52.9254 32.0404H49.3404C48.9802 32.0404 48.6348 31.8996 48.3802 31.6489C48.1255 31.3983 47.9824 31.0583 47.9824 30.7038C47.9824 30.3493 48.1255 30.0093 48.3802 29.7587C48.6348 29.508 48.9802 29.3672 49.3404 29.3672H52.9254C54.0059 29.3672 55.0421 29.7897 55.8061 30.5416C56.5701 31.2936 56.9994 32.3136 56.9994 33.377V38.7503C56.9994 39.8137 56.5701 40.8337 55.8061 41.5856C55.0421 42.3376 54.0059 42.7601 52.9254 42.7601Z" fill="#0074BC" />
                        <path d="M34.8541 19.7338C34.4939 19.7338 34.1485 19.593 33.8938 19.3423C33.6392 19.0917 33.4961 18.7517 33.4961 18.3972V14.0906C33.4961 12.3182 34.2115 10.6183 35.4848 9.36497C36.7581 8.11165 38.4852 7.40754 40.286 7.40754H45.2942C45.6543 7.40754 45.9997 7.26672 46.2544 7.01605C46.5091 6.76539 46.6521 6.42541 46.6521 6.07092C46.6536 4.46125 47.3039 2.91791 48.4603 1.7797C49.6166 0.641484 51.1846 0.00141572 52.82 0H55.6419C56.0021 0 56.3475 0.140822 56.6021 0.391487C56.8568 0.642151 56.9999 0.982125 56.9999 1.33662C56.9999 1.69111 56.8568 2.03109 56.6021 2.28175C56.3475 2.53241 56.0021 2.67324 55.6419 2.67324H52.82C51.9047 2.67394 51.0271 3.03214 50.3799 3.66918C49.7327 4.30621 49.3688 5.17002 49.3681 6.07092C49.3681 7.1344 48.9389 8.15432 48.1749 8.90632C47.4108 9.65831 46.3746 10.0808 45.2942 10.0808H40.286C39.2055 10.0808 38.1693 10.5032 37.4053 11.2552C36.6413 12.0072 36.212 13.0272 36.212 14.0906V18.3972C36.212 18.7517 36.069 19.0917 35.8143 19.3423C35.5596 19.593 35.2142 19.7338 34.8541 19.7338Z" fill="#0074BC" />
                        <path d="M46.2795 14.3721H40.0709C39.7107 14.3721 39.3653 14.2313 39.1106 13.9807C38.856 13.73 38.7129 13.39 38.7129 13.0355C38.7129 12.681 38.856 12.3411 39.1106 12.0904C39.3653 11.8397 39.7107 11.6989 40.0709 11.6989H46.2795C47.6945 11.6975 49.0511 11.1436 50.0516 10.1588C51.0522 9.17399 51.6149 7.83872 51.6163 6.44599C51.6163 6.0915 51.7594 5.75152 52.0141 5.50086C52.2688 5.2502 52.6142 5.10938 52.9743 5.10938C53.3345 5.10938 53.6799 5.2502 53.9345 5.50086C54.1892 5.75152 54.3323 6.0915 54.3323 6.44599C54.3301 8.54749 53.481 10.5623 51.9713 12.0483C50.4616 13.5343 48.4146 14.37 46.2795 14.3721Z" fill="#0074BC" />
                        <path d="M18.9166 39.832C13.8996 39.832 9.08807 37.8703 5.54053 34.3786C1.99299 30.8868 0 26.151 0 21.2129C0 16.2748 1.99299 11.539 5.54053 8.04721C9.08807 4.55546 13.8996 2.59381 18.9166 2.59381C23.7389 2.58177 28.378 4.41112 31.858 7.69702C31.9941 7.81648 32.1044 7.9617 32.1822 8.12401C32.26 8.28632 32.3039 8.4624 32.3111 8.64174C32.3183 8.82108 32.2887 9.00001 32.2241 9.16786C32.1595 9.33571 32.0613 9.48904 31.9352 9.61871C31.8091 9.74837 31.6578 9.85172 31.4903 9.92258C31.3227 9.99343 31.1424 10.0304 30.9601 10.0311C30.7777 10.0319 30.5971 9.99655 30.4289 9.92713C30.2608 9.85771 30.1085 9.75567 29.9813 9.62709C27.0055 6.81873 23.0392 5.25578 18.9166 5.26705C14.6199 5.28902 10.5081 6.99011 7.48565 9.99608C4.46324 13.002 2.77781 17.0667 2.80014 21.2958C2.82247 25.5249 4.55073 29.572 7.60472 32.5469C10.6587 35.5218 14.7883 37.1807 19.0849 37.1588C19.2811 37.1632 19.4774 37.1516 19.6716 37.124C19.8499 37.0893 20.0335 37.0903 20.2115 37.1267C20.3894 37.1632 20.5581 37.2345 20.7076 37.3363C20.857 37.4382 20.9842 37.5685 21.0815 37.7196C21.1789 37.8707 21.2444 38.0395 21.2742 38.216C21.3041 38.3925 21.2976 38.5731 21.2552 38.7471C21.2128 38.921 21.1353 39.0849 21.0274 39.2289C20.9195 39.3728 20.7833 39.494 20.6269 39.5852C20.4705 39.6764 20.2971 39.7358 20.117 39.7598C19.7196 39.8171 19.3181 39.8413 18.9166 39.832Z" fill="#0074BC" />
                        <path d="M52.647 50.9994H22.022C21.6619 50.9994 21.3165 50.8586 21.0618 50.6079C20.8071 50.3573 20.6641 50.0173 20.6641 49.6628C20.6641 49.3083 20.8071 48.9683 21.0618 48.7177C21.3165 48.467 21.6619 48.3262 22.022 48.3262H52.647C53.0072 48.3262 53.3526 48.467 53.6073 48.7177C53.8619 48.9683 54.005 49.3083 54.005 49.6628C54.005 50.0173 53.8619 50.3573 53.6073 50.6079C53.3526 50.8586 53.0072 50.9994 52.647 50.9994Z" fill="#0074BC" />
                    </svg>
                    <p>Project &<br> Task Management</p>
                </div>
                <div class="col-lg col-md-3 col-6 mb-lg-0 mb-4 text-center features">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.2995 20.35V19.1166C33.6399 19.1166 33.9162 18.8406 33.9162 18.5V14.8C33.9162 14.4594 33.6399 14.1833 33.2995 14.1833H29.9695L29.8501 13.7201C29.5774 12.6607 29.1539 11.6458 28.5919 10.7071L28.3453 10.2945L30.7095 7.92608C30.9475 7.6876 30.9475 7.30122 30.7095 7.06274L28.0906 4.43999C27.8488 4.20946 27.4689 4.20946 27.2271 4.43999L24.8585 6.80861L24.4461 6.56194C23.5059 5.99972 22.4901 5.57624 21.4292 5.30332L20.9662 5.18288V1.85C20.9662 1.50938 20.6902 1.23333 20.3496 1.23333H16.6496C16.309 1.23333 16.0329 1.50938 16.0329 1.85V5.17999L15.5697 5.29971C14.5103 5.57215 13.4954 5.99563 12.5562 6.55689L12.1436 6.80379L9.77569 4.43999C9.5336 4.20754 9.15131 4.20754 8.90922 4.43999L6.2896 7.05889C6.17446 7.17379 6.10966 7.32989 6.10966 7.49248C6.10966 7.65532 6.17446 7.81117 6.2896 7.92608L8.65822 10.2945L8.41155 10.7071C7.84981 11.6458 7.42609 12.6607 7.15365 13.7201L7.03273 14.1833H3.69961C3.35899 14.1833 3.08294 14.4594 3.08294 14.8V18.5C3.08294 18.8406 3.35899 19.1166 3.69961 19.1166V20.35C2.67801 20.35 1.84961 19.5216 1.84961 18.5V14.8C1.84961 13.7784 2.67801 12.95 3.69961 12.95H6.08557C6.33994 12.0972 6.68393 11.2739 7.11174 10.4939L5.41591 8.79808C5.06904 8.45193 4.87416 7.9822 4.87416 7.49248C4.87416 7.00276 5.06904 6.53304 5.41591 6.18713L8.03674 3.5663C8.76686 2.86749 9.91805 2.86749 10.6482 3.5663L12.3435 5.26141C13.1235 4.83384 13.9471 4.49058 14.7996 4.23644V1.85C14.7996 0.828403 15.628 0 16.6496 0H20.3496C21.3712 0 22.1996 0.828403 22.1996 1.85V4.23644C23.0523 4.49058 23.8754 4.83456 24.6556 5.26213L26.3515 3.5663C27.0818 2.86749 28.2328 2.86749 28.9631 3.5663L31.5835 6.18641C31.9301 6.53256 32.1247 7.0018 32.1247 7.49176C32.1247 7.98172 31.9301 8.45145 31.5835 8.79736L29.8876 10.4932C30.3152 11.2737 30.659 12.0972 30.9136 12.95H33.2995C34.3211 12.95 35.1495 13.7784 35.1495 14.8V18.5C35.1495 19.5216 34.3211 20.35 33.2995 20.35Z" fill="#0074BC" />
                        <path d="M27.1328 16.6489H25.8995C25.8995 12.5621 22.5864 9.24896 18.4995 9.24896C14.4127 9.24896 11.0995 12.5621 11.0995 16.6489H9.86621C9.86621 11.8809 13.7314 8.01562 18.4995 8.01562C23.2674 8.01562 27.1328 11.8809 27.1328 16.6489Z" fill="#0074BC" />
                        <path d="M18.5008 21.5836C16.4573 21.5836 14.8008 19.9268 14.8008 17.8836C14.8008 15.8402 16.4573 14.1836 18.5008 14.1836C20.5444 14.1836 22.2008 15.8402 22.2008 17.8836C22.1986 19.9263 20.5435 21.5814 18.5008 21.5836ZM18.5008 15.4169C17.1386 15.4169 16.0341 16.5214 16.0341 17.8836C16.0341 19.2458 17.1386 20.3502 18.5008 20.3502C19.863 20.3502 20.9674 19.2458 20.9674 17.8836C20.9674 16.5214 19.863 15.4169 18.5008 15.4169Z" fill="#0074BC" />
                        <path d="M28.9832 24.0504C26.9398 24.0504 25.2832 22.3936 25.2832 20.3504C25.2832 18.307 26.9398 16.6504 28.9832 16.6504C31.0266 16.6504 32.6832 18.307 32.6832 20.3504C32.681 22.3931 31.0259 24.0482 28.9832 24.0504ZM28.9832 17.8837C27.621 17.8837 26.5165 18.9882 26.5165 20.3504C26.5165 21.7126 27.621 22.817 28.9832 22.817C30.3454 22.817 31.4499 21.7126 31.4499 20.3504C31.4499 18.9882 30.3454 17.8837 28.9832 17.8837Z" fill="#0074BC" />
                        <path d="M8.0164 24.0504C5.97297 24.0504 4.31641 22.3936 4.31641 20.3504C4.31641 18.307 5.97297 16.6504 8.0164 16.6504C10.0601 16.6504 11.7164 18.307 11.7164 20.3504C11.7142 22.3931 10.0591 24.0482 8.0164 24.0504ZM8.0164 17.8837C6.65419 17.8837 5.54974 18.9882 5.54974 20.3504C5.54974 21.7126 6.65419 22.817 8.0164 22.817C9.3786 22.817 10.4831 21.7126 10.4831 20.3504C10.4831 18.9882 9.3786 17.8837 8.0164 17.8837Z" fill="#0074BC" />
                        <path d="M34.5737 25.6314C33.6547 24.9998 32.5652 24.6628 31.4499 24.6659H26.5166C26.2167 24.6686 25.9173 24.6958 25.6217 24.7471C25.2271 24.1299 24.7138 23.5976 24.1116 23.1801C24.0213 23.112 23.9264 23.0501 23.8274 22.9954C22.9648 22.4729 21.975 22.1978 20.9666 22.1993H16.0333C14.1474 22.1925 12.3902 23.1548 11.3799 24.7471C11.0836 24.6958 10.7837 24.6686 10.4833 24.6659H5.54999C4.43565 24.6628 3.34637 24.9993 2.42788 25.6302C0.909822 26.6631 0.000963539 28.3799 0 30.2159V32.6826C0.00216795 34.3663 0.981847 35.8955 2.51122 36.6008C3.07586 36.8667 3.69276 37.0028 4.31666 36.9992H10.4833V35.7659H4.93332V28.9826H3.69999V35.704C3.46778 35.6575 3.24231 35.5823 3.0284 35.4809C1.93599 34.9772 1.23574 33.8853 1.23333 32.6826V30.2159C1.23478 28.787 1.94274 27.4513 3.12404 26.6477C3.83778 26.1577 4.68401 25.8968 5.54999 25.8992H10.4833C10.5919 25.8992 10.6967 25.9108 10.8027 25.918C10.5941 26.5063 10.486 27.1253 10.4833 27.7492V33.9159C10.4855 35.618 11.8648 36.9971 13.5666 36.9992H15.4166V27.1326H14.1833V35.7659H13.5666C12.545 35.7659 11.7166 34.9375 11.7166 33.9159V27.7492C11.7166 25.365 13.6495 23.4326 16.0333 23.4326H20.9666C21.7601 23.4331 22.5377 23.6528 23.2143 24.0671C23.2769 24.1013 23.3372 24.1398 23.3943 24.1822C23.9721 24.578 24.4464 25.1067 24.7769 25.7239C25.1091 26.3473 25.2833 27.0427 25.2833 27.7492V33.9159C25.2833 34.9375 24.4549 35.7659 23.4333 35.7659H22.8166V27.1326H21.5833V36.9992H23.4333C25.1354 36.9971 26.5144 35.618 26.5166 33.9159V27.7492C26.5137 27.1253 26.406 26.5065 26.1977 25.918C26.3039 25.9108 26.4087 25.8992 26.5166 25.8992H31.4499C32.3164 25.8968 33.1633 26.1584 33.8776 26.6489C35.0579 27.453 35.7649 28.7877 35.7666 30.2159V32.6826C35.7644 33.8896 35.0589 34.9847 33.9612 35.4857C33.7504 35.5855 33.5283 35.6587 33.2999 35.704V28.9826H32.0666V35.7659H26.5166V36.9992H32.6833C33.3035 37.0031 33.9168 36.8687 34.4783 36.6056C36.0128 35.9025 36.9975 34.3704 36.9999 32.6826V30.2159C36.999 28.3806 36.0908 26.6645 34.5737 25.6314Z" fill="#0074BC" />
                        <path d="M16.0332 35.7676H20.9665V37.0009H16.0332V35.7676Z" fill="#0074BC" />
                    </svg>
                    <p>Time Tracking<br> &<br> Monitoring</p>
                </div>
                <div class="col-lg col-md-3 col-6 mb-md-0 mb-4 text-center features">
                    <svg width="42" height="37" viewBox="0 0 42 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.7578 0H30.9801C30.6462 0 30.3755 0.270699 30.3755 0.604599C30.3755 0.938498 30.6462 1.2092 30.9801 1.2092H38.7578C39.4784 1.2092 40.0647 1.7955 40.0647 2.51618V25.4888H1.2092V2.51618C1.2092 1.7955 1.7955 1.2092 2.51618 1.2092H28.1586C28.4925 1.2092 28.7632 0.938498 28.7632 0.604599C28.7632 0.270699 28.4925 0 28.1586 0H2.51618C1.12875 0 0 1.12875 0 2.51618V27.4064C0 28.7938 1.12875 29.9226 2.51618 29.9226H8.30429C8.63819 29.9226 8.90888 29.6519 8.90888 29.318C8.90888 28.9841 8.63819 28.7134 8.30429 28.7134H2.51618C1.7955 28.7134 1.2092 28.1271 1.2092 27.4064V26.698H40.0647V27.4064C40.0647 28.1271 39.4784 28.7134 38.7578 28.7134H11.0991C10.7652 28.7134 10.4945 28.9841 10.4945 29.318C10.4945 29.6519 10.7652 29.9226 11.0991 29.9226H14.9044L14.3075 33.3724H13.2042C12.204 33.3724 11.3904 34.186 11.3904 35.1862C11.3904 36.1864 12.204 37 13.2042 37H28.0697C29.0699 37 29.8835 36.1864 29.8835 35.1862C29.8835 34.186 29.0699 33.3724 28.0697 33.3724H26.9665L26.3695 29.9226H38.7577C40.1451 29.9226 41.2739 28.7938 41.2739 27.4064V2.51618C41.2739 1.12875 40.1452 0 38.7578 0ZM25.7393 33.3724H24.0933C23.7594 33.3724 23.4887 33.6431 23.4887 33.977C23.4887 34.3109 23.7594 34.5816 24.0933 34.5816H28.0697C28.4032 34.5816 28.6743 34.8528 28.6743 35.1862C28.6743 35.5196 28.4032 35.7908 28.0697 35.7908H13.2042C12.8708 35.7908 12.5996 35.5196 12.5996 35.1862C12.5996 34.8528 12.8708 34.5816 13.2042 34.5816H21.2709C21.6048 34.5816 21.8755 34.3109 21.8755 33.977C21.8755 33.6431 21.6048 33.3724 21.2709 33.3724H15.5346L16.1316 29.9226H25.1424L25.7393 33.3724Z" fill="#0074BC" />
                        <path d="M32.7064 15.2969C32.4789 15.2969 32.2707 15.4246 32.1675 15.6273L29.3143 21.2352L26.9065 16.5028C26.8033 16.3 26.5951 16.1723 26.3676 16.1723C26.1401 16.1723 25.9319 16.3 25.8287 16.5028L24.5235 19.0681H22.4396C22.1057 19.0681 21.835 19.3388 21.835 19.6727C21.835 20.0066 22.1057 20.2773 22.4396 20.2773H24.8942C25.1217 20.2773 25.3299 20.1496 25.4331 19.9469L26.3676 18.1103L28.7754 22.8427C28.8785 23.0454 29.0868 23.1731 29.3143 23.1731C29.5417 23.1731 29.75 23.0454 29.8532 22.8427L32.7064 17.2348L34.0862 19.947C34.1894 20.1497 34.3976 20.2774 34.6251 20.2774H37.0798C37.4137 20.2774 37.6844 20.0067 37.6844 19.6728C37.6844 19.3389 37.4137 19.0682 37.0798 19.0682H34.9959L33.2453 15.6274C33.1421 15.4246 32.9339 15.2969 32.7064 15.2969Z" fill="#0074BC" />
                        <path d="M22.4396 13.5075H25.5769C25.9108 13.5075 26.1815 13.2368 26.1815 12.9029V6.53819C26.1815 6.20429 25.9108 5.93359 25.5769 5.93359H22.4396C22.1057 5.93359 21.835 6.20429 21.835 6.53819V12.9029C21.835 13.2368 22.1057 13.5075 22.4396 13.5075ZM23.0442 7.14279H24.9723V12.2983H23.0442V7.14279Z" fill="#0074BC" />
                        <path d="M31.3494 7.66211H28.212C27.8781 7.66211 27.6074 7.93281 27.6074 8.26671V12.9019C27.6074 13.2358 27.8781 13.5065 28.212 13.5065H31.3494C31.6833 13.5065 31.954 13.2358 31.954 12.9019V8.26671C31.954 7.93281 31.6833 7.66211 31.3494 7.66211ZM30.7448 12.2973H28.8166V8.87131H30.7448V12.2973Z" fill="#0074BC" />
                        <path d="M37.0799 13.5076C37.4138 13.5076 37.6845 13.2369 37.6845 12.903V4.94249C37.6845 4.60859 37.4138 4.33789 37.0799 4.33789H33.9425C33.6086 4.33789 33.3379 4.60859 33.3379 4.94249V12.903C33.3379 13.2369 33.6086 13.5076 33.9425 13.5076H37.0799ZM34.5471 5.54709H36.4753V12.2984H34.5471V5.54709Z" fill="#0074BC" />
                        <path d="M17.8879 11.1758H4.1837C3.8498 11.1758 3.5791 11.4465 3.5791 11.7804C3.5791 12.1143 3.8498 12.385 4.1837 12.385H17.8879C18.2218 12.385 18.4925 12.1143 18.4925 11.7804C18.4925 11.4465 18.2218 11.1758 17.8879 11.1758Z" fill="#0074BC" />
                        <path d="M4.1837 15.5959H6.63611C6.97001 15.5959 7.24071 15.3252 7.24071 14.9913C7.24071 14.6574 6.97001 14.3867 6.63611 14.3867H4.1837C3.8498 14.3867 3.5791 14.6574 3.5791 14.9913C3.5791 15.3252 3.8498 15.5959 4.1837 15.5959Z" fill="#0074BC" />
                        <path d="M17.8879 14.3867H9.40636C9.07246 14.3867 8.80176 14.6574 8.80176 14.9913C8.80176 15.3252 9.07246 15.5959 9.40636 15.5959H17.8879C18.2218 15.5959 18.4925 15.3252 18.4925 14.9913C18.4925 14.6574 18.2218 14.3867 17.8879 14.3867Z" fill="#0074BC" />
                        <path d="M17.8879 4.33789H4.1837C3.8498 4.33789 3.5791 4.60859 3.5791 4.94249C3.5791 5.27639 3.8498 5.54709 4.1837 5.54709H17.8879C18.2218 5.54709 18.4925 5.27639 18.4925 4.94249C18.4925 4.60859 18.2218 4.33789 17.8879 4.33789Z" fill="#0074BC" />
                        <path d="M4.1837 8.75803H12.6821C13.016 8.75803 13.2867 8.48733 13.2867 8.15343C13.2867 7.81953 13.016 7.54883 12.6821 7.54883H4.1837C3.8498 7.54883 3.5791 7.81953 3.5791 8.15343C3.5791 8.48733 3.8498 8.75803 4.1837 8.75803Z" fill="#0074BC" />
                        <path d="M17.8878 7.54883H15.4523C15.1184 7.54883 14.8477 7.81953 14.8477 8.15343C14.8477 8.48733 15.1184 8.75803 15.4523 8.75803H17.8878C18.2217 8.75803 18.4924 8.48733 18.4924 8.15343C18.4924 7.81953 18.2217 7.54883 17.8878 7.54883Z" fill="#0074BC" />
                        <path d="M18.4925 18.1651C18.4925 17.8312 18.2218 17.5605 17.8879 17.5605H4.1837C3.8498 17.5605 3.5791 17.8312 3.5791 18.1651C3.5791 18.499 3.8498 18.7697 4.1837 18.7697H17.8879C18.2218 18.7697 18.4925 18.499 18.4925 18.1651Z" fill="#0074BC" />
                        <path d="M4.1837 20.7559C3.8498 20.7559 3.5791 21.0266 3.5791 21.3605C3.5791 21.6944 3.8498 21.9651 4.1837 21.9651H10.6328C10.9667 21.9651 11.2374 21.6944 11.2374 21.3605C11.2374 21.0266 10.9667 20.7559 10.6328 20.7559H4.1837Z" fill="#0074BC" />
                    </svg>
                    <p>Time Sheet Management</p>
                </div>
                <div class="col-lg col-md-3 col-6 mb-md-0 mb-4 text-center features">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.97656 14.9706C5.97656 16.0731 6.86846 16.9667 7.96875 16.9667C9.06904 16.9667 9.96094 16.0731 9.96094 14.9706V9.98043H14.8418C15.9421 9.98043 16.834 9.08678 16.834 7.98434C16.834 6.88191 15.9421 5.98826 14.8418 5.98826H9.96094V1.99609C9.96094 0.893648 9.06904 0 7.96875 0C6.86846 0 5.97656 0.893648 5.97656 1.99609V5.98826H1.99219C0.891902 5.98826 0 6.88191 0 7.98434C0 9.08678 0.891902 9.98043 1.99219 9.98043H5.97656V14.9706Z" fill="#0074BC" />
                        <path d="M43.0312 20.959C41.931 20.959 41.0391 21.8526 41.0391 22.9551V28.1449C41.0391 29.2473 41.931 30.141 43.0312 30.141C44.1315 30.141 45.0234 29.2473 45.0234 28.1449V22.9551C45.0234 21.8526 44.1315 20.959 43.0312 20.959Z" fill="#0074BC" />
                        <path d="M36.0586 9.98045H37.0547C39.2517 9.98045 41.0391 11.7713 41.0391 13.9726V14.9707C41.0391 16.0731 41.931 16.9668 43.0312 16.9668C44.1315 16.9668 45.0234 16.0731 45.0234 14.9707V13.9726C45.0234 9.57006 41.4487 5.98828 37.0547 5.98828H36.0586C34.9583 5.98828 34.0664 6.88193 34.0664 7.98437C34.0664 9.08681 34.9583 9.98045 36.0586 9.98045Z" fill="#0074BC" />
                        <path d="M7.96875 20.959C6.86846 20.959 5.97656 21.8526 5.97656 22.9551V28.1449C5.97656 29.2473 6.86846 30.141 7.96875 30.141C9.06904 30.141 9.96094 29.2473 9.96094 28.1449V22.9551C9.96094 21.8526 9.06904 20.959 7.96875 20.959Z" fill="#0074BC" />
                        <path d="M14.9414 41.0193H13.9453C11.7483 41.0193 9.96094 39.2284 9.96094 37.0271V36.1289C9.96094 35.0265 9.06904 34.1328 7.96875 34.1328C6.86846 34.1328 5.97656 35.0265 5.97656 36.1289V37.0271C5.97656 41.4297 9.55134 45.0115 13.9453 45.0115H14.9414C16.0417 45.0115 16.9336 44.1178 16.9336 43.0154C16.9336 41.913 16.0417 41.0193 14.9414 41.0193Z" fill="#0074BC" />
                        <path d="M49.0078 41.0193H45.0234V36.1289C45.0234 35.0265 44.1315 34.1328 43.0312 34.1328C41.931 34.1328 41.0391 35.0265 41.0391 36.1289V41.0193H36.0586C34.9583 41.0193 34.0664 41.913 34.0664 43.0154C34.0664 44.1178 34.9583 45.0115 36.0586 45.0115H41.0391V49.0037C41.0391 50.1061 41.931 50.9997 43.0312 50.9997C44.1315 50.9997 45.0234 50.1061 45.0234 49.0037V45.0115H49.0078C50.1081 45.0115 51 44.1178 51 43.0154C51 41.913 50.1081 41.0193 49.0078 41.0193Z" fill="#0074BC" />
                        <path d="M28.0898 5.98828H22.9102C21.8099 5.98828 20.918 6.88193 20.918 7.98437C20.918 9.08681 21.8099 9.98045 22.9102 9.98045H28.0898C29.1901 9.98045 30.082 9.08681 30.082 7.98437C30.082 6.88193 29.1901 5.98828 28.0898 5.98828Z" fill="#0074BC" />
                        <path d="M28.0898 41.0195H22.9102C21.8099 41.0195 20.918 41.9132 20.918 43.0156C20.918 44.1181 21.8099 45.0117 22.9102 45.0117H28.0898C29.1901 45.0117 30.082 44.1181 30.082 43.0156C30.082 41.9132 29.1901 41.0195 28.0898 41.0195Z" fill="#0074BC" />
                    </svg>
                    <p>Productivity Analytics & Dashboards</p>
                </div>
                <div class="col-lg col-md-3 col-6 text-center features">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4194 20.0098V8.3071C35.4406 8.01587 37 6.27747 37 4.17742C37 1.87447 35.1261 0 32.8226 0C30.519 0 28.6452 1.87447 28.6452 4.17742H0V28.0484H17.9337C18.244 33.035 22.3886 37 27.4516 37C32.7164 37 37 32.7164 37 27.4516C37 24.4445 35.5994 21.7614 33.4194 20.0098ZM32.8226 1.19355C34.4679 1.19355 35.8065 2.53211 35.8065 4.17742C35.8065 5.82273 34.4679 7.16129 32.8226 7.16129C31.1773 7.16129 29.8387 5.82273 29.8387 4.17742C29.8387 2.53211 31.1773 1.19355 32.8226 1.19355ZM1.19355 5.37097H28.8212C28.9638 5.84719 29.1906 6.28582 29.4818 6.67492L25.832 10.3248C25.598 10.2126 25.3402 10.1452 25.0645 10.1452C24.7888 10.1452 24.531 10.2126 24.2977 10.3248L23.0952 9.12229C23.2068 8.88836 23.2742 8.63055 23.2742 8.35484C23.2742 7.36777 22.4709 6.56452 21.4839 6.56452C20.4968 6.56452 19.6936 7.36777 19.6936 8.35484C19.6936 8.63055 19.761 8.88836 19.8732 9.12169L16.8804 12.1145C16.6464 12.0029 16.3886 11.9355 16.1129 11.9355C15.1258 11.9355 14.3226 12.7387 14.3226 13.7258C14.3226 14.7129 15.1258 15.5161 16.1129 15.5161C17.1 15.5161 17.9032 14.7129 17.9032 13.7258C17.9032 13.4501 17.8358 13.1923 17.7236 12.959L20.7164 9.96613C20.9504 10.0777 21.2082 10.1452 21.4839 10.1452C21.7596 10.1452 22.0174 10.0777 22.2507 9.96553L23.4532 11.168C23.3416 11.402 23.2742 11.6598 23.2742 11.9355C23.2742 12.9225 24.0775 13.7258 25.0645 13.7258C26.0516 13.7258 26.8548 12.9225 26.8548 11.9355C26.8548 11.6598 26.7874 11.402 26.6752 11.1686L30.3257 7.51876C30.8717 7.92815 31.5198 8.20565 32.2258 8.30769V19.1958C30.8192 18.3789 29.1918 17.9032 27.4516 17.9032C24.599 17.9032 22.0413 19.1672 20.2903 21.1574V18.5H16.7097V25.6613H18.0775C18.0035 26.051 17.9587 26.4502 17.9337 26.8548H1.19355V5.37097ZM25.0645 11.3387C25.3933 11.3387 25.6613 11.6061 25.6613 11.9355C25.6613 12.2649 25.3933 12.5323 25.0645 12.5323C24.7357 12.5323 24.4677 12.2649 24.4677 11.9355C24.4677 11.6061 24.7357 11.3387 25.0645 11.3387ZM20.8871 8.35484C20.8871 8.02542 21.1551 7.75806 21.4839 7.75806C21.8127 7.75806 22.0806 8.02542 22.0806 8.35484C22.0806 8.68426 21.8127 8.95161 21.4839 8.95161C21.1551 8.95161 20.8871 8.68426 20.8871 8.35484ZM16.7097 13.7258C16.7097 14.0552 16.4417 14.3226 16.1129 14.3226C15.7841 14.3226 15.5161 14.0552 15.5161 13.7258C15.5161 13.3964 15.7841 13.129 16.1129 13.129C16.4417 13.129 16.7097 13.3964 16.7097 13.7258ZM27.4516 32.2258C24.8192 32.2258 22.6774 30.084 22.6774 27.4516C22.6774 24.8192 24.8192 22.6774 27.4516 22.6774C30.084 22.6774 32.2258 24.8192 32.2258 27.4516C32.2258 30.084 30.084 32.2258 27.4516 32.2258ZM19.0968 22.8391C18.8109 23.3548 18.5746 23.8996 18.3872 24.4677H17.9032V19.6936H19.0968V22.8391ZM26.8548 19.1272V21.5143C23.8435 21.8151 21.4839 24.3627 21.4839 27.4516C21.4839 28.3247 21.6772 29.1524 22.0156 29.9008L19.9454 31.0961C19.4071 29.9933 19.0968 28.7591 19.0968 27.4516C19.0968 23.0462 22.5264 19.4351 26.8548 19.1272ZM27.4516 35.8065C24.5787 35.8065 22.0401 34.3485 20.5362 32.1333L22.6148 30.9332C23.6997 32.4359 25.4608 33.4194 27.4516 33.4194C29.4425 33.4194 31.2035 32.4359 32.2885 30.9332L34.367 32.1333C32.8632 34.3485 30.3245 35.8065 27.4516 35.8065ZM34.9578 31.0961L32.8876 29.9008C33.226 29.1524 33.4194 28.3247 33.4194 27.4516C33.4194 24.3627 31.0597 21.8145 28.0484 21.5143V19.1272C32.3768 19.4351 35.8065 23.0462 35.8065 27.4516C35.8065 28.7591 35.4961 29.9933 34.9578 31.0961Z" fill="#0074BC" />
                        <path d="M27.4517 23.8711C25.477 23.8711 23.8711 25.477 23.8711 27.4517C23.8711 29.4265 25.477 31.0324 27.4517 31.0324C29.4265 31.0324 31.0324 29.4265 31.0324 27.4517C31.0324 25.477 29.4265 23.8711 27.4517 23.8711ZM27.4517 29.8388C26.1353 29.8388 25.0646 28.7682 25.0646 27.4517C25.0646 26.1353 26.1353 25.0646 27.4517 25.0646C28.7682 25.0646 29.8388 26.1353 29.8388 27.4517C29.8388 28.7682 28.7682 29.8388 27.4517 29.8388Z" fill="#0074BC" />
                        <path d="M2.38672 6.56445H3.58027V7.758H2.38672V6.56445Z" fill="#0074BC" />
                        <path d="M4.77441 6.56445H13.1293V7.758H4.77441V6.56445Z" fill="#0074BC" />
                        <path d="M2.38672 8.95117H3.58027V10.1447H2.38672V8.95117Z" fill="#0074BC" />
                        <path d="M4.77441 8.95117H13.1293V10.1447H4.77441V8.95117Z" fill="#0074BC" />
                        <path d="M2.38672 11.3398H3.58027V12.5334H2.38672V11.3398Z" fill="#0074BC" />
                        <path d="M4.77441 11.3398H13.1293V12.5334H4.77441V11.3398Z" fill="#0074BC" />
                        <path d="M2.38672 13.7266H3.58027V14.9201H2.38672V13.7266Z" fill="#0074BC" />
                        <path d="M4.77441 13.7266H13.1293V14.9201H4.77441V13.7266Z" fill="#0074BC" />
                        <path d="M2.38672 25.6611H5.96736V19.6934H2.38672V25.6611ZM3.58027 20.8869H4.77382V24.4676H3.58027V20.8869Z" fill="#0074BC" />
                        <path d="M7.16113 25.6609H10.7418V20.8867H7.16113V25.6609ZM8.35468 22.0803H9.54823V24.4674H8.35468V22.0803Z" fill="#0074BC" />
                        <path d="M11.9355 25.6617H15.5162V16.1133H11.9355V25.6617ZM13.1291 17.3068H14.3226V24.4681H13.1291V17.3068Z" fill="#0074BC" />
                    </svg>
                    <p>Inhouse &<br> Remote Workforce Visibility</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Second Section -->

    <!-- Get A Pass Section -->
    <section class="get-a-pass-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 text">
                    <h2>Get a Pass, and Don’t Miss StaffViz<br> at ITCN Asia 2024</h2>
                </div>
                <div class="col-md-4 link text-center">
                    <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" target="_blank">
                        SCHEDULE A CALL
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Get A Pass Section -->

    <!-- Door to Track Section -->
    <section class="door-to-track-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center start-text">
                    <h2>Open the <span>door to track</span> the activities of<br> your staff in <span>real-time</span></h2>
                    <p>Use the power of real-time monitoring with our advanced tracking tool. Get instant visibility<br> into your staff's activities, ensuring productivity and accountability.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3 left-features">
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="text order-lg-1 order-2">
                            <h6>Human Resource Management</h6>
                            <p>Streamline HR processes with StaffViz, ensuring efficient employee management, from hiring to retirement, with seamless solutions. </p>
                        </div>
                        <div class="img order-lg-2 order-1">
                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5170_96)">
                                    <path d="M25.4889 14.6328C19.4889 14.6328 14.6328 19.4889 14.6328 25.4889C14.6328 31.4889 19.4889 36.345 25.4889 36.345C31.4889 36.345 36.345 31.4889 36.345 25.4889C36.345 19.4889 31.4673 14.6328 25.4889 14.6328ZM25.4889 34.5537C22.9637 34.5537 20.5465 33.4961 18.8414 31.6184C18.9278 30.6688 19.5753 29.8702 20.4817 29.5681L24.0645 28.381C24.9925 28.0789 26.0069 28.0789 26.935 28.381L30.5177 29.5681C31.4242 29.8702 32.0501 30.6688 32.158 31.6184C30.453 33.4961 28.0357 34.5537 25.5105 34.5537H25.4889ZM25.4889 26.3307C23.8055 26.3307 22.4458 24.9709 22.4458 23.2875C22.4458 21.604 23.8055 20.2443 25.4889 20.2443C27.1724 20.2443 28.5321 21.604 28.5321 23.2875C28.5321 24.9709 27.1724 26.3307 25.4889 26.3307ZM33.453 29.8271C32.935 28.899 32.0932 28.1868 31.1004 27.8414L28.5753 26.9997C30.6472 25.2947 30.9494 22.2515 29.2443 20.1796C27.5393 18.1076 24.4961 17.8055 22.4242 19.5105C20.3522 21.2155 20.0501 24.2587 21.7551 26.3307C21.9494 26.5896 22.1868 26.8055 22.4458 27.0213L19.9206 27.863C18.9062 28.2084 18.0645 28.899 17.5681 29.8486C15.1724 25.4458 16.8127 19.9637 21.194 17.5681C25.5968 15.1724 31.0789 16.8127 33.4745 21.194C34.9422 23.8918 34.9422 27.1508 33.4745 29.8486L33.453 29.8271Z" fill="#0E1E45" stroke="white" stroke-width="0.13" stroke-miterlimit="10" />
                                    <path d="M40.8776 22.8772C41.6545 22.9636 44.5035 21.5391 45.2589 21.2801C46.6401 20.6758 47.2876 19.0787 46.6833 17.6974C46.4027 17.0499 45.9063 16.5535 45.2589 16.2729C44.5898 15.9924 43.856 15.9924 43.1869 16.2729L39.8416 17.6542C38.4603 18.237 37.8128 19.8557 38.4171 21.237C38.8488 22.2298 39.82 22.8772 40.8776 22.8772ZM40.5322 19.3161L43.8776 17.9348C44.3308 17.7406 44.8704 17.9564 45.0646 18.4312C45.2589 18.8844 45.043 19.424 44.5682 19.6183L41.2229 20.9995C40.7696 21.1938 40.2301 20.978 40.0358 20.5031C39.8416 20.0499 40.0574 19.5103 40.5322 19.3161Z" fill="#0E1E45" stroke="white" stroke-width="0.13" stroke-miterlimit="10" />
                                    <path d="M35.0939 15.8843C36.1515 16.9419 37.8781 16.9419 38.9357 15.8843L41.504 13.316C42.5616 12.2368 42.54 10.5318 41.4609 9.47424C40.4033 8.43827 38.7198 8.43827 37.6623 9.47424L35.0939 12.0426C34.0364 13.1001 34.0364 14.8268 35.0939 15.8843ZM36.3673 13.316L38.9357 10.7476C39.1083 10.575 39.3457 10.4886 39.5832 10.4886C40.0796 10.4886 40.4896 10.9203 40.4896 11.4167C40.4896 11.6541 40.4033 11.8699 40.2306 12.0426L37.6623 14.6109C37.2954 14.9563 36.7342 14.9563 36.3889 14.6109C36.0436 14.2656 36.0436 13.6829 36.3889 13.3376L36.3673 13.316Z" fill="#0E1E45" stroke="white" stroke-width="0.13" stroke-miterlimit="10" />
                                    <path d="M30.9501 12.8415C32.0508 12.8415 33.0436 12.1724 33.4536 11.1581L34.8349 7.81273C35.3961 6.40985 34.727 4.83431 33.3242 4.27316C31.9429 3.73359 30.3889 4.35949 29.8062 5.7192L28.4249 9.06453C27.8637 10.4674 28.5328 12.0645 29.9357 12.6257C30.2594 12.7552 30.5831 12.8199 30.9285 12.8199L30.9501 12.8415ZM30.1083 9.77676L31.4896 6.43143C31.6839 5.9782 32.2019 5.74079 32.6767 5.93503C33.1299 6.12927 33.3673 6.64726 33.1731 7.12208L31.7918 10.4674C31.5975 10.9206 31.058 11.1365 30.6047 10.9422C30.1515 10.748 29.9572 10.23 30.1299 9.77676H30.1083Z" fill="#0E1E45" stroke="white" stroke-width="0.13" stroke-miterlimit="10" />
                                    <path d="M49.9429 24.5821H39.9717C39.4753 24.5821 39.0652 24.9922 39.0652 25.4886C39.0652 32.9994 32.9789 39.0642 25.4897 39.0642C18.0005 39.0642 11.9142 32.9778 11.9142 25.4886C11.9142 17.9994 18.0005 11.9131 25.4897 11.9131C25.9861 11.9131 26.3962 11.503 26.3962 11.0066V1.03538C26.3962 0.538978 25.9861 0.128906 25.4897 0.128906H21.8638C21.4106 0.128906 21.0221 0.452647 20.9573 0.905885L20.4609 4.33754C18.1947 4.87711 16.0365 5.762 14.0508 6.99222L11.2883 4.92027C10.9213 4.6397 10.4249 4.68286 10.1012 5.0066L4.9861 10.1217C4.66236 10.4455 4.64077 10.9419 4.89977 11.3088L6.97171 14.0714C5.74149 16.057 4.8566 18.2152 4.31703 20.4814L0.885377 20.9778C0.432139 21.0426 0.108398 21.4311 0.108398 21.8843V29.1361C0.108398 29.5893 0.432139 29.9778 0.885377 30.0426L4.31703 30.539C4.8566 32.8052 5.74149 34.9634 6.97171 36.9491L4.89977 39.7116C4.61919 40.0786 4.66236 40.575 4.9861 40.8987L10.1012 46.0138C10.4249 46.3375 10.9213 46.3591 11.2883 46.1001L14.0508 44.0282C16.0365 45.2584 18.1947 46.1433 20.4609 46.6829L20.9573 50.1145C21.0221 50.5678 21.4106 50.8915 21.8638 50.8915H29.1156C29.5688 50.8915 29.9573 50.5678 30.0221 50.1145L30.5185 46.6829C32.7847 46.1433 34.9429 45.2584 36.9286 44.0282L39.6911 46.1001C40.058 46.3807 40.5545 46.3375 40.8782 46.0138L45.9933 40.8987C46.317 40.575 46.3386 40.0786 46.0796 39.7116L44.0077 36.9491C45.2379 34.9634 46.1228 32.8052 46.6624 30.539L50.094 30.0426C50.5473 29.9778 50.871 29.5893 50.871 29.1361V25.5102C50.871 25.0138 50.4609 24.6037 49.9645 24.6037L49.9429 24.5821ZM49.0365 28.316L45.7559 28.7908C45.3674 28.8555 45.0652 29.1361 45.0005 29.503C44.5041 31.985 43.5113 34.3375 42.13 36.4311C41.9142 36.7548 41.9357 37.1649 42.1516 37.467L44.1372 40.1001L40.1228 44.1145L37.4897 42.1289C37.1875 41.8915 36.7559 41.8915 36.4537 42.1073C34.3386 43.5102 31.9861 44.4814 29.5257 44.9778C29.1588 45.0642 28.8566 45.3663 28.8134 45.7332L28.3386 49.0138H22.6624L22.1875 45.7332C22.1228 45.3447 21.8422 45.0426 21.4753 44.9778C18.9933 44.4814 16.6408 43.4886 14.5472 42.1073C14.2235 41.8915 13.8134 41.9131 13.5113 42.1289L10.8782 44.1145L6.8638 40.1001L8.84941 37.467C9.08682 37.1649 9.08682 36.7332 8.87099 36.4311C7.46811 34.316 6.49689 31.9634 6.00049 29.503C5.91415 29.1361 5.612 28.8339 5.24509 28.7908L1.96451 28.316V22.6397L5.24509 22.1649C5.63358 22.1001 5.93574 21.8196 6.00049 21.4526C6.49689 18.9706 7.48969 16.6181 8.87099 14.5246C9.08682 14.2009 9.06523 13.7908 8.84941 13.4886L6.8638 10.8555L10.8782 6.84114L13.5113 8.82675C13.8134 9.06416 14.2451 9.06416 14.5472 8.84833C16.6624 7.44545 19.0149 6.47423 21.4753 5.97783C21.8422 5.8915 22.1444 5.58934 22.1875 5.22243L22.6624 1.94186H24.5832V10.1217C16.1012 10.6181 9.62638 17.9131 10.1228 26.3951C10.6192 34.8771 17.9142 41.3519 26.3962 40.8555C34.1875 40.4023 40.4034 34.1865 40.8566 26.3951H49.0365V28.316Z" fill="#0E1E45" stroke="white" stroke-width="0.13" stroke-miterlimit="10" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5170_96">
                                        <rect width="51" height="51" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="text order-lg-1 order-2">
                            <h6>Employee Onboarding & Trainings</h6>
                            <p>Accelerate onboarding and skill development with tailored training modules, ensuring your team is equipped to excel from day one. </p>
                        </div>
                        <div class="img order-lg-2 order-1">
                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_5173_1304" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-1" y="0" width="52" height="51">
                                    <path d="M50.9473 50.9502V0.0498085H0.046875V50.9502H50.9473Z" fill="white" stroke="white" stroke-width="0.0996094" />
                                </mask>
                                <g mask="url(#mask0_5173_1304)">
                                    <path d="M9.14029 41.0391C7.07857 41.0391 5.40723 39.3678 5.40723 37.3061V36.2215C5.40723 34.1597 7.07857 32.4884 9.14029 32.4884C11.202 32.4884 12.8733 34.1597 12.8733 36.2215V37.3061C12.8733 39.3678 11.202 41.0391 9.14029 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.1515 41.0378H6.13073C3.28738 41.0378 0.982422 43.3428 0.982422 46.1862V50.0039H17.2998V46.1862C17.2998 43.3428 14.9949 41.0378 12.1515 41.0378Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M25.4577 41.0391C23.396 41.0391 21.7246 39.3678 21.7246 37.3061V36.2215C21.7246 34.1597 23.396 32.4884 25.4577 32.4884C27.5194 32.4884 29.1907 34.1597 29.1907 36.2215V37.3061C29.1907 39.3678 27.5194 41.0391 25.4577 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M29.9803 50.0039H33.6162V46.1862C33.6162 43.3428 31.3113 41.0378 28.4679 41.0378H22.4471C19.6038 41.0378 17.2988 43.3428 17.2988 46.1862V50.0039H21.0155" fill="white" />
                                    <path d="M29.9803 50.0039H33.6162V46.1862C33.6162 43.3428 31.3113 41.0378 28.4679 41.0378H22.4471C19.6038 41.0378 17.2988 43.3428 17.2988 46.1862V50.0039H21.0155" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41.7751 41.0391C39.7133 41.0391 38.042 39.3678 38.042 37.3061V36.2215C38.042 34.1597 39.7133 32.4884 41.7751 32.4884C43.8368 32.4884 45.5081 34.1597 45.5081 36.2215V37.3061C45.5081 39.3678 43.8368 41.0391 41.7751 41.0391Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M44.7853 41.0378H38.7645C35.9212 41.0378 33.6162 43.3428 33.6162 46.1862V50.0039H49.9336V46.1862C49.9336 43.3428 47.6287 41.0378 44.7853 41.0378Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M28.1337 11.2943C27.8624 10.1961 27.4289 9.16186 26.8594 8.21876L28.3798 6.69832L24.581 2.89962L23.0606 4.41996C22.1175 3.85049 21.0833 3.41699 19.9851 3.14555V0.995884H14.6129V3.14555C13.5146 3.41699 12.4803 3.85049 11.5373 4.41996L10.017 2.89962L6.21809 6.69832L7.73853 8.21876C7.16896 9.16186 6.73546 10.1961 6.46412 11.2943H4.31445V16.6666H6.46412C6.73546 17.7647 7.16896 18.7991 7.73853 19.7421L6.21809 21.2624L10.017 25.0612L11.5373 23.5408C12.4803 24.1104 13.5146 24.5439 14.6129 24.8152V26.9648H19.9851V24.8152C21.0833 24.5439 22.1175 24.1104 23.0606 23.5408L24.581 25.0612L28.3798 21.2624L26.8594 19.7421C27.4289 18.7991 27.8624 17.7647 28.1337 16.6666" fill="white" />
                                    <path d="M28.1337 11.2943C27.8624 10.1961 27.4289 9.16186 26.8594 8.21876L28.3798 6.69832L24.581 2.89962L23.0606 4.41996C22.1175 3.85049 21.0833 3.41699 19.9851 3.14555V0.995884H14.6129V3.14555C13.5146 3.41699 12.4803 3.85049 11.5373 4.41996L10.017 2.89962L6.21809 6.69832L7.73853 8.21876C7.16896 9.16186 6.73546 10.1961 6.46412 11.2943H4.31445V16.6666H6.46412C6.73546 17.7647 7.16896 18.7991 7.73853 19.7421L6.21809 21.2624L10.017 25.0612L11.5373 23.5408C12.4803 24.1104 13.5146 24.5439 14.6129 24.8152V26.9648H19.9851V24.8152C21.0833 24.5439 22.1175 24.1104 23.0606 23.5408L24.581 25.0612L28.3798 21.2624L26.8594 19.7421C27.4289 18.7991 27.8624 17.7647 28.1337 16.6666" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.7024 12.0983C21.9241 9.86355 19.7987 8.26004 17.2987 8.26004C14.1393 8.26004 11.5781 10.8213 11.5781 13.9806C11.5781 17.14 14.1393 19.7012 17.2987 19.7012C19.7867 19.7012 21.9038 18.1128 22.6911 15.8948" fill="white" />
                                    <path d="M22.7024 12.0983C21.9241 9.86355 19.7987 8.26004 17.2987 8.26004C14.1393 8.26004 11.5781 10.8213 11.5781 13.9806C11.5781 17.14 14.1393 19.7012 17.2987 19.7012C19.7867 19.7012 21.9038 18.1128 22.6911 15.8948" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M40.3125 11.3164C37.8671 11.3164 35.8848 9.33408 35.8848 6.88877V5.60222C35.8848 3.15681 37.8671 1.17448 40.3125 1.17448C42.7578 1.17448 44.7402 3.15681 44.7402 5.60222V6.88877C44.7402 9.33408 42.7578 11.3164 40.3125 11.3164Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M45.1963 23.0996V18.0972V23.0996Z" fill="white" />
                                    <path d="M45.1963 23.0996V18.0972" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M43.8825 11.3179H37.1934H24.7008C23.2292 11.3179 22.0361 12.511 22.0361 13.9825C22.0361 15.4541 23.2292 16.6472 24.7008 16.6472H34.0626V23.1816H49.9889V17.4244C49.9889 14.0518 47.2549 11.3179 43.8825 11.3179Z" fill="white" stroke="#0E1E45" stroke-width="1.99219" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="text order-lg-1 order-2">
                            <h6>Project & Task Management</h6>
                            <p>Organize, assign, and monitor tasks effortlessly, keeping projects on track and teams aligned for maximum productivity and results. </p>
                        </div>
                        <div class="img order-lg-2 order-1">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5170_167)">
                                    <path d="M15.9827 15.8549C15.9827 15.494 16.2733 15.2009 16.631 15.2009H21.1687C21.5264 15.2009 21.817 15.494 21.817 15.8549C21.817 16.2157 21.5264 16.5089 21.1687 16.5089H16.631C16.2733 16.5089 15.9827 16.2157 15.9827 15.8549ZM26.7571 21.0647H16.631C16.2733 21.0647 15.9827 21.3579 15.9827 21.7187C15.9827 22.0796 16.2733 22.3728 16.631 22.3728H26.7794C27.1371 22.3728 27.4277 22.0796 27.4277 21.7187C27.4277 21.3579 27.1371 21.0647 26.7794 21.0647H26.7571ZM26.7571 25.8234H16.631C16.2733 25.8234 15.9827 26.1166 15.9827 26.4774C15.9827 26.8383 16.2733 27.1315 16.631 27.1315H26.7794C27.1371 27.1315 27.4277 26.8383 27.4277 26.4774C27.4277 26.1166 27.1371 25.8234 26.7794 25.8234H26.7571ZM26.7571 30.5821H16.631C16.2733 30.5821 15.9827 30.8753 15.9827 31.2362C15.9827 31.597 16.2733 31.8902 16.631 31.8902H26.7794C27.1371 31.8902 27.4277 31.597 27.4277 31.2362C27.4277 30.8753 27.1371 30.5821 26.7794 30.5821H26.7571ZM26.7571 35.3409H16.631C16.2733 35.3409 15.9827 35.634 15.9827 35.9949C15.9827 36.3557 16.2733 36.6489 16.631 36.6489H26.7794C27.1371 36.6489 27.4277 36.3557 27.4277 35.9949C27.4277 35.634 27.1371 35.3409 26.7794 35.3409H26.7571ZM41.2197 27.1315H36.2349V41.5881C36.2349 42.9413 37.3079 44.0238 38.6044 44.0238H43.2539C42.2704 43.2345 41.6445 42.0392 41.6445 40.6634C41.6445 38.2953 43.5445 36.3783 45.8916 36.3783C48.2387 36.3783 50.1388 38.2953 50.1388 40.6634C50.1388 42.1294 49.4011 43.4149 48.2834 44.2043C50.7423 44.8357 52.6647 46.9557 52.9553 49.617C53.0447 50.4966 52.7988 51.3085 52.2176 51.9626C51.6364 52.6166 50.8764 52.9774 49.9823 52.9774H41.7786C40.9068 52.9774 40.1244 52.6391 39.5432 51.9626C38.962 51.286 38.7162 50.4966 38.8056 49.617C39.0068 47.8579 39.9009 46.3468 41.1974 45.3319H38.582C36.5479 45.3319 34.9161 43.663 34.9161 41.5881V27.1315H32.2113V40.0319C32.2113 40.9791 31.4513 41.7685 30.4901 41.7685H14.4627C13.5238 41.7685 12.7415 41.0017 12.7415 40.0319V39.8966H11.892C11.1767 39.8966 10.5955 39.3328 10.5732 38.6111L10.4838 36.7843C10.4838 36.7843 10.4838 36.7617 10.4614 36.7392C9.67904 36.5136 8.91902 36.1979 8.22607 35.7919C8.22607 35.7919 8.20371 35.7919 8.18136 35.7919L6.84015 37.0323C6.30367 37.506 5.49895 37.506 5.00717 36.9872L2.88359 34.8447C2.36946 34.326 2.36946 33.514 2.83889 32.9953L4.06833 31.6421C4.06833 31.6421 4.06833 31.6196 4.06833 31.597C3.66596 30.8753 3.35302 30.1085 3.12948 29.3417C3.12948 29.3417 3.12948 29.3191 3.08477 29.3191L1.27415 29.2289C0.558836 29.2064 0 28.5974 0 27.8983V24.8762C0 24.1545 0.558836 23.5681 1.27415 23.5455L3.08477 23.4553C3.08477 23.4553 3.10713 23.4553 3.12948 23.4328C3.35302 22.6434 3.66596 21.8766 4.06833 21.1774C4.06833 21.1774 4.06833 21.1549 4.06833 21.1323L2.83889 19.7792C2.36946 19.2379 2.36946 18.426 2.88359 17.9298L5.00717 15.7872C5.5213 15.2685 6.32602 15.2685 6.84015 15.7421L8.18136 16.9826C8.18136 16.9826 8.20371 16.9826 8.22607 16.9826C8.94138 16.5766 9.67904 16.2609 10.4614 16.0353C10.4614 16.0353 10.4838 16.0353 10.4838 15.9902L10.5732 14.1634C10.5955 13.4417 11.1991 12.8779 11.892 12.8779H12.7415C12.7638 11.9532 13.5238 11.1864 14.4627 11.1864H24.7006C24.8794 11.1864 25.0359 11.254 25.1476 11.3668L32.0548 18.3357C32.189 18.4711 32.2337 18.6289 32.2337 18.7868V25.8008H34.9384V11.3894C34.9384 9.31447 36.5926 7.64553 38.6044 7.64553H43.2539C42.2704 6.85617 41.6445 5.66085 41.6445 4.28511C41.6445 1.91702 43.5445 0 45.8916 0C48.2387 0 50.1388 1.91702 50.1388 4.28511C50.1388 5.75106 49.4011 7.0366 48.2834 7.82596C50.7423 8.45745 52.6647 10.5774 52.9553 13.2387C53.0447 14.1183 52.7988 14.9302 52.2176 15.5843C51.6364 16.2383 50.8764 16.5991 49.9823 16.5991H41.7786C40.9068 16.5991 40.1244 16.2609 39.5432 15.5843C38.962 14.9077 38.7162 14.1183 38.8056 13.2387C39.0068 11.4796 39.9009 9.96851 41.1974 8.95362H38.582C37.2632 8.95362 36.2126 10.0362 36.2126 11.3894V25.846H43.2316C42.248 25.0566 41.6221 23.8613 41.6221 22.4855C41.6221 20.1174 43.5221 18.2004 45.8693 18.2004C48.2164 18.2004 50.1164 20.1174 50.1164 22.4855C50.1164 23.9515 49.3787 25.237 48.2611 26.0264C50.72 26.6579 52.6423 28.7779 52.9329 31.4391C53.0224 32.3187 52.7765 33.1306 52.1953 33.7847C51.6141 34.4387 50.8541 34.7996 49.9599 34.7996H41.7562C40.8844 34.7996 40.1021 34.4613 39.5209 33.7847C38.9397 33.1081 38.6938 32.3187 38.7832 31.4391C38.9844 29.68 39.8785 28.1689 41.175 27.154L41.2197 27.1315ZM46.7634 8.90851H45.0645C42.5386 8.90851 40.415 10.8255 40.1244 13.3515C40.0574 13.8477 40.2138 14.2987 40.5491 14.6821C40.8844 15.0655 41.3092 15.246 41.8009 15.246H50.0046C50.5188 15.246 50.9211 15.0655 51.2564 14.6821C51.5917 14.2987 51.7259 13.8702 51.6812 13.3515C51.3906 10.8255 49.267 8.90851 46.741 8.90851H46.7634ZM42.9633 4.26255C42.9633 5.90894 44.2822 7.23957 45.914 7.23957C47.5458 7.23957 48.8646 5.90894 48.8646 4.26255C48.8646 2.61617 47.5458 1.28553 45.914 1.28553C44.2822 1.28553 42.9633 2.61617 42.9633 4.26255ZM25.3488 17.8847C25.3488 18.0426 25.4829 18.1553 25.617 18.1553H30.043L25.3488 13.4191V17.8847ZM12.7415 38.5885V31.7774C10.0814 31.4617 8.00253 29.1613 8.00253 26.3872C8.00253 23.6132 10.0814 21.3128 12.7415 20.997V14.186H11.892C11.892 14.186 11.8473 14.186 11.8473 14.2311L11.7579 16.0579C11.7356 16.6443 11.3555 17.1179 10.7967 17.2757C10.1038 17.4787 9.45551 17.7494 8.82961 18.1102C8.31548 18.4034 7.71194 18.3132 7.28722 17.9298L5.94601 16.6894H5.90131L3.77773 18.8319V18.877L5.00717 20.2302C5.38718 20.6587 5.47659 21.2677 5.186 21.7864C4.82834 22.4179 4.5601 23.0945 4.35892 23.7711C4.20245 24.3349 3.71067 24.7183 3.15183 24.7409L1.34121 24.8311C1.34121 24.8311 1.2965 24.8311 1.2965 24.8762V27.8983C1.2965 27.8983 1.2965 27.9434 1.34121 27.9434L3.15183 28.0336C3.73302 28.0562 4.20245 28.4396 4.35892 29.0034C4.5601 29.7026 4.82834 30.3566 5.186 30.9881C5.47659 31.5068 5.38718 32.1157 5.00717 32.5443L3.77773 33.8974V33.9426L5.90131 36.0851H5.94601L7.28722 34.8447C7.71194 34.4613 8.31548 34.3711 8.82961 34.6643C9.45551 35.0026 10.1038 35.2957 10.7967 35.4987C11.3555 35.6566 11.7356 36.1528 11.7579 36.7166L11.8473 38.5434C11.8473 38.5434 11.8473 38.5885 11.892 38.5885H12.7415ZM9.29903 26.3872C9.29903 28.4396 10.7967 30.1536 12.7415 30.4694V22.3051C10.7967 22.6209 9.29903 24.3349 9.29903 26.3872ZM30.9595 40.0319V19.486H25.617C24.7453 19.486 24.0523 18.7643 24.0523 17.9072V12.517H14.4627C14.2168 12.517 14.038 12.72 14.038 12.9455V40.0545C14.038 40.3026 14.2391 40.483 14.4627 40.483H30.5348C30.7807 40.483 30.9595 40.28 30.9595 40.0545V40.0319ZM46.7634 45.3319H44.6845C42.3151 45.5349 40.3927 47.3617 40.1244 49.7749C40.0574 50.2936 40.2138 50.7221 40.5491 51.1055C40.8844 51.4889 41.3092 51.6694 41.8009 51.6694H50.0046C50.5188 51.6694 50.9211 51.4889 51.2564 51.1055C51.5917 50.7221 51.7259 50.2936 51.6812 49.7749C51.3906 47.2489 49.267 45.3319 46.741 45.3319H46.7634ZM42.9633 40.686C42.9633 42.3323 44.2822 43.663 45.914 43.663C47.5458 43.663 48.8646 42.3323 48.8646 40.686C48.8646 39.0396 47.5458 37.7089 45.914 37.7089C44.2822 37.7089 42.9633 39.0396 42.9633 40.686ZM42.9633 22.4855C42.9633 24.1319 44.2822 25.4626 45.914 25.4626C47.5458 25.4626 48.8646 24.1319 48.8646 22.4855C48.8646 20.8391 47.5458 19.5085 45.914 19.5085C44.2822 19.5085 42.9633 20.8391 42.9633 22.4855ZM44.6845 27.1315C42.3151 27.3119 40.3927 29.1613 40.1244 31.5745C40.0574 32.0932 40.2138 32.5217 40.5491 32.9051C40.8844 33.2885 41.3092 33.4689 41.8009 33.4689H50.0046C50.5188 33.4689 50.9211 33.2885 51.2564 32.9051C51.5917 32.5217 51.7259 32.0932 51.6812 31.5745C51.3906 29.0485 49.267 27.1315 46.741 27.1315H44.6622H44.6845Z" fill="#0E2049" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5170_167">
                                        <rect width="53" height="53" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 center-img">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 px-lg-0">
                            <div class="single-feature start-center-single-feature d-flex mb-md-5 mb-3">
                                <div class="img">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5170_185)">
                                            <path d="M19.1192 19.9232V18.3389C19.1192 16.147 17.3396 14.3457 15.126 14.3457C12.9124 14.3457 11.1328 16.1253 11.1328 18.3389V19.9232C11.1328 22.1151 12.9124 23.9163 15.126 23.9163C17.3396 23.9163 19.1192 22.1368 19.1192 19.9232ZM12.7388 19.9232V18.3389C12.7388 17.0151 13.8022 15.9517 15.126 15.9517C16.4498 15.9517 17.5132 17.0151 17.5132 18.3389V19.9232C17.5132 21.247 16.4498 22.3104 15.126 22.3104C13.8022 22.3104 12.7388 21.247 12.7388 19.9232Z" fill="#0E1C42" />
                                            <path d="M43.8165 50.9996C44.2505 50.9996 44.6195 50.6523 44.6195 50.1966V34.2672C44.6195 33.8332 44.2722 33.4642 43.8165 33.4642H31.8586V30.274H37.4361C37.8267 30.274 38.1522 29.9919 38.2173 29.6013L39.8016 20.0306C39.8667 19.5966 39.5846 19.1842 39.1505 19.1191C39.1071 19.1191 39.0637 19.1191 39.0203 19.1191H24.6752C24.2846 19.1191 23.959 19.4013 23.8939 19.7919L22.3097 29.3625C22.2446 29.7966 22.5267 30.2089 22.9607 30.274C23.0041 30.274 23.0476 30.274 23.091 30.274H30.2527V33.4642H26.6284C26.9105 32.9868 27.0624 32.4225 27.0624 31.88C27.0624 31.4677 26.7586 31.1421 26.3463 31.0987L19.4884 30.3391L15.7122 25.8034C15.5603 25.6298 15.3433 25.5213 15.1046 25.5213H13.5203C11.3284 25.5213 9.54883 27.3008 9.52713 29.5145V39.0851C9.52713 39.9532 9.80925 40.7996 10.3518 41.4723H7.94287V27.9302C7.94287 27.4962 7.59564 27.1272 7.13989 27.1272C6.68415 27.1272 6.33691 27.4745 6.33691 27.9302V42.2753C6.33691 42.7094 6.68415 43.0783 7.13989 43.0783H11.1331V49.4587H8.74585C8.31181 49.4587 7.94287 49.806 7.94287 50.2617C7.94287 50.7174 8.29011 51.0647 8.74585 51.0647H15.1263C15.5603 51.0647 15.9293 50.7174 15.9293 50.2617C15.9293 49.806 15.582 49.4587 15.1263 49.4587H12.739V43.0783H18.642L22.2446 49.3719C22.2446 49.3719 22.288 49.437 22.288 49.4587C23.0476 50.457 24.2195 51.043 25.4782 51.043H27.8654C28.2995 51.043 28.6684 50.6957 28.6684 50.24C28.6684 50.1098 28.6467 49.9796 28.5816 49.8711L22.3531 38.1736C22.3531 38.1736 22.288 38.0651 22.2446 38.0217C21.485 37.197 20.4216 36.7196 19.2931 36.7196H16.7105V35.1353H42.9918V50.2834C42.9918 50.7174 43.339 51.0864 43.7948 51.0864L43.8165 50.9996ZM25.3697 20.7251H38.0871L36.7633 28.6898H24.0458L25.3697 20.7251ZM14.1714 29.7966C13.8893 29.4494 13.3901 29.4059 13.0429 29.6664C12.6956 29.9485 12.6522 30.4477 12.9127 30.7949L15.1263 33.5728V37.4791C15.1263 37.9132 15.4735 38.2821 15.9293 38.2821H19.2931C19.9441 38.2821 20.5518 38.5425 21.0076 38.9983L26.5633 49.437H25.4999C24.762 49.437 24.0676 49.0898 23.6118 48.5255L19.8139 41.8847C19.662 41.6459 19.4016 41.494 19.1195 41.494H13.542C12.2182 41.494 11.1548 40.4306 11.1548 39.1068V29.5362C11.1548 28.2123 12.2182 27.1489 13.542 27.1489H14.7573L18.5118 31.6413C18.642 31.7932 18.8373 31.9017 19.0327 31.9234L25.3263 32.6179C25.0658 33.1604 24.5016 33.5077 23.8939 33.5077H17.1012L14.1497 29.8183L14.1714 29.7966Z" fill="#0E1C42" />
                                            <path d="M1.28083 20.5528L25.5004 1.80214L36.9591 10.6783C37.3064 10.9387 37.8055 10.8736 38.0876 10.5264C38.1961 10.3962 38.2613 10.2226 38.2613 10.049V6.38129H43.0357V14.997C43.0357 15.2358 43.1442 15.4745 43.3396 15.6264L49.72 20.5528C50.0672 20.8132 50.5664 20.7481 50.8485 20.4009C51.1306 20.0536 51.0438 19.5545 50.6966 19.2724L44.6417 14.5847V5.57831C44.6417 5.14427 44.2944 4.77534 43.8387 4.77534H37.4583C37.0242 4.77534 36.6553 5.12257 36.6553 5.57831V8.42129L25.9778 0.174485C25.6957 -0.0425366 25.2834 -0.0425366 25.0013 0.174485L0.30423 19.2941C-0.0430045 19.5545 -0.108111 20.0536 0.152315 20.4226C0.41274 20.7698 0.911889 20.8349 1.28083 20.5745V20.5528Z" fill="#0E1C42" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5170_185">
                                                <rect width="51" height="51" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="text">
                                    <h6>Inhouse & Remote Workforce Visibility</h6>
                                    <p>Achieve complete transparency with real-time visibility into both in-house and remote teams, ensuring accountability and productivity.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('public/assets/itcn-images/img_services.webp') }}" alt="img-services">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 px-lg-0">
                            <div class="single-feature end-center-single-feature d-flex mb-md-5 mb-3">
                                <div class="img">
                                    <svg width="52" height="51" viewBox="0 0 52 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5170_189)">
                                            <path d="M51.1813 20.5736H47.6187C47.0655 18.2298 46.1362 16.0162 44.8306 13.9762L47.3532 11.5021C47.663 11.1983 47.663 10.6774 47.3532 10.3736L41.4008 4.53574C41.246 4.38383 41.0468 4.29702 40.8255 4.29702C40.6043 4.29702 40.4051 4.38383 40.2502 4.53574L37.7277 7.00979C35.6477 5.72936 33.3906 4.81787 31.0009 4.27532V0.802979C31.0009 0.368936 30.6247 0 30.1821 0H21.7736C21.3311 0 20.9549 0.368936 20.9549 0.802979V4.29702C18.5651 4.83957 16.3081 5.75106 14.2281 7.03149L11.7055 4.55745C11.5506 4.40553 11.3515 4.31872 11.1302 4.31872C10.9089 4.31872 10.7098 4.40553 10.5549 4.55745L4.60255 10.3953C4.29277 10.6991 4.29277 11.22 4.60255 11.5238L7.12511 13.9979C5.81957 16.0379 4.89021 18.2515 4.33702 20.5953H0.818723C0.37617 20.5953 0 20.9643 0 21.3983V29.6451C0 30.0791 0.37617 30.4481 0.818723 30.4481H4.38128C4.93447 32.7919 5.86383 35.0055 7.16936 37.0455L4.64681 39.5196C4.33702 39.8234 4.33702 40.3443 4.64681 40.6481L10.5991 46.486C10.754 46.6379 10.9532 46.7247 11.1745 46.7247C11.3957 46.7247 11.5949 46.6379 11.7498 46.486L14.2723 44.0119C16.3523 45.2923 18.6094 46.2038 20.9991 46.7464V50.2404C20.9991 50.6745 21.3753 51.0434 21.8179 51.0434H30.2264C30.6689 51.0434 31.0451 50.6745 31.0451 50.2404V46.7464C33.4349 46.2038 35.6919 45.2923 37.7719 44.0119L40.2945 46.486C40.6043 46.7898 41.1353 46.7898 41.4451 46.486L47.3974 40.6481C47.5523 40.4962 47.6409 40.3008 47.6409 40.0838C47.6409 39.8668 47.5523 39.6715 47.3974 39.5196L44.8749 37.0455C46.1804 35.0055 47.1098 32.7919 47.663 30.4481H51.2255C51.6681 30.4481 52.0443 30.0791 52.0443 29.6451V21.3983C52.0443 20.9643 51.6681 20.5953 51.2255 20.5953L51.1813 20.5736ZM50.3626 28.8204H46.9549C46.5566 28.8204 46.2247 29.0809 46.1583 29.4715C45.6272 32.054 44.6094 34.4847 43.1047 36.6766C42.8834 37.0021 42.9277 37.4145 43.2153 37.6966L45.6272 40.0621L40.8477 44.7498L38.4357 42.3843C38.1702 42.1238 37.7277 42.0804 37.3957 42.2757C35.1609 43.7515 32.6826 44.7498 30.0494 45.2706C29.6732 45.3357 29.3855 45.683 29.3855 46.0519V49.394H22.6145V46.0519C22.6145 45.6613 22.3489 45.3357 21.9506 45.2706C19.3174 44.7498 16.8391 43.7515 14.6043 42.2757C14.2723 42.0587 13.8519 42.1021 13.5643 42.3843L11.1523 44.7498L6.37277 40.0621L8.78468 37.6966C9.05021 37.4362 9.09447 37.0021 8.89532 36.6766C7.39064 34.4847 6.37277 32.054 5.8417 29.4715C5.77532 29.1026 5.42128 28.8204 5.04511 28.8204H1.63745V22.1796H5.04511C5.4434 22.1796 5.77532 21.9191 5.8417 21.5285C6.37277 18.946 7.39064 16.5153 8.89532 14.3234C9.1166 13.9979 9.07234 13.5855 8.78468 13.3034L6.37277 10.9379L11.1523 6.25021L13.5643 8.61574C13.8298 8.87617 14.2723 8.91957 14.6043 8.72426C16.8391 7.24851 19.3174 6.25021 21.9506 5.72936C22.3268 5.66426 22.6145 5.31702 22.6145 4.94808V1.60596H29.3855V4.94808C29.3855 5.33872 29.6511 5.66426 30.0494 5.72936C32.6826 6.25021 35.1609 7.24851 37.3957 8.72426C37.7277 8.94128 38.1481 8.89787 38.4357 8.61574L40.8477 6.25021L45.6272 10.9379L43.2153 13.3034C42.9498 13.5638 42.9055 13.9979 43.1047 14.3234C44.6094 16.5153 45.6272 18.946 46.1583 21.5285C46.2247 21.8974 46.5787 22.1796 46.9549 22.1796H50.3626V28.8204ZM26 10.8077C17.7464 10.8077 11.0196 17.4051 11.0196 25.5C11.0196 33.5949 17.7464 40.1923 26 40.1923C34.2536 40.1923 40.9804 33.5949 40.9804 25.5C40.9804 17.4051 34.2536 10.8077 26 10.8077ZM18.2996 36.1774C20.2468 34.0072 23.057 32.7268 26 32.7268C28.943 32.7268 31.7532 34.0072 33.7004 36.1774C31.5319 37.6966 28.8545 38.5864 26 38.5864C23.1455 38.5864 20.4681 37.6966 18.2996 36.1774ZM20.8443 25.5C20.8443 22.7004 23.1677 20.4434 26 20.4434C28.8323 20.4434 31.1557 22.7221 31.1557 25.5C31.1557 28.2779 28.8323 30.5566 26 30.5566C23.1677 30.5566 20.8443 28.2779 20.8443 25.5ZM34.9838 35.1791C33.3906 33.3779 31.2664 32.0974 28.9651 31.5115C31.2443 30.4264 32.8153 28.1477 32.8153 25.5C32.8153 21.8323 29.7617 18.8374 26.0221 18.8374C22.2826 18.8374 19.2289 21.8323 19.2289 25.5C19.2289 28.1477 20.8 30.4264 23.0791 31.5115C20.7557 32.0974 18.6536 33.3779 17.0604 35.1791C14.383 32.7919 12.7013 29.3413 12.7013 25.5C12.7013 18.2949 18.6757 12.4136 26.0443 12.4136C33.4128 12.4136 39.3872 18.2732 39.3872 25.5C39.3872 29.3196 37.7055 32.7702 35.0281 35.1791H34.9838Z" fill="#0F2450" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5170_189">
                                                <rect width="52" height="51" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="text">
                                    <h6>Client Management & Access Control  </h6>
                                    <p>Securely manage client interactions and control access, ensuring smooth, efficient operations and protecting sensitive business information.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 right-features">
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="img">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5170_169)">
                                    <path d="M11.362 27.1055C11.511 26.7226 11.2769 26.2757 10.9152 26.1268C6.74501 24.68 4.46841 20.063 5.91522 15.8289C6.06416 15.446 5.83012 14.9992 5.46841 14.8502C5.10671 14.7013 4.63863 14.9353 4.48969 15.297C2.83012 20.297 5.46842 25.7438 10.4684 27.4885C10.7663 27.7226 11.2344 27.4885 11.3833 27.1055H11.362Z" fill="#0E1D46" />
                                    <path d="M32.128 8.40425V6.42553H36.6812C37.128 6.42553 37.4471 6.12766 37.4471 5.65957V0.765957C37.4471 0.319149 37.1493 0 36.6812 0H26.2344C25.7876 0 25.4684 0.297872 25.4684 0.765957V5.68085C25.4684 6.12766 25.7663 6.44681 26.2344 6.44681H30.6173V8.42553C28.1918 8.51064 25.8514 9.10638 23.6599 10.0851C22.1493 8.19149 20.1067 6.74468 17.745 6C10.6812 3.48936 3.19181 7.2766 0.830106 14.1702C-1.44649 20.8298 1.95777 28.1915 8.40457 30.9149L7.27692 34.2553L4.85138 33.3404C4.61734 33.2553 4.4684 33.2553 4.25564 33.3404C4.1067 33.4255 3.95777 33.5745 3.87266 33.7872L0.234362 44.4468C-0.531596 46.5745 0.617341 49 2.80883 49.7447C5.00032 50.4894 7.36202 49.3617 8.04287 47.1702L11.6812 36.4894C11.8301 36.1064 11.5961 35.6596 11.2344 35.5106L8.745 34.6809L9.87266 31.3404C11.0003 31.6383 12.2131 31.8723 13.362 31.8723C15.5535 40.0426 22.8301 45.7234 31.3833 45.7234C41.6812 45.7234 50.0216 37.3191 50.0216 27.0213C50.0216 16.7234 42.0429 8.85106 32.128 8.40425ZM26.979 1.51064H35.9152V4.91489H26.979V1.51064ZM6.59606 46.7234C6.14926 48.0851 4.61734 48.8511 3.25564 48.3191C1.89394 47.8723 1.12798 46.3404 1.65989 44.9787L5.06415 34.9787L9.97904 36.7234L6.57479 46.7234H6.59606ZM2.27692 14.617C4.31947 8.48936 10.979 5.23404 17.1918 7.34043C23.4046 9.53191 26.7237 16.2766 24.5322 22.4043C22.2556 28.6809 15.8301 31.8723 9.61734 29.6809C3.48968 27.5745 0.149256 20.7447 2.27692 14.617ZM31.362 44.234C23.6386 44.234 17.0429 39.1702 14.9365 31.8936C19.9365 31.3617 24.2556 28.0213 26.0641 23.0426C27.4258 19.3404 26.979 15.0851 24.6173 11.383C26.745 10.4681 29.0003 10.0213 31.4259 10.0213C40.745 9.93617 48.4684 17.6809 48.4684 27.0638C48.4684 36.4468 40.745 44.2553 31.362 44.2553V44.234Z" fill="#0E1D46" />
                                    <path d="M31.3617 15.0002C31.8085 15.0002 32.1276 14.7024 32.1276 14.2343V12.1917C32.1276 11.7449 31.8297 11.4258 31.3617 11.4258C30.8936 11.4258 30.5957 11.7237 30.5957 12.1917V14.2343C30.5957 14.6811 30.8936 15.0002 31.3617 15.0002Z" fill="#0E1D46" />
                                    <path d="M31.3617 39.0859C30.9149 39.0859 30.5957 39.3838 30.5957 39.8519V41.8944C30.5957 42.3413 30.8936 42.6604 31.3617 42.6604C31.8297 42.6604 32.1276 42.3625 32.1276 41.8944V39.8519C32.1276 39.4689 31.7446 39.0859 31.3617 39.0859Z" fill="#0E1D46" />
                                    <path d="M46.2128 26.2773H44.1703C43.7234 26.2773 43.4043 26.5752 43.4043 27.0433C43.4043 27.5114 43.7022 27.8093 44.1703 27.8093H46.2128C46.6596 27.8093 46.9788 27.5114 46.9788 27.0433C46.9788 26.6603 46.6809 26.2773 46.2128 26.2773Z" fill="#0E1D46" />
                                    <path d="M37.4254 16.6591C37.8084 16.8932 38.2552 16.7442 38.4893 16.3612L39.5531 14.5527C39.7871 14.1698 39.6382 13.7229 39.2552 13.4889C38.8723 13.2549 38.4254 13.4038 38.1914 13.7868L37.1276 15.5953C36.8935 15.9783 37.0425 16.4251 37.4254 16.6591Z" fill="#0E1D46" />
                                    <path d="M25.2982 37.4889C24.9152 37.2549 24.4684 37.4038 24.2344 37.7868L23.1705 39.5953C22.9365 39.9783 23.0854 40.4251 23.4684 40.6591C23.8514 40.8932 24.2982 40.7442 24.5322 40.3612L25.5961 38.5527C25.745 38.1698 25.6812 37.7229 25.2982 37.4889Z" fill="#0E1D46" />
                                    <path d="M44.6171 33.8516L42.8086 32.7877C42.4256 32.5537 41.9788 32.7026 41.7448 33.0856C41.5107 33.4686 41.6597 33.9154 42.0426 34.1494L43.8511 35.2133C44.2341 35.4473 44.6809 35.2984 44.915 34.9154C45.0639 34.5324 44.915 34.0856 44.6171 33.8516Z" fill="#0E1D46" />
                                    <path d="M42.6384 20.9782L44.383 19.9144C44.766 19.6804 44.8298 19.2335 44.6171 18.8506C44.4043 18.4676 43.9362 18.4038 43.5533 18.6165L41.8086 19.6804C41.4256 19.9144 41.3618 20.3612 41.5745 20.7442C41.7873 21.1272 42.2554 21.191 42.6384 20.9782Z" fill="#0E1D46" />
                                    <path d="M20.0855 33.0855L18.3408 34.1493C17.9578 34.3833 17.894 34.8301 18.1068 35.2131C18.3195 35.5961 18.7876 35.6599 19.1706 35.4472L20.9153 34.3833C21.2982 34.1493 21.3621 33.7025 21.1493 33.3195C20.8514 33.0216 20.3834 32.9365 20.0855 33.0855Z" fill="#0E1D46" />
                                    <path d="M38.7025 37.5537C38.4684 37.1707 38.0216 37.1069 37.6387 37.3196C37.2557 37.5324 37.1918 38.0005 37.4046 38.3835L38.4684 40.1282C38.7025 40.5111 39.1493 40.575 39.5323 40.3622C39.9152 40.1494 39.9791 39.6813 39.7663 39.2984L38.7025 37.5537Z" fill="#0E1D46" />
                                    <path d="M37.2766 35.3615L33.4042 29.3827C34 28.787 34.383 28.021 34.383 27.1061C34.383 25.6593 33.4042 24.4466 32.1064 24.0849V17.3402C32.1064 16.8934 31.8085 16.5742 31.3404 16.5742C30.8723 16.5742 30.5744 16.8721 30.5744 17.3402V24.0849C29.2766 24.4678 28.2979 25.6806 28.2979 27.1061C28.2979 28.8508 29.6596 30.2125 31.3191 30.2125C31.5532 30.2125 31.851 30.1274 32.0851 30.1274L36.0213 36.1912C36.2553 36.5742 36.7021 36.6381 37.0851 36.4253C37.383 36.1912 37.4681 35.7444 37.234 35.3615H37.2766ZM29.7872 27.021C29.7872 26.1061 30.4681 25.4253 31.2979 25.4253C32.1276 25.4253 32.8085 26.1912 32.8085 27.021C32.8085 27.9359 32.1276 28.6168 31.2979 28.6168C30.4681 28.7019 29.7872 27.9359 29.7872 27.021Z" fill="#0E1D46" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5170_169">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text">
                            <h6>Time Tracking
                                & Monitoring</h6>
                            <p>Track every second with precision. StaffViz ensures accurate time tracking and real-time monitoring for optimal workforce efficiency. </p>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="img">
                            <svg width="51" height="55" viewBox="0 0 51 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.62112 4.2394L3.62115 4.23936C5.78386 2.07994 8.71106 0.867188 11.7615 0.867188H11.7921H11.8227H11.8534H11.8841H11.9149H11.9456H11.9764H12.0072H12.0381H12.0689H12.0998H12.1307H12.1616H12.1926H12.2236H12.2546H12.2856H12.3167H12.3477H12.3788H12.41H12.4411H12.4723H12.5035H12.5347H12.5659H12.5972H12.6285H12.6598H12.6911H12.7225H12.7539H12.7853H12.8167H12.8481H12.8796H12.9111H12.9426H12.9742H13.0057H13.0373H13.0689H13.1005H13.1322H13.1638H13.1955H13.2272H13.2589H13.2907H13.3225H13.3543H13.3861H13.4179H13.4497H13.4816H13.5135H13.5454H13.5774H13.6093H13.6413H13.6733H13.7053H13.7373H13.7694H13.8014H13.8335H13.8656H13.8978H13.9299H13.9621H13.9943H14.0265H14.0587H14.0909H14.1232H14.1555H14.1878H14.2201H14.2524H14.2847H14.3171H14.3495H14.3819H14.4143H14.4468H14.4792H14.5117H14.5442H14.5767H14.6092H14.6417H14.6743H14.7069H14.7394H14.772H14.8047H14.8373H14.8699H14.9026H14.9353H14.968H15.0007H15.0334H15.0662H15.099H15.1317H15.1645H15.1973H15.2301H15.263H15.2958H15.3287H15.3616H15.3945H15.4274H15.4603H15.4932H15.5262H15.5592H15.5921H15.6251H15.6581H15.6911H15.7242H15.7572H15.7903H15.8234H15.8564H15.8895H15.9226H15.9558H15.9889H16.0221H16.0552H16.0884H16.1216H16.1548H16.188H16.2212H16.2544H16.2877H16.3209H16.3542H16.3875H16.4208H16.4541H16.4874H16.5207H16.554H16.5874H16.6207H16.6541H16.6875H16.7209H16.7543H16.7877H16.8211H16.8545H16.888H16.9214H16.9549H16.9883H17.0218H17.0553H17.0888H17.1223H17.1558H17.1893H17.2229H17.2564H17.2899H17.3235H17.3571H17.3906H17.4242H17.4578H17.4914H17.525H17.5586H17.5923H17.6259H17.6595H17.6932H17.7268H17.7605H17.7941H17.8278H17.8615H17.8952H17.9289H17.9626H17.9963H18.03H18.0637H18.0974H18.1312H18.1649H18.1987H18.2324H18.2662H18.2999H18.3337H18.3675H18.4012H18.435H18.4688H18.5026H18.5364H18.5702H18.604H18.6378H18.6716H18.7055H18.7393H18.7731H18.8069H18.8408H18.8746H18.9085H18.9423H18.9762H19.01H19.0439H19.0777H19.1116H19.1455H19.1793H19.2132H19.2471H19.281H19.3149H19.3487H19.3826H19.4165H19.4504H19.4843H19.5182H19.5521H19.586H19.6199H19.6538H19.6877H19.7216H19.7555H19.7894H19.8234H19.8573H19.8912H19.9251H19.959H19.9929H20.0268H20.0608H20.0947H20.1286H20.1625H20.1964H20.2303H20.2642H20.2982H20.3321H20.366H20.3999H20.4338H20.4677H20.5016H20.5356H20.5695H20.6034H20.6373H20.6712H20.7051H20.739H20.7729H20.8068H20.8407H20.8746H20.9085H20.9424H20.9762H21.0101H21.044H21.0779H21.1118H21.1457H21.1795H21.2134H21.2473H21.2811H21.315H21.3488H21.3827H21.4165H21.4504H21.4842H21.5181H21.5519H21.5857H21.6196H21.6534H21.6872H21.721H21.7548H21.7886H21.8224H21.8562H21.89H21.9238H21.9575H21.9913H22.0251H22.0588H22.0926H22.1264H22.1601H22.1938H22.2276H22.2613H22.295H22.3287H22.3624H22.3961H22.4298H22.4635H22.4972H22.5309H22.5645H22.5982H22.6318H22.6655H22.6991H22.7327H22.7664H22.8H22.8336H22.8672H22.9008H22.9344H22.9679H23.0015H23.0351H23.0686H23.1021H23.1357H23.1692H23.2027H23.2362H23.2697H23.3032H23.3367H23.3701H23.4036H23.437H23.4705H23.5039H23.5373H23.5707H23.6041H23.6375H23.6709H23.7043H23.7376H23.771H23.8043H23.8376H23.8709H23.9042H23.9375H23.9708H24.0041H24.0373H24.0706H24.1038H24.137H24.1702H24.2034H24.2366H24.2698H24.3029H24.3361H24.3692H24.4024H24.4355H24.4686H24.5016H24.5347H24.5678H24.6008H24.6339H24.6669H24.6999H24.7329H24.7658H24.7988H24.8318H24.8647H24.8976H24.9305H24.9634H24.9963H25.0292H25.062H25.0949H25.1277H25.1605H25.1933H25.226H25.2588H25.2916H25.3243H25.357H25.3897H25.4224H25.4551H25.4877H25.5203H25.553H25.5856H25.6181H25.6507H25.6833H25.7158H25.7483H25.7808H25.8133H25.8458H25.8782H25.9107H25.9431H25.9755H26.0079H26.0403H26.0726H26.1049H26.1372H26.1695H26.2018H26.2341H26.2663H26.2985H26.3307H26.3629H26.3951H26.4272H26.4594H26.4915H26.5236H26.5556H26.5877H26.6197H26.6517H26.6837H26.7157H26.7476H26.7796H26.8115H26.8434H26.8753H26.9071H26.9389H26.9707H27.0025H27.0343H27.0661H27.0978H27.1295H27.1612H27.1928H27.2245H27.2561H27.2877H27.3193H27.3508H27.3824H27.4139H27.4454H27.4769H27.5083H27.5397H27.5711H27.6025H27.6339H27.6652H27.6965H27.7278H27.7591H27.7903H27.8215H27.8527H27.8839H27.915H27.9462H27.9773H28.0083H28.0394H28.0704H28.1014H28.1324H28.1634H28.1943H28.2252H28.2561H28.2869H28.3178H28.3486H28.3794H28.4101H28.4409H28.4716H28.5023H28.5329H28.5635C34.9195 0.867188 40.075 6.02105 40.075 12.3786V21.0847C40.075 21.8737 39.4312 22.5149 38.6448 22.5149C37.8584 22.5149 37.2146 21.8737 37.2146 21.0847V12.3786C37.2146 7.60063 33.3389 3.7276 28.5635 3.7276H11.7615C9.46922 3.7276 7.26326 4.63917 5.64518 6.2614C4.01861 7.88372 3.11042 10.0847 3.11042 12.3786V39.262C3.11042 41.556 4.01867 43.757 5.64532 45.3794C7.26339 47.0015 9.46928 47.913 11.7615 47.913H11.7858H11.8102H11.8345H11.8589H11.8832H11.9075H11.9319H11.9562H11.9805H12.0048H12.0291H12.0533H12.0776H12.1019H12.1261H12.1504H12.1746H12.1988H12.2231H12.2473H12.2715H12.2957H12.3198H12.344H12.3682H12.3923H12.4164H12.4406H12.4647H12.4888H12.5129H12.537H12.561H12.5851H12.6091H12.6332H12.6572H12.6812H12.7052H12.7292H12.7531H12.7771H12.801H12.825H12.8489H12.8728H12.8967H12.9206H12.9444H12.9683H12.9921H13.0159H13.0397H13.0635H13.0873H13.111H13.1348H13.1585H13.1822H13.2059H13.2296H13.2532H13.2769H13.3005H13.3241H13.3477H13.3713H13.3948H13.4184H13.4419H13.4654H13.4889H13.5124H13.5358H13.5593H13.5827H13.6061H13.6295H13.6528H13.6762H13.6995H13.7228H13.7461H13.7693H13.7926H13.8158H13.839H13.8622H13.8853H13.9085H13.9316H13.9547H13.9778H14.0008H14.0238H14.0469H14.0698H14.0928H14.1158H14.1387H14.1616H14.1845H14.2073H14.2301H14.2529H14.2757H14.2985H14.3212H14.3439H14.3666H14.3893H14.4119H14.4346H14.4571H14.4797H14.5023H14.5248H14.5473H14.5697H14.5922H14.6146H14.637H14.6593H14.6817H14.704H14.7263H14.7485H14.7707H14.7929H14.8151H14.8373H14.8594H14.8815H14.9035H14.9256H14.9476H14.9696H14.9915H15.0134H15.0353H15.0572H15.079H15.1008H15.1226H15.1444H15.1661H15.1878H15.2094H15.2311H15.2527H15.2742H15.2958H15.3173H15.3387H15.3602H15.3816H15.403H15.4243H15.4456H15.4669H15.4882H15.5094H15.5306H15.5517H15.5729H15.5939H15.615H15.636H15.657H15.678H15.6989H15.7198H15.7406H15.7614H15.7822H15.803H15.8237H15.8444H15.865H15.8856H15.9062H15.9267H15.9472H15.9677H15.9881H16.0085H16.0289H16.0492H16.0695H16.0897H16.11H16.1301H16.1503H16.1704H16.1904H16.2105H16.2304H16.2504H16.2703H16.2902H16.31H16.3298H16.3495H16.3693H16.3889H16.4086H16.4282H16.4477H16.4672H16.4867H16.5062H16.5256H16.5449H16.5642H16.5835H16.6027H16.6219H16.6411H16.6602H16.6793H16.6983H16.7173H16.7362H16.7551H16.774H16.7928H16.8116H16.8303H16.849H16.8676H16.8862H16.9048H16.9233H16.9418H16.9602H16.9786H16.9969H17.0152H17.0334H17.0516H17.0698H17.0879H17.106H17.124H17.142H17.1599H17.1778H17.1956H17.2134H17.2311H17.2488H17.2665H17.2841H17.3017H17.3192H17.3366H17.354H17.3714H17.3887H17.406H17.4232H17.4404H17.4575H17.4746H17.4916H17.5086H17.5255H17.5424H17.5592H17.576H17.5928H17.6094H17.6261H17.6426H17.6592H17.6757H17.6921H17.7085H17.7248H17.7411H17.7573H17.7735H17.7896H17.8056H17.8217H17.8376H17.8535H17.8694H17.8852H17.901H17.9167H17.9323H17.9479H17.9634H17.9789H17.9944H18.0097H18.0251H18.0403H18.0556H18.0707H18.0858H18.1009H18.1159H18.1308H18.1457H18.1605H18.1753H18.19H18.2047H18.2193H18.2338H18.2483H18.2628H18.2771H18.2915H18.3057H18.3199H18.3341H18.3482H18.3622H18.3762H18.3901H18.404H18.4178H18.4315H18.4452H18.4588H18.4724H18.4859H18.4994H18.5127H18.5261H18.5393H18.5525H18.5657H18.5788H18.5918H18.6048H18.6177H18.6305H18.6433H18.656H18.6687H18.6813H18.6938H18.7063H18.7187H18.7311H18.7433H18.7556H18.7677H18.7798H18.7919H18.8038H18.8158H18.8276H18.8394H18.8511H18.8627H18.8743H18.8859H18.8973H18.9087H18.92H18.9313H18.9425H18.9536H18.9647H18.9757H18.9867H18.9975H19.0083H19.0191H19.0297H19.0404H19.0509H19.0614H19.0718H19.0821H19.0924H19.1026H19.1127H19.1228H19.1328H19.1427H19.1526H19.1624H19.1721H19.1817H19.1913H19.2008H19.2103H19.2197H19.229H19.2382H19.2474H19.2565H19.2655H19.2745H19.2834H19.2922H19.3009H19.3096H19.3182H19.3267H19.3352H19.3436H19.3519H19.3601H19.3683H19.3764H19.3844H19.3924H19.4003H19.4081H19.4158H19.4235H19.4311H19.4386H19.446H19.4534H19.4607H19.4679H19.475H19.4821H19.4891H19.496H19.5029H19.5096H19.5163H19.5229H19.5295H19.5359H19.5423H19.5486H19.5549H19.561H19.5671H19.5731H19.579H19.5849H19.5907H19.5964H19.602H19.6075H19.613H19.6184H19.6237H19.6289H19.634H19.6391H19.6441H19.649H19.6539H19.6586H19.6633H19.6679H19.6724H19.6768H19.6812H19.6854H19.6896H19.6937H19.6978H19.7017H19.7056H19.7094H19.7131H19.7167H19.7202H19.7237H19.7271H19.7304H19.7336H19.7367H19.7398H19.7427H19.7456H19.7484H19.7511H19.7537H19.7563H19.7587H19.7611H19.7634H19.7656H19.7677H19.7698H19.7717H19.7736H19.7754H19.7771H19.7787H19.7802H19.7817H19.783H19.7843H19.7855H19.7866H19.7876H19.7885H19.7893H19.7901H19.7907H19.7913H19.7918H19.7922H19.7925H19.7927H19.7929C20.5869 47.913 21.2231 48.5533 21.2231 49.3432C21.2231 50.1331 20.5869 50.7734 19.7929 50.7734H11.7615C8.71107 50.7734 5.78386 49.5607 3.62115 47.4012L3.62112 47.4012C1.45883 45.243 0.25 42.3152 0.25 39.262V12.3786C0.25 9.32544 1.45883 6.39757 3.62112 4.2394ZM36.7146 37.5818V37.8318H36.9646H41.1651C41.9515 37.8318 42.5953 38.4729 42.5953 39.262C42.5953 40.0511 41.9515 40.6922 41.1651 40.6922H35.2844C34.4903 40.6922 33.8542 40.0526 33.8542 39.262V30.8609C33.8542 30.0719 34.498 29.4307 35.2844 29.4307C36.0707 29.4307 36.7146 30.0719 36.7146 30.8609V37.5818ZM20.4125 39.262C20.4125 31.0545 27.0802 24.3901 35.2844 24.3901C43.4886 24.3901 50.1562 31.0545 50.1562 39.262C50.1562 47.4695 43.4886 54.1339 35.2844 54.1339C27.0802 54.1339 20.4125 47.4695 20.4125 39.262ZM47.2958 39.262C47.2958 32.6325 41.9165 27.2505 35.2844 27.2505C28.6523 27.2505 23.2729 32.6325 23.2729 39.262C23.2729 45.8915 28.6523 51.2734 35.2844 51.2734C41.9165 51.2734 47.2958 45.8915 47.2958 39.262ZM18.0622 33.9714H10.9214C10.135 33.9714 9.49115 33.3302 9.49115 32.5411C9.49115 31.7521 10.135 31.1109 10.9214 31.1109H18.0622C18.8562 31.1109 19.4924 31.7513 19.4924 32.5411C19.4924 33.331 18.8562 33.9714 18.0622 33.9714ZM22.6071 27.2505H10.9214C10.135 27.2505 9.49115 26.6094 9.49115 25.8203C9.49115 25.0312 10.135 24.3901 10.9214 24.3901H22.6071C23.3935 24.3901 24.0373 25.0312 24.0373 25.8203C24.0373 26.6094 23.3935 27.2505 22.6071 27.2505ZM29.4036 20.5297H10.9214C10.135 20.5297 9.49115 19.8886 9.49115 19.0995C9.49115 18.3104 10.135 17.6693 10.9214 17.6693H29.4036C30.19 17.6693 30.8339 18.3104 30.8339 19.0995C30.8339 19.8886 30.19 20.5297 29.4036 20.5297Z" fill="#182A4D" stroke="white" stroke-width="0.5" />
                            </svg>
                        </div>
                        <div class="text">
                            <h6>Time Sheet Management</h6>
                            <p>Automate timesheet processes with StaffViz, reducing errors and ensuring accurate, hassle-free payroll and compliance management. </p>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-md-5 mb-3">
                        <div class="img">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5170_167)">
                                    <path d="M15.9827 15.8549C15.9827 15.494 16.2733 15.2009 16.631 15.2009H21.1687C21.5264 15.2009 21.817 15.494 21.817 15.8549C21.817 16.2157 21.5264 16.5089 21.1687 16.5089H16.631C16.2733 16.5089 15.9827 16.2157 15.9827 15.8549ZM26.7571 21.0647H16.631C16.2733 21.0647 15.9827 21.3579 15.9827 21.7187C15.9827 22.0796 16.2733 22.3728 16.631 22.3728H26.7794C27.1371 22.3728 27.4277 22.0796 27.4277 21.7187C27.4277 21.3579 27.1371 21.0647 26.7794 21.0647H26.7571ZM26.7571 25.8234H16.631C16.2733 25.8234 15.9827 26.1166 15.9827 26.4774C15.9827 26.8383 16.2733 27.1315 16.631 27.1315H26.7794C27.1371 27.1315 27.4277 26.8383 27.4277 26.4774C27.4277 26.1166 27.1371 25.8234 26.7794 25.8234H26.7571ZM26.7571 30.5821H16.631C16.2733 30.5821 15.9827 30.8753 15.9827 31.2362C15.9827 31.597 16.2733 31.8902 16.631 31.8902H26.7794C27.1371 31.8902 27.4277 31.597 27.4277 31.2362C27.4277 30.8753 27.1371 30.5821 26.7794 30.5821H26.7571ZM26.7571 35.3409H16.631C16.2733 35.3409 15.9827 35.634 15.9827 35.9949C15.9827 36.3557 16.2733 36.6489 16.631 36.6489H26.7794C27.1371 36.6489 27.4277 36.3557 27.4277 35.9949C27.4277 35.634 27.1371 35.3409 26.7794 35.3409H26.7571ZM41.2197 27.1315H36.2349V41.5881C36.2349 42.9413 37.3079 44.0238 38.6044 44.0238H43.2539C42.2704 43.2345 41.6445 42.0392 41.6445 40.6634C41.6445 38.2953 43.5445 36.3783 45.8916 36.3783C48.2387 36.3783 50.1388 38.2953 50.1388 40.6634C50.1388 42.1294 49.4011 43.4149 48.2834 44.2043C50.7423 44.8357 52.6647 46.9557 52.9553 49.617C53.0447 50.4966 52.7988 51.3085 52.2176 51.9626C51.6364 52.6166 50.8764 52.9774 49.9823 52.9774H41.7786C40.9068 52.9774 40.1244 52.6391 39.5432 51.9626C38.962 51.286 38.7162 50.4966 38.8056 49.617C39.0068 47.8579 39.9009 46.3468 41.1974 45.3319H38.582C36.5479 45.3319 34.9161 43.663 34.9161 41.5881V27.1315H32.2113V40.0319C32.2113 40.9791 31.4513 41.7685 30.4901 41.7685H14.4627C13.5238 41.7685 12.7415 41.0017 12.7415 40.0319V39.8966H11.892C11.1767 39.8966 10.5955 39.3328 10.5732 38.6111L10.4838 36.7843C10.4838 36.7843 10.4838 36.7617 10.4614 36.7392C9.67904 36.5136 8.91902 36.1979 8.22607 35.7919C8.22607 35.7919 8.20371 35.7919 8.18136 35.7919L6.84015 37.0323C6.30367 37.506 5.49895 37.506 5.00717 36.9872L2.88359 34.8447C2.36946 34.326 2.36946 33.514 2.83889 32.9953L4.06833 31.6421C4.06833 31.6421 4.06833 31.6196 4.06833 31.597C3.66596 30.8753 3.35302 30.1085 3.12948 29.3417C3.12948 29.3417 3.12948 29.3191 3.08477 29.3191L1.27415 29.2289C0.558836 29.2064 0 28.5974 0 27.8983V24.8762C0 24.1545 0.558836 23.5681 1.27415 23.5455L3.08477 23.4553C3.08477 23.4553 3.10713 23.4553 3.12948 23.4328C3.35302 22.6434 3.66596 21.8766 4.06833 21.1774C4.06833 21.1774 4.06833 21.1549 4.06833 21.1323L2.83889 19.7792C2.36946 19.2379 2.36946 18.426 2.88359 17.9298L5.00717 15.7872C5.5213 15.2685 6.32602 15.2685 6.84015 15.7421L8.18136 16.9826C8.18136 16.9826 8.20371 16.9826 8.22607 16.9826C8.94138 16.5766 9.67904 16.2609 10.4614 16.0353C10.4614 16.0353 10.4838 16.0353 10.4838 15.9902L10.5732 14.1634C10.5955 13.4417 11.1991 12.8779 11.892 12.8779H12.7415C12.7638 11.9532 13.5238 11.1864 14.4627 11.1864H24.7006C24.8794 11.1864 25.0359 11.254 25.1476 11.3668L32.0548 18.3357C32.189 18.4711 32.2337 18.6289 32.2337 18.7868V25.8008H34.9384V11.3894C34.9384 9.31447 36.5926 7.64553 38.6044 7.64553H43.2539C42.2704 6.85617 41.6445 5.66085 41.6445 4.28511C41.6445 1.91702 43.5445 0 45.8916 0C48.2387 0 50.1388 1.91702 50.1388 4.28511C50.1388 5.75106 49.4011 7.0366 48.2834 7.82596C50.7423 8.45745 52.6647 10.5774 52.9553 13.2387C53.0447 14.1183 52.7988 14.9302 52.2176 15.5843C51.6364 16.2383 50.8764 16.5991 49.9823 16.5991H41.7786C40.9068 16.5991 40.1244 16.2609 39.5432 15.5843C38.962 14.9077 38.7162 14.1183 38.8056 13.2387C39.0068 11.4796 39.9009 9.96851 41.1974 8.95362H38.582C37.2632 8.95362 36.2126 10.0362 36.2126 11.3894V25.846H43.2316C42.248 25.0566 41.6221 23.8613 41.6221 22.4855C41.6221 20.1174 43.5221 18.2004 45.8693 18.2004C48.2164 18.2004 50.1164 20.1174 50.1164 22.4855C50.1164 23.9515 49.3787 25.237 48.2611 26.0264C50.72 26.6579 52.6423 28.7779 52.9329 31.4391C53.0224 32.3187 52.7765 33.1306 52.1953 33.7847C51.6141 34.4387 50.8541 34.7996 49.9599 34.7996H41.7562C40.8844 34.7996 40.1021 34.4613 39.5209 33.7847C38.9397 33.1081 38.6938 32.3187 38.7832 31.4391C38.9844 29.68 39.8785 28.1689 41.175 27.154L41.2197 27.1315ZM46.7634 8.90851H45.0645C42.5386 8.90851 40.415 10.8255 40.1244 13.3515C40.0574 13.8477 40.2138 14.2987 40.5491 14.6821C40.8844 15.0655 41.3092 15.246 41.8009 15.246H50.0046C50.5188 15.246 50.9211 15.0655 51.2564 14.6821C51.5917 14.2987 51.7259 13.8702 51.6812 13.3515C51.3906 10.8255 49.267 8.90851 46.741 8.90851H46.7634ZM42.9633 4.26255C42.9633 5.90894 44.2822 7.23957 45.914 7.23957C47.5458 7.23957 48.8646 5.90894 48.8646 4.26255C48.8646 2.61617 47.5458 1.28553 45.914 1.28553C44.2822 1.28553 42.9633 2.61617 42.9633 4.26255ZM25.3488 17.8847C25.3488 18.0426 25.4829 18.1553 25.617 18.1553H30.043L25.3488 13.4191V17.8847ZM12.7415 38.5885V31.7774C10.0814 31.4617 8.00253 29.1613 8.00253 26.3872C8.00253 23.6132 10.0814 21.3128 12.7415 20.997V14.186H11.892C11.892 14.186 11.8473 14.186 11.8473 14.2311L11.7579 16.0579C11.7356 16.6443 11.3555 17.1179 10.7967 17.2757C10.1038 17.4787 9.45551 17.7494 8.82961 18.1102C8.31548 18.4034 7.71194 18.3132 7.28722 17.9298L5.94601 16.6894H5.90131L3.77773 18.8319V18.877L5.00717 20.2302C5.38718 20.6587 5.47659 21.2677 5.186 21.7864C4.82834 22.4179 4.5601 23.0945 4.35892 23.7711C4.20245 24.3349 3.71067 24.7183 3.15183 24.7409L1.34121 24.8311C1.34121 24.8311 1.2965 24.8311 1.2965 24.8762V27.8983C1.2965 27.8983 1.2965 27.9434 1.34121 27.9434L3.15183 28.0336C3.73302 28.0562 4.20245 28.4396 4.35892 29.0034C4.5601 29.7026 4.82834 30.3566 5.186 30.9881C5.47659 31.5068 5.38718 32.1157 5.00717 32.5443L3.77773 33.8974V33.9426L5.90131 36.0851H5.94601L7.28722 34.8447C7.71194 34.4613 8.31548 34.3711 8.82961 34.6643C9.45551 35.0026 10.1038 35.2957 10.7967 35.4987C11.3555 35.6566 11.7356 36.1528 11.7579 36.7166L11.8473 38.5434C11.8473 38.5434 11.8473 38.5885 11.892 38.5885H12.7415ZM9.29903 26.3872C9.29903 28.4396 10.7967 30.1536 12.7415 30.4694V22.3051C10.7967 22.6209 9.29903 24.3349 9.29903 26.3872ZM30.9595 40.0319V19.486H25.617C24.7453 19.486 24.0523 18.7643 24.0523 17.9072V12.517H14.4627C14.2168 12.517 14.038 12.72 14.038 12.9455V40.0545C14.038 40.3026 14.2391 40.483 14.4627 40.483H30.5348C30.7807 40.483 30.9595 40.28 30.9595 40.0545V40.0319ZM46.7634 45.3319H44.6845C42.3151 45.5349 40.3927 47.3617 40.1244 49.7749C40.0574 50.2936 40.2138 50.7221 40.5491 51.1055C40.8844 51.4889 41.3092 51.6694 41.8009 51.6694H50.0046C50.5188 51.6694 50.9211 51.4889 51.2564 51.1055C51.5917 50.7221 51.7259 50.2936 51.6812 49.7749C51.3906 47.2489 49.267 45.3319 46.741 45.3319H46.7634ZM42.9633 40.686C42.9633 42.3323 44.2822 43.663 45.914 43.663C47.5458 43.663 48.8646 42.3323 48.8646 40.686C48.8646 39.0396 47.5458 37.7089 45.914 37.7089C44.2822 37.7089 42.9633 39.0396 42.9633 40.686ZM42.9633 22.4855C42.9633 24.1319 44.2822 25.4626 45.914 25.4626C47.5458 25.4626 48.8646 24.1319 48.8646 22.4855C48.8646 20.8391 47.5458 19.5085 45.914 19.5085C44.2822 19.5085 42.9633 20.8391 42.9633 22.4855ZM44.6845 27.1315C42.3151 27.3119 40.3927 29.1613 40.1244 31.5745C40.0574 32.0932 40.2138 32.5217 40.5491 32.9051C40.8844 33.2885 41.3092 33.4689 41.8009 33.4689H50.0046C50.5188 33.4689 50.9211 33.2885 51.2564 32.9051C51.5917 32.5217 51.7259 32.0932 51.6812 31.5745C51.3906 29.0485 49.267 27.1315 46.741 27.1315H44.6622H44.6845Z" fill="#0E2049" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5170_167">
                                        <rect width="53" height="53" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text">
                            <h6>Productivity Analytics
                                & Dashboards</h6>
                            <p>Gain deep insights into team performance with real-time analytics and customizable dashboards, driving informed decision-making and growth. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Door to Track Section -->

    <!-- Meet StaffViz Section -->
    <section class="meet-staffiz-section">
        <img src="{{ asset('public/assets/itcn-images/red-shadow-2.webp') }}" class="red-shadow" alt="red shadow">
        <div class="container">
            <div class="row">
                <div class="col-12 start-text text-center">
                    <h2>Why <span>Meet StaffViz</span> at ITCN Asia 2024?</h2>
                    <p>Discover how StaffViz can revolutionize your time management. Learn about our cutting-edge solutions for project management and progress reports.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4 meet-reason-box cyan-box text-center">
                    <div class="inner-box">
                        <h2>Networking</h2>
                        <p>Share ideas, collaborate &<br> find future prospects</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4 meet-reason-box blue-box text-center">
                    <div class="inner-box">
                        <h2>Mapping</h2>
                        <p>Make a difference by <br> embracing the tech landscape</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-4 meet-reason-box parrotGreen-box text-center">
                    <div class="inner-box">
                        <h2>Innovating</h2>
                        <p>Explore new opportunities &<br> expand skillsets </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet StaffViz Section -->

    <!-- Let's Meet At Section -->
    <section class="lets-meet-at">
        <div class="container">
            <div class="row">
                <div class="col-12 text text-center">
                    <h2>Participate in ITCN Asia 2024</h3>
                        <a>
                            Let's Meet at
                        </a>
                        <img src="{{ asset('public/assets/itcn-images/logo.webp') }}" alt="Logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Let's Meet At Section -->


    @include("theme/layouts/footer")

    <input type="hidden" id="base_url" value="{{url('/')}}/">
    <input type="hidden" id="csr_token" value="{{ csrf_token() }}">
    <script src="{{ asset('public/assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.js') }}"></script>
    @yield('js')

</body>

</html>