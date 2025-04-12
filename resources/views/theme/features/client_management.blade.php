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
  .hero-head span{
    padding: 1px 15px;
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
      height: 675px;
      max-height: 675px;
    }

    #about-hero:after {
      height: 675px;
    }

    .single-feature-section {
      padding-top: 50px !important;
    }
  }

@media only screen and (max-width: 374px) {
  #sliderVideo {
    height: 695px;
    max-height: 695px;
  }

  #about-hero:after {
    height: 695px;
  }

}
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="tracking-single-page hrm-header-section client-m-p" style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-9">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Ultimate Client <br> Management Software</h1>
        <div class="col-md-12 hero-text">
          <p> Empower yourself to manage and enhance client management. Get client data, interactions and project details all in one place. Manage contracts, track communications, and analyze engagement to meet specific client needs. This system facilitates easier client onboarding and query handling, ensuring every client feels valued and understood.</p>
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
  <img src="{{asset('public/assets/img/feature-red-shadow.png')}}" alt="Shadow" class="pink-inner-feature">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" Alt="Tracking Icon">
          <div class="all-text">
            <h2>Managing Clients</h2>
            <p>Improve client relationship<br> management with StaffViz. Streamline<br> interactions, manage expectations and deliver exceptional services.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img class="managing-clients-img" src="{{asset('public/assets/img/managing-clients.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-end">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img class="w-100" src="{{asset('public/assets/img/viewer-access-projects.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Viewer Access to Projects</h2>
            <p>Manage viewer access to the project data, allowing only relevant stakeholders to access projects. This helps maintain the confidentiality and integrity of the project.</p>

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
            <h2>Viewer Access to Reports</h2>
            <p>With customizable viewing permissions, you can control who sees the reports, allowing stakeholders to gain important insight without compromising overall data security.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/viewer-access-reports.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

@endsection