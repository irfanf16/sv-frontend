@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
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
        height: 99px;
        max-height: 99px;
        object-position: center;
        object-fit: cover;
    }

    #home-hero {
        background: none !important;
    }

    #about-hero {
        padding-bottom: 0 !important;
        margin-top: -244px !important;
    }

    #about-hero .overlay {
        position: absolute;
        content: '';
        top: 0;
        height: 99px;
        width: 100%;
        background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
        z-index: 0;
    }

    @media only screen and (max-width: 575px) {
        #about-hero {
            padding-bottom: 0 !important;
            margin-top: -175px !important;
        }
        #sliderVideo {
            height: 148px;
            max-height: 148px;
        }

        #about-hero .overlay {
            height: 148px;
        }

        #contact_us {
            margin-top: 0px;
        }
        #contact_us form{
            margin: 30px 0;
        }
    }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="contact_main_sec"
    style="background-image: url( '{{ asset('public/assets/img/shapes-about.webp') }}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
    <div class="overlay"></div>
    <video autoplay muted loop id="sliderVideo">
        <source src="{{ asset('public/assets/videos/contact-us.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</section>
<!-- Banner -->

<section id="thank_you" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text">
                <h1>Thank You!</h1>
                <h3>We will contact you soon.</h3>
            </div>
        </div>
    </div>
</section>

@endsection