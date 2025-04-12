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
        <h1 class="pb-3">Training<br>
          <span>Management</span>
        </h1>
        <div class="col-md-8 hero-text">
          <p>Evaluate, onboard and train the right talent as seamlessly and quickly as possible. Distribute educational
            content and track progress, ensuring continuous improvement.</p>

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
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" alt="Tracking Icon">
          <div class="all-text">
            <h2>Courses</h2>
            <p>Elevate your team's skills to boost knowledge and proficiency with our dynamic learning platform. The
              courses provide valuable resources for professional growth and offer opportunities for personal
              development, showing our investment in employee success.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/courses.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/articles-management.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various">
          <div class="all-text">
            <h2>Articles Management</h2>
            <p>Deepen knowledge and research skills with the Article Management Panel, providing a centralized solution
              for managing educational content. Users can add articles using sorting and other options to manage and
              distribute relevant articles.</p>

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
            <h2>Courses Management</h2>
            <p>Access and manage training in the courses panel. Navigate through active/inactive tabs, utilize the
              search, and explore various sorting options to find and manage courses efficiently.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/courses-management.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/auizzes-assessments.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various">
          <div class="all-text">
            <h2>Quizzes and Assessments</h2>
            <p>Enhance your assessment process using the Quizzes Panel. This module offers a centralized overview of
              past and present quiz activities and allows users to easily add, manage, track, and edit quizzes and
              assessments.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section first-section-tracking">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-lg-5 col-md-12 order-md-1 order-2">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various">
          <div class="all-text">
            <h2>Course Dashboard</h2>
            <p>Optimize learning management using a course dashboard to manage courses, track educational progress, and
              access resources.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img order-lg-2 order-1">
        <img src="{{asset('public/assets/img/course-dashboard.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/course-time-report.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various">
          <div class="all-text">
            <h2>Course Time Report</h2>
            <p>Adjust your learning schedule and get detailed analytics on your study time allocation. Course time
              reports enable you to enhance time management skills and improve learning outcomes.</p>
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
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various">
          <div class="all-text">
            <h2>Course Performance Report</h2>
            <p>Enhance and track detailed educational performance metrics from the Course Performance Report and gain
              insight into progress and future learning paths.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/course-rerformance-report.webp')}}" alt="Img">
      </div>
    </div>
</section>
@endsection