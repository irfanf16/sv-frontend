@extends('theme.layouts.master')
@section("page-class", "case-studies")
@section('css')
<style type="text/css">
  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 530;
    max-height: 530;
    object-position: center;
    object-fit: cover;
  }

  #home-hero {
    background: none !important;
  }

  #about-hero {
    padding-top: 250px;
  }

  #about-hero .overlay {
    position: absolute;
    content: '';
    top: 0;
    height: 530;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: 0;
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 500px;
      max-height: 500px;
    }

    #about-hero .overlay {
      height: 500px;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero"
  style="background-image: url( '{{ asset('public/assets/img/shapes-about.webp') }}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <div class="overlay"></div>
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/case-studies-banner-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <h1 class="pb-3">
          StaffViz Case Studies
        </h1>
        <div class="col-md-9 hero-text">
          <p>Find out how other companies use time tracking to increase their employee productivity. Try StaffViz and
            your experience might become our next case study. Read our case studies to know how companies build an
            engaging workplace and turned them.</p>
        </div>
        <div class="hero-btns">
          <a href="tel:8558553140" class="features">Talk TO sales</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->

<!-- Search & Logos -->
<section class="search-and-logos">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9 search-outer-bar">
        <div class="search-inner-bar d-md-flex align-items-center">
          <div class="form-group d-flex align-items-center">
            <img src="{{asset('public/assets/img/search-icon.png')}}" alt="Search Bar">
            <input type="text" class="form-control" placeholder="Search Case Study by Category">
          </div>
          <button class="search-btn">Search</button>
        </div>
      </div>
    </div>
    <div class="company-logos justify-content-xl-between justify-content-center d-flex flex-wrap align-items-center">
      <div class="img">
        <img src="{{asset('public/assets/img/wrs-health.png')}}" alt="wrs-health">
      </div>
      <div class="img">
        <img src="{{asset('public/assets/img/groupon.png')}}" alt="groupon">
      </div>
      <div class="img">
        <img src="{{asset('public/assets/img/clippers.png')}}" alt="clippers">
      </div>
      <div class="img">
        <img src="{{asset('public/assets/img/catalyst.png')}}" alt="catalyst">
      </div>
      <div class="img">
        <img src="{{asset('public/assets/img/kurve.png')}}" alt="kurve">
      </div>
      <div class="img">
        <img src="{{asset('public/assets/img/instacart.png')}}" alt="instacart">
      </div>
    </div>
  </div>
</section>
<!-- Company Logos -->

<!-- Case Studies Section -->
<section class="case-study-section">
  <div class="container-fluid">
    <div class="start-text text-center">
      <h2>Real Life Case Studies</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-1-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-2-img.png')}}" alt="case-study-2-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-3-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-4-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-5-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-6-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
    </div>
    <div class="subscribe-section">
      <div class="container-fluid">
        <div class="box">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-11 text">
              <h6>Start Your Journey of Ultimate Productivity with StaffViz</h6>
              <p>Leave your email and we'll get back to you.</p>
            </div>
            <div class="col-lg-5 offset-lg-1 col-11 subscribe-outer-form">
              <form action="#">
                <div class="subscribe-inner-form d-md-flex align-items-center">
                  <input type="text" class="form-control" placeholder="Enter your email address">
                  <button class="submit-btn">Subscribe</button>
                </div>
                <label for="i-agree"><input type="checkbox" id="i-agree"> I agree to the StaffViz <a href="{{url('/terms-conditions')}}"> Terms & Conditions</a> </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-1-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-2-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 outer-box">
        <div class="inner-box">
          <div class="img">
            <img src="{{asset('public/assets/img/case-study-3-img.png')}}" alt="case-study-img">
          </div>
          <div class="text-box">
            <h6>How to keep yourself accountable with StaffViz</h6>
            <p>Industry: Accounting</p>
            <a href="{{url('/case-study-detail')}}">Read Case Study</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Case Studies Section -->

<!-- Rewrite Businesses -->
<section class="rewrite-businesses">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-md-11 text-center text">
        <h2>Learn How We Rewrite Businesses' Fortune!</h2>
        <p>StaffViz has assisted businesses resolve complex challenges for organizations of distinct types and scale, making it the best feature packed solution for businesses need. </p>
      </div>
    </div>
  </div>
</section>
<!-- Rewrite Businesses -->

<!-- Growth CTA Section -->
<section id="growth" class="rewrite-businesses-box">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center growth-text">
        <h2>Managment, Monitoring and Organizing;</h2>
        <h3>All in A Single Software </h3>
        <p> Start your free trial today and leverage from the topnotch management, monitoring, and workflow streamlining solutions that comes within. </p>
        <a href="{{ url('/contact-us') }}">Start free trial</a>
      </div>
    </div>
  </div>
</section>
<!-- Growth CTA Section -->

@endsection