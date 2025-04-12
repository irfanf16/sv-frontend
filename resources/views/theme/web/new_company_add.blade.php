<div class="col-lg-7">
    <div class="logo_side">
        <div class=logo_staff>
            <img src="{{ asset('public/assets/img/black-logo.png') }}" alt="Logo" />
        </div>
        <div class="mobile-step d-lg-none">
            <div class="img_side">
                <div class="companies-box">
                    <h5>Companies</h5>
                    <p>Automation plus enterprise-grade features.</p>
                    <div class="owl-carousel">

                        @if (!empty($companies))
                            @php $no_company_active=true; @endphp
                            @foreach ($companies as $company)
                                @if (isset($company['company_plan']))
                                    @if ($company['company']['plan_staus'] == 'active')
                                        @php $no_company_active=false; @endphp
                                        <div class="item">
                                            <div class="single-company align-items-center">
                                                <div class="company-img">
                                                    <img style="max-width: 65px"  @if($company['company']['logo'] != null)  src="{{ $image_path.'/'.$company['company']['logo'] }}"  @else src="{{url('/').'/public/assets/img/no-image-found.png'}}"  @endif  onerror="this.onerror=null;this.src={{url('/').'/public/assets/img/no-image-found.png'}}  "
                                                    alt="Teslae">
                                                </div>
                                                <div class="company-info">
                                                    <h6>{{ $company['company']['title'] }}</h6>
                                                    <p>Owner</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach

                            @if ($no_company_active == true)
                                <div class="single-company w-100 d-flex align-items-center">
                                    <div class="company-img empty-logo">
                                        <img src="{{ asset('public/assets/img/empty-logo.png') }}" alt="Logo">
                                    </div>
                                    <div class="company-info empty-description">
                                        <img src="{{ asset('public/assets/img/empty-description.png') }}"
                                            alt="Description">
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="single-company w-100 d-flex align-items-center">
                                <div class="company-img empty-logo">
                                    <img src="{{ asset('public/assets/img/empty-logo.png') }}" alt="Logo">
                                </div>
                                <div class="company-info empty-description">
                                    <img src="{{ asset('public/assets/img/empty-description.png') }}" alt="Description">
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <h2>Personal Details</h2>
        <p>Add the company name to begin.</p>

        <div class="mb-3">
            <label class="form-label">Email<span>*</span></label>
            <div class="position-relative">
                <input type="email" name="email" id="readEmail" value="{{ $user['email'] }}"
                    class="form-control correct-email" readonly>
                <img class="validation-symbol validation-symbol-correct"
                    src="{{ asset('public/assets/img/green-tick.png') }}" alt="Logo" />
                <span id="readEmail-error" class="form-error hide"></span>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Company Name<span>*</span></label>
            <input type="text" id="newCompany-name" name="newCompany-name" placeholder="CrecenTech Systems"
                class="form-control">
            <span id="newCompany-name-error" class="form-error hide"></span>
        </div>

        <div class="ctr_btn my-md-5 my-4">
            <button class="email_btn prev-btn email-login-page">Previous</button>
            <button class="email_btn next_btn user-register-second-company">Next</button>
        </div>

    </div>
</div>
<div class="col-md-5 img_side">

    <div class="text-center figr">
        <img src="{{ asset('public/assets/img/no-trial-sidebar-img.png') }}" alt="Step 2">
    </div>

    <div class="companies-box">

        <h5>Companies</h5>
        <p>Automation plus enterprise-grade features.</p>

        <div class="companies-list">

            @if (!empty($companies))
                @php $no_company_active=true @endphp
                @foreach ($companies as $company)
                    @if (isset($company['company_plan']))
                        @if ($company['company']['plan_staus'] == 'active')
                            @php $no_company_active=false @endphp
                            <div class="single-company d-flex align-items-center">
                                <div class="company-img">
                                    <img style="max-width: 65px" @if($company['company']['logo'] != null)  src="{{ $image_path.'/'.$company['company']['logo'] }}"  @else src="{{url('/').'/public/assets/img/no-image-found.png'}}"  @endif  onerror="this.onerror=null;this.src={{url('/').'/public/assets/img/no-image-found.png'}}  "
                                    alt="Teslae">
                                </div>
                                <div class="company-info">
                                    <h6>{{ $company['company']['title'] }}</h6>
                                    <p>Owner</p>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
                @if ($no_company_active == true)
                    <div class="single-company w-100 d-flex align-items-center">
                        <div class="company-img empty-logo">
                            <img src="{{ asset('public/assets/img/empty-logo.png') }}" alt="Logo">
                        </div>
                        <div class="company-info empty-description">
                            <img src="{{ asset('public/assets/img/empty-description.png') }}" alt="Description">
                        </div>
                    </div>
                @endif
            @else
                <div class="single-company w-100 d-flex align-items-center">
                    <div class="company-img empty-logo">
                        <img src="{{ asset('public/assets/img/empty-logo.png') }}" alt="Logo">
                    </div>
                    <div class="company-info empty-description">
                        <img src="{{ asset('public/assets/img/empty-description.png') }}" alt="Description">
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
