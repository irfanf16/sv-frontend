@extends('theme.layouts.form_master')

@section("page-class", "company-setup")

@section('css')
@endsection

@section('content')
<section class="company-register-section">
    <form>
        <section class="email_addres active" id="personal-details">
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
                                        <h6>1 of 5</h6>
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
                                            <h5>1. Personal Details</h5>
                                            <p>Add the company details to update the information</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 1</span>
                            <h2>Personal Details</h2>
                            <p>Lorem Ipsum card to make hassle-free transactions.</p>
                            <div class="mb-3">
                                <label class="form-label">Email<span>*</span></label>
                                <div class="position-relative">
                                    <input type="email" name="email" id="readEmail" class="form-control correct-email"
                                        value="jessicarob@staffviz.com" readonly>
                                    <!-- <img class="validation-symbol" src="{{ asset('public/assets/img/green-tick.png') }}"
                                        alt="Logo" /> -->
                                    <span id="readEmail-error" class="form-error hide"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name<span>*</span></label>
                                <input type="text" id="company-name" name="company-name" value="CrecenTech Systems"
                                    class="form-control" readonly>
                                <span id="company-name-error" class="form-error hide"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password<span>*</span></label>
                                <input type="password" name="password" id="password" placeholder="Enter your password"
                                    class="form-control">
                                <span id="password-error" class="form-error hide"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password<span>*</span></label>
                                <input type="password" id="confirmPassword" placeholder="Confirm Password"
                                    class="form-control">
                                <span id="confirmPassword-error" class="form-error hide"></span>
                            </div>
                            <div class="ctr_btn my-md-5 my-4">
                                <button class="email_btn next_btn">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 img_side">
                        <div class="text-center figr">
                            <img src="{{ asset('public/assets/img/Figure.png') }}" alt="Step 2">

                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans1.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>1. Personal Details</h5>
                                <p>Add the company details to update the information</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
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
                                <p>Agree to the terms and conditions to proceed further.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Add the payment details for a successful transaction.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
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
        <section class="email_addres pricing-plan" id="pricing-plan">
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
                                                <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                            </div>
                                        </div>
                                        <div class="pl-4">
                                            <h5>2. Pricing Plan</h5>
                                            <p>Choose a pricing plan that suits your needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 2</span>
                            <h2>Pricing Plan</h2>
                            <p>Choose a pricing plan that suits your needs.</p>
                            <div class="main-box">
                                <div class="d-flex kickoff align-items-center">
                                    <h2>KickOff $11 25 <span>/ user / month</span></h2>
                                    <img src="{{ asset('public/assets/img/icon-pricing.png') }}">
                                </div>
                                <div class="scroll-list">
                                    <ul>
                                        <li>Everything in Starter, plus:</li>
                                        <li>Track apps & URLs</li>
                                        <li>Custom idle timeout</li>
                                        <li>Auto discard idle time</li>
                                        <li>Unlimited teams</li>
                                        <li>Payments & payroll</li>
                                        <li>Unlimited integration</li>
                                        <li>Limited public API</li>
                                        <li> Time off & holidays</li>
                                        <li>Scheduling & attendance</li>
                                        <li>Everything in Starter, plus:</li>
                                        <li>Track apps & URLs</li>
                                        <li>Custom idle timeout</li>
                                    </ul>
                                </div>
                                <select name="package-type" class="package-type">
                                    <option value="1">KickOff Plan</option>
                                    <option value="2">Inaugural Plan</option>
                                    <option value="3">Basic Plan</option>
                                    <option value="4">Premium Plan</option>
                                    <option value="5">Corporate Plan</option>
                                </select>
                                <!-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        KickOff Plan
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="ctr_btn my-md-5 my-4">
                                <button type="submit" class="email_btn prev-btn">Previous</button>
                                <button type="submit" class="email_btn next_btn">Next</button>
                            </div>
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
                                <h5>1. Personal Details</h5>
                                <p>Add the company details to update the information</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
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
                                <p>Agree to the terms and conditions to proceed further.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Add the payment details for a successful transaction.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
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
        <section class="email_addres" id="terms-conditions">
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
                                            <p>Agree to the terms and conditions to proceed further.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 3</span>
                            <h2>Terms and Conditions</h2>
                            <p>Track time and manage work in the same place</p>
                            <div class="term_text">
                                <h3>Purpose of the Terms and Conditions</h3>
                                <p>These Terms and Conditions govern your use of the StaffViz platform and services. By
                                    accessing or using StaffViz, you agree to abide by these terms. These Terms and
                                    Conditions
                                    govern your use of the StaffViz platform and services. By accessing or using
                                    StaffViz,
                                    you
                                    agree to abide by these terms. These Terms and Conditions govern your use of the
                                    StaffViz
                                    platform and services. By accessing or using StaffViz, you agree to abide by these
                                    terms. 
                                    These Terms and Conditions govern your use of the StaffViz platform and services.
                                    By accessing or using StaffViz, you agree to abide by these terms. These Terms and
                                    Conditions
                                    govern your use of the StaffViz platform and services. By accessing or using
                                    StaffViz,
                                    you
                                    agree to abide by these terms. <br><br>
                                    These Terms and Conditions govern your use of the StaffViz platform and services. By
                                    accessing or using StaffViz, you agree to abide by these terms. These Terms and
                                    Conditions govern your use of the StaffViz platform and services. By accessing or
                                    using StaffViz, you agree to abide by these terms. These Terms and Conditions govern
                                    your use of the StaffViz platform and services. By accessing or using StaffViz, you
                                    agree
                                    to abide by these terms.</p>
                                <p>These Terms and Conditions govern your use of the StaffViz platform and services. By
                                    accessing or using StaffViz, you agree to abide by these terms. These Terms and
                                    Conditions
                                    govern your use of the StaffViz platform and services. By accessing or using
                                    StaffViz,</p>


                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="privacyCheck" id="privacyCheck">
                                <label class="form-check-label" for="privacyCheck">I Agree To The <a
                                        href="{{url('privacy-policy')}}">Privacy Policy</a> </label>
                                <span id="privacyCheck-error" class="form-error hide"></span>
                            </div>
                            <div class="ctr_btn">
                                <button class="email_btn prev-btn">Previous</button>
                                <button class="email_btn next_btn disabled">Next</button>
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
                                <h5>1. Personal Details</h5>
                                <p>Add the company details to update the information</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
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
                                <p>Agree to the terms and conditions to proceed further.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Add the payment details for a successful transaction.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
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
        <section class="email_addres" id="payment-dedails">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class="logo_staff">
                                <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
                            </div>
                            <div class="mobile-step d-lg-none">
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
                                            <p>Add the payment details for a successful transaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-lg-block d-none">Step 4</span>
                            <h2>Payment Details</h2>
                            <p>Add your payment card to make hassle-free transactions. (Text Required for 14 day
                                renewal)*
                            </p>
                            <div class="visa_card">
                                <img src="{{ asset('public/assets/img/visaCard.png') }}" alt="">

                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="cardHolderName" class="form-label">Card Holder
                                        Name<span>*</span></label>
                                    <input type="text" name="cardHolderName" placeholder="Jack Sparrow"
                                        class="form-control cardHolderName" id="cardHolderName">
                                    <span id="cardHolderName-error" class="form-error hide"></span>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="cardNumber" class="form-label">Card Number<span>*</span></label>
                                    <input type="text" placeholder="1234 1234 5678 0000" class="form-control cardNumber"
                                        id="cardNumber" name="cardNumber">
                                    <span id="cardNumber-error" class="form-error hide"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validThrough">Valid Through<span>*</span></label>
                                    <input type="text" placeholder="02/23" class="form-control validThrough" id="validThrough"
                                        name="validThrough">
                                    <span id="validThrough-error" class="form-error hide"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="cvv">CVV<span>*</span></label>
                                    <input type="text" placeholder="201" class="form-control cvv" name="cvv" id="cvv">
                                    <span id="cvv-error" class="form-error hide"></span>
                                </div>
                            </div>
                            <div class="ctr_btn my-md-5 my-4">
                                <button class="email_btn prev-btn">Previous</button>
                                <button class="email_btn submit_btn">Submit</button>
                            </div>

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
                                <h5>1. Personal Details</h5>
                                <p>Add the company details to update the information</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
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
                                <p>Agree to the terms and conditions to proceed further.</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/email1.png') }}" alt="email1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>4. Payment Details</h5>
                                <p>Add the payment details for a successful transaction.</p>
                            </div>
                        </div>
                        <div class="d-flex icon_box boxes">
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
        <section class="email_addres pricing-plan" id="Verification-email1">
            <div class="container-fluid">
                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="logo_side">
                            <div class="logo_staff">
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
                                <img src="{{ asset('public/assets/img/group-men.png') }}">

                                <h2>Company has been formed</h2>
                                <p>Your company has been formed. Shortly you will be directed to the Login Page.</p>
                                <span>OR</span>
                                <p>You can press Login button below.</p>
                                <a href="{{ url('login') }}" class="Verification-email">Login</a>
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
                                <h5>1. Personal Details</h5>
                                <p>Add the company details to update the information</p>
                            </div>
                            <img class="sidebar-tick" src="{{ asset('public/assets/img/sidebar-gray-tick.png') }}"
                                alt="Sidebar">
                        </div>
                        <div class="d-flex icon_box boxes">
                            <div>
                                <div class="icon icon-sm icon-secondary">
                                    <img src="{{ asset('public/assets/img/plans2.png') }}" alt="plans1">
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5>2. Pricing Plan</h5>
                                <p>Choose a pricing plan that suits your needs.</p>
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
                                <p>Agree to the terms and conditions to proceed further.</p>
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
                                <p>Add the payment details for a successful transaction.</p>
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
                                <h5>5. Login to StaffViz</h5>
                                <p>Login to your account to access your StaffViz company.</p>
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
    </form>
</section>
@endsection

@section('js')
<script src="{{ asset('public/assets/js/company-register.js') }}"></script>
@endsection