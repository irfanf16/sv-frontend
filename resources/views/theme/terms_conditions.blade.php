@extends('theme.layouts.master')
@section("page-class", "index-page")
<style type="text/css">
  .contact_main_sec {
    padding: 250px 0 50px !important;
  }

  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 432px;
    max-height: 432px;
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
    height: 432px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.7) 6.16%, rgba(34, 114, 159, 0.7) 39.5%, rgba(6, 37, 100, 0.7) 54.39%, rgba(2, 37, 96, 0.7) 85.46%);
    z-index: 0;
  }

  #about-hero {
    padding-top: 235px !important;
  }

  #privacy_policy .blue-bg {
    top: 10%;
    bottom: unset;
  }
  .hero-head h1{
    margin-bottom: 45px!important;
  }

  @media only screen and (max-width: 1199px) {
    #sliderVideo {
      height: 275px;
      max-height: 275px;
    }

    #about-hero .overlay {
      height: 275px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 275px;
      max-height: 275px;
    }

    #about-hero .overlay {
      height: 275px;
    }
  }
</style>
@section('content')

<!-- Banner -->
<section id="about-hero">
  <div class="overlay"></div>
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/privacy-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head">
        <h1 class="text-center">
          Terms & Conditions
        </h1>
      </div>
    </div>
  </div>
</section>

<section id="privacy_policy" class="position-relative">
  <div class="container-fluid my-lg-5 my-2">
    <div class="row">
      <!-- change column -->
      <div class="col-xl-4 col-lg-5 left-col">

        <div class="text_privicy">
          <p>Last updated: June. 21, 2024</p>
        </div>
        <!-- change column -->
        <div class="tablee">
          <h2>Table of Contents</h2>
          <ul>
            <a href="#intro">
              <li class="active">Introduction</li>
            </a>
            <a href="#Installing">
              <li>Installing, Customizing & Updating</li>
            </a>
            <a href="#Eligibility">
              <li>Eligibility </li>
            </a>
            <a href="#Modifications">
              <li>Modifications</li>
            </a>
            <a href="#Account">
              <li>Account Cancelation</li>
            </a>
          </ul>
        </div>
        <img class="blue-bg" src="{{asset('/public/assets/img/privacy-policy-left-blue-shadow.png')}}" alt="Blue">
      </div>
      <div class="col-xl-8 col-lg-7 right-col">
        <img class="red-top-bg" src="{{asset('/public/assets/img/privacy-policy-red-shadow.png')}}" alt="Red">
        <img class="red-bottom-bg" src="{{asset('/public/assets/img/privacy-policy-red-shadow.png')}}" alt="Red">
        <div class="content_div">
          <p>The Agreement directs and governs the conditions and regulations to use the Service. If you don’t agree to the Agreement (full or partial), don’t sign up or use the Service. Once you sign up or use the Service, you consent to the Agreement without further notification.</p>
          <p>Please read out the Agreement before continuing with the StaffViz Service.</p>
          <h2 id="intro">Introduction</h2>
          <p>You acknowledge having all rights and permissions to allow us and give consent to apply the Agreement. In
            this Agreement, we guide, govern, and facilitate your use of Staffviz, including websites, applications,
            accounts, solutions, software, and other related services.</p>

          <h3>Definitions</h3>
          <p>The following terms are defined as below:</p>
          <p><strong> “StaffViz”</strong> means We, Us, Our Company, Platform, and the Entity providing a solution or
            solutions to redefine work dynamics. </p>
          <p> <strong>“Services”</strong>refers to our offerings in the form of websites, applications, accounts,
            solutions, software, and any other related service(s). </p>
          <p> <strong>“Users”</strong> means You, Your, User, and Company, and/or an individual using our software
            solutions or browsing our website (paid or free).</p>
          <p> <strong>“Agreement”</strong> means the terms, conditions, and other applicable policies about the User's
            data, information, and usage of the StaffViz Service.</p>

          <h2 id="Installing">Installing, Customizing & Updating </h2>

          <p>You're responsible for installing the Service on your computer system and making any necessary adjustments
            to fit your setup. However, Staffviz will handle all updates, improvements, and changes to the Service,
            including any modifications needed for your specific use. <br><br>
            While these Terms are in place, you need to let Staffviz access your computer system so they can install updates. If you don't allow this or refuse to pay for the updates, it cancels all warranties for anything related to the Service, and you can't use the Service anymore.</p>

          <h2 id="Eligibility">Eligibility </h2>
          <p style="padding-bottom: 0">To use the Service, you must:
          <ul>
            <li style="list-style:disc;">Be at least eighteen (18) years old. </li>
            <li style="list-style:disc;">Register the account.</li>
            <li style="list-style:disc;">Agree to the Agreement, including Privacy Policy, Terms of Service, Data
              Process Agreement, and any other policies.</li>
            <li style="list-style:disc;">Provide correct and up-to-date information.</li>
            <li style="list-style:disc;">Not be based in Cuba, Iran, North Korea, Syria, or any other territory that the
              U.S. government has designated as a “terrorist-supporting” country.</li>
          </ul> <br>
          <p>By using Staffviz, you agree that you meet all the requirements listed above and won’t use the Service in a way that violates any rules, terms, laws and other documents, collectively, the Agreement.</p>

          <h2 id="Modifications">Modifications</h2>
          <p>Staffviz can change this Agreement, the Service, fees, and other things whenever required. We may or may not inform you about any change in the Services. Keep checking this page to stay updated about future modifications and changes. If you keep using the Services after changes, it will voluntarily be taken as your consent to the Agreement.</p>

          <h2 id="Account">Account Cancelation </h2>
          <p>You can cancel your account at any time by sending an email to <a style="text-decoration:underline;"
              href="mailto:support@staffviz.com">support@staffviz.com</a>.<br><span class="d-lg-none d-block w-100"></span>
              Please make sure to cancel the account subscription before the next billing date; after you cancel the subscription, you won’t be charged for the next billing month

          </p>
        </div>
      </div>
    </div>
  </div>

</section>
<script>
  $(document).ready(function () {
    $('ul li').click(function () {
      $('li').removeClass("active");
      $(this).addClass("active");
    });
  });
</script>


@endsection