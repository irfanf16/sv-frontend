{{-- @dd($product); --}}
<div class="plan-item-tabs owl-carousel @if ($formation_type == 'direct') d-none @endif">
    @php $pp=0 @endphp
    @foreach ($plans as $key => $plan)
        @if ($plan['published'] == 1)
            <a href="#p_{{ $plan['category_id'] }}" class="plan-item @if ( $plan['category_id'] == $product['product']['category_id'] ) active @endif" @if(isset($plan['frequency']) && array_key_first($plan['frequency']) !== null ) data-class=".pr-{{$plan['category_id']}}-{{array_key_first($plan['frequency'])}}" @endif>
                <img src="{{ asset('public/assets/img/project-tracker.png') }}"
                    alt="project-tracker">
                <span>{{ ucfirst($plan['title']) }}</span>
            </a>
    @php $pp++ @endphp
    @endif
    @endforeach
</div>




<div class="time-item-detail-tabs">
    @php $pp=0 @endphp
    @foreach ($plans  as $key1=>$plan)
    @if($plan['published'] == 1)
    <div class="time-item-detail @if ($plan['category_id'] == $product['product']['category_id'] ) active @endif " id="p_{{ $plan['category_id'] }}">
        <div class="time-item-tabs mt-md-0 mt-3 d-flex justify-content-center @if ($formation_type == 'direct') d-none @endif">
            @if(isset($plan['frequency']))
                @php $i=0 @endphp
                @foreach ($plan['frequency'] as  $key=>$fre)
                    <button type="button" class="time-item  @if($plan['category_id'] == $product['product']['category_id'])
                    @if($key == $product['product']['freq'])
                       active
                    @endif
                @else
                    @if($i == 0)
                       active
                    @endif
                @endif
            "  data-class=".pr-{{$plan['category_id']}}-{{$key}}"> {{ ucfirst($key) }}</button>
                @php $i++ @endphp
                @endforeach
            @endif
        </div>
        <div class="plan-item-detail-tabs">
            @if(isset($plan['frequency']))
            @php $i=0 @endphp
           @foreach ($plan['frequency'] as $key=>$fre)
            <div class="plan-item-detail

             @if($plan['category_id'] == $product['product']['category_id'])
                    @if($key == $product['product']['freq'])
                       active
                    @endif
                @else
                    @if($i == 0)
                       active
                    @endif
                @endif

            ">
            {{-- @if ($key == $product['product']['freq']) active @endif --}}
                <div class="row align-items-center mb-3 justify-content-between @if ($formation_type == 'direct') d-none @endif">
                    <div class="col-md-8 text">
                        <p>Choose a pricing plan that suits your needs.</p>
                    </div>
                    <div class="col-md-4 plan-box">
                        <select name="package_selected_price" @if($formation_type == 'direct') disabled @endif class="form-control packType package_selected_price pr-{{$plan['category_id']}}-{{$key}}">
                            @foreach ($fre as $p)
                            {{-- @dd(($p['price']['id']) == ($product['price']['id']),($p['price']['id']) , ($product['price']['id'])) --}}
                            @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                            <option data-plan="{{$p['product']['name']}}" data-type="{{$p['product']['type_of_price']}}" value="{{$p['price']['p_id'].'-'.$p['price']['unit_amount']}}" @if(($p['price']['id']) == ($product['price']['id'])) selected  @endif>{{$p['product']['name']}}</option>
                           @endif
                            @endforeach
                        </select>
                    </div>

                </div>
                @php $show_detail=0; @endphp
                @foreach ($fre as $fr=>$p)
                @if (isset($p['product']['public']) && $p['product']['public'] == 1)
                <div class="main-box  price_fea fea_{{$p['price']['p_id']}}_nn"
                @if($key == $product['product']['freq']  && $plan['category_id'] == $product['product']['category_id'])
                    @if($p['price']['id'] == $product['price']['id'])
                        style="display: block"
                    @else
                        style="display: none"
                    @endif
                @else
                    @if($show_detail == 0)
                        style="display: block"
                    @else
                        style="display: none"
                    @endif
                @endif
            >


                    <div class="d-flex justify-content-between kickoff align-items-center">
                        <div class="package-info d-flex align-items-center w-100">
                            <h5 class="w-50">{{$p['product']['name']}}</h5>
                            <div class="package-details w-50">
                                <span class="start-text">Starting From</span>
                                @php
                                $number = isset($p['price']) ? $p['price']['unit_amount'] : '0' ;
                                $integerPart = (int)floor($number);
                                $decimalPart = str_pad(number_format(($number - $integerPart) * 100, 0, '', ''), 2, '0', STR_PAD_LEFT);

                            @endphp

                                <h2>

                                    ${{$integerPart}} <span class="small-price">.{{$decimalPart}}
                                        @if ($plan['price_type'] == 'one_time_all_users')
                                        /month
                                        @else
                                        /user/month
                                        @endif
                                    </span>

                                    {{-- <span class="package-tooltip">
                                        <img src="{{ asset('public/assets/img/plan-package-tooltip-white.png')}}"
                                            alt="Info">
                                        <span class="package-tooltiptext">
                                            <p>1-5 Users<br><b>$10</b>/user</p>
                                            <p>6-10 Users<br><b>$9</b>/user</p>
                                            <p>11-20 Users<br><b>$8</b>/user</p>
                                        </span>
                                    </span> --}}
                                </h2>
                                @if(isset($p['price']['minimum_users']) && $p['price']['minimum_users'] > 0)<p>You will be charged for Min {{$p['price']['minimum_users']}} users</p>@endif
                            </div>
                        </div>
                        <img src="{{ asset('public/assets/img/icon-pricing.png') }}"
                            class="ticket-img" alt="ticket-img">
                    </div>
                    <div class="scroll-list">
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
                            {{$feature['feature_label']}}</li>

                           @endforeach

                        </ul>
                    </div>
                </div>
                 @php $show_detail++; @endphp
@endif
                @endforeach
            </div>
            @php $i++ @endphp
            @endforeach
            @endif
        </div>
    </div>
    @php $pp++ @endphp
    @endif
  @endforeach
</div>




{{-- <div class="main-box" >
<div class="d-flex kickoff align-items-center">
    <h2>{{$product['product']['name']}} ${{isset($product['price']) ? $product['price']['unit_amount'] : '0' }}<span>/ user</span></h2>
    <img src="{{ asset('public/assets/img/icon-pricing.png') }}">
</div>
<div class="scroll-list">
    <ul>
        @foreach ($product['features'] as $feature)
        <li>{{$feature['feature_label']}}</li>
       @endforeach
    </ul>
</div>
</div> --}}

<div class="ctr_btn my-md-5 my-4">

    @if ($old_user)
        <button type="submit" class="email_btn prev-btn back-to-old-company">Previous</button>
        <button type="submit" class="email_btn next_btn">Next</button>
    @else
        <button type="submit" class="email_btn prev-btn back-to-new-company">Previous</button>
        <button type="submit" class="email_btn next_btn">Next</button>
    @endif

</div>
<script>
    $(document).ready(function() {

      var  formation_type='{{$formation_type}}';
    //Plan item carousel
    var owl = $('.plan-item-tabs.owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        mouseDrag: false,
        touchDrag: false,
        navText: ["<img src='{{ asset('public/assets/img/pricing-prev-icon.png')}}' alt='Prev'>","<img src='{{ asset('public/assets/img/pricing-next-icon.png')}}' alt='Next'>"],
        responsive: {
            0: {
                items: 1
            },
            376: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            },
        },

    });

      // Function to scroll to the active item
    function scrollToActiveItem() {
        var activeItem = $('.plan-item.active').closest('.owl-item');
        if (activeItem.length) {
            var carousel = $('.plan-item-tabs');
            var activeItemIndex = activeItem.index();

            owl.trigger('to.owl.carousel', [activeItemIndex, 500, true]); // Scroll to the active item
        }
    }

    // Initialize active items on page load
    scrollToActiveItem();



    if(formation_type == null || formation_type !='direct'){

    $('#pricing-plan .plan-item').click(function (e) {
        // console.log($(this));
        e.preventDefault();
        var parent = $(this).parent().parent();
        parent.find('.plan-item').removeClass('active');
        // $('#pricing-plan .plan-item').removeClass('active');
        var target = $(this).attr('href');
        // Active Button
        $(this).addClass('active');
        // Active Text
        var priceTable = $(this).parents('.plan-item-tabs').next();
        priceTable.find('.time-item-detail.active').removeClass('active');
        priceTable.find('.time-item-detail' + target).addClass('active');
        // var scroll = $('.plan-item-detail-tabs .plan-item-detail' + target);
        // setTimeout(function () {
        //     $('body, html').animate({ scrollTop: scroll.offset().top - 50 }, 50);
        // }, 500);
    });
    //Plan Change Hide/Show
    $('#pricing-plan.email_addres .time-item').click(function () {
        var parent = $(this).parent();
        parent.find('.time-item').removeClass('active');
        var index = $(this).index() + 1;

        // Active Button
        $(this).addClass('active');
        // Active Text
        var parentSibling = parent.next();

        parentSibling.find('.plan-item-detail.active').removeClass('active');
        parentSibling.find('.plan-item-detail:nth-child(' + index + ')').addClass('active');
    });
    }else{
        $('.owl-prev').css('display','none')
        $('.owl-next').css('display','none')
    }

    let observer;

function initializeObserver() {
    if (observer) observer.disconnect(); // Disconnect any existing observer

    observer = new MutationObserver((mutationsList) => {
        mutationsList.forEach((mutation) => {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                const target = mutation.target;

                // Check if the `active` class was added
                if ($(target).hasClass('active')) {
                    console.log('Active class added to:', target);

                    // Trigger the change event
                    $(target).find('.package_selected_price').trigger('change');
                }
            }
        });
    });

    // Observe all current `.plan-item-detail` elements
    $('.plan-item-detail').each(function () {
        observer.observe(this, { attributes: true });
    });
}

// Call this whenever the page or a new section is loaded
$(document).on('click', 'a, button, .owl-item', function () {
    console.log('Page or section interaction detected');
    initializeObserver(); // Reinitialize observer for the updated DOM
});

});
</script>
