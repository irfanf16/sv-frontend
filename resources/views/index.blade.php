@extends('layouts.master')
@section("page-class" , "index-page")
@section('content')

        <section id="hero_section" class="container-xxl">
            <div class="row">
                <div class="col-lg-4 textHero">
                    <h1>Track
                        <span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span>
                        & Monitor Employee Engagement, Identify Burnouts to Drive Success
                    </h1>
                    <p>
                        One app to optimize cross-functional teams, visualize activities, manage teams/shifts, refine
                        productivity metrics, and remove bottlenecks.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="slider-content position-relative mt-2 mb-2">
                        <div class="tp-banner-container">
                            <div class="tp-banner" >
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="1" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption fade"
                                            data-x="0"
                                            data-y="0"
                                            data-speed="100"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/40.png" alt="">
                                        </div>
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="25"
                                            data-y="30"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="300"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="1000"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/45.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="130"
                                            data-speed="800"
                                            data-start="1000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/41.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="225"
                                            data-speed="1000"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/42.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="290"
                                            data-speed="1200"
                                            data-start="1400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/43.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="400"
                                            data-speed="1200"
                                            data-start="1400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/44.png" alt="">
                                        </div>
                                        <div class="tp-caption customin customout"
                                            data-x="176"
                                            data-y="0"
                                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="100"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="1000"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/46.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="200"
                                            data-y="50"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="800"
                                            data-start="1500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/48.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 6 -->
                                        <div class="tp-caption fade"
                                            data-x="1040"
                                            data-y="50"
                                            data-speed="1550"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/47.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="200"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1900"
                                            data-start="2600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/08.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="410"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1800"
                                            data-start="2500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/09.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="620"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1700"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/12.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="830"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1550"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/14.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="1040"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2500"
                                            data-start="2700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/16.png" alt="">
                                        </div>
                                        <!-- Second Layer --->
                    
                                        
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/10.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="410"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/11.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="620"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/13.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="830"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/15.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="1040"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/17.png" alt="">
                                        </div>
                    
                                        
                                        <!-- LAYER NR. 10 -->
                                        <div class="tp-caption customin customout"
                                            data-x="200"
                                            data-y="330"
                                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3500"
                                            data-start="4000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            style="z-index: 11"><img src="{{ asset('public/assets/images') }}/slider-1/18.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="200"
                                            data-y="370"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/19.png" alt="" data-ww="482" data-hh="176">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="215"
                                            data-y="390"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/20.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="415"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/21.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="435"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/22.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="490"
                                            data-y="433"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/24.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="458"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/23.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="490"
                                            data-y="457"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/25.png" alt="">
                                        </div>
                    
                                        <!-- Layer Graph -->
                                        
                                        <div class="tp-caption customin skewtoright"
                                            data-x="700"
                                            data-y="370"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/19.png" alt="" data-ww="482" data-hh="176">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="720"
                                            data-y="390"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/26.png" alt="" data-ww="118" data-hh="132">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="415"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/21.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="435"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/22.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="990"
                                            data-y="433"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/24.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="458"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/23.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="990"
                                            data-y="457"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/25.png" alt="">
                                        </div>
                    
                                        <!-- Last layer-->					
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="560"
                                            data-speed="5000"
                                            data-start="5500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/33.png" alt="">
                                        </div>	
                    
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="580"
                                            data-speed="5000"
                                            data-start="5500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/32.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="620"
                                            data-speed="5500"
                                            data-start="6000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/34.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="365"
                                            data-y="620"
                                            data-speed="6100"
                                            data-start="6500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/35.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="535"
                                            data-y="620"
                                            data-speed="6600"
                                            data-start="7000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/36.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="704"
                                            data-y="620"
                                            data-speed="7100"
                                            data-start="7500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/37.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="870"
                                            data-y="620"
                                            data-speed="7600"
                                            data-start="8000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/38.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="1037"
                                            data-y="620"
                                            data-speed="8100"
                                            data-start="8500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/39.png" alt="">
                                        </div>
                    
                                    </li>
                    
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="1" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption fade"
                                            data-x="0"
                                            data-y="0"
                                            data-speed="100"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/40.png" alt="">
                                        </div>
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="25"
                                            data-y="30"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="300"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="1000"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/45.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="130"
                                            data-speed="800"
                                            data-start="1000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/41.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="225"
                                            data-speed="1000"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/42.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="290"
                                            data-speed="1200"
                                            data-start="1400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/43.png" alt="">
                                        </div>
                                        <div class="tp-caption fade"
                                            data-x="10"
                                            data-y="400"
                                            data-speed="1200"
                                            data-start="1400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/44.png" alt="">
                                        </div>
                                        <div class="tp-caption customin customout"
                                            data-x="176"
                                            data-y="0"
                                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="100"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="1000"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/46.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="200"
                                            data-y="50"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="800"
                                            data-start="1500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-1/48.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 6 -->
                                        <div class="tp-caption fade"
                                            data-x="1040"
                                            data-y="50"
                                            data-speed="1550"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/47.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="200"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1900"
                                            data-start="2600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/08.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="410"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1800"
                                            data-start="2500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/09.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="620"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1700"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/12.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="830"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1550"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/14.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption skewfromleft customout"
                                            data-x="1040"
                                            data-y="140"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2500"
                                            data-start="2700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/16.png" alt="">
                                        </div>
                                        <!-- Second Layer --->
                    
                                        
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/10.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="410"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/11.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="620"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/13.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="830"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/15.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="1040"
                                            data-y="240"
                                            data-speed="3000"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="500"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 7"><img src="{{ asset('public/assets/images') }}/slider-1/17.png" alt="">
                                        </div>
                    
                                        
                                        <!-- LAYER NR. 10 -->
                                        <div class="tp-caption customin customout"
                                            data-x="200"
                                            data-y="330"
                                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3500"
                                            data-start="4000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            style="z-index: 11"><img src="{{ asset('public/assets/images') }}/slider-1/18.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="200"
                                            data-y="370"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/19.png" alt="" data-ww="482" data-hh="176">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="215"
                                            data-y="390"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/20.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="415"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/21.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="435"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/22.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="490"
                                            data-y="433"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/24.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="355"
                                            data-y="458"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/23.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="490"
                                            data-y="457"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/25.png" alt="">
                                        </div>
                    
                                        <!-- Layer Graph -->
                                        
                                        <div class="tp-caption customin skewtoright"
                                            data-x="700"
                                            data-y="370"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/19.png" alt="" data-ww="482" data-hh="176">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="720"
                                            data-y="390"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/26.png" alt="" data-ww="118" data-hh="132">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="415"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/21.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="435"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/22.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="990"
                                            data-y="433"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/24.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="860"
                                            data-y="458"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/23.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoright"
                                            data-x="990"
                                            data-y="457"
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3700"
                                            data-start="4200"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/25.png" alt="">
                                        </div>
                    
                                        <!-- Last layer-->					
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="560"
                                            data-speed="5000"
                                            data-start="5500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/33.png" alt="">
                                        </div>	
                    
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="580"
                                            data-speed="5000"
                                            data-start="5500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/32.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="200"
                                            data-y="620"
                                            data-speed="5500"
                                            data-start="6000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/34.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="365"
                                            data-y="620"
                                            data-speed="6100"
                                            data-start="6500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/35.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="535"
                                            data-y="620"
                                            data-speed="6600"
                                            data-start="7000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/36.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="704"
                                            data-y="620"
                                            data-speed="7100"
                                            data-start="7500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/37.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="870"
                                            data-y="620"
                                            data-speed="7600"
                                            data-start="8000"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/38.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption fade"
                                            data-x="1037"
                                            data-y="620"
                                            data-speed="8100"
                                            data-start="8500"
                                            data-easing="Back.easeOut"
                                            data-endspeed="600"
                                            data-endeasing="Power4.easeIn"
                                            style="z-index: 15"><img src="{{ asset('public/assets/images') }}/slider-1/39.png" alt="">
                                        </div>
                    
                                    </li>
                    
                    
                                </ul>
                                <!-- <div class="tp-bannertimer"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="capabilities">
            <div class="container-xxl">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8">
                        <h1>Define the Capabilities of Your StaffViz by <br>
                         <span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span>
                         Selecting Features</h1>
                        <p>Define Your Approach with Training, Assessment, Team Monitoring, Reporting, and Projects.</p>
                    </div>
                </div>
                <div class="row d-none d-sm-none d-md-none d-lg-block">
                    <div class="d-flex align-items-start tabsParent ">
                        <div class="col-lg-3" style="width:28%;">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="horizontal">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Recruitment & Hiring</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">
                                    Onboarding & Trainings 
                                </button>
                                    <button class="nav-link" id="v-pills-ShiftandBreak-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-ShiftandBreak" type="button" role="tab"
                                    aria-controls="v-pills-ShiftandBreak" aria-selected="false">
                                    Shift & Break Management
                                </button>
                                <button class="nav-link" id="v-pills-Training-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Training" type="button" role="tab"
                                    aria-controls="v-pills-Training" aria-selected="false">
                                    Project & Task Management 
                                </button>
                                <button class="nav-link" id="v-pills-Project-Task-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Project-Task" type="button" role="tab"
                                    aria-controls="v-pills-Project-Task" aria-selected="false">
                                    Monitoring & Tracking 
                                </button>
                                    <button class="nav-link" id="v-pills-Snapshots-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Snapshots" type="button" role="tab"
                                    aria-controls="v-pills-Snapshots" aria-selected="false">
                                    Snapshots & Capturing 
                                </button>
                                <button class="nav-link" id="v-pills-Real-Time-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Real-Time" type="button" role="tab"
                                    aria-controls="v-pills-Real-Time" aria-selected="false"> 
                                    Dashboards & Reporting 
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/outsource_1.png" alt="">
                                                <h3>Customizable Job Portal to Post Vacancies</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/Frame_1.png" alt="">
                                                <h3>Link Job Portal with Company Website</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/verified_user_1.png" alt="">   
                                            <h3>Jobs & Applicants Tracking</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/personalization_1.png" alt="">
                                            <h3>Shortlisting Potential Candidates & Hires</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/approved_1.png" alt="">
                                            <h3>Candidate Assessments & Evaluations</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                            <img src="{{ asset('public/assets/images/') }}/Isolation_Mode.png" alt="">
                                            <h3>Offers & Employee Management</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_1.png" alt="">
                                                <h3>Design, Development Trainings & Orientations</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/talent_management_1.png" alt="">
                                                <h3>Develop, Retain & Enhance Critical Talent</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/knowledge_1.png" alt="">
                                                <h3>Centralized Company Knowledge Base</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/content_1.png" alt="">
                                                <h3>Design Trainings using Documents, Photos & Videos</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/roi_1.png" alt="">
                                                <h3>Track & Measure Skills to Demonstrate ROI</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_2.png" alt="">
                                                <h3>Asynchronous Learning</h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Training" role="tabpanel"
                                    aria-labelledby="v-pills-Training-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/project_management_(1)_1.png" alt="">
                                                <h3>Manage Projects & Tasks</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/cost_1.png" alt="">
                                                <h3>Track Projects, Tasks & Budget</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Layer_1.png" alt="">
                                                <h3>Track Available vs. Assigned vs. Actual Time Spent </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/bill_(1)_1.png" alt="">
                                                <h3>Categorize Billable/Non-Billable Projects</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/access_1.png" alt="">
                                                <h3>Kanban Board & Cardboard View</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/tracking_(1)_1.png" alt="">
                                                <h3>Timesheets & Project Reports</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Project-Task" role="tabpanel"
                                    aria-labelledby="v-pills-Project-Task-tab">
                                    <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/working_hours_1.png" alt="">
                                                <h3>Track Projects, Tasks & Courses Progress </h3>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/laptop_(1)_1.png" alt="">
                                                <h3>Monitor Employees Productivity </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/attendant_list_1.png" alt="">
                                                <h3>See Who's Working, Extending Hours or Breaks</h3>
                                            </div>
                                        </div>   
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/monitoring_1.png" alt="">
                                                <h3>Track Breaks, Activities & Work by Employees</h3>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Layer_1.png" alt="">
                                                <h3>Monitor Productive vs. Non-Productive Work </h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/group_(3)_1.png" alt="">
                                                <h3>Track Billable vs. Non-Billable Work</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-ShiftandBreak" role="tabpanel"
                                    aria-labelledby="v-pills-ShiftandBreak-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/replace_1.png" alt="">
                                                <h3>Schedule & Manage Shifts</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/cycle_1.png" alt="">
                                                <h3>Articulate Flexible Shifts for Different Teams</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_3.png" alt="">
                                                <h3>Track On-Shift & Off-Shifts Employees</h3>
                                            </div>
                                    </div>
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/business_people_1.png" alt="">
                                                <h3>Schedule & Manage Breaks</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_4.png" alt="">
                                                <h3>Define Flexible & Enforced Breaks</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/sales_1.png"
                                                    alt="">
                                                <h3>Reports & Analytics on Scheduled vs. Extended Breaks</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Real-Time" role="tabpanel"
                                    aria-labelledby="v-pills-Real-Time-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/working_hours_(1)_1.png" alt="">
                                                <h3>Individual & Team Dashboards</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/insight_1.png" alt="">
                                                <h3>Live Dashboard for Employee Task Visiblity </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_6.png" alt="">
                                                <h3>Project & Course Insights per Employee</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/verified_user_(1)_1.png" alt="">
                                                <h3>Project Time Reports</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                     <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/data_visualization_1.png" alt="">
                                                <h3>Course Progress & Completion Reports</h3>
                                            </div>
                                     </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_3.png" alt="">
                                                <h3>User Timesheets & Reports</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Snapshots" role="tabpanel"
                                    aria-labelledby="v-pills-Snapshots-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/project_management_(2)_1.png" alt="">
                                                <h3>Configurable Snapshots & Time Tracking Options</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/report_(2)_1.png" alt="">
                                                <h3>Enable Time Tracker or Timesheets for Employees</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/Isolation_Mode_5.png"
                                                    alt="">
                                                <h3>Enable/ Disable Screen Capture for Employees</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/image_8.png" alt="">
                                                <h3>Take Real-Time Snapshots</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/paper_1.png"
                                                    alt="">
                                                <h3>Activity Level Measurement</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="capbility fade-in-bottom">
                                                <img src="{{ asset('public/assets/images/') }}/performance_1.png" alt="">
                                                <h3>In-Depth Visibility of Team's Performance</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-block d-sm-block d-md-block d-lg-none">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item show">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Recruitment & Hiring
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Customizable Job Portal to Post Vacancies</li>
                                        <li>Link Job Portal with Company Website</li>
                                        <li>Jobs & Applicants Tracking</li>
                                        <li>Shortlisting Potential Candidates & Hires</li>
                                        <li>Candidate Assessments & Evaluations</li>
                                        <li>Offers & Employee Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Onboarding & Trainings 
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Design, Development Trainings & Orientations</li>
                                        <li>Develop, Retain & Enhance Critical Talent</li>
                                        <li>Centralized Company Knowledge Base</li>
                                        <li>Design Trainings using Documents, Photos & Videos</li>
                                        <li>Track & Measure Skills to Demonstrate ROI</li>
                                        <li>Asynchronous Learning</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Shift & Break Management
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Schedule & Manage Shifts</li>
                                        <li>Articulate Flexible Shifts for Different Teams</li>
                                        <li>Track On-Shift & Off-Shifts Employees</li>
                                        <li>Schedule & Manage Breaks</li>
                                        <li>Define Flexible Break Management</li>
                                        <li>Reports & Analytics on Scheduled vs. Extended Breaks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Project & Task Management
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Manage Projects & Tasks</li>
                                        <li>Track Projects, Tasks & Budget</li>
                                        <li>Track Available vs. Assigned vs. Actual Time Spent </li>
                                        <li>Categories Billable/Non-Billable Projects</li>
                                        <li>Kanban Board & Cardboard View</li>
                                        <li>Timesheets & Project Reports</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Monitoring & Tracking
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Monitor Employees Activities</li>
                                        <li>Monitor Employees Productivity </li>
                                        <li>See Who's Working, Extending Hours or Breaks</li>
                                        <li>Track Breaks, Activities & Work by Employees</li>
                                        <li>Monitor Productive vs. Non-Productive Work </li>
                                        <li>Track Billable vs. Non-Billable Work</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Snapshots & Capturing 
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Configurable Snapshots & Time Tracking Options</li>
                                        <li>Enable Time Tracker or Timesheets for Employees</li>
                                        <li>Enable/ Disable Screen Capture for Employees</li>
                                        <li>Take Real-Time Snapshots</li>
                                        <li>Activity Level Measurement</li>
                                        <li>In-Depth Visibility of Team's Performance</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Dashboards & Reporting 
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Individual & Team Dashboards</li>
                                        <li>Live Dashboard for Employee Task Visibility</li>
                                        <li>Project & Course Insights per Employee</li>
                                        <li>Project Time Reports</li>
                                        <li>Course Progress & Completion Reports</li>
                                        <li>User Timesheets & Reports</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="manage_projects_section">
            <div class="container-xxl">
                <div class="row">
                    <h1><span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span>Manage Projects & Tasks for All Teams, All Shifts</h1>
                    <p>
                        From Individuals to Teams, Allocate Task & Time for Optimal Efficiency.
                    </p>
                </div>
                <div class="row">

                    <div class="col-lg-6 movingCards ">
                        <div class="slider-content position-relative slider-2 mt-2 mb-2 ms-3">
                            <div class="tp-banner-container">
                                <div class="tp-banner2" >
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                            <!-- MAIN IMAGE -->
                                            <!-- <img src="{{ asset('public/assets/images') }}/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->


                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfr start"
                                                data-x="1300"
                                                data-y="10"
                                                data-speed="200"
                                                data-start="200"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6;background: white;"><img src="{{ asset('public/assets/images') }}/slider-2/03.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption sfl"
                                                data-x="0"
                                                data-y="10"
                                                data-speed="500"
                                                data-start="500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-2/01.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption sfl"
                                                data-x="450"
                                                data-y="10"
                                                data-speed="800"
                                                data-start="800"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-2/02.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption lft"
                                                data-x="0"
                                                data-y="190"
                                                data-speed="1000"
                                                data-start="1000"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/15.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 5 -->
                                            <div class="tp-caption lft"
                                                data-x="10"
                                                data-y="210"
                                                data-speed="1300"
                                                data-start="1300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/04.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="290"
                                                data-y="210"
                                                data-speed="1500"
                                                data-start="1500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/05.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="430"
                                                data-y="210"
                                                data-speed="1700"
                                                data-start="1700"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/06.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="580"
                                                data-y="210"
                                                data-speed="1900"
                                                data-start="1900"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/07.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="720"
                                                data-y="210"
                                                data-speed="2100"
                                                data-start="2100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/08.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="800"
                                                data-y="210"
                                                data-speed="2300"
                                                data-start="2300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/09.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="10"
                                                data-y="340"
                                                data-speed="2500"
                                                data-start="2500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/14.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="200"
                                                data-y="340"
                                                data-speed="2700"
                                                data-start="2700"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/13.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="350"
                                                data-y="340"
                                                data-speed="2900"
                                                data-start="2900"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/12.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="530"
                                                data-y="340"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/14.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="720"
                                                data-y="340"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/10.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="600"
                                                data-y="400"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/16.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="640"
                                                data-y="550"
                                                data-speed="3300"
                                                data-start="3300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/17.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="820"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/19.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="820"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/19.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="550"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/18.png" alt="">
                                            </div>
                                        </li>

                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                            <!-- MAIN IMAGE -->
                                            <!-- <img src="{{ asset('public/assets/images') }}/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->


                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfr start"
                                                data-x="1300"
                                                data-y="10"
                                                data-speed="200"
                                                data-start="200"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6;background: white;"><img src="{{ asset('public/assets/images') }}/slider-2/03.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption sfl"
                                                data-x="0"
                                                data-y="10"
                                                data-speed="500"
                                                data-start="500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-2/01.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption sfl"
                                                data-x="450"
                                                data-y="10"
                                                data-speed="800"
                                                data-start="800"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-2/02.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption lft"
                                                data-x="0"
                                                data-y="190"
                                                data-speed="1000"
                                                data-start="1000"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/15.png" alt="">
                                            </div>
                                            <!-- LAYER NR. 5 -->
                                            <div class="tp-caption lft"
                                                data-x="10"
                                                data-y="210"
                                                data-speed="1300"
                                                data-start="1300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/04.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="290"
                                                data-y="210"
                                                data-speed="1500"
                                                data-start="1500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/05.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="430"
                                                data-y="210"
                                                data-speed="1700"
                                                data-start="1700"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/06.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="580"
                                                data-y="210"
                                                data-speed="1900"
                                                data-start="1900"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/07.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="720"
                                                data-y="210"
                                                data-speed="2100"
                                                data-start="2100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/08.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="800"
                                                data-y="210"
                                                data-speed="2300"
                                                data-start="2300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/09.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="10"
                                                data-y="340"
                                                data-speed="2500"
                                                data-start="2500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/14.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="200"
                                                data-y="340"
                                                data-speed="2700"
                                                data-start="2700"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/13.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="350"
                                                data-y="340"
                                                data-speed="2900"
                                                data-start="2900"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/12.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="530"
                                                data-y="340"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/14.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="720"
                                                data-y="340"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 1"><img src="{{ asset('public/assets/images') }}/slider-2/10.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="600"
                                                data-y="400"
                                                data-speed="3100"
                                                data-start="3100"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/16.png" alt="">
                                            </div>
                                            <div class="tp-caption lft"
                                                data-x="640"
                                                data-y="550"
                                                data-speed="3300"
                                                data-start="3300"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/17.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="820"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/19.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="820"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/19.png" alt="">
                                            </div>
                                            <div class="tp-caption lfb"
                                                data-x="750"
                                                data-y="550"
                                                data-speed="3500"
                                                data-start="3500"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="off"
                                                style="z-index: 0"><img src="{{ asset('public/assets/images') }}/slider-2/18.png" alt="">
                                            </div>
                                        </li>


                                    </ul>
                                    
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4  ">
                        <div class="reports">
                            <h3>Create, Manage, Assign & Set Deadlines</h3>
                            <p>
                                Create & manage tasks or projects, set deadlines, and allocate them to specific
                                employees or teams. This streamlines task distribution, ensures accountability, and
                                celebrates productivity.
                            </p>
                        </div>
                        <div class="reports">
                            <h3>Real-Time Progress Visibility</h3>
                            <p>
                                Monitor task or project progress in real-time and track activity levels. Keep track of
                                completed work, identify bottlenecks, and reallocate resources for optimal efficiency.
                            </p>
                        </div>
                        <div class="reports">
                            <h3>Reporting, Insights & Time Tracking</h3>
                            <p>
                                Time tracking aids productivity analysis & estimations. Comprehensive reporting enables
                                informed team performance, decision-making, and project profitability.
                            </p>
                        </div>
                        <button class="tv-btn tv-btn-secondary btn btn-outline-success me-4 startFreeTrial" type="submit" data-bs-toggle="modal"
                            data-bs-target="#modalId">
                            Let's Get Organized
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="productivity_handler" class="position-relative">
            <div class="videobg p-0 position-absolute w-100">
                <video class="w-100" autoplay muted loop>
                    <source src="{{ asset('public/assets/videos/') }}/rocket-section-04.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container-xxl productivity position-relative">
                <div class="row d-flex justify-content-center align-items-center">
                    <h2>Tired of Productivity Hurdles? Let's Solve Them!</h2>
                    <h5>
                        Boost Performance - No Card Required.
                    </h5>
                    <button class="tv-btn tv-btn-secondary btn btn-outline-success me-4 signInButton" type="submit" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        Let's Optimize
                    </button>
                    {{-- <p>Have Some Questions? <span>Contact Support</span></p> --}}
                </div>
            </div>
        </section>
        <section id="progress_realtime" class="position-relative">
            <div class="container-xxl">
                <div class="row">
                    <h1>See
                        <span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span> Progress in Real-Time with Screenshot Tracking</h1>
                    <p>Improve Transparency and Share the Journey Through Work Narratives Enabled by Screenshot
                        Tracking.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="slider-content position-relative slider-3 mt-2 mb-2">
                            <div class="tp-banner-container">
                                <div class="tp-banner5" >
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                            
                                            <!-- LAYER NR. 1 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                                data-x="30"
                                                data-y="30"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="400"
                                                data-start="400"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="on"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/01.png" alt="">
                                            </div>
                                                <!-- LAYER NR. 2 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="500"
                                            data-y="30"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="600"
                                            data-start="600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/02.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 3 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="60"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="800"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/03.png" alt="">
                                        </div>
                                         <!-- LAYER NR. 4 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="360"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1000"
                                            data-start="1000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/04.png" alt="">
                                        </div> <!-- LAYER NR. 5 -->
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                        data-x="660"
                                        data-y="150"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="1200"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-endspeed="300"
                                        data-endeasing="Power1.easeIn"
                                        data-captionhidden="on"
                                        style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/05.png" alt="">
                                    </div> <!-- LAYER NR. 6 -->
                                    <div class=" sfl start tp-caption skewfromleft customout"
                                    data-x="960"
                                    data-y="150"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1400"
                                    data-start="1400"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/06.png" alt="">
                                </div>
                                <!-- LAYER NR. 7 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="60"
                                            data-y="430"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1600"
                                            data-start="1600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/07.png" alt="">
                                        </div>
                                         <!-- LAYER NR. 8-->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="360"
                                            data-y="430"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1800"
                                            data-start="1800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/08.png" alt="">
                                        </div> <!-- LAYER NR. 9 -->
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                        data-x="660"
                                        data-y="430"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="2000"
                                        data-start="2000"
                                        data-easing="Power4.easeOut"
                                        data-endspeed="300"
                                        data-endeasing="Power1.easeIn"
                                        data-captionhidden="on"
                                        style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/09.png" alt="">
                                    </div> <!-- LAYER NR. 10 -->
                                    <div class=" sfl start tp-caption skewfromleft customout"
                                    data-x="960"
                                    data-y="430"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="2200"
                                    data-start="2200"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/10.png" alt="">
                                </div>
                                
                                            
                                            
                        
                        
                                        </li>
                        
                                    
                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                            
                                            <!-- LAYER NR. 1 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                                data-x="30"
                                                data-y="30"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="400"
                                                data-start="400"
                                                data-easing="Power4.easeOut"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                data-captionhidden="on"
                                                style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/01.png" alt="">
                                            </div>
                                                <!-- LAYER NR. 2 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="500"
                                            data-y="30"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="600"
                                            data-start="600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/02.png" alt="">
                                        </div>
                                        <!-- LAYER NR. 3 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="60"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="800"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/03.png" alt="">
                                        </div>
                                         <!-- LAYER NR. 4 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="360"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1000"
                                            data-start="1000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/04.png" alt="">
                                        </div> <!-- LAYER NR. 5 -->
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                        data-x="660"
                                        data-y="150"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="1200"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-endspeed="300"
                                        data-endeasing="Power1.easeIn"
                                        data-captionhidden="on"
                                        style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/05.png" alt="">
                                    </div> <!-- LAYER NR. 6 -->
                                    <div class=" sfl start tp-caption skewfromleft customout"
                                    data-x="960"
                                    data-y="150"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1400"
                                    data-start="1400"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/06.png" alt="">
                                </div>
                                <!-- LAYER NR. 7 -->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="60"
                                            data-y="430"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1600"
                                            data-start="1600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/07.png" alt="">
                                        </div>
                                         <!-- LAYER NR. 8-->
                                            <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="360"
                                            data-y="430"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="1800"
                                            data-start="1800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/08.png" alt="">
                                        </div> <!-- LAYER NR. 9 -->
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                        data-x="660"
                                        data-y="430"
                                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="2000"
                                        data-start="2000"
                                        data-easing="Power4.easeOut"
                                        data-endspeed="300"
                                        data-endeasing="Power1.easeIn"
                                        data-captionhidden="on"
                                        style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/09.png" alt="">
                                    </div> <!-- LAYER NR. 10 -->
                                    <div class=" sfl start tp-caption skewfromleft customout"
                                    data-x="960"
                                    data-y="430"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="2200"
                                    data-start="2200"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-5/10.png" alt="">
                                </div>
                                
                                            
                                            
                        
                        
                                        </li>
                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="slider-content position-relative slider-3 mt-2 mb-2">
                            <div class="tp-banner-container">
                                <div class="tp-banner3-right">
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                                            <!-- MAIN IMAGE -->
                                            <!-- <img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->
                    
                                            <div class="tp-caption skewfromleft start" data-x="0" data-y="0"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="0" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/01.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="613" data-y="0"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="550" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/02.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="613" data-y="110"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="750" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/03.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="45" data-y="190"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1000" data-start="1050" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 7; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;background-color: white">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/12.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="225" data-y="320"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 8; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/10.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="355" data-y="520"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 8; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/09.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="10" data-y="200"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 7; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/11.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="250"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="1400" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/04.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="320"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="1800" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/05.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="390"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="2200" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/06.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="460"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="2600" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/07.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="530"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="3000" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/08.png" alt="">
                    
                                            </div>
                    
                                        </li>
                                        
                                        <!-- SLIDE  -->
                                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                                            <!-- MAIN IMAGE -->
                                            <!-- <img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->
                    
                                            <div class="tp-caption skewfromleft start" data-x="0" data-y="0"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="0" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/01.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="613" data-y="0"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="550" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/02.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="613" data-y="110"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="750" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/03.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="45" data-y="190"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1000" data-start="1050" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 7; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;background-color: white">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/12.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="225" data-y="320"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 8; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/10.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="355" data-y="520"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 8; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/09.png" alt="">
                                            </div>
                    
                    
                                            <div class="tp-caption customin skewtoleft start" data-x="10" data-y="200"
                                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="500" data-start="1200" data-easing="Back.easeOut" data-endspeed="400"
                                                data-endeasing="Back.easeIn"
                                                style="z-index: 7; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/11.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="250"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="1400" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/04.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="320"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="1800" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/05.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="390"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="2200" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/06.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="460"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1800" data-start="2600" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/07.png" alt="">
                                            </div>
                    
                                            <div class="tp-caption skewfromleft start" data-x="540" data-y="530"
                                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                data-speed="1200" data-start="3000" data-easing="Power4.easeOut" data-endspeed="300"
                                                data-endeasing="Power1.easeIn" data-captionhidden="on"
                                                style="z-index: 2; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 104px; top: 154px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                <img src="{{ asset('public/assets/images') }}/slider-3-right-side/08.png" alt="">
                    
                                            </div>
                    
                                        </li>
                    
                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="w-100 text-center">
                            <button class="tv-btn tv-btn-secondary btn btn-outline-success me-4 mt-4 signInButton" type="submit"
                                data-bs-toggle="modal" data-bs-target="#modalId">
                                Start Tracking Today
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-image: linear-gradient(to bottom, #f2f2f2, white) !important;">
        <section id="learning_section" class="container-xxl">
            <div class="row">
                <div class="col-lg-6 textHero" style="width: 47%;">
                    <h1>Training & Assessment </h1>
                    <p>Harness Growth with Interactive Quizzes and <br>Personalized Courses.</p>
                    <div class="reports">
                        <h3>Flexible Course Structure</h3>
                        <p>
                            Tailor courses for diverse learning styles & training requirements, blending articles,
                            resources, images, and videos to ensure engaging experience.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Manage Team & Individual Access</h3>
                        <p>
                            Enjoy flexibility to assign courses to individuals or entire teams, enabling you to target
                            specific skill gaps or provide comprehensive training.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Interactive Quizzes for Assessment</h3>
                        <p>
                            Enhance learning outcomes with interactive quizzes that assess team members' understanding
                            of course content and ensure knowledge retention & absorption.
                        </p>
                    </div>
                    <button class="tv-btn tv-btn-secondary btn btn-outline-success me-4 startFreeTrial" type="submit" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        Invest in Learning
                    </button>
                </div>
                <div class="col-lg-6">
                    <div class="slider-content position-relative slider-4 mt-2 mb-2">
                        <div class="tp-banner-container">
                            <div class="tp-banner-4" >
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                                        
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption skewfromleft start"
                                            data-x="0"
                                            data-y="0"
                                            data-speed="400"
                                            data-start="400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4/01.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl"
                                            data-x="770"
                                            data-y="150"
                                            data-speed="600"
                                            data-start="600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4/02.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl"
                                            data-x="850"
                                            data-y="205"
                                            data-speed="800"
                                            data-start="800"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4/03.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl"
                                            data-x="770"
                                            data-y="70"
                                            data-speed="700"
                                            data-start="700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4/05.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl"
                                            data-x="770"
                                            data-y="280"
                                            data-speed="1200"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4/04.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="550"
                                            data-y="620"
                                            data-speed="1400"
                                            data-start="1400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/06.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="950"
                                            data-y="450"
                                            data-speed="1700"
                                            data-start="1700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/13.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="970"
                                            data-y="470"
                                            data-speed="1900"
                                            data-start="1900"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/07.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="1370"
                                            data-y="490"
                                            data-speed="2000"
                                            data-start="2000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/10.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="982"
                                            data-y="620"
                                            data-speed="2200"
                                            data-start="2200"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/08.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="1370"
                                            data-y="640"
                                            data-speed="2300"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/11.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="982"
                                            data-y="750"
                                            data-speed="2500"
                                            data-start="2500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/09.png" alt="">
                                        </div>
                                        <div class="tp-caption sfr start"
                                            data-x="1370"
                                            data-y="765"
                                            data-speed="2600"
                                            data-start="2600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 6;"><img src="{{ asset('public/assets/images') }}/slider-4/12.png" alt="">
                                        </div>
                                    </li>
                                    
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                    
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption sfl start"
                                            data-x="0"
                                            data-y="20"
                                            data-speed="400"
                                            data-start="400"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/01.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="0"
                                            data-y="80"
                                            data-speed="700"
                                            data-start="700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/02.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="613"
                                            data-y="80"
                                            data-speed="1000"
                                            data-start="1000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/03.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="613"
                                            data-y="280"
                                            data-speed="1300"
                                            data-start="1300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/04.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="1000"
                                            data-y="80"
                                            data-speed="1700"
                                            data-start="1700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/05.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="1000"
                                            data-y="280"
                                            data-speed="2000"
                                            data-start="2000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/06.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="1388"
                                            data-y="80"
                                            data-speed="2300"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/07.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="1388"
                                            data-y="280"
                                            data-speed="2700"
                                            data-start="2700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/08.png" dw="378" dh="155" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="0"
                                            data-y="470"
                                            data-speed="3000"
                                            data-start="3000"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/09.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="441"
                                            data-y="470"
                                            data-speed="3300"
                                            data-start="3300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/10.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="884"
                                            data-y="470"
                                            data-speed="3600"
                                            data-start="3600"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/11.png" alt="">
                                        </div>
                                        <div class="tp-caption sfl start"
                                            data-x="1325"
                                            data-y="470"
                                            data-speed="3900"
                                            data-start="3900"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="off"
                                            style="z-index: 0;"><img src="{{ asset('public/assets/images') }}/slider-4-1/12.png" alt="">
                                        </div>
                                    </li>
                                
                                
                                    
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
        
        <section id="diverse_section">
            <div class="container-xxl">
                <div class="row text-center justify-content-center">
                    <h1><span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span>Diverse Workspaces, One Centralized Hub for Monitoring</h1>
                    
                        <p>Visualize Productivity Across Diverse Workspaces Whether your Team Members <br> are Working
                            Remotely, On-Site, or Traditional Office Setups.</p>
                </div>
                <div class="row d-none d-sm-none d-md-none d-lg-block">
                    <div class="d-flex align-items-start tabsParent">
                        <div class="col-lg-3" style="width:28%;">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-Startups-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Startups" type="button" role="tab"
                                    aria-controls="v-pills-Startups" aria-selected="false">Startups
                                    <p class="popper-blurb">
                                        Optimize operations, streamline remote work, and maximize productivity with
                                        enhanced project management, ultimately fueling growth and success in the
                                        competitive business landscape.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                    <div class="square">

                                    </div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-IT-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-IT" type="button" role="tab" aria-controls="v-pills-IT"
                                    aria-selected="false">IT & Tech Companies
                                    <p class="popper-blurb">
                                        Whether developing cutting-edge software or managing intricate tech projects,
                                        our solution empowers IT and tech teams with real-time insights into employee
                                        activities and much more.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                    <div class="square">

                                    </div>
                                    </p>
                                </button>
                                <button class="nav-link " id="v-pills-Freelance-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Freelance" type="button" role="tab"
                                    aria-controls="v-pills-Freelance" aria-selected="true">Freelancing
                                    <p class="popper-blurb" style="top: -50px;">
                                        Streamline freelance work and maximize earnings with Staffviz, ensuring accurate
                                        time management, transparency, billing and project profitability.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                    <div class="square">

                                    </div>
                                    </p>
                                </button>
                                <button class="nav-link " id="v-pills-Hospitality-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Hospitality" type="button" role="tab"
                                    aria-controls="v-pills-Hospitality" aria-selected="true">Hospitality & Tourism
                                    <p class="popper-blurb" style="top: -50px;">
                                        Manage, and monitor employee shifts in hotels, restaurants, and other
                                        hospitality settings. Ensure optimal staffing to provide exceptional guest
                                        experiences and maintain high service standards.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                    <div class="square">

                                    </div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-Logistics-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Logistics" type="button" role="tab"
                                    aria-controls="v-pills-Logistics" aria-selected="false">Logistics & Transportation
                                    <p class="popper-blurb" style="top: -86px;">
                                        Manage shifts, work hours, track hours of service for all your employees.
                                        Achieve unparalleled productivity and customer satisfaction in the fast-paced
                                        world of transport and logistics.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>

                                    <div class="square"></div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-RealEstate-tab" data-bs-toggle="pill" data-bs-target="#v-pills-RealEstate" type="button" role="tab" aria-controls="v-pills-RealEstate" aria-selected="false">Real Estate Industry
                                    <p class="popper-blurb" style="top: -86px;">
                                        Efficiently generate timesheets, streamline scheduling operations, and automate payroll for your real estate team.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                        <div class="square"></div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-Healthcare-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Healthcare" type="button" role="tab" aria-controls="v-pills-Healthcare" aria-selected="false">Healthcare Industry
                                    <p class="popper-blurb" style="top: -86px;">
                                        Manage healthcare staff rotations, automate attendance tracking, schedule shifts, and much more.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                        <div class="square"></div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-Accountants-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Accountants" type="button" role="tab" aria-controls="v-pills-Accountants" aria-selected="false">Accountants
                                    <p class="popper-blurb" style="top: -200px;">
                                        Ensure precise billable hour tracking, streamline client invoicing, simplify payroll processing, and integrate seamlessly with Zapier or Salesforce.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                        <div class="square"></div>
                                    </p>
                                </button>
                                <button class="nav-link" id="v-pills-Architects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Architects" type="button" role="tab" aria-controls="v-pills-Architects" aria-selected="false">Architects & Engineers
                                    <p class="popper-blurb" style="top: -200px;">
                                        Precisely observe time spent on projects, refine job cost estimates, and automate your invoicing procedures.
                                        <span style="position: relative;display: flex;margin-top: 50px;">
                                            <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Reserve My Spot</a></span>
                                        <div class="square"></div>
                                    </p>
                                </button>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-Startups" role="tabpanel"
                                    aria-labelledby="v-pills-Startups-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Mask-group.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Mask-group-(1).svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-IT" role="tabpanel"
                                    aria-labelledby="v-pills-IT-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/IT-01.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/IT-02.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="v-pills-Freelance" role="tabpanel"
                                    aria-labelledby="v-pills-Freelance-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Freelance-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Freelance-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="v-pills-Hospitality" role="tabpanel"
                                    aria-labelledby="v-pills-Hospitality-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Hospitility-01.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Hospitility-02.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Logistics" role="tabpanel" aria-labelledby="v-pills-Logistics-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Logistic-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Logistic-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-RealEstate" role="tabpanel" aria-labelledby="v-pills-RealEstate-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/realEstate-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/realEstate-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Healthcare" role="tabpanel" aria-labelledby="v-pills-Healthcare-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Healthcare-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Healthcare-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Accountants" role="tabpanel" aria-labelledby="v-pills-Accountants-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Accountants-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Accountants-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-Architects" role="tabpanel" aria-labelledby="v-pills-Architects-tab">
                                    <div class="movingCardsDiverse">
                                        <img class="movingCardsDiverseOne" src="{{ asset('public/assets/images/') }}/Group-1707485344.svg"
                                            alt="">
                                        <img class="movingCardsDiverseTwo" src="{{ asset('public/assets/images/') }}/Architects-02.svg" alt="">
                                        <img class="movingCardsDiverseThree" src="{{ asset('public/assets/images/') }}/Architects-01.svg"
                                            alt="">
                                        <img class="movingCardsDiverseFour" src="{{ asset('public/assets/images/') }}/graph-2.svg" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-block d-sm-block d-md-block d-lg-none">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item show">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Hospitality & Tourism
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Manage, and monitor employee shifts in hotels, restaurants, and other hospitality
                                    settings. Ensure optimal staffing to provide exceptional guest experiences and
                                    maintain high service standards.
                                    <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Add Me To Waitlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Logistics & Transportation
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Manage, and monitor employee shifts in hotels, restaurants, and other hospitality
                                    settings. Ensure optimal staffing to provide exceptional guest experiences and
                                    maintain high service standards.
                                    <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Add Me To Waitlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    IT & Tech Companies
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Manage, and monitor employee shifts in hotels, restaurants, and other hospitality
                                    settings. Ensure optimal staffing to provide exceptional guest experiences and
                                    maintain high service standards.
                                    <a hre data-bs-toggle="modal" data-bs-target="#modalId" f="#">Add Me To Waitlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="report_section" class="container-xxl">
            <div class="row">
                <div class="col-lg-5 textHero">
                    <h1>Reporting That Makes Sense</h1>
                    <p>Get Transparent & Insightful Visibility.</p>
                    <div class="reports">
                        <h3>Real -Time Reports</h3>
                        <p>
                            Get instant view of your team's activities with real-time dashboard with comprehensive
                            organizational insights.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Timesheet Reports</h3>
                        <p>
                            Effortlessly record and analyze work hours spent by employees, providing accurate data for
                            efficient employee management.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Statistics & Analytics</h3>
                        <p>
                            Keep a close eye on your team activities with activity tracking, web and app usage
                            monitoring, project insights, and much more.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Productivity Reports</h3>
                        <p>
                            Boost productivity with insightful reports, offering a clear view of your team's performance
                            and actionable data for improved efficiency.
                        </p>
                    </div>
                    <button class="tv-btn tv-btn-secondary btn btn-outline-success me-4 startFreeTrial" type="submit" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        See the Bigger Picture
                    </button>
                </div>
                <div class="col-lg-7">
                    <div class="slider-content position-relative slider-7 mt-2 mb-2">
                        <div class="tp-banner-container">
                            <div class="tp-banner-7" >
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="30" 
                                            data-y="30" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="500" 
                                            data-start="500" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 1; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/09.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="70" 
                                            data-y="50" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="700" 
                                            data-start="700" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/01.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="45" 
                                            data-y="210" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="900" 
                                            data-start="900" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/02.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="45" 
                                            data-y="70" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1100" 
                                            data-start="1100" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/03.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="230" 
                                            data-y="50" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1300" 
                                            data-start="1300" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/04.png" alt="">
                                        </div>

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="85" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1500" 
                                            data-start="1500" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/05.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="145" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1700" 
                                            data-start="1700" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/06.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="215" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1900" 
                                            data-start="1900" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/07.png" alt="">
                                        </div>

                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="60"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2100"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/08.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="100"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2300"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/10.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2500"
                                            data-start="2500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/11.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="200"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2700"
                                            data-start="2700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/12.png" alt="">
                                        </div> 


                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="30"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2900"
                                            data-start="2900"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/13.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="180"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3100"
                                            data-start="3100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/15.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="330"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3300"
                                            data-start="3300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/16.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="480"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3500"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/17.png" alt="">
                                        </div> 

                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="30" 
                                            data-y="30" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="500" 
                                            data-start="500" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 1; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/09.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="70" 
                                            data-y="50" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="700" 
                                            data-start="700" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/01.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="45" 
                                            data-y="210" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="900" 
                                            data-start="900" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/02.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="45" 
                                            data-y="70" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1100" 
                                            data-start="1100" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/03.png" alt="">
                                        </div>
                                        

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="230" 
                                            data-y="50" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1300" 
                                            data-start="1300" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/04.png" alt="">
                                        </div>

                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="85" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1500" 
                                            data-start="1500" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/05.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="145" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1700" 
                                            data-start="1700" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/06.png" alt="">
                                        </div>
                                        <div class="tp-caption customin skewtoleft start" 
                                            data-x="215" 
                                            data-y="240" 
                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                            data-speed="1900" 
                                            data-start="1900" 
                                            data-easing="Back.easeOut" 
                                            data-endspeed="400" 
                                            data-endeasing="Back.easeIn" 
                                            style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-7/07.png" alt="">
                                        </div>

                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="60"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2100"
                                            data-start="2100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/08.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="100"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2300"
                                            data-start="2300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/10.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="150"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2500"
                                            data-start="2500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/11.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="320"
                                            data-y="200"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2700"
                                            data-start="2700"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/12.png" alt="">
                                        </div> 


                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="30"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="2900"
                                            data-start="2900"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/13.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="180"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3100"
                                            data-start="3100"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/15.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="330"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3300"
                                            data-start="3300"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/16.png" alt="">
                                        </div> 
                                        <div class=" sfl start tp-caption skewfromleft customout"
                                            data-x="480"
                                            data-y="290"
                                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                            data-speed="3500"
                                            data-start="3500"
                                            data-easing="Power4.easeOut"
                                            data-endspeed="300"
                                            data-endeasing="Power1.easeIn"
                                            data-captionhidden="on"
                                            style="z-index: 6"><img src="{{ asset('public/assets/images') }}/slider-7/17.png" alt="">
                                        </div> 

                                        </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="productivity_handler" style="background-image: url({{ asset('public/assets/images/') }}/rightSideImg.webp);background-repeat: no-repeat;background-position-x: right;" class="position-relative">
            <div class="videobg p-0 position-absolute w-100">
                <video class="w-100" autoplay muted loop>
                    <source src="{{ asset('public/assets/videos/') }}/rocket-section-04.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container-xxl productivity position-relative">
                <div class="row d-flex justify-content-center align-items-center">
                    <h2>Ready to Boost your Virtual Business's Productivity?</h2>
                    <h5>
                        Discover Our Solutions & Take Your Virtual Business to New Heights of Productivity.
                    </h5>
                    <button class="tv-btn tv-btn-secondary btn btn-outline-success  signInButton" type="submit" data-bs-toggle="modal"
                        data-bs-target="#modalId">
                        Reserve My Spot
                    </button>
                    {{-- <p>Have Some Questions? <span>Contact Support</span></p> --}}
                </div>
            </div>
        </section>
        <section id="enterprise_section" class="container-xxl enterprise_section_second">
            <div class="row">
                <div class="col-lg-6 textHero">
                    <div class="entp p-2">
                        <h1>Enterprise-Level Security
                            <span style="position: relative;"></span>
                        <span class="underlineHeading">&nbsp;&nbsp;&nbsp;</span> to Deploy with Confidence</h1>
                        <p>
                        Safeguard Your Valuable Data without Compromising Performance.
                        </p>
                        <ul>
                            <li class="d-flex">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1565_1348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_1565_1348)">
                                        <path d="M6.6998 17.9996L1.0498 12.3496L2.4748 10.9496L8.1248 16.5996L6.6998 17.9996ZM12.3498 17.9996L6.6998 12.3496L8.0998 10.9246L12.3498 15.1746L21.5498 5.97461L22.9498 7.39961L12.3498 17.9996ZM12.3498 12.3496L10.9248 10.9496L15.8748 5.99961L17.2998 7.39961L12.3498 12.3496Z" fill="#294DFF"/>
                                        </g>
                                    </svg>                                        
                                </span>
                                <span>Certified under ISO 27001 & 27701 standards</span>
                            </li>
                            <li class="d-flex">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1565_1348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_1565_1348)">
                                        <path d="M6.6998 17.9996L1.0498 12.3496L2.4748 10.9496L8.1248 16.5996L6.6998 17.9996ZM12.3498 17.9996L6.6998 12.3496L8.0998 10.9246L12.3498 15.1746L21.5498 5.97461L22.9498 7.39961L12.3498 17.9996ZM12.3498 12.3496L10.9248 10.9496L15.8748 5.99961L17.2998 7.39961L12.3498 12.3496Z" fill="#294DFF"/>
                                        </g>
                                    </svg>                                        
                                </span>
                                <span>Advanced user role & permission settings</span>
                            </li>
                            <li class="d-flex">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1565_1348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_1565_1348)">
                                        <path d="M6.6998 17.9996L1.0498 12.3496L2.4748 10.9496L8.1248 16.5996L6.6998 17.9996ZM12.3498 17.9996L6.6998 12.3496L8.0998 10.9246L12.3498 15.1746L21.5498 5.97461L22.9498 7.39961L12.3498 17.9996ZM12.3498 12.3496L10.9248 10.9496L15.8748 5.99961L17.2998 7.39961L12.3498 12.3496Z" fill="#294DFF"/>
                                        </g>
                                    </svg>                                        
                                </span>
                                <span>Seamlessly integrates with various enterprise tools</span>
                            </li>
                            <li class="d-flex">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1565_1348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_1565_1348)">
                                        <path d="M6.6998 17.9996L1.0498 12.3496L2.4748 10.9496L8.1248 16.5996L6.6998 17.9996ZM12.3498 17.9996L6.6998 12.3496L8.0998 10.9246L12.3498 15.1746L21.5498 5.97461L22.9498 7.39961L12.3498 17.9996ZM12.3498 12.3496L10.9248 10.9496L15.8748 5.99961L17.2998 7.39961L12.3498 12.3496Z" fill="#294DFF"/>
                                        </g>
                                    </svg>                                        
                                </span>
                                <span>Dedicated 24/7 multilingual customer support</span>
                            </li>
                            <li class="d-flex">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1565_1348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_1565_1348)">
                                        <path d="M6.6998 17.9996L1.0498 12.3496L2.4748 10.9496L8.1248 16.5996L6.6998 17.9996ZM12.3498 17.9996L6.6998 12.3496L8.0998 10.9246L12.3498 15.1746L21.5498 5.97461L22.9498 7.39961L12.3498 17.9996ZM12.3498 12.3496L10.9248 10.9496L15.8748 5.99961L17.2998 7.39961L12.3498 12.3496Z" fill="#294DFF"/>
                                        </g>
                                    </svg>                                        
                                </span>
                                <span>Committed to a 99% uptime SLA</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-content position-relative text-center">
                        <img src="{{ asset('public/assets/images/') }}/iso_gdp.png" alt="">   
                    </div>
                </div>
            </div>
        </section>
        <section style="background-image: linear-gradient(to bottom, #f2f2f2, white) !important;" >
        <section id="learning_section" class="container-xxl learning_section_second">
            <div class="row">
                <div class="col-lg-6 textHero" style="width: 47%;">
                    <h1>Integrations Made Simple</h1>
                    <p>Powerful Options for Seamless StaffViz Integration.
                    </p>
                    <div class="reports">
                        <h3>Salesforce Integration</h3>
                        <p>
                            Boost efficiency by integrating StaffViz with Salesforce for seamless syncing of employee
                            monitoring with CRM. Streamline processes and elevate productivity through this powerful
                            feature.
                        </p>
                    </div>
                    <div class="reports">
                        <h3>Zapier Integration</h3>
                        <p>
                            Empower your team with our Zapier integration, linking StaffViz to over 3,000 apps.
                            Streamline tasks, sync data, and boost productivity effortlessly. The possibilities with
                            Zapier are limitless.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-content position-relative slider-6 mt-2 mb-2">
                        <div class="tp-banner-container">
                            <div class="tp-banner6" >
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                                        <!-- <img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->
                    
                    
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="45" 
                                        data-y="290" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="800" 
                                        data-start="100" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/01.png" alt="" style="width: 290px">
                                        </div>
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="120" 
                                        data-y="130" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="900" 
                                        data-start="400" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/02.png" style="width: 150px">
                                        </div>
                    
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="380" 
                                        data-y="90" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1100" 
                                        data-start="700" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/03.png" alt="" style="width: 68px">
                                        </div>
                    
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="690" 
                                        data-y="440" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1100" 
                                        data-start="700" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/11.png" alt="" style="width: 72px">
                                        </div>
                    
                                        
                                        <div class="tp-caption sfl start" 
                                        data-x="410" 
                                        data-y="190" 
                                        data-speed="1000" 
                                        data-start="1200" 
                                        data-easing="Power4.easeOut" 
                                        data-endspeed="300" 
                                        data-endeasing="Power1.easeIn" 
                                        data-captionhidden="off" 
                                        style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 518.844px; top: 0px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/06.png" alt="" style="width: 422px">
                                        </div>
                    
                                        
                                        <div class="tp-caption sfl start" 
                                        data-x="370" 
                                        data-y="340" 
                                        data-speed="1000" 
                                        data-start="1200" 
                                        data-easing="Power4.easeOut" 
                                        data-endspeed="300" 
                                        data-endeasing="Power1.easeIn" 
                                        data-captionhidden="off" 
                                        style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 518.844px; top: 0px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/07.png" alt="" style="width: 422px">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="220" 
                                        data-y="420" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1300" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/08.png" alt="" style="width: 58px">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="870" 
                                        data-y="150" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1500" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/05.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="800" 
                                        data-y="340" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1500" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/10.png" alt="">
                                        </div>
                    
                                        
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="380" 
                                        data-y="460"
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1900" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/09.png" alt="" style="width: 63px">
                                        </div>
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="520" 
                                        data-y="80" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="2400" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/04.png" style="width: 92px">
                                        </div>
                    
                    
                                    </li>
                    
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                        <!-- MAIN IMAGE -->
                                        <!-- <img src="images/bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> -->
                    
                    
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="45" 
                                        data-y="290" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="800" 
                                        data-start="100" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/01.png" alt="" style="width: 290px">
                                        </div>
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="120" 
                                        data-y="130" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="900" 
                                        data-start="400" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/02.png" style="width: 150px">
                                        </div>
                    
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="380" 
                                        data-y="90" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1100" 
                                        data-start="700" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/03.png" alt="" style="width: 68px">
                                        </div>
                    
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="690" 
                                        data-y="440" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1100" 
                                        data-start="700" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/11.png" alt="" style="width: 72px">
                                        </div>
                    
                                        
                                        <div class="tp-caption sfl start" 
                                        data-x="410" 
                                        data-y="190" 
                                        data-speed="1000" 
                                        data-start="1200" 
                                        data-easing="Power4.easeOut" 
                                        data-endspeed="300" 
                                        data-endeasing="Power1.easeIn" 
                                        data-captionhidden="off" 
                                        style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 518.844px; top: 0px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/06.png" alt="" style="width: 422px">
                                        </div>
                    
                                        
                                        <div class="tp-caption sfl start" 
                                        data-x="370" 
                                        data-y="340" 
                                        data-speed="1000" 
                                        data-start="1200" 
                                        data-easing="Power4.easeOut" 
                                        data-endspeed="300" 
                                        data-endeasing="Power1.easeIn" 
                                        data-captionhidden="off" 
                                        style="z-index: 6; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px; font-size: 20px; left: 518.844px; top: 0px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/07.png" alt="" style="width: 422px">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="220" 
                                        data-y="420" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1300" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/08.png" alt="" style="width: 58px">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="870" 
                                        data-y="150" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1500" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/05.png" alt="">
                                        </div>
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="800" 
                                        data-y="340" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1500" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/10.png" alt="">
                                        </div>
                    
                                        
                    
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="380" 
                                        data-y="460"
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="1900" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/09.png" alt="" style="width: 63px">
                                        </div>
                                        
                                        <div class="tp-caption customin skewtoleft start" 
                                        data-x="520" 
                                        data-y="80" 
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                        data-speed="1400" 
                                        data-start="2400" 
                                        data-easing="Back.easeOut" 
                                        data-endspeed="400" 
                                        data-endeasing="Back.easeIn" 
                                        style="z-index: 3; left: 173.5px; top: 80px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.57357, 0.81915, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                            <img src="{{ asset('public/assets/images') }}/slider-6/04.png" style="width: 92px">
                                        </div>
                    
                    
                                    </li>
                    
                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
@endsection