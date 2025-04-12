@extends('theme.layouts.master')
@section('page-class', 'index-page')
@section('css')
<style>
    #about-hero {
        padding-top: 245px;
    }

    .client-companies .owl-carousel .company-img {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 0 auto;
    }

    .package-tooltip {
        position: relative;
        display: inline-block;
    }

    .package-tooltip .package-tooltiptext {
        display: none;
        width: 150px;
        background-color: #7874FC;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 10px 5px;
        position: absolute;
        z-index: 1;
        top: -72px;
        right: -10px;
    }

    .package-tooltip .package-tooltiptext p {
        font-size: 11px;
        margin-bottom: 0;
        color: white;
        padding-bottom: 0;
    }

    .package-tooltip .package-tooltiptext::after {
        content: "";
        position: absolute;
        bottom: -10px;
        right: 11px;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #7874FC transparent transparent transparent;
    }

    .package-tooltip:hover .package-tooltiptext {
        display: block;
    }

    .product-value {
        font-weight: 400 !important;
    }

    .packages-offer table .most-popular-package-body .most-popular-col .product-value {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .Optional-add .inner-box ul li{
        line-height: 1 !important;
    }

    @media(max-width: 1199px) {
        .client-companies .owl-carousel .company-img {
            padding: 0 15px;
        }
    }

    @media(max-width: 991px) {
        #about-hero {
            margin-top: -140px;
        }
    }
</style>
@endsection
@section('content')
<section id="about-hero" class="price-banner"
    style="background-image: url('{{ asset("public/assets/images/Frame-back.png") }}');background-position-x:left;">
    <div class="container-fluid">
        <div class="row">
            <div class="hero-head h_t col-lg-12">
                <h1 class="pb-2">Flexible Pricing Plans for <br>Effective Employee Monitoring</h1>
                <div class="col-lg-7 col-md-10 hero-text">
                    <h3> Begin Your Future Plan with the Perfect Planning Today - Do it Right, With No Fright!</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pricing-plan">
    <div class="container-fulid px-md-4 pb-md-4 pb-2 px-3" style="padding-top:40px">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-deading">
                    <h2>Pricing & Plan</h2>
                    <h3>Choose a Plan that Fits <br> Your Needs</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="table-buttons">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-11">
                    <div class="owl-carousel" id="product-list">
                        @php $pp=0 @endphp
                        @foreach ($plans as $key => $plan)
                        @if ($plan['published'] == 1)
                        <a href="#p_{{ $plan['category_id'] }}"
                            class="list-item change-fre @if ($pp == 0) active @endif"
                            @if (isset($plan['frequency']) && array_key_first($plan['frequency']) !==null) data-class=".pr-{{ $plan['category_id'] }}-{{ array_key_first($plan['frequency']) }}" @endif>
                            <div class="main-content">
                                <div class="d-flex align-items-center">
                                    <div class="img">
                                        <img src="{{ asset('public/assets/img/time-tracking-pricing-icon.png') }}" alt="time-tracking-pricing-icon">
                                    </div>
                                    <h3>{{ ucfirst($plan['title']) }}</h3>
                                </div>
                                <p>{{ $plan['description'] }} </p>
                            </div>
                        </a>
                        @php $pp++ @endphp
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prices-tables">
        @php $pp=0 @endphp
        @foreach ($plans as $key1 => $plan)

        @if ($plan['published'] == 1)
        <div class="list-item-tab @if ($pp == 0) active @endif "
            id="p_{{ $plan['category_id'] }}">
            <div class="price-duration d-flex justify-content-center align-items-center">
                @if (isset($plan['frequency']))
                @php $i=0 @endphp
                @foreach ($plan['frequency'] as $key => $fre)
                <div class="list-item-price change-fre @if ($i == 0) active @endif"
                    data-class=".pr-{{ $plan['category_id'] }}-{{ $key }}">
                    {{ ucfirst($key) }}
                </div>
                @php $i++ @endphp
                @endforeach
                @endif
            </div>
            <div class="list-item-price-tab-row container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        @if (isset($plan['frequency']))
                        @php $i=0 @endphp
                        @foreach ($plan['frequency'] as $key => $fre)
                        <div
                            class="list-item-price-tab  @if ($i == 0) active @endif">
                            @php
                            if (is_array($fre) || $fre instanceof \Illuminate\Support\Collection) {
                            $publicCount = count(array_filter($fre, function($p) {
                            return isset($p['product']['public']) && $p['product']['public'] == 1;
                            }));
                            } else {
                            $publicCount = 0;
                            }
                            @endphp
                            <div class="owl-carousel plan-list @if ($publicCount > 3) four-items @elseif ($publicCount ==2 || $publicCount ==3 ) three-items @else one-item @endif">
                                @foreach ($fre as $p)
                                @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                                <div class="pricing-data" id="">
                                    @if ($p['product']['base_price'] > $p['price']['unit_amount'])
                                    @php
                                    $basePrice =
                                    $p['product']['base_price'];
                                    $finalPrice =
                                    $p['price']['unit_amount'];
                                    $savings = $basePrice - $finalPrice;
                                    $savingsPercentage =
                                    ($savings / $basePrice) * 100;
                                    @endphp

                                    <div class="discount-box">
                                        <img src="{{asset('/public/assets/img/discount-tag.png')}}" alt="sa">
                                        <div class="d-flex discountPriceText align-items-center">
                                            <h6 class="oldPrice">${{ $p['product']['base_price'] }}</h6>
                                            <div class="discountedPrice">
                                                <h5>SAVE</h5>
                                                <p>{{ number_format($savingsPercentage, 2) }}%</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif


                                    <div class="inner-box">
                                        @php
                                        $number = $p['price']['unit_amount'];
                                        $integerPart = (int) floor($number);
                                        $decimalPart = str_pad(
                                        number_format(
                                        ($number - $integerPart) * 100,
                                        0,
                                        '',
                                        '',
                                        ),
                                        2,
                                        '0',
                                        STR_PAD_LEFT,
                                        );
                                        @endphp

                                        @if (isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1 && isset($p['price']['unit_amount']) && $integerPart == 0)
                                        <div class="most-popular">Most Popular / No credit card required</div>
                                        @elseif (isset($p['price']['unit_amount']) && $integerPart == 0)
                                        <div class="most-popular" style="background: #C8E1F8 !important; color:black !important;font-weight:500!important;min-height: 29.5px">No credit card required</div>
                                        @elseif(isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                        <div class="most-popular">Most Popular</div>
                                        @else
                                        <div class="most-popular" style="background: #C8E1F8 !important; color:black !important;font-weight:500!important;min-height: 29.5px"></div>
                                        @endif
                                        <div class="inner-content">

                                            <img class="price-top-icons"
                                                @if (!empty($p['product']['images'])) src="{{ $p['product']['images'][0] }}" @else src="{{ asset('public/assets/img/basic-package.png') }}" @endif
                                                alt="Data">
                                            {{-- <img  src="{{ asset('public/assets/img/basic-package.png') }}"
                                            class="price-top-icons" alt="Data"> --}}

                                            <div class="main-text mb-5">
                                                <div class="inner-text position-relative">
                                                    <h4>{{ ucfirst($p['product']['name']) }}</h4>

                                                    <div class="d-flex justify-content-center price-box align-items-center">
                                                        <h5>${{ $integerPart }}</h5>
                                                        <div class="other-price">
                                                            <span
                                                                class="small-price">.{{ $decimalPart }}</span>
                                                            <span
                                                                class="userMonth">
                                                                @if ($plan['price_type'] == 'one_time_all_users')
                                                                /month
                                                                @else
                                                                /user/month
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @if(isset($p['price']['minimum_users']) && $p['price']['minimum_users'] > 0)<p class="min-users">Plan starts with minimum {{$p['price']['minimum_users']}} users</p>
                                                    @else
                                                    <p class="min-users"></p>
                                                    @endif

                                                    <div  rel="nofollow" data-href="{{ route('register_company', $p['price']['id']) }}"
                                                        class="try-now plan-selected-sub">
                                                        @if($p['product']['trial_period_days'] == 0)
                                                        Activate Now
                                                        @else
                                                        Start
                                                        {{ $p['product']['trial_period_days'] }}
                                                        {{ $p['product']['trial_period_days'] > 1 ?  'Days' : 'Day' }}
                                                        Free Trial
                                                        @endif
                                                    </div>
                                                    <div class="addons-list">
                                                        @foreach ($p['addons'] as $addon)
                                                        <div
                                                            class="single-addon d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">

                                                                <img style="width:19px;"
                                                                    @if (!empty($addon['images'])) src="{{ $addon['images'][0] }}" @else src="{{ asset('public/assets/img/email-support.png') }}" @endif
                                                                    alt="Data">
                                                                <h6>{{ $addon['name'] }}</h6>
                                                            </div>
                                                            <img src="{{ asset('public/assets/img/pricing-green-tick.png') }}"
                                                                class="green-tick" alt="Tick">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <ul>
                                                        @foreach ($p['features'] as $feature)
                                                        @php
                                                        $imageUrl = !empty(
                                                        $feature['image']
                                                        )
                                                        ? $feature['image']
                                                        : asset(
                                                        'public/assets/img/check-circle-price.png',
                                                        );
                                                        @endphp
                                                        <li
                                                            style="background-image: url('{{ $imageUrl }}')">
                                                            {{-- <img style="width:18px"
                                                                                        @if (!empty($feature['image'])) src="{{ $feature['image'] }}" @else src="{{ asset('public/assets/img/check-circle-price.png') }}" @endif
                                                            alt="Data"> --}}
                                                            {{ ucfirst($feature['feature_label']) }}
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @php $i++ @endphp
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @php $pp++ @endphp
        @endif
        @endforeach
    </div>
</section>
<section class="custom-plan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center justify-content-center shadow-row">
                    <div class="col-xl-4 col-lg-5 col-md-6 text">
                        <h3>Custom Plan</h3>
                        <p>To meet your customized needs </p>
                    </div>
                    <div class="col-md-4 talk-to-sale text-center">
                        <a href="#" class="talk-to-sale-btn talk_to_sales_price">TALK TO SALES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Optional-add">
    <div class="container">
        <h3>Optional Add-ons for Quarterly Plans</h3>
        <div class="addon-container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row showAddons">
                        @php $a=0 @endphp
                        @foreach ($addons as $addon)
                        @if ($a < 3)
                        @php
                                       $addons_list=explode(';',$addon['description'])
                                    @endphp
                            <div class="col-md-4 outer-box prices-tables p-2">
                            <div class="inner-box main-text">
                                <div class="d-flex align-items-center">
                                    <img @if (!empty($addon['images'])) src="{{ $addon['images'][0] }}" @else src="{{ asset('public/assets/img/data-rentation-support.png') }}" @endif
                                        alt="Data">
                                    {{-- <img src="{{ asset('public/assets/img/data-rentation-support.png') }}"
                                    alt="Data Retnetion"> --}}
                                    <h3>{{ ucfirst($addon['name']) }}</h3>
                                </div>
                                @if(isset($addons_list[0]))
                                <div class="mt-3" style="color:#2d3958 !important">{{  ucfirst($addons_list[0])}}</div>
                                @endif
                                <h4><span>${{ isset($addon['prices'][0]) ? $addon['prices'][0]['unit_amount'] / 100 : '0' }}</span>/user/{{ isset($addon['prices'][0]['recurring']) ? $addon['prices'][0]['recurring']['interval'] : '' }}
                                </h4>
                                <ul style="max-height:130px !important">

                                    @if(count($addons_list) > 0)
                                        @foreach($addons_list as $index => $item)
                                        @if($index > 0)
                                            <li>{{  ucfirst($item )}}</li>
                                        @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                    </div>
                    @endif
                    @php $a++ @endphp
                    @endforeach
                </div>
            </div>
            @php $a=0 @endphp
            @foreach ($addons as $addon)
            @if ($a > 3)
            @php
            $addons_list=explode(';',$addon['description'])
         @endphp
            <div class="col-md-4 outer-box disabled prices-tables p-2">
                <div class="inner-box main-text">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('public/assets/img/data-rentation-support.png') }}"
                            alt="Data Retnetion">
                        <h3>{{ ucfirst($addon['name']) }}</h3>
                    </div>
                    @if(isset($addons_list[0]))
                    <div class="mt-3" style="color:#2d3958 !important">{{  ucfirst($addons_list[0])}}</div>
                    @endif
                    <h4><span>${{ isset($addon['prices'][0]) ? $addon['prices'][0]['unit_amount'] / 100 : '0' }}</span>/user/{{ isset($addon['prices'][0]['recurring']) ? $addon['prices'][0]['recurring']['interval'] : '' }}
                    </h4>
                    <ul style="max-height:130px !important">
                        @if(count($addons_list) > 0)
                        @foreach($addons_list as $index => $item)
                        @if($index > 0)
                            <li>{{  ucfirst($item )}}</li>
                        @endif
                        @endforeach
                    @endif
                    </ul>
                </div>
            </div>
            @endif
            @php $a++ @endphp
            @endforeach
        </div>
    </div>
    <button class="addon-load-more">
        Load more <img src="{{ asset('public/assets/img/addon-load-more.png') }}" alt="Data Retnetion">
    </button>
    <h6>Go with Annual Plans to Boost your StaffViz's Capabilities...</h6>
    <ul class="outside-box-list">
        <li>Where we offer one free add-on with a Basic & Premium Plan</li>
        <li>We offer All three add-ons free of charge if you go with the Enterprise Plan</li>
    </ul>
    </div>
</section>
<section class="packages-offer">
    <div class="container">
        <div class="row">
            <div class="col-12 main-offer-box">
                <div class="row">
                    <div class="col-12 text-center title">
                        <h2>What We Offer</h2>
                    </div>
                    @php $pp=0 @endphp
                    @foreach ($plans as $key1 => $plan)

                    @if ($plan['published'] == 1)
                    @if (isset($plan['frequency']))
                    @php $i=0 @endphp
                    @foreach ($plan['frequency'] as $key => $fre)
                    <div class="col-12 freq pr-{{ $plan['category_id'] }}-{{ $key }}"
                        @if ($pp !=0) style="display: none" @endif>
                        <div class="d-flex">

                            <div class="inner-table">
                                <table>
                                    <thead>
                                        @if (count($fre) > 0)
                                        <tr>
                                            <th></th>
                                            @foreach ($fre as $p)
                                            @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                                            <th
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular']==1) class="most-popular-package-head" @endif>
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                                <h6 class="most-popular">Most Popular</h6>
                                                @endif
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                                <div class="head-box">
                                                    <div
                                                        class="package-title d-flex align-items-center">

                                                        <div class="info-box">
                                                            <h5>{{ ucfirst($p['product']['name']) }}
                                                            </h5>
                                                            <p>Per User / Month </p>
                                                        </div>
                                                        <div class="price-box">
                                                            @php
                                                            $number =
                                                            $p['price'][
                                                            'unit_amount'
                                                            ];
                                                            $integerPart = (int) floor(
                                                            $number,
                                                            );
                                                            $decimalPart = str_pad(
                                                            number_format(
                                                            ($number -
                                                            $integerPart) *
                                                            100,
                                                            0,
                                                            '',
                                                            '',
                                                            ),
                                                            2,
                                                            '0',
                                                            STR_PAD_LEFT,
                                                            );
                                                            @endphp
                                                            <h2>${{ $integerPart }}<span
                                                                    class="small-price">.{{ $decimalPart }}</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div
                                                    class="package-title d-flex align-items-center">

                                                    <div class="info-box">
                                                        <h5>{{ ucfirst($p['product']['name']) }}
                                                        </h5>
                                                        <p>Per User / Month</p>
                                                    </div>
                                                    <div class="price-box">
                                                        @php
                                                        $number =
                                                        $p['price'][
                                                        'unit_amount'
                                                        ];
                                                        $integerPart = (int) floor(
                                                        $number,
                                                        );
                                                        $decimalPart = str_pad(
                                                        number_format(
                                                        ($number -
                                                        $integerPart) *
                                                        100,
                                                        0,
                                                        '',
                                                        '',
                                                        ),
                                                        2,
                                                        '0',
                                                        STR_PAD_LEFT,
                                                        );
                                                        @endphp
                                                        <h2>${{ $integerPart }}<span
                                                                class="small-price">.{{ $decimalPart }}</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                                @endif
                                            </th>
                                            @endif
                                            @endforeach
                                        </tr>
                                        @endif
                                    </thead>
                                    <tbody>
                                        @foreach ($p['categoryFeaturesForCategory'] as $feature)
                                        <tr>
                                            <td class="feature-heading">{{ $feature['title'] }}
                                            </td>

                                            @foreach ($fre as $p)
                                            @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                                            @if (isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                            <td
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular']==1) class="most-popular-package-body" @endif>
                                                <div class="most-popular-col">

                                                </div>


                                            </td>
                                            @else
                                            <td></td>
                                            @endif
                                            @endif
                                            @endforeach
                                        </tr>
                                        @foreach ($feature['feature_list'] as $fea)
                                        <tr>
                                            <td>{{ ucfirst($fea['feature_title']) }}</td>

                                            @foreach ($fre as $p)
                                            @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                                            @if (in_array($p['product']['id'], $fea['plan']))
                                            @php

                                            $plan_value=isset($fea['plan_value']) ? $fea['plan_value'] : [];
                                            // dd($plan_value,$p['product']['id']);
                                            @endphp
                                            {{-- @dd($plan_value,$p['product']['id'],$plan_value[$p['product']['id']]) --}}
                                            {{-- @dd($fea['plan_value'],$fea['plan'],$p['product']['id']); --}}
                                            <td
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular']==1) class="most-popular-package-body" @endif>
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                                <div class="most-popular-col">


                                                    @if(isset($plan_value[$p['product']['id']]) )
                                                    <span class="product-value">{{ $plan_value[$p['product']['id']]}}</span>
                                                    @else
                                                    <img src="{{ asset('public/assets/img/pricing-table-tick.png') }}"
                                                        alt="Tick">
                                                    @endif

                                                </div>
                                                @else
                                                @if(isset($plan_value[$p['product']['id']]) )
                                                <span class="product-value">{{ $plan_value[$p['product']['id']]}}</span>
                                                @else
                                                <img src="{{ asset('public/assets/img/pricing-table-tick.png') }}"
                                                    alt="Tick">
                                                @endif
                                                @endif
                                            </td>
                                            @elseif(isset($p['product']['is_popular']) && $p['product']['is_popular'] == 1)
                                            <td
                                                @if (isset($p['product']['is_popular']) && $p['product']['is_popular']==1) class="most-popular-package-body" @endif>
                                                <div class="most-popular-col">

                                                </div>


                                            </td>
                                            @else
                                            <td></td>
                                            @endif
                                            @endif
                                            @endforeach
                                        </tr>
                                        @endforeach
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    @php $i++ @endphp
                    @php $pp++ @endphp
                    @endforeach
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client-companies">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 title text-center">
                <h2>Companies Who Love Us</h2>
            </div>
            <div class="col-12 text-center">
                <div class="owl-carousel">
                    <div class="company-img img-1">
                        <img src="{{ asset('public/assets/img/physician-homes.png') }}" alt="physician-homes">
                    </div>
                    <div class="company-img img-2">
                        <img src="{{ asset('public/assets/img/result-driven.png') }}" alt="result-driven">
                    </div>
                    <div class="company-img img-3">
                        <img src="{{ asset('public/assets/img/streamlinerei.webp') }}" alt="streamlinerei">
                    </div>
                    <div class="company-img img-4">
                        <img src="{{ asset('public/assets/img/c2m.webp') }}" alt="c2m">
                    </div>
                    <div class="company-img img-5">
                        <img src="{{ asset('public/assets/img/heel-homes.png') }}" alt="heel-homes">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="talkToSalePopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email_addres">
            <div class="modal-body logo_side p-4">
                <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <h2 class="mt-3">Talk to our Sales Team</h2>
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
                        <div class="col-md-6 mb-3">
                            <div class="form-group position-relative">
                                <label for="">Contact No <span>*</span></label>
                                <input type="tel" class="form-control" name="contact_no"
                                    value="" id="c_contact_no"
                                    placeholder="(123) 343-3432"
                                    onkeypress="return isPhoneNumberKey(event)" />
                                <input type="hidden" name="country_code" id="country_code">
                            </div>
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
                            <label class="form-label">Company <span>*</span></label>
                            <input type="text" id="company_name_talk" name="company_name_talk" class="form-control"
                                placeholder="Enter Your StaffViz Company Name">
                            <span id="company-name-talk-error" class="form-error hide"></span>
                        </div>
                        <div class="col-12 form-group">
                            <label class="form-label">Reason <span>*</span></label>
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
                            <div class="ctr_btn mt-md-5 mt-4 mb-2">
                                <button type="button" class="email_btn talk_to_sales_close">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('js')
<script>
    window.dataLayer = window.dataLayer || [];

    const currentPage = window.location.pathname.split("/").pop();

    if (currentPage === "pricing-plans") {
        window.dataLayer.push({
            event: 'pricing',
        });
    }
</script>

<script>
    $(document).ready(function () {
        $.ajax({
            url: app_ajax_url + 'pricing-page-view',
            method: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            success: function (response) {
                if (response.success) {
                    console.log('Meta API response:', JSON.stringify(response.response, null, 4));
                } else {
                    console.log('API Error:', JSON.stringify(response.error || response.response, null, 4));
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
</script>

<script>
    var TALK_TO_SALES = '{{route("talk_to_sales")}}';
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" />
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
{{-- <script src="{{ asset('public/assets/js/company-register.js') }}"></script> --}}
<!-- Toastr -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>

    $(document).on('click','.plan-selected-sub',function(event){
        var href=$(this).data('href');
        console.log('href '+href)
        window.location.href=href;
    })
    // Pricing Plans Slider
    var planCount = $('.pricing-plan .owl-carousel .list-item').length;
    console.log('planCount:' + planCount);
    if (planCount > 3) {
        $('.table-buttons').addClass('more-4');
    }
    $('.pricing-plan #product-list').owlCarousel({
        loop: false,
        margin: 13,
        nav: true,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        navText: ["<img src='{{ asset('public/assets/img/pricing-prev-icon.png') }}' alt='Prev'>",
            "<img src='{{ asset('public/assets/img/pricing-next-icon.png') }}' alt='Next'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
        }
    });

    // Function to adjust carousel height based on the tallest visible item
    function adjustCarouselHeight($carousel) {
        var maxHeight = 0;

        // Loop through the visible items in the current carousel
        $carousel.find('.owl-item.active').each(function() {
            var itemHeight = $(this).outerHeight();
            if (itemHeight > maxHeight) {
                maxHeight = itemHeight;
            }
        });

        // Set the height of the overall carousel based on the tallest visible item
        $carousel.find('.owl-stage-outer').height(maxHeight);
    }

    // For .four-items carousel
    $('.pricing-plan .four-items').owlCarousel({
        autoHeight: true,
        center: false,
        loop: false,
        nav: true,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        navText: [
            "<img src='{{ asset('public/assets/img/pricing-prev-icon.png') }}' alt='Prev'>",
            "<img src='{{ asset('public/assets/img/pricing-next-icon.png') }}' alt='Next'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            }
        },
        // onTranslated: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .four-items')); // Adjust height on slide
        // },
        // onInitialized: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .four-items')); // Adjust height after initialization
        // }
    });

    // For .one-item carousel
    $('.pricing-plan .one-item').owlCarousel({
        center: true,
        loop: false,
        nav: true,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        navText: [
            "<img src='{{ asset('public/assets/img/pricing-prev-icon.png') }}' alt='Prev'>",
            "<img src='{{ asset('public/assets/img/pricing-next-icon.png') }}' alt='Next'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        },
        // onTranslated: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .one-item'));
        // },
        // onInitialized: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .one-item'));
        // }
    });

    // For .three-items carousel
    $('.pricing-plan .three-items').owlCarousel({
        center: false,
        loop: false,
        nav: true,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        navText: [
            "<img src='{{ asset('public/assets/img/pricing-prev-icon.png') }}' alt='Prev'>",
            "<img src='{{ asset('public/assets/img/pricing-next-icon.png') }}' alt='Next'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        },
        // onTranslated: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .three-items'));
        // },
        // onInitialized: function(event) {
        //     adjustCarouselHeight($('.pricing-plan .three-items'));
        // }
    });

    // Client Companies Slider
    $('.client-companies .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoHeight: true,
        responsive: {
            0: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 3,
                margin: 40,
            },
            992: {
                items: 5,
                margin: 40,
            },
            1200: {
                items: 5,
                margin: 60,
            },
        }

    });
    // Pricing table equal height head
    // var maxHeight = 0;
    // $('.packages-offer table .package-title').each(function(e) {
    //     var height = $(this).outerHeight();
    //     if (height > maxHeight) {
    //         maxHeight = height;
    //     }
    // });
    // $('.packages-offer table .package-title').css('height', maxHeight + 'px');
    // $('.packages-offer table .most-popular-package-head .head-box').css('height', (maxHeight + 6) + 'px');

    $(document).on('click', '.change-fre', function() {

        console.log('clicked')
        var class_id = $(this).data('class');
        $('.freq').css('display', 'none');
        $(class_id).css('display', 'block');

    });

    // Retrieve, modify, and save data
    var retrievedData = JSON.parse(localStorage.getItem("data"));
    if (retrievedData) {
        delete retrievedData.price_id; // Remove the email attribute
        localStorage.setItem("data", JSON.stringify(retrievedData));
    }


    /* Phone input libary */
    var input = document.querySelector("#c_contact_no");
    var iti_parent_class = document.querySelector(".iti");
    var country_code = document.querySelector("#country_code");

    var errorMsg = document.querySelector("#error-msg");
    var validMsg = document.querySelector("#valid-msg");

    var errorMap = [
        "Invalid number",
        "Invalid country code",
        "Too short",
        "Too long",
        "Invalid number",
    ];

    var iti = window.intlTelInput(document.getElementById("c_contact_no"), {
        // any initialisation options go here
        hiddenInput: "c_contact_no",
        separateDialCode: true,
        formatOnDisplay: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    });
    country_code.value = iti.getSelectedCountryData().dialCode;
    // listen to the telephone input for changes
    input.addEventListener("countrychange", function(e) {
        country_code.value = iti.getSelectedCountryData().dialCode;
    });

    function isPhoneNumberKey(evt) {
        if (input.value != '' && input.value != undefined && input.value.trim()) {
            if (iti.isValidNumber()) {

                $('#c_contact_no').removeClass('errorC');
                let element = $('#c_contact_no').next();
                if (element.hasClass('errorIntl')) {
                    element.remove();
                }
                company_phone_talk = iti.getSelectedCountryData().dialCode + input.value;
            } else {

                let element = $('#c_contact_no').next();
                if (element.hasClass('errorIntl')) {
                    element.remove();
                }
                $('#c_contact_no').addClass('errorC');
                var errorCode = iti.getValidationError();

                var errorMap = ["Invalid number", "Invalid country code", "Invalid number", "Invalid number", "Invalid number"];
                // Check if the errorCode is a valid index in errorMap array
                var emsg = (errorCode >= 0 && errorCode < errorMap.length) ? errorMap[errorCode] : "Invalid number";
                $('#c_contact_no').after('<span class="errorIntl">' + emsg + '</span>')

            }
        } else {
            $('#c_contact_no').removeClass('errorC');
            let element = $('#c_contact_no').next();
            if (element.hasClass('errorIntl')) {
                element.remove();
            }
        }

        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    $(document).on("click", ".talk_to_sales_price", function (e) {
        e.preventDefault();
        e.stopPropagation();

        $("#first_name_talk").val("");
        $("#c_contact_no").val("");
        $("#company_name_talk").val("");
        $(".compan_nm").text("");
        $("#company_email_talk").val("");
        $("#msg").val("");
        $("#talkToSalePopup").modal("show");
        $(".talk_to_sales_close").removeClass("disabled");
    });

    $(document).on("keyup keydown keypress copy paste cut", "#company_email_talk", function (e) {

        var email = $("#company_email_talk").val();
        if (email == "") {
            $("#company-email-talk-error")
                .html("This field is required")
                .removeClass("hide");
            $("#company_email_talk").addClass("form-error-input");
            flag = 0;
        } else {
            var emailValue = $("#company_email_talk").val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email matches the regex pattern
            if (emailRegex.test(emailValue)) {
                $("#company_email_talk").removeClass("form-error-input");
                $("#company-email-talk-error").html("").addClass("hide");
            } else {
                $("#company_email_talk").addClass("form-error-input");
                $("#company-email-talk-error")
                    .html("Invalid Email Address")
                    .removeClass("hide");
                flag = 0;
            }
        }
    });
    $(document).on("keyup keydown keypress copy paste cut", "#first_name_talk", function (e) {

        var firstName = $("#first_name_talk").val();
        if (firstName == "") {
            $("#first-name-talk-error")
                .html("This field is required")
                .removeClass("hide");
            $("#first_name_talk").addClass("form-error-input");

        } else {
            $("#first_name_talk").removeClass("form-error-input");
            $("#first-name-talk-error").html("").addClass("hide");
        }
    });

    $(document).on("keyup keydown keypress copy paste cut", "#company_name_talk", function (e) {
        var companyName = $("#company_name_talk").val();
        if (companyName == "") {
            $("#company-name-talk-error")
                .html("This field is required")
                .removeClass("hide");
            $("#company_name_talk").addClass("form-error-input");
            flag = 0;
        } else {
            $("#company_name_talk").removeClass("form-error-input");
            $("#company-name-talk-error").html("").addClass("hide");
        }
    });

    $(document).on("keyup keydown keypress copy paste cut", "#msg", function (e) {


        var msg = $("#msg").val();
        if (msg == "") {
            $("#msg-error")
                .html("This field is required")
                .removeClass("hide");
            $("#msg").addClass("form-error-input");

        } else {
            $("#msg").removeClass("form-error-input");
            $("#msg-error").html("").addClass("hide");
        }

    });

    $(document).on("click", ".talk_to_sales_close", function (e) {
        e.preventDefault();
        e.stopPropagation();

        (async () => {
            var flag = 1;
            var email = $("#company_email_talk").val();
            if (email == "") {
                $("#company-email-talk-error")
                    .html("This field is required")
                    .removeClass("hide");
                $("#company_email_talk").addClass("form-error-input");
                flag = 0;
            } else {
                var emailValue = $("#company_email_talk").val();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                // Check if the email matches the regex pattern
                if (emailRegex.test(emailValue)) {
                    $("#company_email_talk").removeClass("form-error-input");
                    $("#company-email-talk-error").html("").addClass("hide");
                } else {
                    $("#company_email_talk").addClass("form-error-input");
                    $("#company-email-talk-error")
                        .html("Invalid Email Address")
                        .removeClass("hide");
                    flag = 0;
                }
            }

            var firstName = $("#first_name_talk").val();
            if (firstName == "") {
                $("#first-name-talk-error")
                    .html("This field is required")
                    .removeClass("hide");
                $("#first_name_talk").addClass("form-error-input");
                flag = 0;
            } else {
                $("#first_name_talk").removeClass("form-error-input");
                $("#first-name-talk-error").html("").addClass("hide");
            }


            var companyName = $("#company_name_talk").val();
            if (companyName == "") {
                $("#company-name-talk-error")
                    .html("This field is required")
                    .removeClass("hide");
                $("#company_name_talk").addClass("form-error-input");
                flag = 0;
            } else {
                $("#company_name_talk").removeClass("form-error-input");
                $("#company-name-talk-error").html("").addClass("hide");
            }

            var company_phone_talk = '';
            // if ( input.value != '' && input.value != undefined && input.value.trim()) {
                if (iti.isValidNumber()) {

                  $('#c_contact_no').removeClass('errorC');
                    let element = $('#c_contact_no').next();
                    if (element.hasClass('errorIntl')) {
                        element.remove();
                    }
                     company_phone_talk = iti.getSelectedCountryData().dialCode+input.value;
                } else {

                    let element = $('#c_contact_no').next();
                    if (element.hasClass('errorIntl')) {
                        element.remove();
                    }
                    $('#c_contact_no').addClass('errorC');
                    var errorCode = iti.getValidationError();

                    var errorMap = ["Invalid number", "Invalid country code", "Invalid number", "Invalid number", "Invalid number"];
                   // Check if the errorCode is a valid index in errorMap array
                    if(input.value != '' && input.value != undefined && input.value.trim()){
                        var emsg = (errorCode >= 0 && errorCode < errorMap.length) ? errorMap[errorCode] : "Invalid number";
                    }else{
                        var   emsg='This field is required'
                    }

                    $('#c_contact_no').after('<span class="errorIntl">'+emsg+'</span>')
                    flag = 0;
                }
            // }else{
            //     $('#c_contact_no').removeClass('errorC');
            //     let element = $('#c_contact_no').next();
            //     if (element.hasClass('errorIntl')) {
            //         element.remove();
            //     }
            // }

            var noOfEmployees = $("#noOfEmployees").val();
            if (noOfEmployees == "") {
                $("#noOfEmployees-error")
                    .html("This field is required")
                    .removeClass("hide");
                $("#noOfEmployees").addClass("form-error-input");
                flag = 0;
            } else {
                $("#noOfEmployees").removeClass("form-error-input");
                $("#noOfEmployees-error").html("").addClass("hide");
            }
            var msg = $("#msg").val();
            if (msg == "") {
                $("#msg-error")
                    .html("This field is required")
                    .removeClass("hide");
                $("#msg").addClass("form-error-input");
                flag = 0;
            } else {
                $("#msg").removeClass("form-error-input");
                $("#msg-error").html("").addClass("hide");
            }
            if (flag) {
                $(this).addClass("disabled");
                var response = await talkToSales(
                    email,
                    firstName,
                    noOfEmployees,
                    companyName,
                    company_phone_talk,
                    msg
                );
                if (response.status === true) {
                    toastr.options = {
                        closeButton: true,
                        debug: false,
                        newestOnTop: false,
                        progressBar: false,
                        positionClass: "toast-top-right",
                        preventDuplicates: false,
                        showDuration: "1000",
                        hideDuration: "1000",
                        timeOut: "5000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                    };
                    toastr.success(
                        "Your query submitted. Our team will contact you soon"
                    );
                    $("#talkToSalePopup").modal("hide");
                } else {
                    toastr.options = {
                        closeButton: true,
                        debug: false,
                        newestOnTop: false,
                        progressBar: false,
                        positionClass: "toast-top-right",
                        preventDuplicates: false,
                        showDuration: "1000",
                        hideDuration: "1000",
                        timeOut: "5000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                    };
                    toastr.error("Something went wrong please try again");
                }
            }
        })();
    });

    async function talkToSales(
        email,
        firstName,
        noOfEmployees,
        companyName,
        phone,
        message
    ) {
        try {
            const requestData = {
                email: email,
                firstName: firstName,
                number_of_employees: noOfEmployees,
                companyName: companyName,
                phone: phone,
                message: message,
            };

            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(requestData), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(TALK_TO_SALES, requestOptions);
            const data = await response.json();
            $(".creloader").hide();
            return data;
            // Process the data here
        } catch (error) {
            console.error(
                "There was a problem with the fetch operation:",
                error
            );
            return false;
        }
    }

</script>
@endsection

@endsection
