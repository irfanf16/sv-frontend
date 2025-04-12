@extends('theme.layouts.form_master')

@section("page-class", "login")

@section('content')

<section class="login_section" id="login-section">  
    <div class="container" id="login_address">        
        <div class="row gap">
            <div class="col-md-6">
                <div class=logo_login>
                   <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                </div>               
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="right_login">
                    <h2>Welcome back! </h2>
                    <p>Log in to access your <span>StaffViz</span> account</p>
                    <form class="form_log_in">
                        <div class="mb-3">
                          <label class="form-label">Email <span>*</span></label>
                          <input type="email" placeholder="John@gmail.com" class="form-control" name="email" id="email">
                          <span id="email-error" class="form-error hide"></span>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password <span>*</span></label>
                          <div class="position-relative">
                          <input type="password" placeholder="Enter your Password" class="form-control" name="password" id="password">
                          <button class="togglePassword">
                            <img class="eye" src="{{ asset('public/assets/img/eye.png') }}" alt="Eye">
                          </button>
                          </div>
                          <span id="password-error" class="form-error hide"></span>
                        </div>
                        <div class="chek_flex">
                            <div class="form-check">
                                <input type="checkbox" name="isRemember" class="form-check-input" id="rememeber">
                                <label class="form-check-label" for="rememeber">Remember me</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="isKeepLogin" class="form-check-input" id="keepLogin">
                                <label class="form-check-label" for="keepLogin">Keep me login</label>
                            </div>
                        </div>
                        <button type="submit" class="btn_login w-100">Log In</button>
                        <a href="#" class="blur_login">Forget Password?</a>
                      </form>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="register_case">
                    <span>Don't have an account?</span>
                    <a class="reg_btn" href="">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection

@section('js')
    <script src="{{ asset('public/assets/js/login.js') }}"></script>
@endsection