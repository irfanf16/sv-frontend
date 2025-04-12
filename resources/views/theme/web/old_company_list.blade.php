
<style>
    .min-hight-set{
        min-height: 120px;
    }
</style>
<script>
    $(document).ready(function(){

        $(document).on('click','.company-logo-tab',function(){
            var status=$(this).data('status');
            var id=$(this).data('id');
            $('#status_id').text(status);

            $('.company-detail-tab').removeClass('active')
            $(id).addClass('active')
        })
    });
</script>
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
        @if (!empty($companies))


            <div class="company-logo-tabs">
                @php $i=0; @endphp
                @foreach ($companies as $key => $company)
                    @if (isset($company['company_plan']))
                        @if ($company['company']['plan_staus'] == 'trialing' || $company['company']['plan_staus'] == 'past_due' || $company['company']['plan_staus'] == 'unpaid')
                            @if ( $i==0 && $company['company']['plan_staus'] == 'trialing')
                                <h2 id='status_id'>Active Trial</h2>
                            @elseif ($i == 0)
                                <h2 id='status_id'>Payment Due</h2>
                            @endif
                            <button type="button" data-id=".tab__{{$company['company']['id']}}"   data-status="{{$company['company']['plan_staus'] == 'trialing' ? 'Active Trial' : 'Payment Due'}}"
                                class="company-logo-tab @if ($i == 0) active @endif ">
                                <img style="max-width: 65px" @if($company['company']['logo'] != null)  src="{{ $image_path.'/'.$company['company']['logo'] }}"  @else src="{{url('/').'/public/assets/img/no-image-found.png'}}"  @endif  onerror="this.onerror=null;this.src={{url('/').'/public/assets/img/no-image-found.png'}}  "
                                                        alt="Teslae">
                                <div class="d-flex align-items-center p-1 justify-content-between">
                                    <span class="company-title">{{ $company['company']['title'] }}</span>
                                    <div class="img">
                                        <img src="{{ asset('public/assets/img/dark-green-circletick.png') }}"
                                            alt="Tick">
                                    </div>
                                </div>
                            </button>
                            @php $i++; @endphp
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="company-detail-tabs">
                @php $i=0; @endphp
                @foreach ($companies as $key => $company)
                    @if (isset($company['company_plan']))
                        @if ($company['company']['plan_staus'] == 'trialing')
                            <div class="company-detail-tab  tab__{{$company['company']['id']}} @if ($i == 0) active @endif">

                                <div class="trial-alert active-trials-alert d-flex align-items-center">
                                    <img src="{{ asset('public/assets/img/red-bg-triange-alert.png') }}"
                                        alt="Alert" />
                                    <span class="no-trial">Active Trial!</span>
                                    you already have an active trial.
                                </div>

                                <p>You already have an active trial of
                                    <span>“{{ $company['company']['title'] }}”</span>
                                    and
                                    not
                                    allowed
                                    to start another trial..
                                </p>
                                <p>Please select an option to proceed:</p>
                                <div class="row trial-options-row">
                                    <div class="col-md-6 option-outer-box">
                                        <div class="option-inner-box">
                                            <div class="blue-bg">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-4 text-center plan-img">
                                                        <img style="max-width: 65px"  @if($company['company']['logo'] != null)  src="{{ $image_path.'/'.$company['company']['logo'] }}"  @else src="{{url('/').'/public/assets/img/no-image-found.png'}}"  @endif  onerror="this.onerror=null;this.src={{url('/').'/public/assets/img/no-image-found.png'}}  "
                                                        alt="Teslae">
                                                        {{-- <img src="{{ asset('public/assets/img/tesla-logo-2.png') }}"
                                                            alt="Company Logo"> --}}
                                                    </div>
                                                    <div class="col-md-7 col-8 plan-info">
                                                        <h6>Your opt for
                                                            {{ $company['company_plan']['product']['name'] }}
                                                        </h6>
                                                        <ul>

                                                            @foreach ($company['company_plan']['features'] as $feature)
                                                                <li>{{ $feature['feature_label'] }}</li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-bg">

                                                <div class="row align-items-center">
                                                    <div class="col-md-8 col-6 white-content">
                                                        <h6>Login to <span>{{ $company['company']['title'] }}</span>
                                                        </h6>
                                                        <p>Membership valid till
                                                            {{ isset($company['company']['plan_expiry']) ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $company['company']['plan_expiry'])->format('jS M, Y') : ''}}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-6 text-center white-btn-box">
                                                        <a class="white-btn" href="{{ getenv('WEB_LOGIN') }}">Login</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 option-outer-box">
                                        <div class="option-inner-box">
                                            <div class="blue-bg">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-4 text-center plan-img">
                                                        <img src="{{ asset('public/assets/img/start-plan-img.png') }}"
                                                            alt="Company Logo">
                                                    </div>
                                                    <div class="col-md-7 col-8 plan-info">
                                                        <h6>Start your Plan now!</h6>
                                                        <p>Initiate your plan to reach your goals efficiently and
                                                            effectively.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-bg">
                                                <div class="row align-items-center">
                                                    <div class="col-md-8 col-6 white-content">
                                                        <h6>End trial and continue with plan</h6>
                                                        <p>Membership valid till
                                                            {{ isset( $company['company']['plan_expiry']) ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $company['company']['plan_expiry'])->format('jS M, Y') : ''}}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 col-6 text-center white-btn-box">
                                                        <button type="button"
                                                            class="white-btn next_btn @if ($company['company']['plan_staus'] == 'trialing') trialing-to-active @endif  "
                                                            data-company-id="{{ $company['company']['id'] }}"
                                                            data-price-id="{{ $company['company']['price_id'] }}"
                                                            data-subscription-id="{{ $company['company']['subscription_id'] }}">Proceed</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="talk-to-sale-box">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-7 col-8 content">
                                            <h6>Level up with our extended trial!</h6>
                                            <p>Contact now to kickstart the party!</p>
                                        </div>
                                        <div class="col-md-4 col-4 text-center sale-btn-box">
                                            <button type="button" class="sale-btn talk_to_sales"
                                            data-company-title="{{ $company['company']['title'] }}"
                                            >Talk to Sales</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $i++; @endphp
                        @elseif ($company['company']['plan_staus'] == 'past_due' || $company['company']['plan_staus'] == 'unpaid')
                            <div class="company-detail-tab  tab__{{$company['company']['id']}} @if ($i == 0) active @endif">
                                <div class="trial-alert active-trials-alert d-flex align-items-center">
                                    <img src="{{ asset('public/assets/img/red-bg-triange-alert.png') }}"
                                        alt="Alert" />
                                    <span class="no-trial">Payment Due</span>
                                    Your payment has been due.
                                </div>
                                <p>You already have a due payment of
                                    <span>“{{ $company['company']['title'] }}”</span> and not have another plan

                                </p>
                                <p>Please select an option to proceed:</p>
                                <div class="row trial-options-row">
                                    <div class="col-md-6 option-outer-box">
                                        <div class="option-inner-box  ">
                                            <div class="blue-bg min-hight-set">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-6 text-center plan-img">
                                                        <img style="max-width: 65px" @if($company['company']['logo'] != null)  src="{{ $image_path.'/'.$company['company']['logo'] }}"  @else src="{{url('/').'/public/assets/img/no-image-found.png'}}"  @endif  onerror="this.onerror=null;this.src={{url('/').'/public/assets/img/no-image-found.png'}}  "
                                                        alt="Teslae">
                                                    </div>
                                                    <div class="col-md-7 col-6 plan-info">
                                                        <h6>Make payment of your current plan</h6>
                                                        <p>Current Plan:
                                                            <b>{{ isset($company['company_plan']['product']['name']) ? $company['company_plan']['product']['name'] : '' }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-bg">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-7 col-md-7 col-7 white-content">
                                                        <h6>Your payment has been due</h6>
                                                        <p>Expird
                                                            {{ isset($company['company']['plan_expiry']) ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $company['company']['plan_expiry'])->format('jS M, Y') : ''}}
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-5 col-md-5 col-5 text-center white-btn-box">

                                                        <a class="white-btn" href="{{ getenv('WEB_LOGIN') }}">Pay now</a>

                                                        @php $is_showing=false; @endphp
                                                        @if($is_showing == true)
                                                        <button type="button"
                                                            class="white-btn next_btn expiry-to-active "
                                                            data-company-id="{{ $company['company']['id'] }}"
                                                            data-price-id="{{ $company['company']['price_id'] }}"
                                                            data-subscription-id="{{ $company['company']['subscription_id'] }}">Proceed</button>
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 option-outer-box">
                                        <div class="option-inner-box">
                                            <div class="blue-bg">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-6 text-center plan-img">
                                                        <img src="{{ asset('public/assets/img/img-trial-extended-staffviz.png') }}"
                                                            alt="Company Logo">
                                                    </div>
                                                    <div class="col-md-7 col-6 plan-info">
                                                        <h6>Level up with our extended subscription!</h6>
                                                        <p>Extend subscription for more benefits & growth opportunities</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="white-bg">

                                                <div class="row align-items-center">
                                                    <div class="col-md-7 col-7 white-content">
                                                        <h6>Our extended
                                                            Subscription!</h6>
                                                        <p>Membership valid till {{ isset($company['company']['plan_expiry']) ?  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $company['company']['plan_expiry'])->format('jS M, Y') : '' }}</p>
                                                    </div>
                                                    <div class="col-md-5 col-5 text-center white-btn-box">
                                                        <button type="button" class="white-btn sale-btn talk_to_sales"
                                                        data-company-title="{{ $company['company']['title'] }}"
                                                        >Talk to
                                                            Sales</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $i++; @endphp
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="ctr_btn my-md-5 my-4">
                <button class="email_btn  prev-btn email-login-page">Previous</button>
            </div>

        @endif

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
                @php $no_company_active=true; @endphp
                @foreach ($companies as $company)
                    @if (isset($company['company_plan']))
                        @if ($company['company']['plan_staus'] == 'active')
                            @php $no_company_active=false; @endphp
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
