@extends('layouts.master')
@section("page-class" , "index-page")
@section('content')

<!----========Section Section header========================-->
<!---==================Section Start Manage Task==========================-->
<section class="Manage_task">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 text">
                <h1>Manage Your Task
                    With Task Tracker HUB</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo
                    re et dolore magna aliq enim ad minim veniam</p>
                <div class="row mainfield">
                    <div class="col-md-9 filed1">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Work Email">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 TeialButton">
                        <button type="button" class="btn">Get Started</button>
                    </div>
                    <p>Try free for 14 days. No Credit card required.</p>
                </div>

            </div>
            <div class="col-md-6 MacBookimg">
                <img src="{{ asset('public/images/MacBook Air copy.png') }}">
            </div>
        </div>
    </div>
</section>
<!---==================Section End Manage Task==========================-->
<!---==================Section Start Unlimited ==========================-->
<section class="Unlimited">
    <div class="container">
        <div class="row">
            <div class="col-md-3 content">
                <div class="innercontent">
                    <img src="{{ asset('public/images/Vector Smart Object-3.png') }}">
                    <img src="{{ asset('public/images/phone2.png') }}">
                    <h1>Unlimited Companies</h1>
                </div>
            </div>
            <div class="col-md-3 content">
                <div class="innercontent">
                    <img src="{{ asset('public/images/Vector Smart Object-4.png') }}">
                    <img src="{{ asset('public/images/light2.png') }}">
                    <h1>Unlimited Projects</h1>
                </div>
            </div>
            <div class="col-md-3 content">
                <div class="innercontent">
                    <img src="{{ asset('public/images/hands22.png') }}">
                    <img src="{{ asset('public/images/Vector Smart Object-1.png') }}">

                    <h1>Unlimited Team Member</h1>
                </div>

            </div>
            <div class="col-md-3 content">
                <div class="innercontent">
                    <img src="{{ asset('public/images/Vector Smart Object-2.png') }}">
                    <img src="{{ asset('public/images/3333.png') }}">
                    <h1>Unlimited Tasks</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!---==================Section End Unlimited ==========================-->
<!---========================Section Start  million_hours.=========================-->

<section class="million_hours">
    <div class="container">
        <div class="row">
            <div class="col-md-5 imagescontent">
                <img src="{{ asset('public/images/Vector Smart Object.png') }}">
            </div>
            <div class="col-md-7 text2">
                <h1>101 million hours. That is 11527 years.</h1>
                <h2>Time tracked on TaskTrackerHUB</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur</br></br>

                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiu
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicti sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit, sedwi quia consequuntur magni dolores eos qui ratione voluptatem</p>
                <button type="button" class="btn">Read More</button>
            </div>
        </div>
    </div>
</section>
<!---========================Section End  million_hours.=========================-->
<!--==================================Section Start Features=====================-->
<section class="Features">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text3">
                <h1>Features We Offer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor</p>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-2  col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2420.png') }}">
                        <h1>Time Tracking</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2425.png') }}">
                        <h1>Productivity Monitoring</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2428.png') }}">
                        <h1>Task Management</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2429.png') }}">
                        <h1>Screenshots</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2430.png') }}">
                        <h1>Time Reports </h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>


            </div>


            <div class="row justify-content-between">
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2424.png') }}">
                        <h1>Manual Time Tracking</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2423.png') }}">
                        <h1>Cost & Revenue Tracking</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12  innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/Rectangle 2421.png') }}">
                        <h1>Calculate Payouts</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12  innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/3.png') }}">
                        <h1>Track Tasks On Evert OS</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12 innercolomns">
                    <div class="box">
                        <img src="{{ asset('public/images/5.png') }}">
                        <h1>Idle Time Tracking</h1>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--==================================Section End Features=====================-->
<!--==================================Section Start Data=====================-->
<section class="Data">

    <div class="container">
        <div class="row">
            <div class="col-md-7 datatext">
                <h1>Your Data is Safe with Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor

                </p>
                <ul>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Security encryption</a> </li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Firewalls</a></li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Login & Password protection</a></li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Data is stored on TIER III servers</a> </li>

                    <li><i class="fa fa-arrow-right"></i><a href="#">ISO 27001_9001 certified data center</a></li>
                </ul>
            </div>
            <div class="col-md-5 Dataimg">
                <img src="{{ asset('public/images/Screenshot_1.png') }}">
            </div>
        </div>
    </div>
</section>

<!--==================================Section End Data=====================-->
<!---========================Section Start  million_hours.=========================-->

<section class="Mobile">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text3">
                <h1>Available On Desktop & Mobile</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text4">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum

                </p>
                <ul>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Ut enim ad minim veniam</a> </li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">x ea commodo consequat</a></li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Duis aute irure dolor</a> </li>
                    <li><i class="fa fa-arrow-right"></i><a href="#">Labore et dolore magna</a></li>
                </ul>
                <div class="inner_ul">
                    <ul class="d-flex">
                        <li><img src="{{ asset('public/images/Layer 1.png') }}"> </li>
                        <li><img src="{{ asset('public/images/apple-logo-png-dallas-shootings-don-add-are-speech-zones-used-4.png') }}">
                        </li>
                        <li><img src="{{ asset('public/images/unnamed.png') }}"> </li>
                        <li><img src="{{ asset('public/images/Windows-logo.png') }}"> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 imagescontent3">
                <img src="{{ asset('public/images/Rectangle 2431.png') }}">
            </div>
        </div>
    </div>
    </div>
</section>
<!---========================Section End  million_hours.=========================-->
<!---========================Section Start Support=========================-->

<section class="Support">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text5">
                <h1>Support Team Is Available</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor</p>
            </div>
            <div class="row">
                <div class="col-md-6 text5img">
                    <img src="{{ asset('public/images/Vector Smart Object5555.png') }}">
                </div>
                <div class="col-md-6 text6">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labo re et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur</br></br>

                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantiu totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicti sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit, sedwi quia consequuntur magni dolores eos qui ratione voluptatem</p>
                    <button type="button" class="btn">Read More</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!---========================Section End Support.=========================-->
<!--==============Section Start slider============================-->
<section class="Slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 slidertext">
                <h1>What Our Clients Say About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labo re et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor</p>
            </div>

            <div class="owl-carousel">
                <div class="box">
                    <div class="arrowimg">
                        <img src="{{ asset('public/images/Screenshot_4.png') }}">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddo eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco la boris nisi ut aliquip ex ea commodo.</p>
                    <div class="sildercontent2 d-flex">
                        <img src="{{ asset('public/images/Image.png') }}">
                        <div class="innercontent3">
                            <h3>Jhon Alexandar</h3>
                            <p>Company Name</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="arrowimg">
                        <img src="{{ asset('public/images/Screenshot_4.png') }}">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddo eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco la boris nisi ut aliquip ex ea commodo.</p>
                    <div class="sildercontent2 d-flex">
                        <img src="{{ asset('public/images/Image.png') }}">
                        <div class="innercontent3">
                            <h3>Jhon Alexandar</h3>
                            <p>Company Name</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="arrowimg">
                        <img src="{{ asset('public/images/Screenshot_4.png') }}">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddo eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco la boris nisi ut aliquip ex ea commodo.</p>
                    <div class="sildercontent2 d-flex text-align-center">
                        <img src="{{ asset('public/images/Image.png') }}">
                        <div class="innercontent3">
                            <h3>Jhon Alexandar</h3>
                            <p>Company Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection