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
      height: 510px;
      max-height: 510px;
    }

    #about-hero:after {
      height: 510px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 630px;
      max-height: 630px;
    }

    #about-hero:after {
      height: 630px;
    }

    .single-feature-section {
      padding-top: 50px !important;
    }
  }
  @media only screen and (max-width: 359px) {
    .hrm-header-section h1 {
        font-size: 45px !important;
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
      <div class="hero-head h_t col-xl-10">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Agile Project Management Software for High-Performing Teams</h1>
        <div class="col-xl-9 col-md-11 hero-text">
          <p>
            Simplify project coordination and improve task management, designed for optimal project coordination and efficient task tracking.</p>
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
            <h2>Project Management</h2>
            <p>Take ownership of the project lifecycle from initiation, planning, execution, and monitoring to closure.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/project-management.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/task-management.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Task Management</h2>
            <p>Effectively and efficiently track, manage, and execute the life cycle of a task or many tasks within a project from inception to execution.</p>

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
            <h2>Billable/ Non-Billable Projects</h2>
            <p>Automate your timesheets using StaffViz task tracking. This feature tracks working hours on the projects and tasks, making it easy to generate accurate invoices automatically.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/billable.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/task-scheduling.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Task Scheduling</h2>
            <p>Simplify the task planning and scheduling process, ensuring timely completion and effective resource allocation for each project.</p>
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
            <h2>Task Assignment</h2>
            <p>Delegate tasks effortlessly with a smart task assignment feature, ensuring the right tasks are assigned to the right employee according to their expertise and availability.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/task-assignment.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-2 order-1">
        <img src="{{asset('public/assets/img/img-instant-notification.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Instant Notifications</h2>
            <p>Get notifications instantly on essential developments, helping you stay updated and responsive all the time.</p>
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
            <h2>My Tasks</h2>
            <p>Keep your tasks and projects organized with 'My Tasks,' a dedicated space to help you manage and prioritize your workload efficiently.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/my-tasks.webp')}}" alt="Img">
      </div>
    </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-12 break-img order-lg-1 order-2">
        <img src="{{asset('public/assets/img/manual-time-rntry.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12 order-lg-2 order-1">
        <div class="d-flex inner-contents">
          <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
          <div class="all-text">
            <h2>Manual Time Entry</h2>
            <p>Enter time manually to maintain an exact record of work hours, which is ideal for precise control over time tracking and reporting.</p>
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
            <h2>Pending/Overdue and Completed Tasks</h2>
            <p>Easily track and manage overdue and pending tasks. Identify and prioritize tasks that require immediate attention and never miss a deadline again.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img src="{{asset('public/assets/img/completed-tasks.webp')}}" alt="Img">
      </div>
    </div>
</section>

@endsection