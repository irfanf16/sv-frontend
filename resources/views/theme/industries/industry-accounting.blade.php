@extends('theme.layouts.master')
@section("page-class", "index-page")
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

    . {
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
<section id="about-hero" class="startup-page tracking-single-page hrm-header-section real-estate-hero"
    style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
    <video autoplay muted loop id="sliderVideo">
        <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container-fluid">
        <div class="row">
            <div class="hero-head h_t col-xl-8 col-md-10">
                <!-- <h6>Features </h6> -->
                <h1 class="pb-4">Transform the Way <br>Accountants<br>Manage Their Work </h1>
                <div class="col-xl-8 col-md-9 hero-text">

                    <p>Bring order to numbers and balance to your workflow with StaffViz. Simplify your time, task, and team management so you can focus on delivering impeccable financial solutions to your clients.</p>

                </div>
                <div class="hero-btns">
                    <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                        class="demo contact_btn">book a demo</a>
                    <a href="{{url('/pricing-plans')}}" class="features">Start Free Trial</a>
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block">
                <img class="w-100" src="{{asset('public/assets/img/accounting.webp')}}" alt="Img">
            </div>
        </div>
    </div>
</section>
<!-- Banner -->




<!-- Empower Your Team -->
<section id="empower" class="real-estate freelance">
    <div class="container">
        <div class="row justify-content-between align-items-center reverse-me">
            <div class="col-lg-5 col-md-12">
                <div class="inner-contents">
                    <div class="all-text">
                        <h2>Effortless Workflow Management for Accountants</h2>
                        <h6>Keep Every Task on Track and Deadlines in Check</h6>
                        <div class="pb-4">
                            <p>Stay ahead of your workload with StaffViz’s intuitive tools, designed for accountants to:</p>
                            <ul>
                            <li>Assign and prioritize tasks like audits, tax filings, and financial reporting.</li>
                                <li> Monitor ongoing projects with real-time progress updates.</li>
                                
                                <li>Meet every deadline with confidence using centralized task management.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hero-btns">
                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                            class="demo contact_btn">Book A Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 break-img">
                <img class="w-100" src="{{asset('public/assets/img/1zumsqy.webp')}}" alt="Img">
            </div>

        </div>
    </div>
</section>

<!-- Scalable Infrastructure  -->
<section id="empower" class="scalable-infra freelance">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-md-12 break-img">
                <img class="w-100" src="{{asset('public/assets/img/o6fodghnro.webp')}}" alt="Img">
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="inner-contents">
                    <div class="all-text">
                        <h2>Tools That Work as Hard as You Do</h2>
                        <h3>Precise Time Tracking and Transparent Reporting</h3>
                        <div class="pb-4">
                            <p>Track time and build trust with clients through clear and accurate records.</p>
                            <ul>
                            <li>Capture billable hours effortlessly for each client or task.</li>
                                <li> Use detailed timesheets to create transparent and reliable billing reports.</li>
                                
                                <li>Eliminate guesswork with features like idle time reminders and focus timers to boost efficiency.</li>
                            </ul>
                        </div>
                     </div>
                    <div class="hero-btns">
                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                            class="demo contact_btn">Book A Demo</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Resource Management  -->
<section id="empower" class="resource-mngmnt freelance">
    <div class="container">
        <div class="row justify-content-between align-items-center reverse-me">

            <div class="col-lg-5 col-md-12">
                <div class="inner-contents">
                    <div class="all-text">
                        <h2>Streamline Your Internal Processes</h2>
                        <h3>
                        Enhance Team Collaboration & Efficiency
                        </h3>
                        <div class="pb-4">
                            <p>Keep your team aligned and improve internal workflows:</p>
                            <ul>
                            <li>Monitor team progress and track deadlines to ensure smooth project completion.</li>
                                <li> Collaborate seamlessly by keeping all tasks, timelines, and updates centralized.</li>
                                
                                <li>Simplify approvals and reduce delays with easy-to-use task management tools.</li>
                            </ul>
                        </div>
                      </div>
                    <div class="hero-btns">
                        <a href="{{url('/integrations')}}"
                            class="demo contact_btn">Explore Integrations</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 break-img">
                <img class="w-100" src="{{asset('public/assets/img/pxnqfj.webp')}}" alt="Img">
            </div>

        </div>
    </div>
</section>


<!-- Innovative Integration  -->
<section id="empower" class="innovative-iteg freelance">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-md-12 break-img">
                <img class="w-100" src="{{asset('public/assets/img/wrvhifm.webp')}}" alt="Img">
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="inner-contents">
                    <div class="all-text">
                        <h2>Streamline Access Control with Role-Based Permissions</h2>
                        <h3>
                        Ensure Accountability and Control with RBAC
                        </h3>
                        <div class="pb-4">
                            <p>Accounting relies on trust—and StaffViz ensures your clients’ sensitive data stays protected.</p>
                            <ul>
                            <li>Set role-based permissions to control who sees what.</li>
                                <li> Protect confidential client information by limiting access based on permissions.</li>
                                
                                <li>Monitor which team members are accessing specific data to ensure accountability.</li>
                            </ul>
                        </div> </div>
                    <div class="hero-btns">
                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                            class="demo contact_btn">Book A Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="key-features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>
                Key Features to Maximize Efficiency in the Accounting & Finance Industry with StaffViz
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7249" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7249)">
                                        <path
                                            d="M38.6667 48.0006C36.8 48.0006 35.2222 47.3562 33.9333 46.0673C32.6444 44.7784 32 43.2006 32 41.334C32 39.4673 32.6444 37.8895 33.9333 36.6007C35.2222 35.3118 36.8 34.6673 38.6667 34.6673C40.5333 34.6673 42.1111 35.3118 43.4 36.6007C44.6889 37.8895 45.3333 39.4673 45.3333 41.334C45.3333 43.2006 44.6889 44.7784 43.4 46.0673C42.1111 47.3562 40.5333 48.0006 38.6667 48.0006ZM13.3333 58.6673C11.8667 58.6673 10.6111 58.1451 9.56667 57.1007C8.52222 56.0562 8 54.8006 8 53.334V16.0007C8 14.534 8.52222 13.2784 9.56667 12.234C10.6111 11.1895 11.8667 10.6673 13.3333 10.6673H16V5.33398H21.3333V10.6673H42.6667V5.33398H48V10.6673H50.6667C52.1333 10.6673 53.3889 11.1895 54.4333 12.234C55.4778 13.2784 56 14.534 56 16.0007V53.334C56 54.8006 55.4778 56.0562 54.4333 57.1007C53.3889 58.1451 52.1333 58.6673 50.6667 58.6673H13.3333ZM13.3333 53.334H50.6667V26.6673H13.3333V53.334ZM13.3333 21.334H50.6667V16.0007H13.3333V21.334Z"
                                            fill="url(#paint0_linear_15339_7249)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7249" x1="32" y1="5.33398" x2="32"
                                            y2="58.6673" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Task Scheduling</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7252" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7252)">
                                        <path
                                            d="M40.6673 13.334C39.734 13.334 38.9451 13.0118 38.3006 12.3673C37.6562 11.7229 37.334 10.934 37.334 10.0007C37.334 9.06732 37.6562 8.27843 38.3006 7.63398C38.9451 6.98954 39.734 6.66732 40.6673 6.66732C41.6006 6.66732 42.3895 6.98954 43.034 7.63398C43.6784 8.27843 44.0006 9.06732 44.0006 10.0007C44.0006 10.934 43.6784 11.7229 43.034 12.3673C42.3895 13.0118 41.6006 13.334 40.6673 13.334ZM40.6673 57.334C39.734 57.334 38.9451 57.0118 38.3006 56.3673C37.6562 55.7229 37.334 54.934 37.334 54.0006C37.334 53.0673 37.6562 52.2784 38.3006 51.634C38.9451 50.9895 39.734 50.6673 40.6673 50.6673C41.6006 50.6673 42.3895 50.9895 43.034 51.634C43.6784 52.2784 44.0006 53.0673 44.0006 54.0006C44.0006 54.934 43.6784 55.7229 43.034 56.3673C42.3895 57.0118 41.6006 57.334 40.6673 57.334ZM51.334 22.6673C50.4007 22.6673 49.6118 22.3451 48.9673 21.7007C48.3229 21.0562 48.0006 20.2673 48.0006 19.334C48.0006 18.4007 48.3229 17.6118 48.9673 16.9673C49.6118 16.3229 50.4007 16.0007 51.334 16.0007C52.2673 16.0007 53.0562 16.3229 53.7006 16.9673C54.3451 17.6118 54.6673 18.4007 54.6673 19.334C54.6673 20.2673 54.3451 21.0562 53.7006 21.7007C53.0562 22.3451 52.2673 22.6673 51.334 22.6673ZM51.334 48.0006C50.4007 48.0006 49.6118 47.6784 48.9673 47.034C48.3229 46.3895 48.0006 45.6006 48.0006 44.6673C48.0006 43.734 48.3229 42.9451 48.9673 42.3006C49.6118 41.6562 50.4007 41.334 51.334 41.334C52.2673 41.334 53.0562 41.6562 53.7006 42.3006C54.3451 42.9451 54.6673 43.734 54.6673 44.6673C54.6673 45.6006 54.3451 46.3895 53.7006 47.034C53.0562 47.6784 52.2673 48.0006 51.334 48.0006ZM55.334 35.334C54.4007 35.334 53.6118 35.0118 52.9673 34.3673C52.3229 33.7229 52.0006 32.934 52.0006 32.0006C52.0006 31.0673 52.3229 30.2784 52.9673 29.634C53.6118 28.9895 54.4007 28.6673 55.334 28.6673C56.2673 28.6673 57.0562 28.9895 57.7006 29.634C58.3451 30.2784 58.6673 31.0673 58.6673 32.0006C58.6673 32.934 58.3451 33.7229 57.7006 34.3673C57.0562 35.0118 56.2673 35.334 55.334 35.334ZM32.0006 58.6673C28.3118 58.6673 24.8451 57.9673 21.6006 56.5673C18.3562 55.1673 15.534 53.2673 13.134 50.8673C10.734 48.4673 8.83398 45.6451 7.43398 42.4007C6.03398 39.1562 5.33398 35.6895 5.33398 32.0006C5.33398 28.3118 6.03398 24.8451 7.43398 21.6006C8.83398 18.3562 10.734 15.534 13.134 13.134C15.534 10.734 18.3562 8.83398 21.6006 7.43398C24.8451 6.03398 28.3118 5.33398 32.0006 5.33398V10.6673C26.0451 10.6673 21.0007 12.734 16.8673 16.8673C12.734 21.0007 10.6673 26.0451 10.6673 32.0006C10.6673 37.9562 12.734 43.0006 16.8673 47.134C21.0007 51.2673 26.0451 53.334 32.0006 53.334V58.6673ZM32.0006 37.334C30.534 37.334 29.2784 36.8118 28.234 35.7673C27.1895 34.7229 26.6673 33.4673 26.6673 32.0006C26.6673 31.7784 26.6784 31.5451 26.7006 31.3006C26.7229 31.0562 26.7784 30.8229 26.8673 30.6007L21.334 25.0673L25.0673 21.334L30.6007 26.8673C30.7784 26.8229 31.2451 26.7562 32.0006 26.6673C33.4673 26.6673 34.7229 27.1895 35.7673 28.234C36.8118 29.2784 37.334 30.534 37.334 32.0006C37.334 33.4673 36.8118 34.7229 35.7673 35.7673C34.7229 36.8118 33.4673 37.334 32.0006 37.334Z"
                                            fill="url(#paint0_linear_15339_7252)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7252" x1="32.0007" y1="5.33398"
                                            x2="32.0007" y2="58.6673" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Time Tracking</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7255" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7255)">
                                        <path
                                            d="M45.3333 58.666C41.6444 58.666 38.5 57.366 35.9 54.766C33.3 52.166 32 49.0216 32 45.3327C32 41.6438 33.3 38.4994 35.9 35.8994C38.5 33.2994 41.6444 31.9993 45.3333 31.9993C49.0222 31.9993 52.1667 33.2994 54.7667 35.8994C57.3667 38.4994 58.6667 41.6438 58.6667 45.3327C58.6667 49.0216 57.3667 52.166 54.7667 54.766C52.1667 57.366 49.0222 58.666 45.3333 58.666ZM49.8 51.666L51.6667 49.7994L46.6667 44.7994V37.3327H44V45.866L49.8 51.666ZM13.3333 55.9994C11.8667 55.9994 10.6111 55.4771 9.56667 54.4327C8.52222 53.3882 8 52.1327 8 50.666V13.3327C8 11.866 8.52222 10.6105 9.56667 9.56602C10.6111 8.52157 11.8667 7.99935 13.3333 7.99935H24.4667C24.9556 6.44379 25.9111 5.16602 27.3333 4.16602C28.7556 3.16602 30.3111 2.66602 32 2.66602C33.7778 2.66602 35.3667 3.16602 36.7667 4.16602C38.1667 5.16602 39.1111 6.44379 39.6 7.99935H50.6667C52.1333 7.99935 53.3889 8.52157 54.4333 9.56602C55.4778 10.6105 56 11.866 56 13.3327V29.9993C55.2 29.4216 54.3556 28.9327 53.4667 28.5327C52.5778 28.1327 51.6444 27.7771 50.6667 27.466V13.3327H45.3333V21.3327H18.6667V13.3327H13.3333V50.666H27.4667C27.7778 51.6438 28.1333 52.5771 28.5333 53.466C28.9333 54.3549 29.4222 55.1994 30 55.9994H13.3333ZM32 13.3327C32.7556 13.3327 33.3889 13.0771 33.9 12.566C34.4111 12.0549 34.6667 11.4216 34.6667 10.666C34.6667 9.91046 34.4111 9.27713 33.9 8.76602C33.3889 8.25491 32.7556 7.99935 32 7.99935C31.2444 7.99935 30.6111 8.25491 30.1 8.76602C29.5889 9.27713 29.3333 9.91046 29.3333 10.666C29.3333 11.4216 29.5889 12.0549 30.1 12.566C30.6111 13.0771 31.2444 13.3327 32 13.3327Z"
                                            fill="url(#paint0_linear_15339_7255)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7255" x1="33.3333" y1="2.66602"
                                            x2="33.3333" y2="58.666" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Time Sheets</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7258" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7258)">
                                        <path
                                            d="M25.334 43.9994L44.0006 31.9993L25.334 19.9993V43.9994ZM10.6673 53.3327C9.20065 53.3327 7.9451 52.8105 6.90065 51.766C5.85621 50.7216 5.33398 49.466 5.33398 47.9994V15.9993C5.33398 14.5327 5.85621 13.2771 6.90065 12.2327C7.9451 11.1882 9.20065 10.666 10.6673 10.666H53.334C54.8006 10.666 56.0562 11.1882 57.1007 12.2327C58.1451 13.2771 58.6673 14.5327 58.6673 15.9993V47.9994C58.6673 49.466 58.1451 50.7216 57.1007 51.766C56.0562 52.8105 54.8006 53.3327 53.334 53.3327H10.6673ZM10.6673 47.9994H53.334V15.9993H10.6673V47.9994Z"
                                            fill="url(#paint0_linear_15339_7258)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7258" x1="32.0007" y1="10.666"
                                            x2="32.0007" y2="53.3327" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Screen Capture</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7261" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7261)">
                                        <path
                                            d="M32.0707 11.9337C36.7818 11.9337 41.2262 12.9448 45.404 14.9671C49.5818 16.9893 53.0707 19.9115 55.8707 23.7337C56.1818 24.1337 56.2818 24.4893 56.1707 24.8004C56.0595 25.1115 55.8707 25.3782 55.604 25.6004C55.3373 25.8226 55.0262 25.9226 54.6707 25.9004C54.3151 25.8782 54.004 25.6893 53.7373 25.3337C51.2929 21.8671 48.1484 19.2115 44.304 17.3671C40.4595 15.5226 36.3818 14.6004 32.0707 14.6004C27.7595 14.6004 23.7151 15.5226 19.9373 17.3671C16.1595 19.2115 13.0262 21.8671 10.5373 25.3337C10.2707 25.7337 9.95954 25.9559 9.60398 26.0004C9.24843 26.0448 8.93732 25.9559 8.67065 25.7337C8.35954 25.5115 8.17065 25.2337 8.10398 24.9004C8.03732 24.5671 8.13732 24.2226 8.40398 23.8671C11.1595 20.0893 14.6151 17.1559 18.7707 15.0671C22.9262 12.9782 27.3595 11.9337 32.0707 11.9337ZM32.0707 18.2004C38.0707 18.2004 43.2262 20.2004 47.5373 24.2004C51.8484 28.2004 54.004 33.1559 54.004 39.0671C54.004 41.2893 53.2151 43.1448 51.6373 44.6337C50.0595 46.1226 48.1373 46.8671 45.8707 46.8671C43.604 46.8671 41.6595 46.1226 40.0373 44.6337C38.4151 43.1448 37.604 41.2893 37.604 39.0671C37.604 37.6004 37.0595 36.3671 35.9706 35.3671C34.8818 34.3671 33.5818 33.8671 32.0707 33.8671C30.5595 33.8671 29.2595 34.3671 28.1707 35.3671C27.0818 36.3671 26.5373 37.6004 26.5373 39.0671C26.5373 43.3782 27.8151 46.9782 30.3706 49.8671C32.9262 52.756 36.2262 54.7782 40.2706 55.9337C40.6707 56.0671 40.9373 56.2893 41.0707 56.6004C41.204 56.9115 41.2262 57.2448 41.1373 57.6004C41.0484 57.9115 40.8707 58.1782 40.604 58.4004C40.3373 58.6226 40.004 58.6893 39.604 58.6004C34.9818 57.4448 31.204 55.1448 28.2707 51.7004C25.3373 48.256 23.8707 44.0448 23.8707 39.0671C23.8707 36.8448 24.6707 34.9782 26.2707 33.4671C27.8707 31.9559 29.804 31.2004 32.0707 31.2004C34.3373 31.2004 36.2707 31.9559 37.8707 33.4671C39.4707 34.9782 40.2706 36.8448 40.2706 39.0671C40.2706 40.5337 40.8262 41.7671 41.9373 42.7671C43.0484 43.7671 44.3595 44.2671 45.8707 44.2671C47.3818 44.2671 48.6707 43.7671 49.7373 42.7671C50.804 41.7671 51.3373 40.5337 51.3373 39.0671C51.3373 33.9115 49.4484 29.5782 45.6707 26.0671C41.8929 22.5559 37.3818 20.8004 32.1373 20.8004C26.8929 20.8004 22.3818 22.5559 18.604 26.0671C14.8262 29.5782 12.9373 33.8893 12.9373 39.0004C12.9373 40.0671 13.0373 41.4004 13.2373 43.0004C13.4373 44.6004 13.9151 46.4671 14.6707 48.6004C14.804 49.0004 14.7929 49.3559 14.6373 49.6671C14.4818 49.9782 14.2262 50.2004 13.8707 50.3337C13.5151 50.4671 13.1707 50.4559 12.8373 50.3004C12.504 50.1448 12.2707 49.8893 12.1373 49.5337C11.4707 47.8004 10.9929 46.0782 10.704 44.3671C10.4151 42.6559 10.2707 40.8893 10.2707 39.0671C10.2707 33.1559 12.4151 28.2004 16.704 24.2004C20.9929 20.2004 26.1151 18.2004 32.0707 18.2004ZM32.0707 5.40039C34.9151 5.40039 37.6929 5.74484 40.404 6.43372C43.1151 7.12261 45.7373 8.1115 48.2706 9.40039C48.6707 9.62261 48.904 9.88928 48.9707 10.2004C49.0373 10.5115 49.004 10.8226 48.8707 11.1337C48.7373 11.4448 48.5151 11.6893 48.204 11.8671C47.8929 12.0448 47.5151 12.0226 47.0707 11.8004C44.7151 10.6004 42.2818 9.67817 39.7707 9.03372C37.2595 8.38928 34.6929 8.06706 32.0707 8.06706C29.4929 8.06706 26.9595 8.36706 24.4707 8.96706C21.9818 9.56706 19.604 10.5115 17.3373 11.8004C16.9818 12.0226 16.6262 12.0782 16.2707 11.9671C15.9151 11.8559 15.6484 11.6226 15.4707 11.2671C15.2929 10.9115 15.2484 10.5893 15.3373 10.3004C15.4262 10.0115 15.6484 9.75595 16.004 9.53372C18.4929 8.20039 21.0929 7.17817 23.804 6.46706C26.5151 5.75595 29.2707 5.40039 32.0707 5.40039ZM32.0707 24.6671C36.204 24.6671 39.7595 26.0559 42.7373 28.8337C45.7151 31.6115 47.204 35.0226 47.204 39.0671C47.204 39.4671 47.0818 39.7893 46.8373 40.0337C46.5929 40.2782 46.2707 40.4004 45.8707 40.4004C45.5151 40.4004 45.204 40.2782 44.9373 40.0337C44.6707 39.7893 44.5373 39.4671 44.5373 39.0671C44.5373 35.7337 43.304 32.9448 40.8373 30.7004C38.3707 28.4559 35.4484 27.3337 32.0707 27.3337C28.6929 27.3337 25.7929 28.4559 23.3707 30.7004C20.9484 32.9448 19.7373 35.7337 19.7373 39.0671C19.7373 42.6671 20.3595 45.7226 21.604 48.2337C22.8484 50.7448 24.6707 53.2671 27.0707 55.8004C27.3373 56.0671 27.4707 56.3782 27.4707 56.7337C27.4707 57.0893 27.3373 57.4004 27.0707 57.6671C26.804 57.9337 26.4929 58.0671 26.1373 58.0671C25.7818 58.0671 25.4706 57.9337 25.204 57.6671C22.5818 54.9115 20.5707 52.1004 19.1707 49.2337C17.7707 46.3671 17.0707 42.9782 17.0707 39.0671C17.0707 35.0226 18.5373 31.6115 21.4707 28.8337C24.404 26.0559 27.9373 24.6671 32.0707 24.6671ZM32.004 37.7337C32.404 37.7337 32.7262 37.8671 32.9707 38.1337C33.2151 38.4004 33.3373 38.7115 33.3373 39.0671C33.3373 42.4004 34.5373 45.1337 36.9373 47.2671C39.3373 49.4004 42.1373 50.4671 45.3373 50.4671C45.604 50.4671 45.9818 50.4448 46.4707 50.4004C46.9595 50.3559 47.4707 50.2893 48.004 50.2004C48.404 50.1115 48.7484 50.1671 49.0373 50.3671C49.3262 50.5671 49.5151 50.8671 49.604 51.2671C49.6929 51.6226 49.6262 51.9337 49.404 52.2004C49.1818 52.4671 48.8929 52.6448 48.5373 52.7337C47.7373 52.9559 47.0373 53.0782 46.4373 53.1004C45.8373 53.1226 45.4707 53.1337 45.3373 53.1337C41.3818 53.1337 37.9484 51.8004 35.0373 49.1337C32.1262 46.4671 30.6707 43.1115 30.6707 39.0671C30.6707 38.7115 30.7929 38.4004 31.0373 38.1337C31.2818 37.8671 31.604 37.7337 32.004 37.7337Z"
                                            fill="url(#paint0_linear_15339_7261)"
                                            stroke="url(#paint1_linear_15339_7261)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7261" x1="32.1492" y1="5.40039"
                                            x2="32.1492" y2="58.6385" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_15339_7261" x1="32.1492" y1="5.40039"
                                            x2="32.1492" y2="58.6385" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Attendance Management</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center h-100">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                    fill="none">
                                    <mask id="mask0_15339_7264" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="64" height="64">
                                        <rect width="64" height="64" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_15339_7264)">
                                        <path
                                            d="M18.6667 45.3333H24V26.6667H18.6667V45.3333ZM29.3333 45.3333H34.6667V18.6667H29.3333V45.3333ZM40 45.3333H45.3333V34.6667H40V45.3333ZM13.3333 56C11.8667 56 10.6111 55.4778 9.56667 54.4333C8.52222 53.3889 8 52.1333 8 50.6667V13.3333C8 11.8667 8.52222 10.6111 9.56667 9.56667C10.6111 8.52222 11.8667 8 13.3333 8H50.6667C52.1333 8 53.3889 8.52222 54.4333 9.56667C55.4778 10.6111 56 11.8667 56 13.3333V50.6667C56 52.1333 55.4778 53.3889 54.4333 54.4333C53.3889 55.4778 52.1333 56 50.6667 56H13.3333ZM13.3333 50.6667H50.6667V13.3333H13.3333V50.6667Z"
                                            fill="url(#paint0_linear_15339_7264)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15339_7264" x1="32" y1="8" x2="32" y2="56"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2656FE" />
                                            <stop offset="1" stop-color="#00ACE6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Reports & Analytics</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="earn_money" class="startup-ready earn-money solution-ctn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 m-auto">
                <div class="money_div">
                    <span style="text-transform: uppercase;">Take Charge of Your Workflow Today</span>
                    <h2>Reimagine Accounting with StaffViz</h2>
                    <p>StaffViz simplifies the complexities of accounting so you can focus on what you do best—solving financial puzzles and delivering client success. From task tracking to seamless invoicing, StaffViz is the smart solution for modern accountants.
                    </p>
                    <a href="{{url('/pricing-plans')}}">Start Your Free Trial</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="logo_img d-md-flex d-none justify-content-end">
                    <img src="{{asset('/public/assets/img/789789.webp')}}" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="yt-videos">
    <div class="container">
        <h2 class="text-center">Comprehensive Feature Tour</h2>
        <div class="row owl-carousel" id="videoGrid">
            <!-- Video Cards will be inserted here -->
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9" id="videoPlayer"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<section id="faq" class="solutions-faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 text-center faq-head">
                <h5>
                    Knowledge Base
                </h5>
                <h2>We Have the Right Answers to Satisfy Your Queries!</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the benefits of StaffViz for enterprises?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    StaffViz offers scalable features designed to meet the needs of large organizations,
                                    ensuring
                                    streamlined operations and enhanced collaboration across departments. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the benefits for SMBs & SMEs?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>StaffViz streamlines processes to boost productivity and promote collaboration,
                                    empowering you to
                                    succeed in competitive markets. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can freelancers benefit?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>StaffViz provides real-time tracking and management capabilities, allowing
                                    freelancers to stay
                                    organized and efficient. It helps with task monitoring, time tracking, and workflow
                                    optimization for
                                    maximum productivity.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@section('js')
<script>
// YouTube video data with static description and duration
const videoData = [{
        id: "RL8kzgWjxu8",
        description: "Discover the powerful features of StaffViz, your go-to solution for employee monitoring and boosting productivity. See how StaffViz simplifies workforce management with real-time tracking, detailed analytics, and customizable reports. Elevate workplace efficiency with StaffViz today!",
        duration: "0:40" // Video 1: Overview of StaffViz features
    },
    {
        id: "61VScLTH58c",
        description: "Learn how to navigate the Schedule Management feature in StaffViz. In this tutorial, we’ll guide you through setting up and managing schedules, adjusting shifts, and ensuring optimal coverage across your workforce.",
        duration: "1:55" // Video 2: Schedule Management tutorial
    },
    {
        id: "WbRjJkt6Hwc",
        description: "Unlock the full potential of the Timesheet feature in StaffViz, designed to simplify time tracking and boost productivity. This tutorial shows how to navigate the Timesheet interface, record hours accurately, and review employee time logs.",
        duration: "1:01" // Video 3: Timesheet feature guide
    },
    {
        id: "wPaFOtonCy4",
        description: "Master the Team Dashboard feature in StaffViz, your go-to tool for overseeing and managing your workforce. Discover how to monitor performance, track progress, and access real-time data for enhanced productivity.",
        duration: "1:32" // Video 4: Team Dashboard tutorial
    },
    {
        id: "SfM6Q4fVpkw",
        description: "Explore the Snapshots feature in StaffViz, the ultimate tool for capturing and analyzing key moments in employee activity. Learn to monitor productivity, review work sessions, and gain insights into your team's performance.",
        duration: "1:01" // Video 5: Snapshots feature overview
    },
    {
        id: "yPyw-_2ngow",
        description: "Learn how to effectively navigate resource management in StaffViz, the leading solution for optimizing your workforce and maximizing productivity. Manage resources, allocate tasks, and monitor real-time progress to streamline operations and achieve business goals.",
        duration: "1:45" // Video 6: Resource Management tutorial
    },
    {
        id: "hBcRVyK9Xgc",
        description: "Discover how to navigate the powerful monitoring features of StaffViz, the ultimate tool for enhancing employee productivity. Learn real-time tracking, generate insightful analytics, and customize reports to optimize workplace efficiency and performance.",
        duration: "2:06" // Video 7: Monitoring features tutorial
    },
    {
        id: "yN1FqBflVHc",
        description: "In this tutorial, we'll walk you through the process of setting up company configurations in StaffViz. Learn how to customize settings, manage employee profiles, and optimize your workforce management system for maximum efficiency.",
        duration: "2:35" // Video 8: Company configurations setup
    },
    {
        id: "mpyWIhMn124",
        description: "Welcome! In today’s video, we're diving into the step-by-step process of setting up your StaffViz account as an employee, ensuring a smooth onboarding experience and helping you access powerful workforce management features.",
        duration: "1:36" // Video 9: Employee account setup
    },
    {
        id: "sYP0fyJF88Q",
        description: "In this video, we’re showing you how to make the most out of the StaffViz desktop application to streamline your task management and boost your productivity, helping you efficiently track progress and collaborate seamlessly.",
        duration: "2:42" // Video 10: Desktop application tutorial
    },
    {
        id: "ctNjijLCEQE",
        description: "In this video, we provide a guide on creating and managing break scheduling in Staffviz. Efficiently managing breaks is crucial for productivity and employee well-being. Watch how to set up rules and manage schedules effectively.",
        duration: "1:51" // Video 11: Break scheduling tutorial
    },
    {
        id: "zycUXcZFIJc",
        description: "Welcome to our comprehensive guide on defining and managing shifts using StaffViz! Whether you're a business owner, HR manager, or team lead, we'll show you how to set up, manage, and optimize shifts for productivity.",
        duration: "2:29" // Video 12: Shift management tutorial
    },
    {
        id: "0z4EhtuGrrE",
        description: "Is your payment card about to expire? In this video, we'll guide you step-by-step on how to update your payment card details in 𝗦𝘁𝗮𝗳𝗳𝗩𝗶𝘇 to ensure uninterrupted access to all its powerful workforce management features!",
        duration: "1:19" // Video 13: Payment card update tutorial
    },
    {
        id: "xTx9Ks4vq4k",
        description: "In this tutorial, we walk you through the process of defining user profiles and setting up permissions in StaffViz. Managing access rights and user roles is crucial for maintaining security and operations within your organization.",
        duration: "2:30" // Video 14: User profiles and permissions setup
    },
    {
        id: "0NfPxgiGckc",
        description: "In this video, I'll walk you through manually filling out a timesheet in the StaffViz Desktop Application. This step-by-step guide helps you track hours for work, projects, or any activity quickly and accurately.",
        duration: "3:00" // Video 15: Timesheet manual entry guide
    },
    {
        id: "sNVUTL0Na9I",
        description: "In this video, we’ll show you how to define and set up teams in StaffViz, your go-to platform for time tracking. Whether new or experienced, this tutorial helps you structure teams for optimal efficiency.",
        duration: "2:19" // Video 16: Team setup guide
    },
    {
        id: "43fxNWiDGsQ",
        description: "Welcome to our StaffViz tutorial! In this video, we’ll show you how to add a new department in StaffViz. Whether you’re managing a growing team or organizing your structure, departments ensure accurate tracking and operations.",
        duration: "1:38" // Video 17: Department setup tutorial
    },
    {
        id: "IJ9UhhpzDpE",
        description: "Unlock passive income by becoming a StaffViz Affiliate Partner! In this video, we show you simple steps to join the program and earn commissions promoting StaffViz, the ultimate time tracking tool for businesses.",
        duration: "2:48" // Video 18: Affiliate program guide
    },
    {
        id: "TpEGtNMIBX0",
        description: "Discover how StaffViz is revolutionizing workforce management with advanced time tracking, real-time productivity insights, and seamless collaboration tools. Whether you're managing remote teams or optimizing in-office workflows, StaffViz simplifies operations and drives business success.",
        duration: "1:31" // Video 19: Workforce management overview
    },
    {
        id: "xD0Sn823Pdo",
        description: "Unlock seamless efficiency and elevate productivity with StaffViz. Whether remote or in-office, ensure maximum accountability and performance through real-time insights. Manage projects in one unified dashboard, streamline workflows, and drive enhanced collaboration.",
        duration: "1:00" // Video 20: Efficiency and productivity overview
    }
];


// Render video cards
const videoGrid = document.getElementById("videoGrid");

videoData.forEach(video => {
    videoGrid.innerHTML += `
        <div class="video-card" id="video-card-${video.id}" onclick="playVideo('${video.id}')">
            <div class="video-thumbnail">
                <img src="https://img.youtube.com/vi/${video.id}/hqdefault.jpg" alt="Thumbnail for video ${video.id}">
                <span class="video-duration" data-id="${video.id}">${video.duration}</span>
            </div>
            <div class="video-content">
                <div class="video-title" id="title-${video.id}">Loading...</div>
                <div class="video-description" id="description-${video.id}">${video.description}</div>
            </div>
        </div>
    `;
});

// Fetch video title dynamically from YouTube oEmbed API
videoData.forEach(video => {
    fetchVideoTitle(video.id); // Call function to fetch title dynamically
});

// Function to fetch video title from YouTube oEmbed API
function fetchVideoTitle(videoId) {
    console.log(`Fetching title for video ID: ${videoId}`);

    // Fetch video details from YouTube's oEmbed endpoint
    fetch(`https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`)
        .then(response => response.json())
        .then(data => {
            console.log(`Video title for ${videoId}:`, data.title);

            // Get video title from the response
            const title = data.title;
            const description = videoData.find(v => v.id === videoId).description;
            const duration = videoData.find(v => v.id === videoId).duration;

            // Update the DOM with the fetched data using querySelector
            setTimeout(() => {
                const videoCards = document.querySelectorAll(`#video-card-${videoId}`);
                videoCards.forEach(videoCard => {
                    const titleElement = videoCard.querySelector('.video-title');
                    const descriptionElement = videoCard.querySelector('.video-description');
                    const durationElement = videoCard.querySelector('.video-duration[data-id="' +
                        videoId + '"]');

                    // Make sure elements exist before updating them
                    if (titleElement) {
                        titleElement.innerText = title;
                    } else {
                        console.error(`Title element not found for video ID ${videoId}`);
                    }

                    if (descriptionElement) {
                        descriptionElement.innerText = description;
                    } else {
                        console.error(`Description element not found for video ID ${videoId}`);
                    }

                    if (durationElement) {
                        durationElement.innerText = duration;
                    } else {
                        console.error(`Duration element not found for video ID ${videoId}`);
                    }
                });
            }, 100); // 100ms delay to ensure elements are ready
        })
        .catch(error => {
            console.error(`Error fetching video title for ID ${videoId}:`, error);
        });
}

// Play video in lightbox
function playVideo(videoId) {
    const title = document.querySelector(`#title-${videoId}`).innerText; // Get the video title dynamically
    document.getElementById("videoModalLabel").innerText = title;
    document.getElementById("videoPlayer").innerHTML = `
        <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>
    `;
    new bootstrap.Modal(document.getElementById("videoModal")).show();
}

// Close the modal and stop video playback
document.getElementById("videoModal").addEventListener("hidden.bs.modal", function() {
    document.getElementById("videoPlayer").innerHTML = "";
});
</script>




<script>
// Client Companies Slider
$(' .owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
            margin: 20,
        },
        768: {
            items: 3,
            margin: 40,
        },
        992: {
            items: 4,
            margin: 40,
        },
        1200: {
            items: 4,
            margin: 45,
        },
    }
});
</script>

@endsection

@endsection