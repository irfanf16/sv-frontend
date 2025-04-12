@extends('theme.layouts.master')
@section("page-class", "single-feature-page")
@section('css')
<style type="text/css">
  .hero-head h6 {
    margin-top: 20px;
  }

  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 625px;
    max-height: 625px;
    object-position: center;
    object-fit: cover;
  }

  #home-hero {
    background: none !important;
  }

  #about-hero:after {
    position: absolute;
    content: '';
    top: 0;
    height: 625px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: -1;
  }

  .hero-text p {
    margin-bottom: 20px;
  }

  @media(max-width: 1199px) {
  #sliderVideo {
    height: 624px;
    max-height: 624px;
  }

  #about-hero:after {
    height: 624px;
  }
}


  @media(max-width: 991px) {
    #sliderVideo {
      height: 640px;
      max-height: 640px;
    }

    #about-hero:after {
      height: 640px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 780px;
      max-height: 780px;
    }

    #about-hero:after {
      height: 780px;
    }

    .single-feature-section {
      padding-top: 50px !important;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="tracking-single-page hrm-header-section" style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-10">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Real-Time Insights <br>
        Through <span>Human Resource Analytics</span></h1>
        <div class="col-xl-10 col-md-12 hero-text">
          <p>
          With productive analysis, you can identify and remove system inefficiencies, improve the process, and control costs. You can also gain valuable insight into coaching needs and other shortcomings. You can empower your team to manage and improve, with accurate data.</p>
        </div>
        <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
          <button type="button" data-bs-toggle="modal" data-bs-target="#talkToSalePopup" class="features">Talk TO sales</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section inner-feature-first-section first-section-tracking">
  <img src="{{asset('public/assets/img/feature-red-shadow.webp')}}" alt="Shadow" class="pink-inner-feature">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" Alt="Tracking Icon">
          <div class="all-text">
            <h2>Workforce Analytics Reports</h2>
            <p>With the Dashboard & Reporting feature, you can find patterns and acquire the information needed to increase team output through a single dashboard. The reports can be viewed by day, week, or month and by each user or team level.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/reports-dashboard.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/owner-dashboard.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Owner Dashboard</h2>
            <p>Enhance leadership effectiveness and optimize management with the Staffviz Manager Dashboard. Gain comprehensive insights into team dynamics, productivity and project statuses.</p>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/assment-icon.webp')}}" alt="Assessment Icon">
          <div class="all-text">
            <h2>Users Dashboard</h2>
            <p>Access all essential tools and information with a personalized user Dashboard. This feature provides a personalized overview of your tasks, schedules, and performance metrics.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/users-dashboard.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/teamwork-reports.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Teamwork Reports</h2>
            <p>Optimize team performance by measuring and managing team productivity with teamwork reports. These reports detail team productivity, project contributions, and teamwork efficiency.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Project Time Reports</h2>
            <p>Find out how your team spends time on projects and optimize project management, resource allocation, and team efficiency through a detailed report of the project time spent.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/project-time-reports.webp')}}" alt="Img">
      </div>
    </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/manual-time-reports.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Idle & Manual Time Reports</h2>
            <p>View a detailed analysis of inactivity and manually logged time by the users. Uncover inefficiencies track administrative overhead and team productivity trends.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Screen Capture Report</h2>
            <p>Monitor the productivity of every employee with random screenshots or ones triggered by unusual activities on your employee's system.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/screen-capture-report.webp')}}" alt="Img">
      </div>
    </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/over-time-report.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Over Time Report</h2>
            <p>Keep a closer look at overtime hours to track extra working hours, which is essential for budgeting and maintaining operational efficiency.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Short Time Report</h2>
            <p>Effectively track short-time work arrangements with the Staffviz monitoring feature, designed to optimize labor hours and maintain productivity.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/short-time-report.webp')}}" alt="Img">
      </div>
    </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/data-export.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Data Export</h2>
            <p>Improve data management by effortlessly exporting critical data to other platforms for offline usage, enhancing collaboration and data accessibility.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection