<style>
    .verify_coupon {
        background: #294dff;
        font-size: 14px;
        font-weight: 400;
        color: #fff;
        border: none;
        border-radius: 0px 5px 5px 0px;
        padding: 8px 25px;
        min-width: 92px;
    }

    .coupon {
        border-radius: 5px 0px 0px 5px;
    }

    .remove-error {
        font-size: 14px
    }

    .summary-box {
        background-color: white;
        padding-top: 20px;
        border-radius: 8px;
    }

    .summary-box .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* Align both left and right items vertically */
        padding: 8px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    /* Remove the bottom border from the last row */


    .summary-box .left-text {
        text-align: left;
        flex-grow: 1;
        display: flex;
        align-items: center;
        /* Ensure left-side text and icons are aligned */
    }

    .summary-box .price {
        text-align: right;
        min-width: 80px;
    }

    .summary-box .coupon {
        color: #0A9333;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .coupon-discount {
        color: #0A9333 !important;
        font-size: 14px !important;
        margin: 0 !important;
    }

    .discount-price {
        color: #0A9333 !important;
        font-size: 12px !important;
    }

    .summary-box .coupon span {
        margin-left: 5px;
    }

    .summary-box .tooltip-container {
        position: relative;
        display: inline-block;
    }

    .summary-box .tooltip-container:hover .tooltip {
        visibility: visible;
        opacity: 1;
    }

    .summary-box .tooltip {
        visibility: hidden;
        background-color: #2196f3;
        color: white;
        text-align: center;
        border-radius: 4px;
        padding: 6px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        font-size: 12px;
        width: 200px;
    }

    .summary-box .tooltip::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: #2196f3 transparent transparent transparent;
    }

    .summary-box .subtotal {
        font-size: 18px;
        font-weight: bold;
    }

    .price_style {
        text-align: end;
        color: black;
        margin-top: 5%;
    }

    .subtotal-price {
        text-align: end;
        color: black;
    }

    .final-price {
        text-align: end;
        color: black;
        font-weight: 100;
    }
</style>
<p>Fill out your payment details</p>
<form class="m-3 validate_post_form" id="payment-form" method="post" action="">
    {{ csrf_field() }}

    <div class="form-row">
        <div class="form-group col-md-12">
            <!-- Stripe.js injects the Payment Element -->
            <div id="payment-element"></div>
            <span id="card-errors" class="d-none text-danger"></span> <!-- Add this line for card errors -->

            @if (!empty($user_cards_list))
                <button type="button" class="btn update-payment-btn new_card_to_old_card">Update payment method</button>
            @endif
        </div>
    </div>

    @if ($company_type == 'ncr' || $company_type == 'ancr')
        <!-- Move the coupon input section after Stripe form -->
        <div class="form-group pt-2">
            <!-- Coupon input section initially hidden -->
            <div class="form-group pt-2 coupon-section d-none">
                <div for="coupon-code" style="color: #050505">Coupon Code</div>
                <div class="d-flex">
                    <input type="text" id="coupon-code" name="coupon" class="form-control coupon"
                        placeholder="Enter coupon code">
                    <button type="button" id="verify_coupon" class="email_btn verify_coupon">Apply</button>
                </div>
                <div class="d-flex w-100">
                    <div class="float-left w-75" style="color: #050505">
                        <div class="text-danger remove-error" id="coupon-error"></div>
                    </div>
                    <div class="float-right w-25 subtotal-price">
                        <div class="text-danger remove-error d-none" style="cursor: pointer;" id="remove_coupon">Remove
                            Coupon</div> <!-- Initially hidden -->
                    </div>
                </div>
                <div class="coupon-html"></div>
            </div>
        </div>
    @endif
    <!-- Initially hidden button section -->
    <div class="ctr_btn my-md-5 my-4 d-none" id="button-section">
        <button type="button" class="email_btn prev-btn">Previous</button>
        <button type="submit" id="submit" class="email_btn submit_btn">Submit</button>
    </div>

    @if (Illuminate\Support\Facades\Cookie::has('message'))
        <div class="mb-3">
            <div class="text-danger remove-error"> {{ Illuminate\Support\Facades\Cookie::get('message') }}</div>
        </div>
        @php
            Illuminate\Support\Facades\Cookie::queue(Illuminate\Support\Facades\Cookie::forget('message'));
        @endphp
    @endif

    <div class="" id="spinner"></div>
    <div class="" id="button-text"></div>
</form>

<script>
    $(document).ready(function() {

        var intent_id = '{{ $intents['id'] }}';
        var clientSecret = '{{ $intents['client_secret'] }}';
        var isCouponValid = false;
        var isStripeValid = false;
        var company_type = '{{ $company_type }}';

        const stripe = Stripe('{{ getenv('STRIPE_PRIVATE_KEY') }}');
        const elements = stripe.elements({
            clientSecret
        });
        $("input[name=intent]").val(intent_id);

        // Create the payment element (Stripe card fields)
        const paymentElementOptions = {
            layout: "tabs"
        };
        const paymentElement = elements.create("payment", paymentElementOptions);
        paymentElement.mount("#payment-element");

        // Show the button and coupon section after Stripe element is initialized
        paymentElement.on('ready', function() {
            $('#button-section').removeClass('d-none');
            $('.coupon-section').removeClass('d-none'); // Coupon section shows along with the button
            toggleSubmitButton();
            toggleCouponApplyButton();
        });

        // Stripe field validation check
        paymentElement.on('change', function(event) {
            if (event.complete) {
                isStripeValid = true; // Stripe validation passed
            } else {
                isStripeValid = false; // Stripe validation failed
            }

            if (event.error) {
                highlightErrorFields(event.error);
            } else {
                $('#card-errors').text('');
            }

            // Toggle both the submit button and coupon apply button based on conditions
            toggleSubmitButton();
            toggleCouponApplyButton();
        });

        // Handle form submission
        document.querySelector("#payment-form").addEventListener("submit", handleSubmit);

        async function handleSubmit(e) {
            e.preventDefault();
            if (company_type == 'ncr' || company_type == 'ancr') {
                if ($("#coupon-code").val() !== "" && !isCouponValid) {
                    $('#coupon-error').html('Please apply a valid coupon before proceeding.');
                    $('#coupon-error').addClass('text-danger');
                    $('#coupon-error').removeClass('text-success');
                    return false;
                }
            }

            setLoading(true);

            const {
                error
            } = await stripe.confirmSetup({
                elements,
                confirmParams: {
                    return_url: '{{ route('subscribe_confirm_return') }}?enc_data={{ $enc_data }}&coupon=' +
                        $("#coupon-code").val(),
                },
            });

            if (error) {
                if (error.type === "card_error" || error.type === "validation_error") {
                    highlightErrorFields(error);
                } else {
                    showMessage("An unexpected error occurred.");
                }
            } else {
                $('#card-errors').addClass('d-none');
                $('.remove-error').addClass('d-none');
                localStorage.removeItem('data');
            }

            setLoading(false);
        }

        function highlightErrorFields(error) {
            $('#card-errors').text(error.message).removeClass('d-none');
        }

        function setLoading(isLoading) {
            if (isLoading) {
                $('.loading-screen,.overlay-section').removeClass('d-none');
                $('.company-register-section').addClass('dull-section');
                $("#submit").prop("disabled", true);
                $("#spinner").removeClass("hidden");
                $("#button-text").addClass("hidden");
            } else {
                $('.loading-screen,.overlay-section').addClass('d-none');
                $('.company-register-section').removeClass('dull-section');
                $("#submit").prop("disabled", false);
                $("#spinner").addClass("hidden");
                $("#button-text").removeClass("hidden");
            }
        }

        if (company_type == 'ncr' || company_type == 'ancr') {
            // Coupon apply logic
            $(document).on("click", "#verify_coupon", function(e) {
                (async () => {
                    const couponCode = $("#coupon-code").val();
                    if (couponCode === "" || couponCode === undefined) {
                        $('#coupon-error').html('Please enter a coupon code to proceed!')
                            .addClass(
                                'text-danger').removeClass('text-success');
                        return false;
                    }

                    var response = await applyCoupon();
                    if (response.status === true) {
                        isCouponValid = true;
                        $('.coupon-html').html(response.html);
                        $('#coupon-error').html(
                                'Congratulations! Your coupon code applied successfully')
                            .addClass('text-success').removeClass('text-danger');
                        $('#remove_coupon').removeClass('d-none'); // Show remove coupon option
                        $('#coupon-code').attr('readonly', 'readonly');
                        $("#verify_coupon").prop("disabled", true);
                    } else {
                        isCouponValid = false;
                        $('.coupon-html').html('');
                        $('#coupon-error').html('This coupon code is no longer valid.')
                            .addClass('text-danger').removeClass('text-success');
                        toastr.error("Something went wrong, please try again");
                        $('#coupon-code').removeAttr('readonly');
                        $("#verify_coupon").prop("disabled", false);
                    }

                    toggleSubmitButton();
                })();
            });

            // button logic
            $(document).on("input keyup keydown copy paste", "#coupon-code", function() {

                if ($("#coupon-code").val() == "" || $("#coupon-code").val() == undefined) {
                    $('#coupon-error').html(''); // Clear any error messages
                }

                isCouponValid = false;
                toggleSubmitButton();
                toggleCouponApplyButton();


            });

            // Remove coupon logic
            $(document).on("click", "#remove_coupon", function() {
                $("#coupon-code").val(""); // Clear the coupon code input
                $('.coupon-html').html(''); // Remove coupon HTML
                $('#coupon-error').html(''); // Clear any error messages
                isCouponValid = false;
                $('#remove_coupon').addClass('d-none'); // Hide remove coupon option
                $('#coupon-code').removeAttr('readonly');
                // $("#verify_coupon").prop("disabled", false);
                toggleSubmitButton();
                toggleCouponApplyButton();
            });


            var APPLY_COUPON = '{{ route('apply.coupon') }}';

            async function applyCoupon() {
                try {
                    const couponCode = $("#coupon-code").val();
                    const requestData = {
                        coupon: couponCode,
                        data: '{{ $enc_data }}'
                    };

                    const requestOptions = {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify(requestData),
                    };

                    $(".creloader").show();
                    const response = await fetch(APPLY_COUPON, requestOptions);
                    const res = await response.json();
                    $(".creloader").hide();
                    return res;
                } catch (error) {
                    console.error("There was a problem with the fetch operation:", error);
                    return false;
                }
            }
        }
        // Toggle the submit button based on Stripe validation and coupon state
        function toggleSubmitButton() {
            if (company_type == 'ncr' || company_type == 'ancr') {
                if (isStripeValid && ($("#coupon-code").val() === "" || isCouponValid)) {
                    $("#submit").prop("disabled", false);
                } else {
                    $("#submit").prop("disabled", true);

                }

            } else {
                if (isStripeValid) {
                    $("#submit").prop("disabled", false);
                } else {
                    $("#submit").prop("disabled", true);

                }
            }

        }

        // Toggle the Apply button based on Stripe validation and coupon code presence
        function toggleCouponApplyButton() {
            if (company_type == 'ncr' || company_type == 'ancr') {
                if (isStripeValid && $("#coupon-code").val() !== "") {
                    $("#verify_coupon").prop("disabled",
                        false); // Enable Apply button if both conditions are met
                } else {
                    $("#verify_coupon").prop("disabled", true); // Disable Apply button otherwise
                }
            } else {
                if (isStripeValid) {
                    $("#verify_coupon").prop("disabled",
                        false); // Enable Apply button if both conditions are met
                } else {
                    $("#verify_coupon").prop("disabled", true); // Disable Apply button otherwise
                }
            }
        }

        // Initially disable buttons until Stripe is initialized
        toggleSubmitButton();
        toggleCouponApplyButton();
    });
</script>
