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

  @media(max-width: 991px) {
    #sliderVideo {
      height: 470px;
      max-height: 470px;
    }

    #about-hero:after {
      height: 470px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 630px;
      max-height: 630px;
    }

    #about-hero:after {
      height: 590px;
    }

    .single-feature-section {
      padding-top: 50px !important;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="tracking-single-page hrm-header-section"
  style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Smarter Employee <br> Monitoring Software</h1>
        <div class="col-md-8 hero-text">
          <p>Observe, analyze and optimize the key metrics and performance indicators with strategic monitoring to make
            informed decisions.</p>

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
  <!-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Tracking</h2>
        <p>Build high-performing teams with StaffViz: <span>clear transparency, instant analytics</span>, and all-in-one monitoring for a detailed view. More than just tracking – it is your path to extraordinary organizational success. Get Organized in One Go! </p>
      </div>
    </div>
  </div> -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" Alt="Tracking Icon">
          <div class="all-text">
            <h2>Activity Monitoring</h2>
            <p>Observe and analyze detailed user actions to maintain high productivity. This feature provides you with
              the data you need to make informed decisions.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/activity-monitoring.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/img-shift-monitoring.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Shift Monitoring</h2>
            <p>Manage shift changes and optimize team scheduling with shift monitoring. Designed for smooth operations
              and timely adjustments.</p>

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
            <h2>Break Monitoring</h2>
            <p>Manage and monitor break times<br> accurately with a break-monitoring feature.<br> It helps you maintain
              compliance and enhance productivity.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img style="width: 85%" src="{{asset('public/assets/img/break-monitoring.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img class="w-100" src="{{asset('public/assets/img/overtime-monitoring.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Overtime Monitoring</h2>
            <p>Keep a closer look at overtime hours to track extra working hours, essential for budgeting and
              maintaining operational efficiency.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-6 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Short Time Monitoring</h2>
            <p>Effectively track short-time work arrangements<br> with the Staffviz monitoring feature, designed to<br> optimize labor hours and maintain productivity.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/short-time-monitoring.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img class="w-100" src="{{asset('public/assets/img/live-dashboard.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Live Dashboard</h2>
            <p>Get real-time updates on team activities, offering a diverse breakdown of employee punctuality, learning
              progress, shift patterns, and project developments.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Web & App Monitoring</h2>
            <p>Enhanced security network and monitoring of employees' inappropriate online behavior. This<br> feature allows you to use advanced filtering<br> options to ensure compliance and optimize performance.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/web-app-monitoring.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-12 break-img order-lg-1 order-2">
        <img class="w-100" src="{{asset('public/assets/img/time-spend-monitoring.webp')}}" alt="Img">
      </div>
      <div class="col-lg-6 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Time Spend Monitoring</h2>
            <p>Keep a detailed record of time allocation and<br> get insight into how time is spent. This is<br> essential for effective management and<br> project planning.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-6 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Active/ Idle Time Monitoring</h2>
            <p>Identify active and idle time within your teams. This<br> is crucial for improving employee productivity and operational efficiency.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/active-idle-time-monitoring.webp')}}" alt="Img">
      </div>
    </div>
</section>

@endsection