@extends('theme.layouts.master')
@section("page-class" , "index-page")
@section('css')
<style type="text/css">
  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 410px;
    max-height: 410px;
    object-position: center;
    object-fit: cover;
  }
  #home-hero{
    background: none !important;
  }
  #about-hero .overlay{
      position:absolute;
      content:'';
      top:0;
      height: 410px;
      width:100%;
      background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
      z-index:-1;
  }
</style>
@endsection('css')
@section('content')

    <!-- Banner -->
    <section id="about-hero" style="background-image: url( '{{ asset('public/assets/img/shapes-about.webp') }}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
      <video autoplay muted loop id="sliderVideo">
        <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
  		<div class="container-fluid">
        <div class="row">
          <div class="hero-head">
            
            <h1 class="text-center">
                Message Sent
            </h1>
          </div>
        </div>
        </div>
    </section>
 <!-- Banner -->

   <section id="sent_message">
      <div class="container-fulid py-5">
          <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-8 col-md-10 text-center">
                  <div class="content_sent">
                      <img src="{{ asset('public/assets/img/') }}/message.png" alt="message">
                      <h2>Thank you for reaching out to us!</h2>
                      <p>We'll be in touch shortly to assist with your StaffViz inquiry. Your interest is valued, 
                         and we're eager to provide personalized support tailored to your needs.</p>
                      <a href="{{ url('/') }}" class="get_btn">Go HOME</a>
                      <a href="{{ url('/features') }}"  class="go_btn">go TO features</a>
                  </div>
              </div>
          </div>
      </div>
   </section>

@endsection