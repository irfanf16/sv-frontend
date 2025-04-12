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
  .hero-head span{
    padding: 1px 15px;
    border-radius: 3px;
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
<section id="about-hero" class="tracking-single-page"
  style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Tracking <br>
          With <span>StaffViz</span></h1>
        <div class="col-md-8 hero-text">
          <p>Gain insight into project stages, personal activities, resource allocation, and pinpoint areas for
            optimization. Dynamic tracking capabilities enhance visibility and improve strategic planning.</p>

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
  <img src="{{asset('public/assets/img/feature-red-shadow.webp')}}" alt="Shadow"
    class="pink-inner-feature">
  <!-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Tracking</h2>
        <p>Build high-performing teams with StaffViz: <span>clear transparency, instant analytics</span>, and all-in-one monitoring for a detailed view. More than just tracking – it is your path to extraordinary organizational success. Get Organized in One Go! </p>
      </div>
    </div>
  </div> -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/tracking-icon.png')}}" Alt="Tracking Icon">
          <div class="all-text">
            <h2>Task Tracking</h2>
            <p>Increase productivity with a task-tracking feature designed to get detailed insight into every aspect of
              task management. Keep your projects on track to improve operational transparency and time management.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/tracking-staffviz.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/team-dashboard-staffviz.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Team Dashboard</h2>
            <p>Provides you with a high-level view of company operations. It integrates information cards, tables, and
              real-time updates to project team performance and operational status comprehensively.</p>

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
            <h2>Course Tracking</h2>
            <p>Utilize the course tracking capabilities to keep track of your educational offerings. It allows you to
              manage course timelines and assess educational impact.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/course-tracking-staffiz.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/assessment-tracking-staffviz.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Assessment Tracking</h2>
            <p>Get a comprehensive view of all assessment activities, Track progress, analyze results, and adjust
              teaching strategies to improve educational outcomes.</p>
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
            <h2>Various Tracking Modes</h2>
            <p>Gain accurate insights according to the unique demands of each task with multiple tracking modes and
              enhance your ability to manage effectively across various dimensions.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 break-img">
        <img src="{{asset('public/assets/img/img-Various-tracking-modes.webp')}}" alt="Img">
      </div>

    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/auto-time-tracking-staffviz.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Auto Time Tracking</h2>
            <p>Automatically capture every minute to put focus on your tasks. The auto-time tracking feature is perfect
              for boosting productivity and managing billing hours.</p>
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
            <h2>Productivity Tracking</h2>
            <p>Gain valuable insight into your team's productivity to improve workplace efficiency. This will help you
              make informed decisions to boost overall output.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/img-productivity-tracking.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/time-tracking-staffviz.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Time Tracking</h2>
            <p>Ensure accurate time management even without internet access. The offline time tracking ensures no time
              is missed regardless of connectivity.</p>
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
            <h2>Billable/Non-Billable Tracking</h2>
            <p>Distinguish between billable and non-billable hours to ensure accurate client billing. This feature helps
              you optimize invoicing accuracy and fiscal management.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/billablenon-billable tracking.webp')}}" alt="Img">
      </div>
    </div>
</section>


<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-12 break-img order-md-2 order-2">
        <img src="{{asset('public/assets/img/user-controlled-desktop-app.webp')}}" alt="Img">
      </div>
      <div class="col-lg-6 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>User-Controlled Desktop App</h2>
            <p>The user-controlled desktop app allows you to manage your tasks and take control of your digital
              environment. It offers flexible settings that suit any workflow requirement.</p>
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
            <h2>Instant<br> Notifications</h2>
            <p>Get notifications instantly on essential changes and developments, helping you stay updated and
              responsive all the time.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/img-instant-notifications.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/img-keystrokes-tracking.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Keystrokes Tracking</h2>
            <p>A sophisticated keystroke monitoring system that precisely tracks each keystroke a user makes. Give a
              thorough analysis and comprehensive tracking of user behavior.</p>
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
            <h2>Data Retention Add-ons</h2>
            <p>Preserve your essential data and enhance your data management strategy with Data Retention Add-ons. This
              feature provides reliable storage solutions and easy access.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 break-img">
        <img src="{{asset('public/assets/img/img-data-retention-add-ons.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>


<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/snapshots.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Snapshots</h2>
            <p>Quickly monitor the productivity of every employee with random screenshots or ones triggered by unusual
              activities on your employee's system.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection