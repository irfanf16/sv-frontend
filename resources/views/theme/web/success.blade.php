@extends('theme.layouts.form_master')

@section('page-class', 'company-setup')

@section('css')
@endsection


@section('content')
    {{-- @php

//  dd(request()->all(),$data);
@endphp --}}
    <section class="company-register-section">
        <form>
            <section class="email_addres pricing-plan active" id="successfully-registered">
                <div class="container-fluid">
                    <div class="row gap">
                        <div class="col-lg-7">
                            <div class="logo_side" style="width: 95%">
                                <div class="logo_staff">
                                    <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo"
                                        class="global-logo" />
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
                                                    <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                                </div>
                                            </div>
                                            <div class="pl-4">
                                                <h5>5. Login to StaffViz</h5>
                                                <p>Login to your account to access your StaffViz company.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-group-img">
                                    <video class="w-100 global-video" muted autoplay>
                                        <source src="{{ asset('public/assets/videos/change-plan.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <div class="global-text text-center">
                                        <h2 style="margin: 10px 0 20px; font-size: 44px;">Cheers!</h2>
                                        <h3 style="font-size:34px !important;padding:0;margin:0;">You are all set to access
                                            your account</h3>
                                        <br>
                                        <p style="font-size: 18px;padding: 0 150px;">Press the login button, or you'll be
                                            automatically redirected to the login page shortly.</p>
                                        <a href="{{ getenv('WEB_LOGIN') }}" class="Verification-email">Login</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 img_side">
                            <div class="text-center figr">
                                <img src="{{ asset('public/assets/img/Figure.png') }}" alt="Figure">
                            </div>
                            <div class="d-flex icon_box boxes">
                                <div>
                                    <div class="icon icon-sm icon-secondary">
                                        <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5>1. Password Setup</h5>
                                    <p>Set your password. Keep it unique and complex.</p>
                                </div>
                                <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                    alt="Sidebar">
                            </div>
                            <div class="d-flex icon_box boxes">
                                <div>
                                    <div class="icon icon-sm icon-secondary">
                                        <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5>2. Pricing Plan</h5>
                                    <p>Review your customized pricing plan.</p>
                                </div>
                                <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                    alt="Sidebar">
                            </div>
                            <div class="d-flex icon_box boxes">
                                <div>
                                    <div class="icon icon-sm icon-secondary">
                                        <img src="{{ asset('public/assets/img/money.png') }}" alt="money">
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5>3. Terms and Conditions</h5>
                                    <p>Check out our policy and conditions to avail our services.</p>
                                </div>
                                <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                    alt="Sidebar">
                            </div>
                            <div class="d-flex icon_box boxes">
                                <div>
                                    <div class="icon icon-sm icon-secondary">
                                        <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5>4. Payment Details</h5>
                                    <p>Fill out your payment details.</p>
                                </div>
                                <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                    alt="Sidebar">
                            </div>
                            <div class="d-flex icon_box">
                                <div>
                                    <div class="icon icon-sm icon-secondary">
                                        <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5>5. Setup Successful </h5>
                                    <p>You are all set to access your account</p>
                                </div>
                            </div>

                            <div class="bullets text-center">
                                <span class="bullet"></span>
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
        </form>
    </section>

@section('header_js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var META_PIXEL='{{route('meta.pixel')}}';
            var retrievedData = JSON.parse(localStorage.getItem("data"));
            console.log(retrievedData);
            var user_email = retrievedData.email;
            var first_name = retrievedData.first_name;
            var last_name = retrievedData.last_name;
            var company_name = retrievedData.company_name;
            var plan_name = retrievedData.plan_name;
            var payment_type = retrievedData.payment_type;
            var plan_price = retrievedData.plan_price;


            //track
            window.dataLayer.push({
                'event': 'Lead',
                'user_email': user_email,
                'first_name': first_name,
                'last_name': last_name,
                'company_name': company_name,
                'plan_name': plan_name,
                'payment_type': payment_type,
                'plan_price': plan_price,
            });
            console.log({
                'event': 'Lead',
                'user_email': user_email,
                'first_name': first_name,
                'last_name': last_name,
                'company_name': company_name,
                'plan_name': plan_name,
                'payment_type': payment_type,
                'plan_price': plan_price,
            })

            $.ajax({
                            url: META_PIXEL,
                            method: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                            },
                            data: { // Corrected to `data` for AJAX
                                'event': 'Lead',
                'user_email': user_email,
                'first_name': first_name,
                'last_name': last_name,
                'company_name': company_name,
                'plan_name': plan_name,
                'payment_type': payment_type,
                'plan_price': plan_price,
                            },
                            success(response) {
                                if (response.success) {
                                    console.log('Meta API response:', JSON.stringify(response.response, null, 4));
                                } else {
                                    console.error('API Error:', JSON.stringify(response.error || response.response, null, 4));
                                }
                            },
                            error(xhr, status, error) {
                                console.error('AJAX Error:', error, xhr.responseText);
                            }
                        });

            trackdesk('task-tracker', 'externalCid', {
                externalCid: user_email,
                revenueOriginId: '81d1bf2b-92ca-4647-b725-500c8424c24a'
            });

            trackdesk('task-tracker', 'conversion', {
                conversionType: 'lead',
            });
            trackdesk('task-tracker', 'conversion', {
                conversionType: 'sale',
            });

            var stripe_customer_id = '{{ isset($data['stripe_customer_id']) ? $data['stripe_customer_id'] : '' }}';
            console.log("Stripe Id:::", stripe_customer_id)
            fpr("referral", {
                uid: stripe_customer_id
            })

            var email = user_email;
            var uid = stripe_customer_id;
            if (window.affiliateManager){
                window.affiliateManager.trackLead({email: email,uid: uid});
            } else {
                _affiliateManager=window._affiliateManager||[];window._affiliateManager=_affiliateManager;
                _affiliateManager.push(["event","signup"]);
                _affiliateManager.push(["email",email]);
                _affiliateManager.push(["uid",uid]);
            }
            
            localStorage.removeItem("data");
            window.setTimeout(function() {
                location.href = '{{ getenv('WEB_LOGIN') }}';
                console.log('redirect line here')
            }, 5000);
        });
    </script>

@endsection
@endsection
