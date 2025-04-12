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

  #about-hero .overlay {
    position: absolute;
    content: '';
    top: 0;
    height: 625px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: 0;
  }

  .hero-text p {
    margin-bottom: 20px;
  }

  @media(max-width: 991px) {
    #sliderVideo {
      height: 470px;
      max-height: 470px;
    }

    #about-hero .overlay {
      height: 470px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 630px;
      max-height: 630px;
    }

    #about-hero .overlay {
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
<section id="about-hero">
  <div class="overlay"></div>
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/-62a0-4e60-b922-62b7da1ea5a2.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <h6>Features </h6>
        <h1 class="pb-3">Optimal StaffViz Features</h1>
        <div class="col-md-8 hero-text">
          <p>Maximize revenue with our tools: streamline workforce management, decipher insights, boost security, gauge employee performance in one powerful package without infringing privacy!</p>
          <p>*Efficiency Elevated Effortlessly! </p>
        </div>
        <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo contact_btn">GET STARTED FREE</a>
          <a href="tel:8558553140" class="features">Request Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section inner-feature-first-section">
<img src="{{asset('public/assets/img/feature-red-shadow.webp')}}" alt="Shadow" class="pink-inner-feature">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Tracking</h2>
        <p>Build high-performing teams with StaffViz: <span>clear transparency, instant analytics</span>, and all-in-one monitoring for a detailed view. More than just tracking – it is your path to extraordinary organizational success. Get Organized in One Go! </p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-between align-items-start">
    <div class="col-lg-6 col-md-12">
     <div class="d-flex inner-contents">
     <img src="{{asset('public/assets/img/tracking-icon.png')}}" Alt="Tracking Icon">
     <div class="all-text">
     <h2>Task Tracking</h2>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
     </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-12 break-img">
     <img src="{{asset('public/assets/img/task-tracking.webp')}}" alt="Img"> 
</div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container-fluid">
  <div class="row justify-content-between align-items-start">
  <div class="col-lg-6 col-md-12 break-img">
     <img src="{{asset('public/assets/img/image-2nd.webp')}}" alt="Img"> 
  </div>
    <div class="col-lg-6 col-md-12">
     <div class="d-flex inner-contents">
     <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
     <div class="all-text">
     <h2>Course Tracking</h2>
     <p>Charge your employees by leveraging our employee time tracking software, stimulating them to put the best foot forward. Our high-end solution is ready to take care of employee hiring, tracking, monitoring, shifts & breaks, and performance. Seal the best deal in your work aspects by:</p>
       <ul>
        <li>Harnessing, building, and handling teams for Human Resource primacy</li>
        <li>Tracking, monitoring, and managing employees for greater visibility</li>
        <li>Valuing, utilizing, and adequately organizing time to embrace proficiency</li>
        <li>Visualizing, developing, and leveraging innovative ideas to increase productivity</li>
       </ul>
       <h3>Let your team members explore their inner superheroes with StaffViz that puts everyone on track, without any break.</h3>
     </div>
     </div>
     <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo success-cta get_btn">Begin Your Success</a>
    </div>
    </div>
    </div>
  </div>
</section>
<section id="feature-tabs" class="single-feature-section">
  <div class="container-fluid">
  <div class="row justify-content-between align-items-start">

    <div class="col-lg-6 col-md-12">
      <div class="d-flex inner-contents">
     <img src="{{asset('public/assets/img/assment-icon.webp')}}" alt="Assessment Icon">
     <div class="all-text">
     <h2>Assessment Tracking</h2>
     <p>Charge your employees by leveraging our employee time tracking software, stimulating them to put the best foot forward. Our high-end solution is ready to take care of employee hiring, tracking, monitoring, shifts & breaks, and performance. Seal the best deal in your work aspects by:</p>
       <ul>
        <li>Harnessing, building, and handling teams for Human Resource primacy</li>
        <li>Tracking, monitoring, and managing employees for greater visibility</li>
        <li>Valuing, utilizing, and adequately organizing time to embrace proficiency</li>
        <li>Visualizing, developing, and leveraging innovative ideas to increase productivity</li>
       </ul>
       <h3>Let your team members explore their inner superheroes with StaffViz that puts everyone on track, without any break.</h3>
     </div>
     </div>
     <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo success-cta get_btn">Begin Your Success</a>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 break-img">
     <img src="{{asset('public/assets/img/task-tracking.webp')}}" alt="Img"> 
</div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section single-feature-next">
  <div class="container-fluid">
  <div class="row justify-content-between align-items-start">
  <div class="col-lg-6 col-md-12 break-img">
     <img src="{{asset('public/assets/img/image-2nd.webp')}}" alt="Img"> 
  </div>
    <div class="col-lg-6 col-md-12">
     <div class="d-flex inner-contents">
     <img src="{{asset('public/assets/img/various-icon.webp')}}" alt="Various Icon">
     <div class="all-text">
     <h2>Course Tracking</h2>
     <p>Charge your employees by leveraging our employee time tracking software, stimulating them to put the best foot forward. Our high-end solution is ready to take care of employee hiring, tracking, monitoring, shifts & breaks, and performance. Seal the best deal in your work aspects by:</p>
       <ul>
        <li>Harnessing, building, and handling teams for Human Resource primacy</li>
        <li>Tracking, monitoring, and managing employees for greater visibility</li>
        <li>Valuing, utilizing, and adequately organizing time to embrace proficiency</li>
        <li>Visualizing, developing, and leveraging innovative ideas to increase productivity</li>
       </ul>
       <h3>Let your team members explore their inner superheroes with StaffViz that puts everyone on track, without any break.</h3>
     </div>
     </div>
     <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo success-cta get_btn">Begin Your Success</a>
    </div>
    </div>
    </div>
  </div>
</section>

<section id="feature-tabs" class="single-feature-section">
  <div class="container-fluid">
  <div class="row justify-content-between align-items-start">

    <div class="col-lg-6 col-md-12">
      <div class="d-flex inner-contents">
     <img src="{{asset('public/assets/img/assment-icon.webp')}}" alt="Assessment Icon">
     <div class="all-text">
     <h2>Assessment Tracking</h2>
     <p>Charge your employees by leveraging our employee time tracking software, stimulating them to put the best foot forward. Our high-end solution is ready to take care of employee hiring, tracking, monitoring, shifts & breaks, and performance. Seal the best deal in your work aspects by:</p>
       <ul>
        <li>Harnessing, building, and handling teams for Human Resource primacy</li>
        <li>Tracking, monitoring, and managing employees for greater visibility</li>
        <li>Valuing, utilizing, and adequately organizing time to embrace proficiency</li>
        <li>Visualizing, developing, and leveraging innovative ideas to increase productivity</li>
       </ul>
       <h3>Let your team members explore their inner superheroes with StaffViz that puts everyone on track, without any break.</h3>
     </div>
     </div>
     <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo success-cta get_btn">Begin Your Success</a>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 break-img">
     <img src="{{asset('public/assets/img/task-tracking.webp')}}" alt="Img"> 
</div>
    </div>
  </div>
</section>

<!-- Trial Section -->
<section id="trial" class="buttom-cta">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-12 trial-text">
        <h3>StaffViz is the Go-to Tool for Organizational Efficiency</h3>
        <p>Avail of a free 14-day trial and see how the magic happens. Combine our AI-powered solutions and in-depth insights to get visibility into your company's real-time landscape.</p>
        <div><a href="{{ url('/contact-us') }}">Free 14-day Trial</a></div>
      </div>
      <div class="col-lg-6 col-md-12 offset-md-1 d-md-flex justify-content-end d-none">
        <img src="{{ asset('public/assets/img/1707488040.png')}}" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- Trial Section -->


@endsection