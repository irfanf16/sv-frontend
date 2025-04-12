@extends('theme.layouts.form_master')

@section("page-class", "company-setup")

@section('css')
@endsection

@section('content')

<section class="company-register-section">
    <form>

        {{-- user detail section --}}
        <section class="email_addres  personal_details_section" id="personal-details">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class=logo_staff>
                                <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                            </div>
                            <div class="mobile-step d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 step-no">
                                        <h6>Step 1</h6>
                                    </div>
                                    <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                        <h6>2 of 5</h6>
                                    </div>
                                </div>
                                <div class="img_side">
                                    <div class="d-flex icon_box">
                                        <div>
                                            <div class="icon icon-sm icon-secondary">
                                                <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h5>1. Password Setup</h5>
                                            <p>Set your password. Keep it unique and complex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 1</span>
                            @if($formation_type == 'direct')
                            <h5>Password Setup</h5>
                                <p>Set your password. Keep it unique and complex.</p>
                            @else
                            <h5>Company Credentials</h5>
                            <p>Add company name and set your password</p>
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Email<span>*</span></label>
                                <div class="position-relative">
                                    <input type="email" name="email" id="readEmail" value="{{$email}}" class="form-control correct-email" readonly>
                                    <img class="validation-symbol validation-symbol-correct" src="{{ asset('public/assets/img/green-tick.png') }}"
                                        alt="Logo" />
                                    <span id="readEmail-error" class="form-error hide"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Name<span>*</span></label>
                                <input type="text" id="company-name" value="{{$title}}" name="company-name"
                                    placeholder="CrecenTech Systems" class="form-control" @if($formation_type == 'direct') readonly @endif>
                                <span id="company-name-error" class="form-error hide"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password<span>*</span></label>
                                {{-- <input type="password" name="password" id="password" placeholder="Enter your password" --}}
                                    <div class="position-relative">
                                        <input type="password" placeholder="Enter your Password" class="form-control " name="password" id="password">
                                        <button type="button" class="togglePassword password">
                                            <i toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon password_show"></i>
                                        </button>
                                    </div>
                                <span id="password-error" class="form-error hide"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password<span>*</span></label>
                                {{-- <input type="password" id="confirmPassword" placeholder="Confirm Password"
                                    class="form-control"> --}}
                                    <div class="position-relative">
                                        <input type="password" placeholder="Enter your Password" class="form-control" name="confirmPassword" id="confirmPassword">
                                        <button type="button" class="togglePassword password">
                                            <i toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon password_showC"></i>
                                        </button>
                                    </div>
                                <span id="confirmPassword-error" class="form-error hide"></span>
                            </div>
                            <div class="ctr_btn my-md-5 my-4">
                                {{-- <button class="email_btn prev-btn">Previous</button> --}}
                                <button class="email_btn next_btn">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/Figure.png') }}" alt="Step 1">

                        </div>

                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">

                                 @if($formation_type == 'direct')
                                 <h5>1. Password Setup</h5>
                                 <p>Set your password. Keep it unique and complex.</p>
                                @else
                                <h5>1. Company Credentials</h5>
                                <p>Add company name and set your password</p>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                @if($formation_type == 'direct')
                                <h5>2. Pricing Plan</h5>
                                <p>Review your customized pricing plan.</p>
                                @else
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
                                @endif

                            </div>
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
                        </div>
                        <div class="d-flex icon_box boxes payment_detail_side_menu  @if($hide_card_details) d-none @endif">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Fill out your payment details.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="countChange"> @if($hide_card_details) 4. @else 5. @endif Setup Successful </h5>
                                <p>You are all set to access your account</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
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
        {{-- price listing section --}}
        <section class="email_addres pricing-plan pricing_plan_section" id="pricing-plan">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class=logo_staff>
                                <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                            </div>
                            <div class="mobile-step d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 step-no">
                                        <h6>Step 2</h6>
                                    </div>
                                    <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                        <h6>2 of 5</h6>
                                    </div>
                                </div>
                                <div class="img_side">
                                    <div class="d-flex icon_box">
                                        <div>
                                            <div class="icon icon-sm icon-secondary">
                                                <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h5>2. Pricing Plan</h5>
                                            <p>Review your customized pricing plan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 2</span>
                            <h2>Pricing Plan</h2>
                            <p>Review your customized pricing plan.</p>

                            <div id="selected_plan_detail"></div>

                        </div>
                    </div>
                    <div class="col-md-5 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/pricing-plan-top-img.png') }}" alt="pricing-plan-top-img">

                        </div>

                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">


                                @if($formation_type == 'direct')
                                 <h5>1. Password Setup</h5>
                                 <p>Set your password. Keep it unique and complex.</p>
                                @else
                                <h5>1. Company Credentials</h5>
                                <p>Add company name and set your password</p>
                                @endif
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                @if($formation_type == 'direct')
                                <h5>2. Pricing Plan</h5>
                                <p>Review your customized pricing plan.</p>
                                @else
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
                                @endif

                            </div>
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
                        </div>
                        <div class="d-flex icon_box boxes payment_detail_side_menu  @if($hide_card_details) d-none @endif">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Fill out your payment details.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="countChange"> @if($hide_card_details) 4. @else 5. @endif Setup Successful </h5>
                                <p>You are all set to access your account</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
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
        {{-- terms & condition --}}
        <section class="email_addres terms_conditions_section" id="terms-conditions">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class=logo_staff>
                                <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                            </div>
                            <div class="mobile-step d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 step-no">
                                        <h6>Step 3</h6>
                                    </div>
                                    <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                        <h6>3 of 5</h6>
                                    </div>
                                </div>
                                <div class="img_side">
                                    <div class="d-flex icon_box">
                                        <div>
                                            <div class="icon icon-sm icon-secondary">
                                                <img src="{{ asset('public/assets/img/money.png') }}" alt="money">
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h5>3. Terms and Conditions</h5>
                                            <p>Check out our policy and conditions to avail our services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 3</span>
                            <h2>Terms and Conditions</h2>
                            <p>Check out our policy and conditions to avail our services.</p>
                            <div class="term_text">
                                <p style="margin-bottom:10px;">By accessing or using StaffViz, you agree to be bound by these Terms and Conditions ("Terms"). If you disagree with any part of these terms, you must not proceed further.</p>
<p style="margin-bottom:10px;"><b>Billing and Payment</b></p>
<p style="margin-bottom:10px;">By subscribing to a paid plan, you agree to our billing terms and acknowledge that prices may be subject to change. All payments will be billed on a recurring basis and processed in U.S. dollars.</p>
<p style="margin-bottom:10px;">StaffViz accepts various payment methods, each subject to specific rules and terms provided during the transaction process. Moreover, we reserve the right to add or remove payment methods and will notify you in case of any changes.</p>
<p style="margin-bottom:10px;"><b>User Responsibilities</b></p>
<p style="margin-bottom:10px;">Users are responsible for the accuracy and legality of their transactions, including verifying customer identities and managing transaction receipts, refunds, chargebacks, and other related activities. Users must ensure compliance of their goods and services with all applicable laws and regulations.</p>
<p style="margin-bottom:10px;"><b>Security and Compliance</b></p>
<p style="margin-bottom:10px;">StaffViz implements advanced security protocols to protect user data. While we strive to maintain a secure environment, users are encouraged to exercise caution. Compliance with applicable financial regulations is strictly enforced. Any breach may result in immediate suspension or termination of services.</p>
<p style="margin-bottom:10px;"><b>Subscription and Fees</b></p>
<p style="margin-bottom:10px;">Subscriptions are billed either monthly, quarterly or annually, based on the user’s selection during the subscription setup. Fees must be paid in advance, and all billing information must be accurate and complete. StaffViz reserves the right to change fees or payment policies. Users will be notified before any change.</p>
<p style="margin-bottom:10px;">Subscriptions automatically renew under the same conditions unless the user cancels before the renewal date. Users can cancel their subscriptions through the billing section. Prepaid fees for services beyond the current billing cycle are generally nonrefundable.</p>
<p style="margin-bottom:10px;"><b>Payment Failure and Suspension</b></p>
<p style="margin-bottom:10px;">Payments for StaffViz services are to be made in advance based on the selected subscription plan. In case of a failed payment, we will attempt to process the payment again within a grace period of 7 days. If the payment is not successfully processed within this grace period, StaffViz holds the right to suspend the Services until payment is received.</p>
<p style="margin-bottom:10px;"><b>Cancellation and Data Retention</b></p>
<p style="margin-bottom:10px;">If you cancel your subscription during the trial period, your data will not be retained, and all access to your account will be terminated. Moreover, for paid subscribers who fail to pay within the grace period, access to the software will be terminated, allowing access only to the billing module. If payment is not made during this period, the subscription will be canceled, and data will be retained for 90 days before the permanent removal. StaffViz is not liable for any data loss due to non-payment.</p>
<p style="margin-bottom:10px;"><b>User Charges</b></p>
<p style="margin-bottom:10px;">Clients will be charged for the number of users specified in the selected plan at the end of the trial period, regardless of actual usage. For example, if the plan is for four users, the client will be charged for four users even if only two users were added.</p>
<p style="margin-bottom:10px;"><b>User Management</b></p>
<p style="margin-bottom:10px;">Users can be added to the payment plan from a predefined list, and the subscription cost will be based on the number of users added during the billing cycle. Additional users can be added via the billing module, and any adjustments due to service downgrades or cancellations will be reflected in the next billing cycle.</p>
<p style="margin-bottom:10px;"><b>Dispute Resolution</b></p>
<p style="margin-bottom:10px;">Any disputes arising from your use of StaffViz will be resolved through binding arbitration in accordance with current arbitration rules.</p>
<p style="margin-bottom:10px;"><b>Amendments</b></p>
<p style="margin-bottom:10px;">We may update these Terms occasionally. Your continuous use of StaffViz after changes will be taken as your consent to these revised terms. This document constitutes the entire agreement between you and StaffViz regarding your use of the service.</p>
<p style="margin-bottom:10px;"><b>Termination</b></p>
<p style="margin-bottom:10px;">We may terminate or suspend your access to StaffViz without prior notice for violating these Terms. Upon termination, you will lose the right to use the Services immediately.</p>
<p style="margin-bottom:10px;"><b>Severability</b></p>
<p style="margin-bottom:10px;">If any part of these Terms is held invalid or unenforceable, the remaining provisions will continue to be valid and enforceable.</p>
<p style="margin-bottom:10px;">If you have any questions about these Terms, please contact us at support@staffviz.com</p>
<p style="margin-bottom:10px;">By using StaffViz, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>

                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="privacyCheck" id="privacyCheck">
                                <label class="form-check-label" for="privacyCheck">I Agree To The <a
                                        href="{{url('privacy-policy')}}" target="_blank">Privacy Policy</a> and
                                        <a
                                        href="{{url('terms-conditions')}}" target="_blank">Terms & Conditions</a>
                                    </label>
                                <span id="privacyCheck-error" class="form-error hide"></span>
                            </div>
                            <div class="ctr_btn">
                                <button class="email_btn prev-btn">Previous</button>
                                @if($hide_card_details)
                                <button class="email_btn plan_add_without_card disabled" id="plan_add_without_card">Save</button>
                                @else
                                <button class="email_btn next_btn disabled" id="plan_add_without_card">Next</button>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/term&condition.png') }}" alt="term&condition">

                        </div>

                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                @if($formation_type == 'direct')
                                <h5>1. Company Credentials</h5>
                                <p>Add company name and set your password</p>
                               @else
                               <h5>1. Company Credentials</h5>
                               <p>Add company name and set your password</p>
                               @endif
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
                                @if($formation_type == 'direct')
                                <h5>2. Pricing Plan</h5>
                                <p>Review your customized pricing plan.</p>
                                @else
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
                                @endif

                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/money.png') }}" alt="money">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>3. Terms and Conditions</h5>
                                <p>Check out our policy and conditions to avail our services.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes payment_detail_side_menu  @if($hide_card_details) d-none @endif">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Fill out your payment details.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="countChange"> @if($hide_card_details) 4. @else 5. @endif Setup Successful </h5>
                                <p>You are all set to access your account</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
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
        {{-- payment card section --}}
        <section class="email_addres payment_details_section" id="payment-details">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class=logo_staff>
                                <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                            </div>
                            {{-- <div class="mobile-step d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 step-no">
                                        <h6>Step 4</h6>
                                    </div>
                                    <div class="col-6 blue-step d-flex align-items-center justify-content-end">
                                        <h6>4 of 5</h6>
                                    </div>
                                </div>
                                <div class="img_side">
                                    <div class="d-flex icon_box">
                                        <div>
                                            <div class="icon icon-sm icon-secondary">
                                                <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h5>4. Payment Details</h5>
                                            <p>Fill out payment details to enable transactions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <span class="d-lg-block d-none">Step 4</span>
                            <h2>Payment Details</h2>

                        <div  id="card_payment_intent" ></div>
                        </div>
                    </div>
                    <div class="col-md-5 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/payment_p.png') }}" alt="payment_p">

                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                @if($formation_type == 'direct')
                                <h5>1. Company Credentials</h5>
                                <p>Add company name and set your password</p>
                               @else
                               <h5>1. Company Credentials</h5>
                               <p>Add company name and set your password</p>
                               @endif
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
                                @if($formation_type == 'direct')
                                <h5>2. Pricing Plan</h5>
                                <p>Review your customized pricing plan.</p>
                                @else
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
                                @endif

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
                        <div class="d-flex icon_box payment_detail_side_menu  @if($hide_card_details) d-none @endif">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Fill out your payment details.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/profile.png') }}" alt="Profile">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="countChange"> @if($hide_card_details) 4. @else 5. @endif Setup Successful </h5>
                                <p>You are all set to access your account</p>
                            </div>
                        </div>
                        <div class="bullets text-center">
                            <span class="bullet"></span>
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
        {{-- successfully --}}
        <section class="email_addres pricing-plan " id="successfully-registered">
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
                                    <h3 style="font-size:34px !important;padding:0;margin:0;">You are all set to access your account</h3>
                                    <br>
                                    <p style="font-size: 18px;padding: 0 150px;">Press the login button, or you'll be automatically redirected to the login page shortly.</p>
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
                                @if($formation_type == 'direct')
                                <h5>1. Company Credentials</h5>
                                <p>Add company name and set your password</p>
                               @else
                               <h5>1. Company Credentials</h5>
                               <p>Add company name and set your password</p>
                               @endif
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
                                @if($formation_type == 'direct')
                                <h5>2. Pricing Plan</h5>
                                <p>Review your customized pricing plan.</p>
                                @else
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
                                @endif

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
                        <div class="d-flex icon_box boxes payment_detail_side_menu  @if($hide_card_details) d-none @endif">
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
                                <h5 class="countChange"> @if($hide_card_details) 4. @else 5. @endif Setup Successful </h5>
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
<video loop autoplay muted class="loading-screen d-none">
    <source src="{{ asset('public/assets/videos/loading-screen-new.webm') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="overlay-section d-none"></div>
{{-- <div class="modal fade" id="talkToSalePopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email_addres">
            <div class="modal-body logo_side">
                <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mt-5">Talk to Sales</h2>
                <p>Lorem ipsum, placeholder or dummy text used in typesetting and graphic design for previewing layouts.</p>
                <form id="talktoSaleForm">
                    <div class="form-row row">
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">First Name <span>*</span></label>
                            <input type="text" id="first_name_talk" name="first_name_talk" class="form-control"
                                placeholder="Enter First Name">
                            <span id="first-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Last Name <span>*</span></label>
                            <input type="text" id="last_name_talk" name="last_name_talk" class="form-control"
                                placeholder="Enter Last Name">
                            <span id="last-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Company <span>*</span> <span class="bracket compan_nm">(StaffViz)</span>
                            </label>
                            <input type="text" id="company_name_talk" name="company_name_talk" class="form-control"
                                placeholder="Enter Your StaffViz Company Name">
                            <span id="company-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Email <span>*</span> <span class="bracket compan_nm">(StaffViz)</span>
                            </label>
                            <input type="email" id="company_email_talk" name="company_email_talk" class="form-control"
                                placeholder="Enter Your Email Registered on StaffViz">
                            <span id="company-email-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Phone Number <span>*</span></label>
                            <input type="tel" id="company_phone_talk" name="company_phone_talk" class="form-control"
                                placeholder="3037112433">
                            <span id="company-phone-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Reason <span>*</span></label>
                            <select class="form-control" id="reason" name="reason">
                                <option hidden selected value="">Select</option>
                                <option value="1">Extension of Trail</option>
                                <option value="2">Form another company during Trial</option>
                                <option value="3">Others</option>
                            </select>
                            <span id="reason-error" class="form-error hide"></span>
                        </div>
                        <div class="col-12 form-group">
                            <label class="form-label">Message <span class="message-star hide">*</span></label>
                            <textarea id="msg" name="msg" class="form-control" rows="4"></textarea>
                            <span id="msg-error" class="form-error hide"></span>
                            <div class="mt-2 form-check">
                                <input type="checkbox" class="form-check-input" name="termsConditions"
                                    id="termsConditions">
                                <label class="form-check-label" for="termsConditions">By Selecting this you
                                    agree our <a target=”_blank” href="{{url('terms-conditions')}}">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ctr_btn my-md-5 my-4">
                        <button type="button" class="email_btn  disabled  talk_to_sales_close">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="talkToSalePopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email_addres">
            <div class="modal-body logo_side p-4">
                <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <h2 class="mt-5">Talk to our Sales Team</h2>
                <p>Fill out the form below, and one of our sales experts will get<br> in touch to answer your queries.
                </p>
                <form id="talktoSaleForm">
                    <div class="form-row align-items-end row">
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Name <span>*</span></label>
                            <input type="text" id="first_name_talk" name="first_name_talk" class="form-control"
                                placeholder="Enter Name">
                            <span id="first-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Email <span>*</span></label>
                            <input type="email" id="company_email_talk" name="company_email_talk" class="form-control"
                                placeholder="sample@gmail.com">
                            <span id="company-email-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label mb-2">Phone Number</label>
                            <input type="tel" id="company_phone_talk" name="company_phone_talk" class="form-control"
                                placeholder="3037112433">
                                <span id="company-phone-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label class="form-label">Number of Employees <span>*</span></label>
                            <select name="noOfEmployees" id="noOfEmployees" class="form-control">
                                <option value="10-50">10 - 50</option>
                                <option value="51-100">51 - 100</option>
                            </select>
                            <span id="noOfEmployees-error" class="form-error hide"></span>
                        </div>
                        <div class="col-12 mb-3 form-group">
                            <label class="form-label">Company</label>
                            <input type="text"  id="company_name_talk" name="company_name_talk" class="form-control"
                                placeholder="Enter Your StaffViz Company Name">
                            <span id="company-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-12 form-group">
                            <label class="form-label">Reason <span class="message-star hide">*</span></label>
                            <textarea id="msg" name="msg" class="form-control" rows="4"
                                placeholder="Enter Message"></textarea>
                            <span id="msg-error" class="form-error hide"></span>
                            <!-- <div class="mt-2 form-check">
                                <input type="checkbox" class="form-check-input" name="termsConditions"
                                    id="termsConditions">
                                <label class="form-check-label" for="termsConditions">By Selecting this you
                                    agree our <a href="{{url('terms-conditions')}}">Terms & Conditions</a>
                                </label>
                            </div> -->
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="html_element"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="ctr_btn my-md-5 my-4">
                                <button class="email_btn talk_to_sales_close">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.7/base64.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>


    var price_id='{{$price_id}}';
    var hide_card_details='{{$hide_card_details}}';
    var user_id ='{{$user_id}}';
    var user_email ='{{$email}}';
    var first_name ='{{$first_name}}';
    var last_name ='{{$last_name}}';
    var company_name ='{{$title}}';
    var formation_type ='{{$formation_type}}';
    var company_type = "ancr";  // (ancr) admin_new_company_create //  (nrc)new_company_register    (tta)trailing_to_active    //   (eta) expiry_to_active


    var data_company_id ='{{$company_id}}';
    var company_price_id = "";
    var company_subscription_id = "";

    var USER_VERIFY_ENDPOINT='{{route('verify_user')}}';
    var ADD_USER='{{route('add_user')}}';
    var GET_SELECTED_PLAN='{{route('get_selected_plan')}}';
    var PAYMENT_CARD_INTENT='{{route('payment_card_intent')}}';
    var AUTHENTICATE_USER='{{route('authenticate_user')}}';
    var PAYMENT_FROM_OLD_CARD='{{route('payment_confirm_from_old_card')}}';
    var SUBSCRIPTION_CONFIRMED='{{getenv('WEB_LOGIN')}}';
    var TALK_TO_SALES='{{route('talk_to_sales')}}';
    var PLAN_ADD_WITHOUT_CARD='{{route('plan_add_without_card')}}';
    var META_PIXEL='{{route('meta.pixel')}}';
    var encryptionKey='{{ getenv('ENCRYPTION_KEY_FOR_AGENT_LOGIN') }}'
    const browserName = platform.name;
    const osInfo = platform.os.toString();

    // datalayer data

    var plan_name='{{$selected_plan['product']['name']}}';
    var payment_type='{{$selected_plan['product']['type_of_price']}}';
    var plan_price='{{$selected_plan['price']['unit_amount']}}';

    function loadStripeLibrary() {

        const script = document.createElement('script');
        script.src = 'https://js.stripe.com/v3/';
        script.onload = function() {
            console.log('Stripe library loaded successfully!');
        };
        script.onerror = function() {
            console.log('Error loading Stripe library. Retrying...');
            // Retry loading the library after a short delay
            setTimeout(loadStripeLibrary, 1000);
        };
        document.head.appendChild(script);

    }

loadStripeLibrary();

</script>
<script src="{{ asset('public/assets/js/company-payment.js') }}"></script>




@endsection
