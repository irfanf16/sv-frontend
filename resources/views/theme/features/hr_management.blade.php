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
      height: 635px;
      max-height: 635px;
    }
    #about-hero:after {
      height: 635px;
    }
  }
  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 687px;
      max-height: 687px;
    }
    #about-hero:after {
      height: 687px;
    }
    .single-feature-section {
      padding-top: 50px !important;
    }
    .hrm-header-section h1 {
      font-size: 27px !important;
    }
  }
  @media only screen and (max-width: 389px) {
    #sliderVideo {
      height: 732px;
      max-height: 732px;
    }
    #about-hero:after {
      height: 732px;
    }
  }
  @media only screen and (max-width: 374px) {
    #sliderVideo {
      height: 753px;
      max-height: 753px;
    }
    #about-hero:after {
      height: 753px;
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
      <div class="hero-head h_t col-xl-11 col-md-12">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">StaffViz: Employee Management Software for Better and Deeper Insights</h1>
        <div class="col-xl-8 col-md-9 hero-text">
          <p>Streamline HR procedures, manage organizational structures and<br> automate the entire employee lifecycle. When
            it comes to employee productivity software, begin with the correct route.</p>

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
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" alt="tracking-icon">
          <div class="all-text">
            <h2>Employees<br> Management</h2>
            <p>Ensure your staff members are motivated and have the right resources within reach,<br> designed to tackle all aspects of HR tasks<br> from onboarding to performance tracking.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/employees-management-staffviz.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img class="w-100" src="{{asset('public/assets/img/team-management-staffviz.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="various-icon">
          <div class="all-text">
            <h2>Team Management</h2>
            <p>Streamline Team operations and optimize performance with HR management features. Providing a robust
              platform to facilitate effective collaboration, monitor progress, and manage resources to achieve the best
              project outcomes.</p>

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
          <img src="{{asset('public/assets/img/assment-icon.webp')}}" alt="assment-icon">
          <div class="all-text">
            <h2>Company Off days Calendar</h2>
            <p>Plan with Staffviz Off days calendar and keep track of company holidays. Get full visibility into
              scheduled non-working days, facilitating smoother operations and effective time management.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img clas="w-100" src="{{asset('public/assets/img/calendar.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img style="width: 90%;" src="{{asset('public/assets/img/rate-management.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Rate Management</h2>
            <p>Optimize pricing and gain full control of your pricing strategies. Receive timely updates and real-time
              insights to ensure your rates consistently align with current market conditions and overarching business
              goals.</p>
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
            <h2>Cost Management</h2>
            <p>With the Staffviz cost management<br> feature, you can enhance cost efficiency across operations, take
              control of your financials, and manage your company's expenditures.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img style="margin-right: 5%" src="{{asset('public/assets/img/hrm-financial.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container" id="shift-managment">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img style="width: 87%;" src="{{asset('public/assets/img/img-shift-schedulin.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Shift Scheduling</h2>
            <p>Flexible shift scheduling optimizes staffing and enhances team productivity. It allows you to be
              responsive to changes and maintain a continuous workflow.</p>
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
            <h2>Break Scheduling</h2>
            <p>Organize and monitor break scheduling strategically. Prioritize employee health and productivity to
              promote a balanced work environment.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/break-scheduling.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img style="width: 95%" src="{{asset('public/assets/img/roles-permissions.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-md-1 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Roles and Permissions</h2>
            <p>Tailor role-based user access ensures employees only see what they need to perform according to their
              role. It helps you safeguard information and optimize workflow.</p>
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
            <h2>Company Time Zone</h2>
            <p>With a unified time management feature, you can effectively manage your deadlines and meetings across
              different regions, helping all employees stay synchronized.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/time-zone.webp')}}" alt="Img">
      </div>
    </div>
</section>


<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/theme-selection.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Theme Selection</h2>
            <p>With a dynamic theme customization feature, it enhances usability and adds aesthetic appeal to your
              platform. This helps foster a more personalized and improved user experience.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection