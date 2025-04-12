@extends('theme.layouts.form_master')

@section("page-class", "company-setup")

@section('css')
<link rel="stylesheet" href="{{ asset('public/assets/css/intlTelInput.css') }}" />
<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap4-clockpicker.min.css') }}" />
<link rel="stylesheet" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css" />
@endsection

@section('content')

<!-- Main Section -->
<section class="company-setup-section">
    <form id="company-setup-form">
        <!-- Welcome Section -->
        <section id="welcome-screen" class="step-section active">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <h1>Welcome to StaffViz</h1>
                        <h4>Your journey with StaffViz <span>begins here.</span></h4>
                        <button class="btn next-btn front-sec-next">let's start <img
                                src="{{ asset('public/assets/img/arrow_circle_right.webp') }}" alt="Arrow" /></button>
                        <img class="d-md-block d-none" src="{{ asset('public/assets/img/welcome-img.webp') }}"
                            alt="Welcome Screen" />
                        <img class="d-md-none" src="{{ asset('public/assets/img/img-welcome-staffviz-mobile.png') }}"
                            alt="Welcome Screen" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome Section -->

        <!-- Step 1 Section -->
        <section id="step-1-section" class="step-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 main-content">
                        <div class="main-logo">
                            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                        </div>

                        <div class="mobile-step d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 step-no">
                                    <h6>Step 1</h6>
                                </div>
                                <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                    <h6>1 of 5</h6>
                                </div>
                            </div>
                            <div class="img_side">
                                <div class="d-flex icon_box">
                                    <div>
                                        <div class="icon icon-sm icon-secondary">
                                            <img src="{{ asset('public/assets/img/sidebar-company.svg') }}"
                                                alt="Company">
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5>1. Company </h5>
                                        <p>Maximize productivity with real-time .</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step-section-description">
                            <h6 class="d-lg-block d-none">Step 1</h6>
                            <h4>Company</h4>
                            <p>Add your company's latest information below.</p>
                        </div>
                        <div class="form-content">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-md-flex align-items-center">
                                        <div class="image-reupload-box">
                                            <div class="img">
                                                <img id="profileImage" src="" alt="Img" />
                                                <div class="overlay">
                                                    <div class="text">
                                                        Change your image
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="customFileContainer">
                                                <input type="file" class="customFileInput" id="ReuplodedInput" />
                                                <label class="customFileLabel-label" for="ReuplodedInput">
                                                    <img src="{{ asset('public/assets/img/add_a_photo.png') }}"
                                                        alt="Add a photo" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="image-upload-box">
                                            <div class="customFileContainer">
                                                <input type="file" class="customFileInput" id="UploadInput"
                                                    accept=".png, .jpeg, .jpg" />
                                                <label class="customFileLabel-label" for="UploadInput">Choose a
                                                    file</label>
                                            </div>
                                            <p>
                                                Only PNG, JPEG, JPG are allowed<br />
                                                to <span class="bold">3MB</span> in size
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Company Name <span class="red">*</span></label>
                                        <input type="text" class="form-control" name="company-name"
                                            placeholder="CrecenTech Systems Pvt Ltd." />
                                        <span id="company-error" class="form-error hide"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email <span class="red">*</span></label>
                                        <input type="email" class="form-control" name="email" value="sample@gmail.com"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address <span class="red">*</span> </label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="6th Avenue" />
                                        <span id="addr-error" class="form-error hide"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact No: </label>
                                        <input type="tel" class="form-control" name="contact_no" id="c_contact_no"
                                            placeholder="(123) 343-3432" onkeypress="return isPhoneNumberKey(event)" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row align-items-end">
                                            <div class="col-6">
                                                <label for="">Time Zone: <span class="red">*</span> </label>
                                            </div>
                                            <div class="col-6">
                                                <span class="upper-description">Current Time: (6:02 PM)</span>
                                            </div>
                                        </div>
                                        <select class="form-control" name="timezone">
                                            <option hidden selected value="">Select</option>
                                            <option value="1">BST - London, UK</option>
                                            <option value="2">PST- Pakistan</option>
                                        </select>
                                        <span id="timezone-error" class="form-error hide"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Weekend:</label>
                                        <select class="form-control" name="weekend">
                                            <option hidden selected value="">Select Days</option>
                                            <option value="1">Monday</option>
                                            <option value="2">Tuesday</option>
                                            <option value="3">Wednesday</option>
                                            <option value="1">Thursday</option>
                                            <option value="2">Friday</option>
                                            <option value="3">Saturday</option>
                                            <option value="3">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Format: </label>
                                        <select class="form-control" name="dateformat">
                                            <option hidden selected value="">Select</option>
                                            <option value="1">DD-MM-YYYY</option>
                                            <option value="2">MM-DD-YYYY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time Format:</label>
                                        <select class="form-control" name="timeformat">
                                            <option hidden selected value="">Select</option>
                                            <option value="1">12 Hours</option>
                                            <option value="2">24 Hours</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex align-items-center justify-content-end">
                            <button class="btn next-btn">Next</button>
                        </div>
                    </div>

                    <div class="col-lg-4 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/step-1-section-sidebar.png') }}" alt="step-1-section-sidebar">

                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-company.svg') }}" alt="Company">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Company </h5>
                                <p>Maximize productivity with real-time .</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Themes </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}" alt="Tracking">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Tracking Settings</h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}" alt="Scheudle">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Schedule Shift & Break </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>5. Invite Members</h5>
                                <p>Maximize productivity with real-time.</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet active"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 1 Section -->

        <!-- Step 2 Section -->
        <section id="step-2-section" class="step-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 main-content">
                        <div class="main-logo">
                            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                        </div>
                        <div class="mobile-step d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 step-no">
                                    <h6>Step 2</h6>
                                </div>
                                <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                    <button class="btn skip-btn">Skip</button>
                                    <h6>2 of 5</h6>
                                </div>
                            </div>
                            <div class="img_side">
                                <div class="d-flex icon_box">
                                    <div>
                                        <div class="icon icon-sm icon-secondary">
                                            <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5>2. Themes </h5>
                                        <p>Maximize productivity with real-time insights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-10 step-section-description">
                                <h6 class="d-lg-block d-none">Step 2</h6>
                                <h4>Choose Theme</h4>
                                <p>Select any color template of your choice.</p>
                            </div>
                            <div class="col-md-2 d-md-flex d-none justify-content-end">
                                <button class="btn skip-btn">Skip</button>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="row pb-lg-5 pt-xl-4 py-lg-3 p-2">
                                <div class="col-md-3 col-6 theme-min-w">
                                    <div class="theme-selection position-relative cre-theme active-theme-selection"
                                        data-theme-name="theme-two" data-primary-color="#FFFFFF"
                                        data-secondary-color="#2892FD" data-hover-color="#D4E9FF" for="theme_one_id">
                                        <div class="theme-selection-icon">
                                            <svg viewBox="0 0 126 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="126" height="77" fill="#E7E7E7" />
                                                <rect x="24" y="11" width="102" height="66" fill="#A7A7A7" />
                                                <rect x="35" y="20" width="91" height="57" fill="white" />
                                                <rect x="6" y="16" width="13" height="13" rx="2" fill="#1E94FD" />
                                                <rect x="6" y="33" width="13" height="13" rx="2" fill="#1E94FD" />
                                                <rect x="6" y="50" width="13" height="13" rx="2" fill="#1E94FD" />
                                                <rect x="35" y="50" width="75" height="13" fill="#1E94FD" />
                                                <rect x="35" y="20" width="91" height="17" fill="#E5E9EC" />
                                                <rect x="41" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="56" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="71" y="23" width="49" height="10" fill="#C8C9CA" />
                                            </svg>
                                        </div>
                                        <div class="d-block theme-name">
                                            <input id="theme_one_id" type="radio" name="theme_name" value="theme-two"
                                                checked />
                                            Grey
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6 theme-min-w">
                                    <div class="theme-selection position-relative cre-theme" data-theme-name="theme-one"
                                        data-primary-color="#FFFFFF" data-secondary-color="#35A476"
                                        data-hover-color="#DBEDE6" for="theme_one_id">
                                        <div class="theme-selection-icon">
                                            <svg viewBox="0 0 126 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="126" height="77" fill="#1D3C45" />
                                                <rect x="24" y="11" width="102" height="66" fill="#377284" />
                                                <rect x="35" y="20" width="91" height="57" fill="white" />
                                                <rect x="6" y="16" width="13" height="13" rx="2" fill="#35A476" />
                                                <rect x="6" y="33" width="13" height="13" rx="2" fill="#35A476" />
                                                <rect x="6" y="50" width="13" height="13" rx="2" fill="#35A476" />
                                                <rect x="35" y="50" width="75" height="13" fill="#35A476" />
                                                <rect x="35" y="20" width="91" height="17" fill="#E5E9EC" />
                                                <rect x="41" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="56" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="71" y="23" width="49" height="10" fill="#C8C9CA" />
                                            </svg>
                                        </div>
                                        <div class="d-block theme-name">
                                            <input id="theme_one_id" type="radio" name="theme_name" value="theme-one" />
                                            Green
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6 theme-min-w">
                                    <div class="theme-selection position-relative cre-theme"
                                        data-theme-name="theme-three" data-primary-color="#FFFFFF"
                                        data-secondary-color="#1F548A" data-hover-color="#C2DCF6" for="theme_three_id">
                                        <div class="theme-selection-icon">
                                            <svg viewBox="0 0 126 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="126" height="77" fill="#1F548A" />
                                                <rect x="24" y="11" width="102" height="66" fill="#4DC5F3" />
                                                <rect x="35" y="20" width="91" height="57" fill="white" />
                                                <rect x="6" y="16" width="13" height="13" rx="2" fill="#00ADEF" />
                                                <rect x="6" y="33" width="13" height="13" rx="2" fill="#00ADEF" />
                                                <rect x="6" y="50" width="13" height="13" rx="2" fill="#00ADEF" />
                                                <rect x="35" y="50" width="75" height="13" fill="#00ADEF" />
                                                <rect x="35" y="20" width="91" height="17" fill="#E5E9EC" />
                                                <rect x="41" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="56" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="71" y="23" width="49" height="10" fill="#C8C9CA" />
                                            </svg>
                                        </div>
                                        <div class="d-block theme-name">
                                            <input id="theme_three_id" type="radio" name="theme_name"
                                                value="theme-three" />
                                            Blue
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6 theme-min-w">
                                    <div class="theme-selection position-relative cre-theme"
                                        data-theme-name="theme-four" data-primary-color="#FFFFFF"
                                        data-secondary-color="#2D3064" data-hover-color="#E6E7FD" for="theme_four_id">
                                        <div class="theme-selection-icon">
                                            <svg viewBox="0 0 126 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="126" height="77" fill="#2D3064" />
                                                <rect x="24" y="11" width="102" height="66" fill="#3F44A0" />
                                                <rect x="35" y="20" width="91" height="57" fill="white" />
                                                <rect x="6" y="16" width="13" height="13" rx="2" fill="#178FDB" />
                                                <rect x="6" y="33" width="13" height="13" rx="2" fill="#178FDB" />
                                                <rect x="6" y="50" width="13" height="13" rx="2" fill="#178FDB" />
                                                <rect x="35" y="50" width="75" height="13" fill="#178FDB" />
                                                <rect x="35" y="20" width="91" height="17" fill="#E5E9EC" />
                                                <rect x="41" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="56" y="23" width="10" height="10" fill="#C8C9CA" />
                                                <rect x="71" y="23" width="49" height="10" fill="#C8C9CA" />
                                            </svg>
                                        </div>
                                        <div class="d-block theme-name">
                                            <input id="theme_four_id" type="radio" name="theme_name"
                                                value="theme-four" />
                                            Navy
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-md-0 mb-3">
                                    <div class="preview-theme">
                                        <div class="preview-img web_preview">
                                            <img src="{{ asset('public/assets/img/themes/web/theme-two.webp') }}"
                                                alt="Web Preview" />
                                        </div>
                                        <div class="preview-theme-head">
                                            <div class="tt">Web Preview</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="preview-theme">
                                        <div class="preview-img desktop_preview">
                                            <img src="{{ asset('public/assets/img/themes/desktop/theme-two.webp') }}"
                                                alt="Desktop Tracker Preview" />
                                        </div>
                                        <div class="preview-theme-head">
                                            <div class="tt">Desktop Tracker Preview</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex align-items-center justify-content-end">
                            <button class="btn prev-btn">Previous</button>
                            <button class="btn next-btn">Next</button>
                        </div>
                    </div>
                    <div class="col-lg-4 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/step-1-section-sidebar.png') }}" alt="step-2-section-sidebar">

                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-company.svg') }}" alt="Company">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Company </h5>
                                <p>Maximize productivity with real-time .</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Themes </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}" alt="Tracking">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Tracking Settings</h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}" alt="Scheudle">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Schedule Shift & Break </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>5. Invite Members</h5>
                                <p>Maximize productivity with real-time.</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
                            <span class="bullet active"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 2 Section -->

        <!-- Step 3 Section -->
        <section id="step-3-section" class="step-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 main-content">
                        <div class="main-logo">
                            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                        </div>

                        <div class="mobile-step d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 step-no">
                                    <h6>Step 3</h6>
                                </div>
                                <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                    <button class="btn skip-btn">Skip</button>
                                    <h6>3 of 5</h6>
                                </div>
                            </div>
                            <div class="img_side">
                                <div class="d-flex icon_box">
                                    <div>
                                        <div class="icon icon-sm icon-secondary">
                                            <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}"
                                                alt="Tracking">
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5>3. Tracking Settings</h5>
                                        <p>Maximize productivity with real-time insights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-10 step-section-description">
                                <h6 class="d-lg-block d-none">Step 3</h6>
                                <h4>Tracking Settings</h4>
                                <div class="d-flex align-items-center tracking-title">
                                    <h6>Tracking Mode:</h6>
                                    <div class="radio-box">
                                        <input type="radio" id="auto-tracking" class="radio-btn" name="tracking-mode"
                                            value="auto-tracking" checked="">
                                        <label for="auto-tracking">Auto Tracking</label>
                                        <input type="radio" id="timesheet" class="radio-btn" name="tracking-mode"
                                            value="timesheet">
                                        <label for="timesheet">Timesheet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-md-flex d-none justify-content-end">
                                <button class="btn skip-btn">Skip</button>
                            </div>
                        </div>
                        <div class="step-3-content">
                            <div class="form-content-description">
                                <p>Once you select the Auto Tracking mode, StaffViz will automatically track the user's
                                    time records.</p>
                            </div>
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="monitoring-main-box">
                                            <div class="single-monitoring-box">
                                                <h6>Idle Time Tracking:</h6>
                                                <p> Manage your profile settings to personalize your experience on our
                                                    platform.
                                                </p>
                                                <div class="options-box col-xl-6 col-lg-7 col-md-8 col-12 pl-0">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input idle-time-checkbox"
                                                            name="idleTimeSwitch" type="checkbox" role="switch"
                                                            id="idleTime" checked>
                                                        <label class="form-check-label" for="idleTime">Enable</label>
                                                    </div>
                                                    <div class="row options-row">
                                                        <div class="col-xl-3 col-md-4 col-6 pr-0">
                                                            <label>Idle Time:</label>
                                                            <select class="form-control" id="idleTime" name="idleTime">
                                                                <option value="10 min">10 mins</option>
                                                                <option value="20 min">20 mins</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-3 col-md-4 col-6 pr-0">
                                                            <label>Approval:</label>
                                                            <select class="form-control" id="approval" name="approval">
                                                                <option value="Accept">Accept</option>
                                                                <option value="Reject">Reject</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 col-6 pr-1">
                                                            <label>Idle to Inactive:</label>
                                                            <select class="form-control" id="idleInactive"
                                                                name="idleInactive">
                                                                <option value="5 hours">5 hours</option>
                                                                <option value="3 hours">3 hours</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-monitoring-box">
                                                <h6>Capture Snapshots:</h6>
                                                <p> Manage your profile settings to personalize your experience on our
                                                    platform.
                                                </p>
                                                <div class="options-box col-xl-6 col-lg-7 col-md-8 col-12 pl-0">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input capture-screen-checkbox"
                                                            name="captureScreenSwitch" type="checkbox" role="switch"
                                                            id="captureScreenSwitch" checked>
                                                        <label class="form-check-label"
                                                            for="captureScreenSwitch">Enable</label>
                                                    </div>
                                                    <div class="row options-row">
                                                        <div class="col-xl-3 col-4 pr-0">
                                                            <label>Duration:</label>
                                                            <select class="form-control" id="duration" name="duration">
                                                                <option value="10 mins">10 mins</option>
                                                                <option value="20 mins">20 mins</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 col-7 pr-2">
                                                            <label>Screenshot Frequency:</label>
                                                            <select class="form-control" id="screenshotFrequency"
                                                                name="screenshotFrequency">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-monitoring-box">
                                                <h6>Web & App Tracking:</h6>
                                                <p> Manage your profile settings to personalize.
                                                </p>
                                                <div class="options-box col-xl-6 col-lg-7 col-md-8 col-12 pl-0">

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input capture-screen-checkbox"
                                                            name="webAppTracking" type="checkbox" role="switch"
                                                            id="webAppTracking">
                                                        <label class="form-check-label"
                                                            for="webAppTracking">Disable</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timesheet-content hide">
                                <p>After selecting the Timesheet tracking mode, the user will fill the time tracking
                                    sheet manually.</p>
                                <img src="{{ asset('public/assets/img/timesheet-img.png') }}" alt="Timesheet">
                            </div>
                        </div>
                        <div class="btns d-flex align-items-center justify-content-end">
                            <button class="btn prev-btn">Previous</button>
                            <button class="btn next-btn">Next</button>
                        </div>
                    </div>

                    <div class="col-lg-4 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/step-1-section-sidebar.png') }}" alt="step-3-section-sidebar">

                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-company.svg') }}" alt="Company">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Company </h5>
                                <p>Maximize productivity with real-time .</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Themes </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}" alt="Tracking">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Tracking Settings</h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}" alt="Scheudle">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Schedule Shift & Break </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>5. Invite Members</h5>
                                <p>Maximize productivity with real-time.</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet active"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 3 Section -->

        <!-- Step 4 Section -->
        <section id="step-4-section" class="step-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 main-content">
                        <div class="main-logo">
                            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                        </div>
                        <div class="mobile-step d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 step-no">
                                    <h6>Step 4</h6>
                                </div>
                                <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                    <button class="btn skip-btn">Skip</button>
                                    <h6>4 of 5</h6>
                                </div>
                            </div>
                            <div class="img_side">
                                <div class="d-flex icon_box">
                                    <div>
                                        <div class="icon icon-sm icon-secondary">
                                            <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}"
                                                alt="Scheudle">
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5>4. Schedule Shift & Break </h5>
                                        <p>Maximize productivity with real-time insights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-10 step-section-description">
                                <h6 class="d-lg-block d-none">Step 4</h6>
                                <h4>Shift and Department Management</h4>
                                <p>Set shift, break, and department details. By default, department,<br> training, and
                                    shift managers will be the 'Owner.'</p>
                            </div>
                            <div class="col-md-2 d-md-flex d-none justify-content-end">
                                <button class="btn skip-btn">Skip</button>
                            </div>
                        </div>
                        <div class="step-4-content">
                            <div class="main-shift-box-title">
                                <h5>Shift Details</h5>
                            </div>

                            <div class="main-shift-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Shift Name <span class="red">*</span></label>
                                            <input type="text" name="shift_name" class="form-control"
                                                placeholder="Normal Day">
                                            <span id="shift-name-error" class="form-error hide"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Shift Manager <span class="red">*</span></label>
                                            <input type="text" name="shift_manager" class="form-control"
                                                value="sample@gmail.com" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <label>Shift Timing <span class="red">*</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <div class="timepickerselectboxdefault time-dropdown shift_start_time">
                                            </div>
                                            <input value="01:00" type="time" id="start_time" name="start_time"
                                                class="form-control valid_input d-none">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <div class="timepickerselectboxenddefault time-dropdown shift_end_time">
                                            </div>
                                            <input value="01:00" type="time" id="end_time" name="end_time"
                                                class="form-control valid_input d-none">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-4">
                                        <div class="form-group">
                                            <label>Duration (hh:mm)</label>
                                            <div class="timeclocks" id="shift_over_msg">
                                                <div class="timepicker-total-time" id="shift_total_time">
                                                    <div class="ccssc d-flex">
                                                        <div class="iconsvg mr-2">
                                                            <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M25.7678 13.1378C25.7678 12.9815 25.765 12.8257 25.7595 12.6708C25.5136 5.78016 19.8501 0.269531 12.8995 0.269531C5.94889 0.269531 0.285398 5.78016 0.0395943 12.6708C0.0340649 12.8257 0.03125 12.9815 0.03125 13.1378C0.03125 20.2447 6.64142 25.5391 12.8995 25.5391C19.271 25.5391 25.7678 20.2447 25.7678 13.1378Z"
                                                                    fill="#1D3C45" />
                                                                <path
                                                                    d="M12.8995 25.0732C5.94899 25.0732 0.286504 19.5624 0.0405996 12.6719C0.03502 12.827 0.03125 12.9825 0.03125 13.1389C0.03125 20.2459 5.79256 26.0072 12.8995 26.0072C20.0065 26.0072 25.7678 20.2459 25.7678 13.1389C25.7678 12.9825 25.764 12.827 25.7585 12.6719C25.5125 19.5624 19.85 25.0732 12.8995 25.0732Z"
                                                                    fill="#1D3C45" />
                                                                <path
                                                                    d="M23.6279 12.6693C23.3834 6.95561 18.6739 2.39844 12.9 2.39844C7.12616 2.39844 2.41668 6.95561 2.17218 12.6693C2.16555 12.8241 2.17213 23.1911 12.9 23.1911C23.628 23.1911 23.6345 12.8241 23.6279 12.6693V12.6693Z"
                                                                    fill="#E4EEF9" />
                                                                <path
                                                                    d="M12.898 22.9428C7.12419 22.9428 2.41546 18.3855 2.17086 12.6719C2.16423 12.8268 2.16016 12.9823 2.16016 13.1389C2.16016 19.0692 6.96766 23.8767 12.898 23.8767C18.8284 23.8767 23.6359 19.0693 23.6359 13.1389C23.6359 12.9824 23.6318 12.8268 23.6252 12.6719C23.3806 18.3855 18.6718 22.9428 12.898 22.9428V22.9428Z"
                                                                    fill="#D5E0F2" />
                                                                <path
                                                                    d="M16.8001 9.36873C16.4941 9.06688 16.0012 9.07025 15.6994 9.37627L13.873 11.2279L14.0566 12.1095L14.9097 12.3937L16.8077 10.4694C17.1095 10.1634 17.1061 9.67058 16.8001 9.36873V9.36873Z"
                                                                    fill="#405B6C" />
                                                                <path
                                                                    d="M11.7995 11.2986L7.65745 7.60742C7.3365 7.32141 6.84454 7.34976 6.55857 7.67071C6.27261 7.99161 6.30091 8.48362 6.62186 8.76959L10.8455 12.5335L11.7256 12.2399L11.7995 11.2986Z"
                                                                    fill="#405B6C" />
                                                                <path
                                                                    d="M18.4106 18.1536C18.3222 18.1536 18.2334 18.1237 18.1605 18.0624L13.2307 13.9215C13.0661 13.7833 13.0447 13.5378 13.183 13.3733C13.3212 13.2087 13.5666 13.1873 13.7313 13.3256L18.6611 17.4665C18.8256 17.6047 18.847 17.8502 18.7088 18.0148C18.6318 18.1064 18.5216 18.1536 18.4106 18.1536Z"
                                                                    fill="#86DCFF" />
                                                                <path
                                                                    d="M10.8418 12.5337L11.5687 13.1814L12.5021 12.8642L12.4515 11.8831L11.7959 11.2988C11.3397 11.5729 10.9944 12.0121 10.8418 12.5337Z"
                                                                    fill="#2D4456" />
                                                                <path
                                                                    d="M13.8738 11.2305L13.2559 11.857V13.0868H14.2293L14.9105 12.3962C14.7233 11.8897 14.35 11.4739 13.8738 11.2305Z"
                                                                    fill="#2D4456" />
                                                                <path
                                                                    d="M14.1439 12.6716C13.9548 12.1674 13.4684 11.8086 12.8982 11.8086C12.3279 11.8086 11.8415 12.1674 11.6524 12.6716C11.5979 12.8169 11.6488 14.0018 12.8982 14.0018C14.1475 14.0018 14.1984 12.8169 14.1439 12.6716V12.6716Z"
                                                                    fill="#1D3C45" />
                                                                <path
                                                                    d="M12.9004 13.535C12.3302 13.535 11.844 13.176 11.6549 12.6719C11.6003 12.8172 11.5703 12.9745 11.5703 13.1389C11.5703 13.8734 12.1658 14.4689 12.9004 14.4689C13.635 14.4689 14.2304 13.8734 14.2304 13.1389C14.2304 12.9745 14.2004 12.8172 14.1459 12.6719C13.9569 13.176 13.4706 13.535 12.9004 13.535Z"
                                                                    fill="#1D3C45" />
                                                                <path
                                                                    d="M13.2916 4.97658V3.76882C13.2916 3.55348 13.117 3.37891 12.9016 3.37891C12.6863 3.37891 12.5117 3.55348 12.5117 3.76882V4.97658C12.5117 5.19192 12.6862 5.3665 12.9016 5.3665C13.117 5.3665 13.2916 5.19192 13.2916 4.97658Z"
                                                                    fill="#405B6C" />
                                                                <path
                                                                    d="M12.5117 21.304V22.5117C12.5117 22.7271 12.6862 22.9017 12.9016 22.9017C13.117 22.9017 13.2916 22.7271 13.2916 22.5117V21.304C13.2916 21.0886 13.117 20.9141 12.9016 20.9141C12.6863 20.9141 12.5117 21.0886 12.5117 21.304Z"
                                                                    fill="#405B6C" />
                                                                <path
                                                                    d="M22.2735 13.5298C22.4888 13.5298 22.6634 13.3553 22.6634 13.1399C22.6634 12.9246 22.4888 12.75 22.2735 12.75H21.0657C20.8504 12.75 20.6758 12.9246 20.6758 13.1399C20.6758 13.3553 20.8504 13.5298 21.0657 13.5298H22.2735Z"
                                                                    fill="#405B6C" />
                                                                <path
                                                                    d="M3.53054 12.75C3.31515 12.75 3.14062 12.9246 3.14062 13.1399C3.14062 13.3553 3.31515 13.5298 3.53054 13.5298H4.7383C4.95369 13.5298 5.12822 13.3553 5.12822 13.1399C5.12822 12.9246 4.95364 12.75 4.7383 12.75H3.53054Z"
                                                                    fill="#405B6C" />
                                                            </svg>
                                                        </div>
                                                        <div class="clock">
                                                            <b>
                                                                <span class="hours" id="flexible_break_hours">00
                                                                    <span class="space">:</span>
                                                                    <span class="min" id="flexible_break_min">00</span>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="thick-separator" />
                                <div class="inner-shift-box-title">
                                    <h6>Shift Break</h6>
                                </div>
                                <div class="flex-break-col border-bottom mb-3">
                                    <label>
                                        <input type="radio" name="break_type" value="3" checked>
                                        <span class="ml-2">No Break</span>
                                    </label>
                                    <div class="flexible_break d-none" id="no_break"></div>
                                </div>
                                <div class="flex-break-col border-bottom mb-3">
                                    <label>
                                        <input type="radio" name="break_type" value="1">
                                        <span class="ml-2"> Single Break Slot </span>
                                    </label>
                                    <div class="flexible_break d-none" id="flexible_break">
                                        <div class="timeclock" id="flexible_shift_over_msg">
                                            <div id="timepicker-wrapper" class="time_picker_break_label"></div>

                                            <div class="timepicker-total-time">
                                                <div class="head">Duration (hh:mm)</div>
                                                <div class="ccssc d-flex">
                                                    <div class="iconsvg mr-2">
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M25.7678 13.1378C25.7678 12.9815 25.765 12.8257 25.7595 12.6708C25.5136 5.78016 19.8501 0.269531 12.8995 0.269531C5.94889 0.269531 0.285398 5.78016 0.0395943 12.6708C0.0340649 12.8257 0.03125 12.9815 0.03125 13.1378C0.03125 20.2447 6.64142 25.5391 12.8995 25.5391C19.271 25.5391 25.7678 20.2447 25.7678 13.1378Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M12.8995 25.0732C5.94899 25.0732 0.286504 19.5624 0.0405996 12.6719C0.03502 12.827 0.03125 12.9825 0.03125 13.1389C0.03125 20.2459 5.79256 26.0072 12.8995 26.0072C20.0065 26.0072 25.7678 20.2459 25.7678 13.1389C25.7678 12.9825 25.764 12.827 25.7585 12.6719C25.5125 19.5624 19.85 25.0732 12.8995 25.0732Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M23.6279 12.6693C23.3834 6.95561 18.6739 2.39844 12.9 2.39844C7.12616 2.39844 2.41668 6.95561 2.17218 12.6693C2.16555 12.8241 2.17213 23.1911 12.9 23.1911C23.628 23.1911 23.6345 12.8241 23.6279 12.6693V12.6693Z"
                                                                fill="#E4EEF9"></path>
                                                            <path
                                                                d="M12.898 22.9428C7.12419 22.9428 2.41546 18.3855 2.17086 12.6719C2.16423 12.8268 2.16016 12.9823 2.16016 13.1389C2.16016 19.0692 6.96766 23.8767 12.898 23.8767C18.8284 23.8767 23.6359 19.0693 23.6359 13.1389C23.6359 12.9824 23.6318 12.8268 23.6252 12.6719C23.3806 18.3855 18.6718 22.9428 12.898 22.9428V22.9428Z"
                                                                fill="#D5E0F2"></path>
                                                            <path
                                                                d="M16.8001 9.36873C16.4941 9.06688 16.0012 9.07025 15.6994 9.37627L13.873 11.2279L14.0566 12.1095L14.9097 12.3937L16.8077 10.4694C17.1095 10.1634 17.1061 9.67058 16.8001 9.36873V9.36873Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M11.7995 11.2986L7.65745 7.60742C7.3365 7.32141 6.84454 7.34976 6.55857 7.67071C6.27261 7.99161 6.30091 8.48362 6.62186 8.76959L10.8455 12.5335L11.7256 12.2399L11.7995 11.2986Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M18.4106 18.1536C18.3222 18.1536 18.2334 18.1237 18.1605 18.0624L13.2307 13.9215C13.0661 13.7833 13.0447 13.5378 13.183 13.3733C13.3212 13.2087 13.5666 13.1873 13.7313 13.3256L18.6611 17.4665C18.8256 17.6047 18.847 17.8502 18.7088 18.0148C18.6318 18.1064 18.5216 18.1536 18.4106 18.1536Z"
                                                                fill="#86DCFF"></path>
                                                            <path
                                                                d="M10.8418 12.5337L11.5687 13.1814L12.5021 12.8642L12.4515 11.8831L11.7959 11.2988C11.3397 11.5729 10.9944 12.0121 10.8418 12.5337Z"
                                                                fill="#2D4456"></path>
                                                            <path
                                                                d="M13.8738 11.2305L13.2559 11.857V13.0868H14.2293L14.9105 12.3962C14.7233 11.8897 14.35 11.4739 13.8738 11.2305Z"
                                                                fill="#2D4456"></path>
                                                            <path
                                                                d="M14.1439 12.6716C13.9548 12.1674 13.4684 11.8086 12.8982 11.8086C12.3279 11.8086 11.8415 12.1674 11.6524 12.6716C11.5979 12.8169 11.6488 14.0018 12.8982 14.0018C14.1475 14.0018 14.1984 12.8169 14.1439 12.6716V12.6716Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M12.9004 13.535C12.3302 13.535 11.844 13.176 11.6549 12.6719C11.6003 12.8172 11.5703 12.9745 11.5703 13.1389C11.5703 13.8734 12.1658 14.4689 12.9004 14.4689C13.635 14.4689 14.2304 13.8734 14.2304 13.1389C14.2304 12.9745 14.2004 12.8172 14.1459 12.6719C13.9569 13.176 13.4706 13.535 12.9004 13.535Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M13.2916 4.97658V3.76882C13.2916 3.55348 13.117 3.37891 12.9016 3.37891C12.6863 3.37891 12.5117 3.55348 12.5117 3.76882V4.97658C12.5117 5.19192 12.6862 5.3665 12.9016 5.3665C13.117 5.3665 13.2916 5.19192 13.2916 4.97658Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M12.5117 21.304V22.5117C12.5117 22.7271 12.6862 22.9017 12.9016 22.9017C13.117 22.9017 13.2916 22.7271 13.2916 22.5117V21.304C13.2916 21.0886 13.117 20.9141 12.9016 20.9141C12.6863 20.9141 12.5117 21.0886 12.5117 21.304Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M22.2735 13.5298C22.4888 13.5298 22.6634 13.3553 22.6634 13.1399C22.6634 12.9246 22.4888 12.75 22.2735 12.75H21.0657C20.8504 12.75 20.6758 12.9246 20.6758 13.1399C20.6758 13.3553 20.8504 13.5298 21.0657 13.5298H22.2735Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M3.53054 12.75C3.31515 12.75 3.14062 12.9246 3.14062 13.1399C3.14062 13.3553 3.31515 13.5298 3.53054 13.5298H4.7383C4.95369 13.5298 5.12822 13.3553 5.12822 13.1399C5.12822 12.9246 4.95364 12.75 4.7383 12.75H3.53054Z"
                                                                fill="#405B6C"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="clock">
                                                        <span class="hours" id="flexible_break_hours">00</span>
                                                        <span class="space">:</span>
                                                        <span class="min" id="flexible_break_min">15</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-break-col">
                                    <label>
                                        <input type="radio" name="break_type" value="2">
                                        <span class="ml-2">Enforced Break</span>
                                    </label>
                                    <div class="flexible_break d-none" id="enforced_break">
                                        <div class="timeclock mt-2" id="total_enforced_break_time">
                                            <div class="timepicker-total-time ml-0 mt-4">
                                                <div class="head">Duration (hh:mm)</div>
                                                <div class="ccssc d-flex">
                                                    <div class="iconsvg mr-2">
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M25.7678 13.1378C25.7678 12.9815 25.765 12.8257 25.7595 12.6708C25.5136 5.78016 19.8501 0.269531 12.8995 0.269531C5.94889 0.269531 0.285398 5.78016 0.0395943 12.6708C0.0340649 12.8257 0.03125 12.9815 0.03125 13.1378C0.03125 20.2447 6.64142 25.5391 12.8995 25.5391C19.271 25.5391 25.7678 20.2447 25.7678 13.1378Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M12.8995 25.0732C5.94899 25.0732 0.286504 19.5624 0.0405996 12.6719C0.03502 12.827 0.03125 12.9825 0.03125 13.1389C0.03125 20.2459 5.79256 26.0072 12.8995 26.0072C20.0065 26.0072 25.7678 20.2459 25.7678 13.1389C25.7678 12.9825 25.764 12.827 25.7585 12.6719C25.5125 19.5624 19.85 25.0732 12.8995 25.0732Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M23.6279 12.6693C23.3834 6.95561 18.6739 2.39844 12.9 2.39844C7.12616 2.39844 2.41668 6.95561 2.17218 12.6693C2.16555 12.8241 2.17213 23.1911 12.9 23.1911C23.628 23.1911 23.6345 12.8241 23.6279 12.6693V12.6693Z"
                                                                fill="#E4EEF9"></path>
                                                            <path
                                                                d="M12.898 22.9428C7.12419 22.9428 2.41546 18.3855 2.17086 12.6719C2.16423 12.8268 2.16016 12.9823 2.16016 13.1389C2.16016 19.0692 6.96766 23.8767 12.898 23.8767C18.8284 23.8767 23.6359 19.0693 23.6359 13.1389C23.6359 12.9824 23.6318 12.8268 23.6252 12.6719C23.3806 18.3855 18.6718 22.9428 12.898 22.9428V22.9428Z"
                                                                fill="#D5E0F2"></path>
                                                            <path
                                                                d="M16.8001 9.36873C16.4941 9.06688 16.0012 9.07025 15.6994 9.37627L13.873 11.2279L14.0566 12.1095L14.9097 12.3937L16.8077 10.4694C17.1095 10.1634 17.1061 9.67058 16.8001 9.36873V9.36873Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M11.7995 11.2986L7.65745 7.60742C7.3365 7.32141 6.84454 7.34976 6.55857 7.67071C6.27261 7.99161 6.30091 8.48362 6.62186 8.76959L10.8455 12.5335L11.7256 12.2399L11.7995 11.2986Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M18.4106 18.1536C18.3222 18.1536 18.2334 18.1237 18.1605 18.0624L13.2307 13.9215C13.0661 13.7833 13.0447 13.5378 13.183 13.3733C13.3212 13.2087 13.5666 13.1873 13.7313 13.3256L18.6611 17.4665C18.8256 17.6047 18.847 17.8502 18.7088 18.0148C18.6318 18.1064 18.5216 18.1536 18.4106 18.1536Z"
                                                                fill="#86DCFF"></path>
                                                            <path
                                                                d="M10.8418 12.5337L11.5687 13.1814L12.5021 12.8642L12.4515 11.8831L11.7959 11.2988C11.3397 11.5729 10.9944 12.0121 10.8418 12.5337Z"
                                                                fill="#2D4456"></path>
                                                            <path
                                                                d="M13.8738 11.2305L13.2559 11.857V13.0868H14.2293L14.9105 12.3962C14.7233 11.8897 14.35 11.4739 13.8738 11.2305Z"
                                                                fill="#2D4456"></path>
                                                            <path
                                                                d="M14.1439 12.6716C13.9548 12.1674 13.4684 11.8086 12.8982 11.8086C12.3279 11.8086 11.8415 12.1674 11.6524 12.6716C11.5979 12.8169 11.6488 14.0018 12.8982 14.0018C14.1475 14.0018 14.1984 12.8169 14.1439 12.6716V12.6716Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M12.9004 13.535C12.3302 13.535 11.844 13.176 11.6549 12.6719C11.6003 12.8172 11.5703 12.9745 11.5703 13.1389C11.5703 13.8734 12.1658 14.4689 12.9004 14.4689C13.635 14.4689 14.2304 13.8734 14.2304 13.1389C14.2304 12.9745 14.2004 12.8172 14.1459 12.6719C13.9569 13.176 13.4706 13.535 12.9004 13.535Z"
                                                                fill="#1D3C45"></path>
                                                            <path
                                                                d="M13.2916 4.97658V3.76882C13.2916 3.55348 13.117 3.37891 12.9016 3.37891C12.6863 3.37891 12.5117 3.55348 12.5117 3.76882V4.97658C12.5117 5.19192 12.6862 5.3665 12.9016 5.3665C13.117 5.3665 13.2916 5.19192 13.2916 4.97658Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M12.5117 21.304V22.5117C12.5117 22.7271 12.6862 22.9017 12.9016 22.9017C13.117 22.9017 13.2916 22.7271 13.2916 22.5117V21.304C13.2916 21.0886 13.117 20.9141 12.9016 20.9141C12.6863 20.9141 12.5117 21.0886 12.5117 21.304Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M22.2735 13.5298C22.4888 13.5298 22.6634 13.3553 22.6634 13.1399C22.6634 12.9246 22.4888 12.75 22.2735 12.75H21.0657C20.8504 12.75 20.6758 12.9246 20.6758 13.1399C20.6758 13.3553 20.8504 13.5298 21.0657 13.5298H22.2735Z"
                                                                fill="#405B6C"></path>
                                                            <path
                                                                d="M3.53054 12.75C3.31515 12.75 3.14062 12.9246 3.14062 13.1399C3.14062 13.3553 3.31515 13.5298 3.53054 13.5298H4.7383C4.95369 13.5298 5.12822 13.3553 5.12822 13.1399C5.12822 12.9246 4.95364 12.75 4.7383 12.75H3.53054Z"
                                                                fill="#405B6C"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="clock">
                                                        <span class="hours" id="enforced_break_hours">00</span>
                                                        <span class="space">:</span>
                                                        <span class="min" id="enforced_break_min">15</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="addBreakRow mt-4">
                                            <div class="blockRow">
                                                <div class="row">
                                                    <div class="col-1 mobile-1">
                                                        <div class="form-group">
                                                            <label class="label_class">Sr#</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md col-6 date-format">
                                                        <div class="form-group">
                                                            <label class="label_class">From</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md col-6 date-format">
                                                        <div class="form-group">
                                                            <label class="label_class">To</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-6 time-duration">
                                                        <div class="form-group text-center">
                                                            <label class="label_class">Time Duration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl col-md-1 col-6 delete-col">
                                                        <div class="form-group">
                                                            <label class="label_class">Delete</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row break-row break-row-1" data-break-id="1"
                                                    id="first-row-break" data-time-total="00:00:00">
                                                    <div class="col-1 mobile-1">
                                                        <div class="form-group">
                                                            <div class="sr_no">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md col-6 date-format">
                                                        <div class="form-group">
                                                            <label class="label_class mobile_label">From</label>
                                                            <div
                                                                class="timepicker-selectbox timepicker-selectbox-crecentech time-dropdown break_start_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md col-6 date-format">
                                                        <div class="form-group">
                                                            <label class="label_class mobile_label">To</label>
                                                            <div
                                                                class="timepicker-selectbox timepicker-selectbox-crecentech time-dropdown break_end_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-6 time-duration">
                                                        <div class="form-group">
                                                            <label class="label_class mobile_label">Time
                                                                Duration</label>
                                                            <div
                                                                class="time_count d-flex justify-content-sm-center align-items-center">
                                                                <span class="hours" id="flexible_break_hours">00</span>
                                                                <span class="space">:</span>
                                                                <span class="min" id="flexible_break_min">15</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl col-md-1 col-6 delete-col">
                                                        <div class="form-group">
                                                            <span class="last_action"
                                                                style="padding-left: 15px;">--</span>
                                                            <label class="label_class mobile_label">Delete</label>
                                                            <button type="button" data-delete="1" class="btn del-row">
                                                                <span>
                                                                    <img src="{{ asset('public/assets/img/delete.png') }}"
                                                                        alt="Delete">
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="break_btn add_new_row mt-4">
                                                <i class="fas fa-plus"></i>
                                                <span>Add More</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-shift-box-title">
                                <h5>Department</h5>
                            </div>

                            <div class="main-shift-box">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Department Name <span class="red">*</span></label>
                                            <input type="text" name="dept_name" class="form-control"
                                                placeholder="Department Name">
                                            <span id="dept-name-error" class="form-error hide"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Department Manager <span class="red">*</span></label>
                                            <input type="text" name="dept_manager" class="form-control"
                                                value="sample@gmail.com" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Training Manager <span class="red">*</span></label>
                                            <input type="text" name="training_manager" class="form-control"
                                                value="sample@gmail.com" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex align-items-center justify-content-end">
                            <button class="btn prev-btn">Previous</button>
                            <button class="btn next-btn">Next</button>
                        </div>
                    </div>

                    <div class="col-lg-4 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/step-1-section-sidebar.png') }}" alt="step-4-section-sidebar">

                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-company.svg') }}" alt="Company">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Company </h5>
                                <p>Maximize productivity with real-time .</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Themes </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}" alt="Tracking">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Tracking Settings</h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}" alt="Scheudle">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Schedule Shift & Break </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>5. Invite Members</h5>
                                <p>Maximize productivity with real-time.</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet active"></span>
                            <span class="bullet"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 4 Section -->

        <!-- Step 5 Section -->
        <section id="step-5-section" class="step-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 main-content">
                        <div class="main-logo">
                            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                        </div>
                        <div class="mobile-step d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 step-no">
                                    <h6>Step 5</h6>
                                </div>
                                <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                    <h6>5 of 5</h6>
                                </div>
                            </div>
                            <div class="img_side">
                                <div class="d-flex icon_box">
                                    <div>
                                        <div class="icon icon-sm icon-secondary">
                                            <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5>5. Invite Members</h5>
                                        <p>Maximize productivity with real-time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-10 step-section-description">
                                <h6 class="d-lg-block d-none">Step 5</h6>
                                <h4>Invite Members</h4>
                                <p>Send invitations to users to join the company.</p>
                            </div>
                            <div class="col-md-2 d-md-flex d-none justify-content-end">
                                <button class="btn skip-btn">Skip</button>
                            </div>
                        </div>
                        <div class="step-5-content">
                            <div class="step-5-box-title">
                                <h6>Company Info</h6>
                            </div>
                            <div class="invite-box">
                                <div class="addMemberRow">
                                    <div class="blockRow">

                                    </div>
                                    <button type="button" class="member_btn add_new_member_row">
                                        <i class="fas fa-plus"></i>
                                        <span>Add Member</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex align-items-center justify-content-end">
                            <button class="btn prev-btn">Previous</button>
                            <button class="btn next-btn">Preview</button>
                        </div>
                    </div>

                    <div class="col-lg-4 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/step-1-section-sidebar.png') }}" alt="step-5-section-sidebar">

                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-company.svg') }}" alt="Company">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Company </h5>
                                <p>Maximize productivity with real-time .</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-theme.svg') }}" alt="Theme">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Themes </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-tracking.svg') }}" alt="Tracking">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Tracking Settings</h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-scheudle.svg') }}" alt="Scheudle">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Schedule Shift & Break </h5>
                                <p>Maximize productivity with real-time insights.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/sidebar-invite.svg') }}" alt="Invite">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>5. Invite Members</h5>
                                <p>Maximize productivity with real-time.</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet"></span>
                            <span class="bullet active"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 5 Section -->

        <!-- Preview Section -->
        <section id="preview-section" class="step-section">
            <div class="container">
                <div class="main-logo text-center">
                    <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                </div>
                <div class="preview-body">
                    <div class="row align-items-center sec-row">
                        <div class="col-md-11 col-10 sec-desc">
                            <h6>1.Company </h6>
                            <p>Add your company's latest information below.</p>
                        </div>
                        <div class="col-md-1 col-2">
                            <button class="edit-btn" sec-id="step-1-section">
                                <img src="{{ asset('public/assets/img/edit-btn.png') }}" alt="Logo" />
                            </button>
                        </div>
                    </div>
                    <div class="step-html step-1-html">

                    </div>
                    <div class="row align-items-center sec-row">
                        <div class="col-md-11 col-10 sec-desc">
                            <h6>2.Choose Theme</h6>
                            <p>Select any color template of your choice.</p>
                        </div>
                        <div class="col-md-1 col-2">
                            <button class="edit-btn" sec-id="step-2-section">
                                <img src="{{ asset('public/assets/img/edit-btn.png') }}" alt="Logo" />
                            </button>
                        </div>
                    </div>
                    <div class="step-html step-2-html">

                    </div>
                    <div class="row align-items-center sec-row">
                        <div class="col-md-11 col-10 sec-desc">
                            <h6>3.Tracking Settings</h6>
                        </div>
                        <div class="col-md-1 col-2">
                            <button class="edit-btn" sec-id="step-3-section">
                                <img src="{{ asset('public/assets/img/edit-btn.png') }}" alt="Logo" />
                            </button>
                        </div>
                    </div>
                    <div class="step-html step-3-html">

                    </div>
                    <div class="row align-items-center sec-row">
                        <div class="col-md-11 col-10 sec-desc">
                            <h6>4.Shift and Department Management</h6>
                            <p>Set shift, break, and department details. By default, department, training, and shift
                                managers will be the 'Owner.'</p>
                        </div>
                        <div class="col-md-1 col-2">
                            <button class="edit-btn" sec-id="step-4-section">
                                <img src="{{ asset('public/assets/img/edit-btn.png') }}" alt="Logo" />
                            </button>
                        </div>
                    </div>
                    <div class="step-html step-4-html">

                    </div>
                    <div class="row align-items-center step-5-row sec-row">
                        <div class="col-md-11 col-10 sec-desc">
                            <h6>5. Invite Members</h6>
                            <p>Send invitations to users to join the company.</p>
                        </div>
                        <div class="col-md-1 col-2">
                            <button class="edit-btn" sec-id="step-5-section">
                                <img src="{{ asset('public/assets/img/edit-btn.png') }}" alt="Logo" />
                            </button>
                        </div>
                    </div>
                    <div class="step-html step-5-html">

                    </div>
                    <div class="btns d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn submit-btn">Finish</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Preview Section -->

    </form>
</section>

<!-- Main Section -->

@endsection

@section('js')
<script src="{{ asset('public/assets/js/intlTelInput-jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.flagstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-timezone.min.js"></script>
<script src="{{ asset('public/assets/js/bootstrap4-clockpicker.min.js') }}"></script>
<script src="{{ asset('public/assets/js/tui-time-picker.js') }}"></script>
<script>
    $(document).ready(function () {
        var refileTag = $("#ReuplodedInput"),
            fileTag = $("#UploadInput")
        preview = $("#profileImage");

        fileTag.change(function () {
            changeImage(this);
        });

        refileTag.change(function () {
            changeImage(this);
        });

        function changeImage(input) {
            var reader;

            if (input.files && input.files[0]) {
                reader = new FileReader();

                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>
<script>
    function isPhoneNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<script>
    $('.cre-theme').click(function () {
        var theme_color = $(this).data('theme-name');
        $(this).find('input[type=radio]').prop("checked", true);
        $('.cre-theme').removeClass('active-theme-selection');
        $(this).addClass('active-theme-selection');
        var new_img_path = '{{ asset('public/assets/img/themes')}}/desktop/' + theme_color + '.webp'; // Modify its path here
        var new_img_path_web = '{{ asset('public/assets/img/themes')}}/web/' + theme_color + '.webp'; // Modify its path here
        $('.web_preview img').attr('src', new_img_path_web);
        $('.desktop_preview img').attr('src', new_img_path);
        var theme = $('input[name="theme_name"]').val();
    });
</script>
<script>

    $(document).on('click', '.add_new_member_row', function () {

        if ($('.member-row').length == 0) {
            var headRow = `
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="form-group">
                            <label>Role <span>*</span></label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="form-group">
                            <label>Shift <span>*</span></label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="form-group">
                            <label>Department <span>*</span></label>
                        </div>
                    </div>
                    <div class="col-md-1 delete-col">
                        <div class="form-group text-center">
                            <label>Delete</label>
                        </div>
                    </div>
                </div>
            `;
            $('.addMemberRow .blockRow').append(headRow);
        }
        var instance = $('.member-row').length;
        instance++;
        var shift_name = $('input[name="shift_name"]').val();
        var dept_name = $('input[name="dept_name"]').val();
            var html = '\n<div class="row justify-content-between member-row member-row-' + instance + '" data-member-id="' + instance + '" id="row-member[' + instance + ']">\n' +
                '<div class="col-md-4 email">\n' +
                '<div class="form-group">\n' +
                '<button type="button" data-delete="' + instance + '" class="btn d-md-none ml-auto del-member-row">\n' +
                '<span>\n' +
                '<img src="{{ asset('public/assets/img/delete.png') }}" alt="Delete">\n' +
                    '</span>\n' +
                    '</button>\n' +
                    '<label class="mobile_label">Email <span>*</span></label>\n' +
                    '<input type="email" name="member[' + (instance - 1) + '][email]" class="form-control member_email" placeholder="sample@gmail.com">\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-xl-2 col-md-3 role">\n' +
                    '<div class="form-group">\n' +
                    '<label class="mobile_label">Role <span>*</span></label>\n' +
                    '<select class="form-control member_role member_role[' + (instance - 1) + ']" name="member[' + (instance - 1) + '][role]">\n' +
                    '<option hidden selected value="">Select Role</option>\n' +
                    '<option value="admin">Admin</option>\n' +
                    '<option value="manager">Manager</option>\n' +
                    '<option value="user">User</option>\n' +
                    '</select>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-xl-2 col-md-3 shift">\n' +
                    '<div class="form-group">\n' +
                    '<label class="mobile_label">Shift <span>*</span></label>\n' +
                    '<select class="form-control member_shift" name="member[' + (instance - 1) + '][shift]" id="member_shift">\n' +
                    '<option value="">Select Shift</option>\n' +
                    '<option value="' + shift_name + '">' + shift_name + '</option>\n' +
                    '</select>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-xl-2 col-md-3 shift">\n' +
                    '<div class="form-group">\n' +
                    '<label class="mobile_label">Department <span>*</span></label>\n' +
                    '<select class="form-control member_shift" name="member[' + (instance - 1) + '][dept]" id="member_dept">\n' +
                    '<option value="">Select Department</option>\n' +
                    '<option value="' + dept_name + '">' + dept_name + '</option>\n' +
                    '</select>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-md-1 col-3 offset-md-0 offset-9 d-md-block d-none delete-col">\n' +
                    '<div class="form-group text-center">\n' +
                    '<button type="button" data-delete="' + instance + '" class="btn del-member-row">\n' +
                    '<span>\n' +
                    '<img src="{{ asset('public/assets/img/delete.png') }}" alt="Delete">\n' +
                        '</span>\n' +
                        '</button>\n' +
                        '</div>\n' +
                        '</div>\n' +
                        '</div>\n';
            $('.addMemberRow .blockRow').append(html);
    });
</script>
<script src="{{ asset('public/assets/js/company-setup.js') }}"></script>
@endsection
