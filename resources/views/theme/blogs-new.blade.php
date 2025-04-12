@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style>
@media(max-width: 767px) {
    .hero-head h1 {
        padding-bottom: 5px;
    }

    .hero-text h3 {
        font-size: 16px;
        margin-bottom: 29px;
    }
}
</style>
@endsection('css')
@section('content')

<!-- Blog Banner -->
<section class="blog-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="hero-head">
                <h1>Blogs</h1>
                <div class="col-lg-7 col-md-10 hero-text">
                    <h3>Unlock Insights, Elevate Productivity: Dive into the StaffViz Blog</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Banner -->

<!-- Blog List Section -->
<section class="blog-list-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="categories-list">
                    <li class="single-category-item active">
                        <a href="#all">All</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#time-tracking">Time Tracking</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#work-life">Work-Life Balance</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#project-management">Project Management</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#remote-work">Remote Work Optimization</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#cost-management">Cost Management</a>
                    </li>
                    <li class="single-category-item">
                        <a href="#employee-monitoring">Employee Monitoring</a>
                    </li>
                </ul>
                <h5>Latest Posts</h5>
                <div class="category-blogs-list-box">
                    <div id="all" class="category-blog-list active">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/time-tracking-important-detail-img.webp')}}"
                                            alt="time-tracking-important">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>

                                    <a
                                        href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">Why
                                        Time Tracking is Important: The Essential Role of Time Tracking in Modern
                                        Organizations</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 6, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/understanding-quiet-quitting-detail-img.webp')}}"
                                            alt="understanding-quiet-blog">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}">Understanding
                                        Quiet Quitting:
                                        What it is and How to Address it?</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 9, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}"
                                            alt="avoid-micromanagment-blog">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">How
                                        To Avoid
                                        Micromanagement Using Advanced Solutions</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 12, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-cta">
                            <div class="custom-container">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 text mb-lg-0 mb-3">
                                        <h2>Boost Productivity By 30%</h2>
                                        <p>Try StaffViz today to revolutionize your workflow.</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                                            class="btn book-demo-btn" target="_blank">Schedule a Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Remote Work Optimization</span>
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('blogs/hybrid-or-remote-work-who-is-better')}}">Hybrid or Remote
                                        Work: Which is
                                        Better?</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 16, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/time-management-strategies/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                        <span class="category-name">Cost Management</span>
                                    </div>
                                    <a href="{{url('blogs/time-management-strategies-for-peak-productivity')}}">Time
                                        Management Strategies
                                        for Peak Productivity: Skills and Techniques You Need</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 18, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img//time-management-hacks/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a href="{{url('blogs/5-ultimate-hacks-to-ease-time-management-for-employees')}}">5
                                        Ultimate Hacks to
                                        Ease Time Management for Employees and Yield Higher Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 20, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-cta">
                            <div class="custom-container">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 text mb-lg-0 mb-3">
                                        <h2>No More Manual Time Tracking</h2>
                                        <p>Manage Employees and Performance with Staffviz.</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                                            class="btn book-demo-btn" target="_blank">Start your Trail Today!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/remote-meetings/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Remote Work Optimization</span>
                                    </div>
                                    <a href="{{url('blogs/remote-meetings-101-the-essential-handbook')}}">Remote
                                        Meetings 101: The
                                        Essential Handbook </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 24, 2024</p>
                                            </div>
                                        </div>
                                        <!-- <button class="btn like-blog-btn d-flex align-items-center">
                      <span class="like-count">37</span>
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M26.0408 12.2194C25.2764 11.2982 24.0796 10.7259 22.9174 10.7259H19.8429C20.5349 9.62331 21.0556 8.51376 21.3729 7.45719C21.8572 5.8449 21.8402 4.43943 21.3239 3.39271C20.7423 2.21376 19.5637 1.56445 18.0053 1.56445C17.6509 1.56445 17.3314 1.77828 17.1963 2.10597C15.9829 5.04909 12.818 9.27916 9.83601 12.0658C9.53173 11.0088 8.55659 10.2331 7.40307 10.2331H3.65698C2.26086 10.2331 1.125 11.369 1.125 12.7651V23.9019C1.125 25.2981 2.26086 26.4339 3.65698 26.4339H7.40307C8.25713 26.4339 9.01323 26.0084 9.47206 25.3587C10.1662 26.0265 11.0863 26.4339 12.0946 26.4339H21.5272C22.5699 26.4339 23.4985 25.9899 24.2126 25.1499C24.8013 24.4574 25.2194 23.5219 25.4216 22.4445L26.8119 15.0383C26.9985 14.0446 26.7246 13.0435 26.0408 12.2194ZM8.18499 23.902C8.18499 24.3332 7.83423 24.684 7.40307 24.684H3.65698C3.22582 24.684 2.875 24.3332 2.875 23.902V12.7651C2.875 12.334 3.22582 11.9832 3.65698 11.9832H7.40307C7.83423 11.9832 8.18499 12.334 8.18499 12.7651V23.902ZM25.092 14.7154L23.7017 22.1216C23.4692 23.3604 22.7758 24.684 21.5271 24.684H12.0945C10.9038 24.684 9.93505 23.607 9.93505 22.2831V14.3129C13.2333 11.5748 16.9271 6.87226 18.5577 3.35749C19.4278 3.50471 19.6667 3.98908 19.7545 4.16692C20.3224 5.31815 19.8511 7.96891 17.4742 11.0684C17.2715 11.3327 17.2365 11.6893 17.3839 11.988C17.5312 12.2867 17.8354 12.4759 18.1686 12.4759H22.9175C23.5628 12.4759 24.2602 12.8138 24.6941 13.3368C24.9383 13.6313 25.2058 14.1095 25.092 14.7154Z"
                          fill="#97989F" />
                      </svg>
                    </button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/human-resource-development/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Cost Management</span>
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/everything-you-need-to-know-about-human-resource-development-in-2024')}}">Everything
                                        You Need to Know About Human Resource Development (HRD) in 2024</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 27, 2024</p>
                                            </div>
                                        </div>
                                        <!-- <button class="btn like-blog-btn d-flex align-items-center">
                      <span class="like-count">37</span>
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M26.0408 12.2194C25.2764 11.2982 24.0796 10.7259 22.9174 10.7259H19.8429C20.5349 9.62331 21.0556 8.51376 21.3729 7.45719C21.8572 5.8449 21.8402 4.43943 21.3239 3.39271C20.7423 2.21376 19.5637 1.56445 18.0053 1.56445C17.6509 1.56445 17.3314 1.77828 17.1963 2.10597C15.9829 5.04909 12.818 9.27916 9.83601 12.0658C9.53173 11.0088 8.55659 10.2331 7.40307 10.2331H3.65698C2.26086 10.2331 1.125 11.369 1.125 12.7651V23.9019C1.125 25.2981 2.26086 26.4339 3.65698 26.4339H7.40307C8.25713 26.4339 9.01323 26.0084 9.47206 25.3587C10.1662 26.0265 11.0863 26.4339 12.0946 26.4339H21.5272C22.5699 26.4339 23.4985 25.9899 24.2126 25.1499C24.8013 24.4574 25.2194 23.5219 25.4216 22.4445L26.8119 15.0383C26.9985 14.0446 26.7246 13.0435 26.0408 12.2194ZM8.18499 23.902C8.18499 24.3332 7.83423 24.684 7.40307 24.684H3.65698C3.22582 24.684 2.875 24.3332 2.875 23.902V12.7651C2.875 12.334 3.22582 11.9832 3.65698 11.9832H7.40307C7.83423 11.9832 8.18499 12.334 8.18499 12.7651V23.902ZM25.092 14.7154L23.7017 22.1216C23.4692 23.3604 22.7758 24.684 21.5271 24.684H12.0945C10.9038 24.684 9.93505 23.607 9.93505 22.2831V14.3129C13.2333 11.5748 16.9271 6.87226 18.5577 3.35749C19.4278 3.50471 19.6667 3.98908 19.7545 4.16692C20.3224 5.31815 19.8511 7.96891 17.4742 11.0684C17.2715 11.3327 17.2365 11.6893 17.3839 11.988C17.5312 12.2867 17.8354 12.4759 18.1686 12.4759H22.9175C23.5628 12.4759 24.2602 12.8138 24.6941 13.3368C24.9383 13.6313 25.2058 14.1095 25.092 14.7154Z"
                          fill="#97989F" />
                      </svg>
                    </button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/top-time-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                        <span class="category-name">Cost Management</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/top-time-management-tools-in-2025-to-increase-team-productivity')}}">Top
                                        Time
                                        Management Tools in 2025 to Increase Team Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 2, 2025</p>
                                            </div>
                                        </div>
                                        <!-- <button class="btn like-blog-btn d-flex align-items-center">
                      <span class="like-count">37</span>
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M26.0408 12.2194C25.2764 11.2982 24.0796 10.7259 22.9174 10.7259H19.8429C20.5349 9.62331 21.0556 8.51376 21.3729 7.45719C21.8572 5.8449 21.8402 4.43943 21.3239 3.39271C20.7423 2.21376 19.5637 1.56445 18.0053 1.56445C17.6509 1.56445 17.3314 1.77828 17.1963 2.10597C15.9829 5.04909 12.818 9.27916 9.83601 12.0658C9.53173 11.0088 8.55659 10.2331 7.40307 10.2331H3.65698C2.26086 10.2331 1.125 11.369 1.125 12.7651V23.9019C1.125 25.2981 2.26086 26.4339 3.65698 26.4339H7.40307C8.25713 26.4339 9.01323 26.0084 9.47206 25.3587C10.1662 26.0265 11.0863 26.4339 12.0946 26.4339H21.5272C22.5699 26.4339 23.4985 25.9899 24.2126 25.1499C24.8013 24.4574 25.2194 23.5219 25.4216 22.4445L26.8119 15.0383C26.9985 14.0446 26.7246 13.0435 26.0408 12.2194ZM8.18499 23.902C8.18499 24.3332 7.83423 24.684 7.40307 24.684H3.65698C3.22582 24.684 2.875 24.3332 2.875 23.902V12.7651C2.875 12.334 3.22582 11.9832 3.65698 11.9832H7.40307C7.83423 11.9832 8.18499 12.334 8.18499 12.7651V23.902ZM25.092 14.7154L23.7017 22.1216C23.4692 23.3604 22.7758 24.684 21.5271 24.684H12.0945C10.9038 24.684 9.93505 23.607 9.93505 22.2831V14.3129C13.2333 11.5748 16.9271 6.87226 18.5577 3.35749C19.4278 3.50471 19.6667 3.98908 19.7545 4.16692C20.3224 5.31815 19.8511 7.96891 17.4742 11.0684C17.2715 11.3327 17.2365 11.6893 17.3839 11.988C17.5312 12.2867 17.8354 12.4759 18.1686 12.4759H22.9175C23.5628 12.4759 24.2602 12.8138 24.6941 13.3368C24.9383 13.6313 25.2058 14.1095 25.092 14.7154Z"
                          fill="#97989F" />
                      </svg>
                    </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-cta">
                            <div class="custom-container">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 text mb-lg-0 mb-3">
                                        <h2>Join 300,000+ users already managing their time!</h2>
                                        <p>Stay Ahead with Streamlined Time Tracking with StaffViz!</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp"
                                            class="btn book-demo-btn" target="_blank">Start your Trail Today!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/master-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Work-Life Balance</span>
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/master-time-management-a-guide-to-stephen-coveys-time-management-matrix')}}">Master
                                        Time Management: A Guide to Stephen Covey's Time Management Matrix </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 6, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb5.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/14-performance-evaluation-types')}}">14
                                        Types of Performance Evaluations: A Complete Guide to Increased Employee
                                        Performance</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 15, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb4.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/performance-evaluation-templates')}}">Performance Evaluation
                                        Templates:
                                        Your Roadmap to Employee Success
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 20, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb3.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a href="{{url('blogs/program-management-vs-project-management')}}">Key Differences:
                                        Program Management vs Project Management
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 27, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb2.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/sprint-planning')}}">What Is Sprint Planning? Understanding
                                        the Best Tools & Practices
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Feb 7, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a href="{{url('blogs/agile-vs-waterfall')}}">Agile vs. Waterfall Project
                                        Management: A Comprehensive Guide to Choosing the Right Approach </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Feb 17, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Time Tracking tab -->
                    <div id="time-tracking" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/time-tracking-important-detail-img.webp')}}"
                                            alt="time-tracking-important">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a
                                        href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">Why
                                        Time Tracking is Important: The Essential Role of Time Tracking in Modern
                                        Organizations</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 6, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/time-management-strategies/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a href="{{url('blogs/time-management-strategies-for-peak-productivity')}}">Time
                                        Management Strategies
                                        for Peak Productivity: Skills and Techniques You Need</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 18, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img//time-management-hacks/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a href="{{url('blogs/5-ultimate-hacks-to-ease-time-management-for-employees')}}">5
                                        Ultimate Hacks to
                                        Ease Time Management for Employees and Yield Higher Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 20, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/top-time-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/top-time-management-tools-in-2025-to-increase-team-productivity')}}">Top
                                        Time
                                        Management Tools in 2025 to Increase Team Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 2, 2025</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/master-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Time Tracking</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/master-time-management-a-guide-to-stephen-coveys-time-management-matrix')}}">Master
                                        Time Management: A Guide to Stephen Covey's Time Management Matrix </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 6, 2025</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Work life tab -->
                    <div id="work-life" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/master-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Work-Life Balance</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/master-time-management-a-guide-to-stephen-coveys-time-management-matrix')}}">Master
                                        Time Management: A Guide to Stephen Covey's Time Management Matrix </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 6, 2025</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project management tab -->
                    <div id="project-management" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/human-resource-development/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/everything-you-need-to-know-about-human-resource-development-in-2024')}}">Everything
                                        You Need to Know About Human Resource Development (HRD) in 2024</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 27, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb3.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a href="{{url('blogs/program-management-vs-project-management')}}">Key Differences:
                                        Program Management vs Project Management
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 27, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Project Management</span>
                                    </div>
                                    <a href="{{url('blogs/agile-vs-waterfall')}}">Agile vs. Waterfall Project
                                        Management: A Comprehensive Guide to Choosing the Right Approach </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Feb 17, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Remote work tab -->
                    <div id="remote-work" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Remote Work Optimization</span>
                                    </div>
                                    <a href="{{url('blogs/hybrid-or-remote-work-who-is-better')}}">Hybrid or Remote
                                        Work: Which is
                                        Better?</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 16, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/remote-meetings/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Remote Work Optimization</span>
                                    </div>
                                    <a href="{{url('blogs/remote-meetings-101-the-essential-handbook')}}">Remote
                                        Meetings 101: The
                                        Essential Handbook </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 24, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cost Management tab -->
                    <div id="cost-management" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/time-management-strategies/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Cost Management</span>
                                    </div>
                                    <a href="{{url('blogs/time-management-strategies-for-peak-productivity')}}">Time
                                        Management Strategies
                                        for Peak Productivity: Skills and Techniques You Need</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 18, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/human-resource-development/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Cost Management</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/everything-you-need-to-know-about-human-resource-development-in-2024')}}">Everything
                                        You Need to Know About Human Resource Development (HRD) in 2024</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 27, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/top-time-management/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Cost Management</span>
                                    </div>
                                    <a
                                        href="{{url('blogs/top-time-management-tools-in-2025-to-increase-team-productivity')}}">Top
                                        Time
                                        Management Tools in 2025 to Increase Team Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p> Jan 2, 2025</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Employee Monitoring tab -->
                    <div id="employee-monitoring" class="category-blog-list">
                        <div class="row justify-content-lg-start row justify-content-center">
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/understanding-quiet-quitting-detail-img.webp')}}"
                                            alt="understanding-quiet-blog">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}">Understanding
                                        Quiet Quitting:
                                        What it is and How to Address it?</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 9, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}"
                                            alt="avoid-micromanagment-blog">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">How
                                        To Avoid
                                        Micromanagement Using Advanced Solutions</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 12, 2024</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('blogs/hybrid-or-remote-work-who-is-better')}}">Hybrid or Remote
                                        Work: Which is
                                        Better?</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 16, 2024</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img//time-management-hacks/image-1.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>
                                    </div>
                                    <a href="{{url('blogs/5-ultimate-hacks-to-ease-time-management-for-employees')}}">5
                                        Ultimate Hacks to
                                        Ease Time Management for Employees and Yield Higher Productivity</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Dec 20, 2024</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb5.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/14-performance-evaluation-types')}}">14
                                        Types of Performance Evaluations: A Complete Guide to Increased Employee
                                        Performance</a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 15, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb4.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/performance-evaluation-templates')}}">Performance Evaluation
                                        Templates:
                                        Your Roadmap to Employee Success
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Jan 20, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 single-blog-box">
                                <div class="inner-blog-box">
                                    <div class="blog-img">
                                        <img src="{{asset('public/assets/img/blog-thumb2.webp')}}"
                                            alt="hybrid-work-list-img">
                                    </div>
                                    <div class="cats">
                                        <span class="category-name">Employee Monitoring</span>

                                    </div>
                                    <a href="{{url('blogs/sprint-planning')}}">What Is Sprint Planning? Understanding
                                        the Best Tools & Practices
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between blog-date">
                                        <div class="d-flex align-items-center">
                                            <div class="auth-img">
                                                <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                                            </div>
                                            <div class="date-text">
                                                <h6>Tracey Taylor</h6>
                                                <p>Feb 7, 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog List Section -->


@section('js')
<script>
$(document).ready(function() {
    $('.blog-list-sec .categories-list .single-category-item a').click(function(e) {
        e.preventDefault();
        $('.blog-list-sec .categories-list .single-category-item').removeClass('active');
        $(this).parent().addClass('active');
        let link = $(this).attr('href');

        $('.blog-list-sec .category-blog-list').removeClass('active');
        let currentTab = $(link);
        currentTab.addClass('active');
        $('html, body').animate({
            scrollTop: currentTab.offset().top - 350 // Adjust this offset as needed
        }, 600);
    });
});
</script>
@endsection('js')

@endsection