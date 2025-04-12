var hide_card_details;
var price_id;
var USER_VERIFY_ENDPOINT;
var ADD_USER;
var GET_SELECTED_PLAN;
var PAYMENT_CARD_INTENT;
var AUTHENTICATE_USER;
var PAYMENT_FROM_OLD_CARD;
var SUBSCRIPTION_CONFIRMED;
var TALK_TO_SALES;
var PLAN_ADD_WITHOUT_CARD;
var encryptionKey;
var browserName;
var osInfo;
var user_id = "";
var user_email = "";
var first_name = "";
var last_name = "";
var company_name = "";

var user_company_id = "";
var user_stripe_customer_id = "";

var data_company_id = "";
var company_price_id = "";
var company_subscription_id = "";
var company_type = "ncr"; //  (nrc)new_company_register    (tta)trailing_to_active    //   (eta) expiry_to_active
var price_amount;

// datalayer
var plan_name;
var payment_type;
var plan_price;


$(document).ready(function () {

    var localStorageData = JSON.parse(localStorage.getItem("data"));

    function loadStepsData() {

        console.log("data cached");
        $("#email").val(localStorageData.email ? localStorageData.email : "");
        $("#loginEmail").val(
            localStorageData.email ? localStorageData.email : ""
        );
        $("#readEmail").val(
            localStorageData.email ? localStorageData.email : ""
        );
        $("#first-name").val(
            localStorageData.first_name ? localStorageData.first_name : ""
        );
        $("#last-name").val(
            localStorageData.last_name ? localStorageData.last_name : ""
        );
        $("#company-name").val(
            localStorageData.company_name ? localStorageData.company_name : ""
        );
        $("#password").val(
            localStorageData.password ? localStorageData.password : ""
        );
        $("#confirmPassword").val(
            localStorageData.password ? localStorageData.password : ""
        );
        $("#loginPassword").val(
            localStorageData.password ? localStorageData.password : ""
        );
        $("#newCompany-name").val(
            localStorageData.newCompany_name
                ? localStorageData.newCompany_name
                : ""
        );

        // parameters values
        company_type = localStorageData.company_type
            ? localStorageData.company_type
            : "ncr";
        user_id = localStorageData.user_id ? localStorageData.user_id : "";
        user_email = localStorageData.email ? localStorageData.email : "";
        first_name = localStorageData.first_name
            ? localStorageData.first_name
            : "";
        last_name = localStorageData.last_name
            ? localStorageData.last_name
            : "";
        company_name = localStorageData.company_name
            ? localStorageData.company_name
            : "";
        company_subscription_id = localStorageData.company_subscription_id
            ? localStorageData.company_subscription_id
            : "";
        company_price_id = localStorageData.company_price_id
            ? localStorageData.company_price_id
            : "";
        data_company_id = localStorageData.data_company_id
            ? localStorageData.data_company_id
            : "";


            if( localStorageData.hide_card_details == true){


                $('#plan_add_without_card').addClass('plan_add_without_card');
                $('#plan_add_without_card').removeClass('next_btn');
                $('.payment_detail_side_menu').addClass('d-none')
                $('.countChange').text('5. Setup Successful')
                $('.step_no').text('5')
                $('#plan_add_without_card').text('Save');

               }else{


                   $('#plan_add_without_card').removeClass('plan_add_without_card');
                   $('#plan_add_without_card').addClass('next_btn');
                   $('.payment_detail_side_menu').removeClass('d-none')
                   $('.countChange').text('6. Setup Successful')
                   $('.step_no').text('6')
                   $('#plan_add_without_card').text('Next');

            }


           if(localStorageData.event_step_1_trigger == false){

                window.dataLayer.push({
                    'event': 'trial_signup',
                    'plan_name':plan_name,
                    'payment_type':payment_type,
                    'plan_price':plan_price,
                });

                if(plan_price == 0){
                    window.dataLayer.push({
                        'event': 'free_plan',
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    });

                    console.log({
                        'event': 'free_plan',
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    })

                    $.ajax({
                        url: META_PIXEL,
                        method: 'POST',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                        },
                        data: { // Corrected to `data` for AJAX
                            'event': 'free_plan',
                            'plan_name':plan_name,
                            'payment_type':payment_type,
                            'plan_price':plan_price,
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
                }

                localStorageData.event_step_1_trigger=true;
                localStorage.setItem("data", JSON.stringify(localStorageData));
                console.log({
                    'event': 'trial_signup',
                    'plan_name':plan_name,
                    'payment_type':payment_type,
                    'plan_price':plan_price,
                })

                $.ajax({
                    url: META_PIXEL,
                    method: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                    },
                    data: { // Corrected to `data` for AJAX
                        event: 'trial_signup',
                        plan_name: plan_name,
                        payment_type: payment_type,
                        plan_price: plan_price
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

           }
    }

    if (localStorageData) {

        localStorageData.price_id = price_id;
        localStorageData.hide_card_details = hide_card_details;

        loadStepsData();

        setTimeout(function (e) {
            var step = localStorageData.step;
            // if (!localStorageData.price_id) {
            //     localStorageData.price_id = price_id;
            // }
            $(".email_addres").removeClass("active");
            $(step).addClass("active");

            (async () => {
                if (step == ".pricing_plan_section") {
                    var planResponse = await getSelectedPlan(
                        localStorageData.price_id
                    );
                    if (planResponse) {
                        $("#selected_plan_detail").html(planResponse.data);
                    }
                } else if (step == ".payment_details_section") {
                    // load payment card
                    paymentCardIntent(
                        user_id,
                        user_email,
                        first_name,
                        last_name,
                        price_id,
                        company_name,
                        "new_card",
                        company_subscription_id,
                        company_price_id,
                        data_company_id
                    );
                } else if (step == ".active_trials_section") {
                    $("#users_registered_company").html(
                        localStorageData.current_trials
                    );
                }
            })();
            $("#newCompany-name").val(
                localStorageData.newCompany_name
                    ? localStorageData.newCompany_name
                    : ""
            );
        }, 1000);
    } else {
        $("#email_addres").addClass("active");
        var retrievedData = JSON.parse(localStorage.getItem("data"));
        if (!retrievedData) {
            retrievedData = {}; // Fallback to an empty object if no data is found
        }
        if (!localStorageData) {
            localStorageData = {
                step: ".email_section",
                price_id: price_id,
                company_type: "ncr",
                hide_card_details: hide_card_details,
                event_step_1_trigger: retrievedData.event_step_1_trigger || false,
                event_step_2_trigger: retrievedData.event_step_2_trigger || false,
                event_step_5_trigger: retrievedData.event_step_5_trigger || false,
                event_success_trigger: retrievedData.event_success_trigger || false,
                plan_name: plan_name,
                payment_type: payment_type,
                plan_price: plan_price,
            };
        }

        localStorage.setItem("data", JSON.stringify(localStorageData));
        loadStepsData();
    }

    // Talk to Sale Popup
    $("#talkToSalePopup .submit_btn").click(function (e) {
        e.preventDefault();
    });

    $("#privacyCheck").change(function (e) {
        var parent = $(this).parents(".email_addres");
        var nextBtn = parent.find(".next_btn");

        if ($(this).is(":checked")) {
            nextBtn.removeClass("disabled");
        } else {
            nextBtn.addClass("disabled");
        }
        var nextBtn = parent.find(".plan_add_without_card");
        if ($(this).is(":checked")) {
            nextBtn.removeClass("disabled");
        } else {
            nextBtn.addClass("disabled");
        }
    });

    $("#termsConditions").change(function (e) {
        var parent = $(this).parents(".email_addres");
        var nextBtn = parent.find(".submit_btn");
        var talk_to_sales_close = parent.find(".talk_to_sales_close");
        if ($(this).is(":checked")) {
            nextBtn.removeClass("disabled");
            talk_to_sales_close.removeClass("disabled");
        } else {
            nextBtn.addClass("disabled");
            talk_to_sales_close.addClass("disabled");
        }
    });

    $(".password_show").click(function () {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $("#password");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $(".password_showC").click(function () {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $("#confirmPassword");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $(".loginPassword_show").click(function () {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $("#loginPassword");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    // validation
    $(document).on("input", "#email", function (e) {
        var email = $("#email").val();
        if (email == "") {
            $("#email-error")
                .html("This field is required")
                .removeClass("hide");
            $("#email").addClass("form-error-input");
            $("#email-error").html("Invalid Email Address").removeClass("hide");
        } else {
            var emailValue = $("#email").val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email matches the regex pattern
            if (emailRegex.test(emailValue)) {
                $("#email").removeClass("form-error-input");
                $("#email-error").html("").addClass("hide");
                $("#email").val(email);

                var retrievedData = JSON.parse(localStorage.getItem("data"));
                localStorage.removeItem("data");
                localStorageData = {
                    step: ".email_section",
                    price_id: price_id,
                    company_type: "ncr",
                    hide_card_details: hide_card_details,
                    event_step_1_trigger: retrievedData.event_step_1_trigger || false,
        event_step_2_trigger: retrievedData.event_step_2_trigger || false,
        event_step_5_trigger: retrievedData.event_step_5_trigger || false,
        event_success_trigger: retrievedData.event_success_trigger || false,
                    plan_name: plan_name,
                    payment_type: payment_type,
                    plan_price: plan_price,
                };
                localStorageData.email = email;
                localStorage.setItem("data", JSON.stringify(localStorageData));
                loadStepsData();
            } else {
                $("#email").addClass("form-error-input");
                $("#email-error")
                    .html("Invalid Email Address")
                    .removeClass("hide");
            }
        }
    });

    $(document).on("input", "#first-name", function (e) {
        var firstName = $("#first-name").val();
        if (firstName == "") {
            $("#first-name-error")
                .html("This field is required")
                .removeClass("hide");
            $("#first-name").addClass("form-error-input");
        } else {
            $("#first-name").removeClass("form-error-input");
            $("#first-name-error").html("").addClass("hide");
            localStorageData.first_name = firstName;
            localStorage.setItem("data", JSON.stringify(localStorageData));
        }
    });

    $(document).on("input", "#last-name", function (e) {
        var lastName = $("#last-name").val();
        if (lastName == "") {
            $("#last-name-error")
                .html("This field is required")
                .removeClass("hide");
            $("#last-name").addClass("form-error-input");
        } else {
            $("#last-name").removeClass("form-error-input");
            $("#last-name-error").html("").addClass("hide");
            localStorageData.last_name = lastName;
            localStorage.setItem("data", JSON.stringify(localStorageData));
        }
    });

    $(document).on("input", "#company-name", function (e) {
        var companyName = $("#company-name").val();
        if (companyName == "") {
            $("#company-name-error")
                .html("This field is required")
                .removeClass("hide");
            $("#company-name").addClass("form-error-input");
        } else {
            $("#company-name").removeClass("form-error-input");
            $("#company-name-error").html("").addClass("hide");

            localStorageData.company_name = companyName;
            localStorage.setItem("data", JSON.stringify(localStorageData));
        }
    });

    $(document).on("input", "#password", function (e) {
        var password = $("#password").val();
        if (password == "") {
            $("#password-error")
                .html("This field is required")
                .removeClass("hide");
            $("#password").addClass("form-error-input");
        } else {
            if (password != "" && password.length < 8) {
                $("#password-error")
                    .html("Please enter at least 8 characters.")
                    .removeClass("hide");
                $("#password").addClass("form-error-input");
            } else {
                $("#password").removeClass("form-error-input");
                $("#password-error").html("").addClass("hide");
                localStorageData.password = password;
                localStorage.setItem("data", JSON.stringify(localStorageData));
            }
        }
    });

    $(document).on("input", "#confirmPassword", function (e) {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (confirmPassword == "") {
            $("#confirmPassword-error")
                .html("This field is required")
                .removeClass("hide");
            $("#confirmPassword").addClass("form-error-input");
        } else {
            $("#confirmPassword").removeClass("form-error-input");
            $("#confirmPassword-error").html("").addClass("hide");
        }

        if (confirmPassword != "" && password != "") {
            if (password != confirmPassword) {
                $("#confirmPassword-error")
                    .html("Password must be same")
                    .removeClass("hide");
                $("#confirmPassword").addClass("form-error-input");
            } else {
                $("#confirmPassword").removeClass("form-error-input");
                $("#confirmPassword-error").html("").addClass("hide");
            }
        }
    });

    $(document).on("input", "#loginPassword", function (e) {
        var password = $("#loginPassword").val();
        if (password == "") {
            $("#loginPassword-error")
                .html("This field is required")
                .removeClass("hide");
            $("#loginPassword").addClass("form-error-input");
        } else if (password != "" && password.length < 8) {
            $("#loginPassword-error")
                .html("Please enter at least 8 characters.")
                .removeClass("hide");
            $("#loginPassword").addClass("form-error-input");
        } else {
            $("#loginPassword").removeClass("form-error-input");
            $("#loginPassword-error").html("").addClass("hide");
        }
    });

    $(document).on("input", "#loginEmail", function (e) {
        var email = $("#loginEmail").val();
        if (email == "") {
            $("#loginEmail-error")
                .html("This field is required")
                .removeClass("hide");
            $("#loginEmail").addClass("form-error-input");
        } else {
            var emailValue = $("#loginEmail").val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email matches the regex pattern
            if (emailRegex.test(emailValue)) {
                $("#loginEmail").removeClass("form-error-input");
                $("#loginEmail-error").html("").addClass("hide");
                // $('#trailEmail').val(email);
                var retrievedData = JSON.parse(localStorage.getItem("data"));
                localStorage.removeItem("data");
                localStorageData = {
                    step: ".email_section",
                    price_id: price_id,
                    company_type: "ncr",
                    hide_card_details: hide_card_details,
                    event_step_1_trigger: retrievedData.event_step_1_trigger || false,
                    event_step_2_trigger: retrievedData.event_step_2_trigger || false,
                    event_step_5_trigger: retrievedData.event_step_5_trigger || false,
                    event_success_trigger: retrievedData.event_success_trigger || false,
                    plan_name: plan_name,
                    payment_type: payment_type,
                    plan_price: plan_price,
                };
                localStorageData.email = email;
                localStorage.setItem("data", JSON.stringify(localStorageData));
                loadStepsData();
            } else {
                $("#loginEmail").addClass("form-error-input");
                $("#loginEmail-error")
                    .html("Invalid Email Address")
                    .removeClass("hide");
            }
        }
    });

    $(document).on("input", "#newCompany-name", function (e) {
        var newCompanyName = $("#newCompany-name").val();
        if (newCompanyName == "") {
            $("#newCompany-name-error")
                .html("This field is required")
                .removeClass("hide");
            $("#newCompany-name").addClass("form-error-input");
        } else {
            $("#newCompany-name").removeClass("form-error-input");
            $("#newCompany-name-error").html("").addClass("hide");
            localStorageData.newCompany_name = newCompanyName;
            localStorage.setItem("data", JSON.stringify(localStorageData));
        }
    });

    $(document).on("click", ".prev-btn", function (e) {
        // $('.email_addres .next_btn').click(function (e) {
        e.preventDefault();
        var flag = 1;
        var parent = $(this).parents(".email_addres");
        var parentID = parent.attr("id");

        (async () => {
            console.log("parentID   " + parentID);
            if (parentID == "email_addres") {
                $("#personal-details").addClass("active");
                $("#pricing-plan").removeClass("active");
                localStorageData.step = ".personal_details_section";
            } else if (parentID == "pricing-plan") {
                if ($(this).hasClass("back-to-old-company")) {
                    var retrievedData = JSON.parse(
                        localStorage.getItem("data")
                    );
                    $("#active-trials").addClass("active");
                    $("#pricing-plan").removeClass("active");
                    $("#users_registered_company").html(
                        retrievedData.current_trials
                    );
                    localStorageData.step = ".active_trials_section";
                } else if ($(this).hasClass("back-to-new-company")) {
                    localStorageData.step = ".personal_details_section";
                    $("#pricing-plan").removeClass("active");
                    $("#personal-details").addClass("active");
                    // $("#active-trials").addClass("active");
                    var retrievedData = JSON.parse(
                        localStorage.getItem("data")
                    );
                    $("#users_registered_company").html(
                        retrievedData.current_trials
                    );
                }
            } else if (parentID == "terms-conditions") {
                localStorageData.step = ".pricing_plan_section";
                var retrievedData = JSON.parse(localStorage.getItem("data"));
                // $("#selected_plan_detail").html(retrievedData.selected_plan_detail);
                var planResponse = await getSelectedPlan(
                    retrievedData.price_id
                );
                if (planResponse) {
                    $("#selected_plan_detail").html(planResponse.data);
                }
                $("#pricing-plan").addClass("active");
                $("#terms-conditions").removeClass("active");
            } else if (parentID == "email-login-page") {
                localStorageData.step = ".email_section";
                $("#email-login-page").removeClass("active");
                $("#email_addres").addClass("active");
            } else if (parentID == "active-trials") {
                localStorageData.step = ".email_login_page_section";
                $("#email-login-page").addClass("active");
                $("#active-trials").removeClass("active");
            } else if (parentID == "personal-details") {
                localStorageData.step = ".email_section";
                $("#personal-details").removeClass("active");
                $("#email_addres").addClass("active");
            } else if (parentID == "payment-details") {
                localStorageData.step = ".terms_conditions_section";
                $("#payment-details").removeClass("active");
                $("#terms-conditions").addClass("active");
            }

            localStorage.setItem("data", JSON.stringify(localStorageData));
        })();
    });

    $(document).on("click", ".email_addres .next_btn", function (e) {
        // $('.email_addres .next_btn').click(function (e) {
        e.preventDefault();
        var flag = 1;
        var parent = $(this).parents(".email_addres");
        var parentID = parent.attr("id");

        (async () => {
            if (parentID == "email_addres") {
                var email = $("#email").val();
                if (email == "") {
                    $("#email-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#email").addClass("form-error-input");
                    $("#email-error")
                        .html("Invalid Email Address")
                        .removeClass("hide");
                    flag = 0;
                } else {
                    var emailValue = $("#email").val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Check if the email matches the regex pattern
                    if (emailRegex.test(emailValue)) {
                        $("#email").removeClass("form-error-input");
                        $("#email-error").html("").addClass("hide");
                        $("#email").val(email);

                        localStorageData.email = email;
                        localStorage.setItem(
                            "data",
                            JSON.stringify(localStorageData)
                        );
                    } else {
                        $("#email").addClass("form-error-input");
                        $("#email-error")
                            .html("Invalid Email Address")
                            .removeClass("hide");
                        flag = 0;
                        console.log("invalid input");
                    }
                }

                if (flag) {
                    var response = await userVerify(email);
                    if (response.status === true) {
                        if (response.user_already_exist) {
                            $("#loginEmail").val(email);
                            $("#email_addres").removeClass("active");
                            $("#email-login-page").addClass("active");

                            localStorageData.step = ".email_login_page_section";
                        } else {
                            user_id = response.user.id;
                            localStorageData.user_id = user_id;
                            localStorageData.step = ".personal_details_section";
                            $("#email_addres").removeClass("active");
                            $("#personal-details").addClass("active");
                            $("#readEmail").val(email);
                        }
                    } else if (response.status === false) {
                        $("#email_addres").removeClass("active");
                        $("#personal-details").addClass("active");
                        $("#readEmail").val(email);
                        localStorageData.step = ".personal_details_section";
                    }
                    localStorage.setItem(
                        "data",
                        JSON.stringify(localStorageData)
                    );
                }
            } else if (parentID == "personal-details") {
                var email = $("#readEmail").val();
                if (email == "") {
                    $("#readEmail-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#readEmail").addClass("form-error-input");
                    flag = 0;
                } else {
                    var emailValue = $("#readEmail").val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Check if the email matches the regex pattern
                    if (emailRegex.test(emailValue)) {
                        $("#readEmail").removeClass("form-error-input");
                        $("#readEmail-error").html("").addClass("hide");
                        $("#email").val(email);
                        console.log("correct input");
                    } else {
                        $("#readEmail").addClass("form-error-input");
                        $("#readEmail-error")
                            .html("Invalid Email Address")
                            .removeClass("hide");
                        flag = 0;
                        console.log("invalid input");
                    }
                }

                var firstName = $("#first-name").val();
                if (firstName == "") {
                    $("#first-name-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#first-name").addClass("form-error-input");
                    flag = 0;
                } else {
                    $("#first-name").removeClass("form-error-input");
                    $("#first-name-error").html("").addClass("hide");

                    localStorageData.first_name = firstName;
                }

                var lastName = $("#last-name").val();
                if (lastName == "") {
                    $("#last-name-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#last-name").addClass("form-error-input");
                    flag = 0;
                } else {
                    $("#last-name").removeClass("form-error-input");
                    $("#last-name-error").html("").addClass("hide");
                    localStorageData.last_name = lastName;
                }

                var companyName = $("#company-name").val();
                if (companyName == "") {
                    $("#company-name-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#company-name").addClass("form-error-input");
                    flag = 0;
                } else {
                    $("#company-name").removeClass("form-error-input");
                    $("#company-name-error").html("").addClass("hide");
                    localStorageData.company_name = companyName;
                }

                var password = $("#password").val();
                if (password == "") {
                    $("#password-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#password").addClass("form-error-input");
                    flag = 0;
                } else {
                    if (password != "" && password.length < 8) {
                        $("#password-error")
                            .html("Please enter at least 8 characters.")
                            .removeClass("hide");
                        $("#password").addClass("form-error-input");
                        flag = 0;
                    } else {
                        $("#password").removeClass("form-error-input");
                        $("#password-error").html("").addClass("hide");
                        localStorageData.password = password;
                    }
                }

                var confirmPassword = $("#confirmPassword").val();
                if (confirmPassword == "") {
                    $("#confirmPassword-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#confirmPassword").addClass("form-error-input");
                    flag = 0;
                } else {
                    $("#confirmPassword").removeClass("form-error-input");
                    $("#confirmPassword-error").html("").addClass("hide");
                }

                if (confirmPassword != "" && password != "") {
                    if (password != confirmPassword) {
                        $("#password-error,#confirmPassword-error")
                            .html("Password must be same")
                            .removeClass("hide");
                        $("#password,#confirmPassword").addClass(
                            "form-error-input"
                        );
                        flag = 0;
                    } else {
                        $("#password,#confirmPassword").removeClass(
                            "form-error-input"
                        );
                        $("#password-error,#confirmPassword-error")
                            .html("")
                            .addClass("hide");
                    }
                }

                if (flag) {
                    var response = await addUser(
                        email,
                        firstName,
                        lastName,
                        password,
                        user_id
                    );

                    if (response.status === true) {
                        user_id = response.user_id;
                        localStorageData.user_id = user_id; // store user_id
                        user_email = email;
                        first_name = firstName;
                        last_name = lastName;
                        company_name = companyName;

                        var planResponse = await getSelectedPlan(price_id);
                        if (planResponse) {
                            $("#selected_plan_detail").html(planResponse.data);
                            $("#personal-details").removeClass("active");
                            $("#pricing-plan").addClass("active");
                            localStorageData.step = ".pricing_plan_section";
                            localStorageData.selected_plan_detail =
                                planResponse.data;
                        }


                        if(localStorageData.event_step_2_trigger == false){

                            window.dataLayer.push({
                                'event': 'client_info',
                                'firstName':firstName,
                                'lastName':lastName,
                                'companyName':companyName,
                            });
                            localStorageData.event_step_2_trigger=true;

                            console.log({
                                'event': 'client_info',
                                'firstName':firstName,
                                'lastName':lastName,
                                'companyName':companyName,
                            })

                            $.ajax({
                                url: META_PIXEL,
                                method: 'POST',
                                dataType: 'json',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                                },
                                data: { // Corrected to `data` for AJAX
                                  'event': 'client_info',
                                    'firstName':firstName,
                                    'lastName':lastName,
                                    'companyName':companyName,
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
                       }



                    } else {
                        // $('#email_addres').removeClass('active');
                        // $('#personal-details').addClass('active');
                    }

                    localStorage.setItem(
                        "data",
                        JSON.stringify(localStorageData)
                    );
                }
            } else if (parentID == "pricing-plan") {
                var selected_category_id = $(".plan-item.active").attr("href");
                var select_class_id = $(
                    selected_category_id + " .time-item.active"
                ).attr("data-class");

                var str = $(select_class_id).val();
                var parts = str.split('-');
                var select_plan_id = parts[0];
                var unit_amount = parts[1];
                price_amount=unit_amount;
                if(unit_amount == 0){
                 $('#plan_add_without_card').addClass('plan_add_without_card');
                 $('#plan_add_without_card').removeClass('next_btn');
                 $('.payment_detail_side_menu').addClass('d-none')
                 $('.countChange').text('5. Setup Successful')
                 $('#plan_add_without_card').text('Save');
                 hide_card_details=true;
                }else{
                    $('#plan_add_without_card').removeClass('plan_add_without_card');
                    $('#plan_add_without_card').addClass('next_btn');
                    $('.payment_detail_side_menu').removeClass('d-none')
                    $('.countChange').text('6. Setup Successful')
                    $('#plan_add_without_card').text('Next');
                    hide_card_details=false;
                }



                if (!select_plan_id) {
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
                    toastr.error("Please Select Package");

                    return 0;
                }

                $("#pricing-plan").removeClass("active");
                $("#terms-conditions").addClass("active");
                localStorageData.step = ".terms_conditions_section";
                const pid = {
                    id: select_plan_id,
                };
                const encryptedData = await encryptData(pid);
                price_id = encryptedData;
                localStorageData.price_id = price_id;
                localStorageData.hide_card_details = hide_card_details;
                localStorage.setItem("data", JSON.stringify(localStorageData));
            } else if (parentID == "terms-conditions") {
                paymentCardIntent(
                    user_id,
                    user_email,
                    first_name,
                    last_name,
                    price_id,
                    company_name,
                    "new_card",
                    company_subscription_id,
                    company_price_id,
                    data_company_id
                );

                $("#terms-conditions").removeClass("active");
                $("#payment-details").addClass("active");

                if(localStorageData.event_step_5_trigger == false){
                    //track
                    window.dataLayer.push({
                        'event': 'begin_checkout',
                        'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    });

                    localStorageData.event_step_5_trigger=true;

                    console.log({
                        'event': 'begin_checkout',
                        'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    })

                    $.ajax({
                        url: META_PIXEL,
                        method: 'POST',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                        },
                        data: { // Corrected to `data` for AJAX
                          'event': 'begin_checkout',
                           'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
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
                 }
                localStorageData.step = ".payment_details_section";
                localStorage.setItem("data", JSON.stringify(localStorageData));



            } else if (parentID == "email-login-page") {
                var email = $("#loginEmail").val();
                if (email == "") {
                    $("#loginEmail-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#loginEmail").addClass("form-error-input");
                    flag = 0;
                } else {
                    var emailValue = $("#loginEmail").val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Check if the email matches the regex pattern
                    if (emailRegex.test(emailValue)) {
                        $("#loginEmail").removeClass("form-error-input");
                        $("#loginEmail-error").html("").addClass("hide");
                        $("#loginEmail").val(email);
                        $("#readEmail").val(email);
                        $("#trailEmail").val(email);
                        // $('#trailEmail').val(email);
                    } else {
                        $("#loginEmail").addClass("form-error-input");
                        $("#loginEmail-error")
                            .html("Invalid Email Address")
                            .removeClass("hide");
                        flag = 0;
                    }
                }

                var password = $("#loginPassword").val();
                if (password == "") {
                    $("#loginPassword-error")
                        .html("This field is required")
                        .removeClass("hide");
                    $("#loginPassword").addClass("form-error-input");
                    flag = 0;
                } else if (password != "" && password.length < 8) {
                    $("#loginPassword-error")
                        .html("Please enter at least 8 characters.")
                        .removeClass("hide");
                    $("#loginPassword").addClass("form-error-input");
                    flag = 0;
                } else {
                    $("#loginPassword").removeClass("form-error-input");
                    $("#loginPassword-error").html("").addClass("hide");
                }

                if (flag) {
                    var response = await AuthenticateUser(email, password);

                    if (response.status == true) {
                        $("#email-login-page").removeClass("active");
                        $("#active-trials").addClass("active");
                        $("#users_registered_company").html(response.trials);
                        user_id = response.user.id;
                        user_email = response.user.email;
                        first_name = response.user.first_name;
                        last_name = response.user.last_name;

                        // data store in storage

                        localStorageData.email = email;
                        localStorageData.password = password;
                        localStorageData.user_id = user_id;
                        localStorageData.user_email = user_email;
                        localStorageData.first_name = first_name;
                        localStorageData.last_name = last_name;
                        localStorageData.step = ".active_trials_section";
                        localStorageData.current_trials = response.trials;
                        localStorage.setItem(
                            "data",
                            JSON.stringify(localStorageData)
                        );
                    } else {
                        $("#loginPassword-error")
                            .html("Invalid Credentials")
                            .removeClass("hide");
                        $("#loginPassword").addClass("form-error-input");
                    }
                }
            } else if (parentID == "active-trials") {
                if ($(this).hasClass("trialing-to-active")) {
                    data_company_id = $(this).data("company-id");
                    localStorageData.data_company_id = data_company_id;
                    const pid = {
                        id: $(this).data("price-id"),
                    };
                    const encryptedData = await encryptData(pid);
                    company_price_id = encryptedData;
                    localStorageData.company_price_id = company_price_id;

                    company_subscription_id = $(this).data("subscription-id");
                    company_type = "tta";
                    localStorageData.company_type = company_type;
                    localStorageData.company_subscription_id =
                        company_subscription_id;
                    // var selected_category_id=$('.plan-item.active').attr('href');
                    var select_plan_id = $(this).data("price-id");
                    const slt_price_id = {
                        id: select_plan_id,
                    };

                    const selected_price_id = await encryptData(slt_price_id);
                    // price_id = company_price_id; // its removed when price detail page work
                    price_id = selected_price_id; // selected price id
                    localStorageData.price_id = price_id;
                    var planResponse = await getSelectedPlan(
                        company_price_id,
                        true
                    );

                    if (planResponse) {
                        $("#selected_plan_detail").html(planResponse.data);
                        $("#active-trials").removeClass("active");
                        $("#pricing-plan").addClass("active");
                        localStorageData.step = ".pricing_plan_section";
                        localStorageData.selected_plan_detail =
                            planResponse.data;
                    }

                    localStorage.setItem(
                        "data",
                        JSON.stringify(localStorageData)
                    );
                } else if ($(this).hasClass("expiry-to-active")) {
                    data_company_id = $(this).data("company-id");
                    localStorageData.data_company_id = data_company_id;
                    const pid = {
                        id: $(this).data("price-id"),
                    };
                    const encryptedData = await encryptData(pid);
                    company_price_id = encryptedData;
                    company_subscription_id = $(this).data("subscription-id");
                    company_type = "eta";
                    localStorageData.company_type = company_type;
                    localStorageData.company_subscription_id =
                        company_subscription_id;
                    localStorageData.company_price_id = company_price_id;
                    var select_plan_id = $(this).data("price-id");
                    console.log(select_plan_id);
                    const slt_price_id = {
                        id: select_plan_id,
                    };
                    const selected_price_id = await encryptData(slt_price_id);

                    // price_id = company_price_id; // its removed when price detail page work
                    price_id = selected_price_id; // selected price id
                    localStorageData.price_id = price_id;

                    var planResponse = await getSelectedPlan(
                        company_price_id,
                        true
                    );

                    if (planResponse) {
                        $("#selected_plan_detail").html(planResponse.data);
                        $("#active-trials").removeClass("active");
                        $("#pricing-plan").addClass("active");
                        localStorageData.step = ".pricing_plan_section";
                        localStorageData.selected_plan_detail =
                            planResponse.data;
                    }
                    localStorage.setItem(
                        "data",
                        JSON.stringify(localStorageData)
                    );
                } else if ($(this).hasClass("user-register-second-company")) {
                    var newCompanyName = $("#newCompany-name").val();
                    if (newCompanyName == "") {
                        $("#newCompany-name-error")
                            .html("This field is required")
                            .removeClass("hide");
                        $("#newCompany-name").addClass("form-error-input");
                        flag = 0;
                    } else {
                        $("#newCompany-name").removeClass("form-error-input");
                        $("#newCompany-name-error").html("").addClass("hide");

                        localStorageData.newCompany_name = newCompanyName;
                    }
                    if (flag) {
                        company_name = newCompanyName;
                        localStorageData.company_name = company_name;
                        var planResponse = await getSelectedPlan(
                            price_id,
                            true
                        );
                        if (planResponse) {
                            $("#selected_plan_detail").html(planResponse.data);
                            $("#active-trials").removeClass("active");
                            $("#pricing-plan").addClass("active");
                            localStorageData.step = ".pricing_plan_section";
                            localStorageData.selected_plan_detail =
                                planResponse.data;
                        }
                    }
                    localStorage.setItem(
                        "data",
                        JSON.stringify(localStorageData)
                    );
                }
            }

            if (flag == 1) {
                var targetOffset = parent.offset().top;
                $("html, body").animate(
                    {
                        scrollTop: targetOffset,
                    },
                    10
                );
            }
        })();
    });

    $(document).on("click", ".old_card_to_new_card", function (e) {
        paymentCardIntent(
            user_id,
            user_email,
            first_name,
            last_name,
            price_id,
            company_name,
            "old_card_to_new_card",
            company_subscription_id,
            company_price_id,
            data_company_id
        );
    });

    $(document).on("click", ".new_card_to_old_card", function (e) {
        paymentCardIntent(
            user_id,
            user_email,
            first_name,
            last_name,
            price_id,
            company_name,
            "new_card_to_old_card",
            company_subscription_id,
            company_price_id,
            data_company_id
        );
    });

    $(document).on("click", ".payment_get_from_old_card", function (e) {
        (async () => {
            $("#card-errors").addClass("hide");
            const selectedValue = document.querySelector(
                'input[name="payment_method"]:checked'
            );
            if (selectedValue) {
                document.getElementById(
                    "payment_get_from_old_card"
                ).disabled = true;
                var card_id = selectedValue.value;
                var enc_data = $("#enc_data").val();

                var response = await paymentConfirmFromOldCard(
                    card_id,
                    enc_data
                );

                if (response.status == true) {

                    if(localStorageData.event_success_trigger == false){
                        //track
                        window.dataLayer.push({
                            'event': 'Lead',
                            'user_email': user_email,
                            'first_name': first_name,
                            'last_name': last_name,
                            'company_name': company_name,
                            'plan_name':plan_name,
                            'payment_type':payment_type,
                            'plan_price':plan_price,
                        });
                        localStorageData.event_success_trigger=true;

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
                            'plan_name':plan_name,
                            'payment_type':payment_type,
                            'plan_price':plan_price,
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
                     }



                    if (company_type == "ncr") {
                        $("#successfully-registered").addClass("active");
                        $("#payment-details").removeClass("active");
                        window.setTimeout(function () {
                            affliate();
                            localStorage.removeItem("data");
                            location.href = SUBSCRIPTION_CONFIRMED;
                        }, 5000);
                    } else {
                        $("#successfully-registered").addClass("active");
                        $("#payment-details").removeClass("active");
                        window.setTimeout(function () {
                            affliate();
                            localStorage.removeItem("data");
                            location.href = SUBSCRIPTION_CONFIRMED;
                        }, 5000);
                    }
                } else {
                    document.getElementById(
                        "payment_get_from_old_card"
                    ).disabled = false;
                    $("#card-errors").removeClass("hide");
                    $("#card-errors").text(response.message);
                    // toastr.options = {
                    //     closeButton: true,
                    //     debug: false,
                    //     newestOnTop: false,
                    //     progressBar: false,
                    //     positionClass: "toast-top-right",
                    //     preventDuplicates: false,
                    //     showDuration: "1000",
                    //     hideDuration: "1000",
                    //     timeOut: "5000",
                    //     extendedTimeOut: "1000",
                    //     showEasing: "swing",
                    //     hideEasing: "linear",
                    //     showMethod: "fadeIn",
                    //     hideMethod: "fadeOut",
                    // };
                    // toastr.error("Something went wrong please try again");
                }
            } else {
                $("#card-errors").removeClass("hide");
                $("#card-errors").text("Please select Card to Proceed");
                // console.log("No radio input selected");
                // toastr.options = {
                //     closeButton: true,
                //     debug: false,
                //     newestOnTop: false,
                //     progressBar: false,
                //     positionClass: "toast-top-right",
                //     preventDuplicates: false,
                //     showDuration: "1000",
                //     hideDuration: "1000",
                //     timeOut: "5000",
                //     extendedTimeOut: "1000",
                //     showEasing: "swing",
                //     hideEasing: "linear",
                //     showMethod: "fadeIn",
                //     hideMethod: "fadeOut",
                // };
                // toastr.error("Please select Card To Procced");
                // //   $('#card-select-error').html('Please select Card')
            }
        })();
    });

    $(document).on("click", ".talk_to_sales", function (e) {
        e.preventDefault();
        e.stopPropagation();
        var company_title = $(this).data("company-title");
        $("#first_name_talk").val(first_name);
        $("#last_name_talk").val(last_name);
        $("#company_name_talk").val(company_title);
        $(".compan_nm").text("(" + company_title + ")");
        $("#company_email_talk").val(user_email);
        $("#talkToSalePopup").modal("show");
    });

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

    $(document).on("click",".company-logo-tabs .company-logo-tab",function (e) {
            e.preventDefault();
            $(".company-logo-tabs .company-logo-tab").removeClass("active");
            $(this).addClass("active");
            var index = $(this).index() + 1;

            $(".company-detail-tabs .company-detail-tab").removeClass("active");
            $(
                ".company-detail-tabs .company-detail-tab:nth-child(" +
                    index +
                    ")"
            ).addClass("active");
        }
    );

    $(document).on("change", ".package_selected_price", function (e) {
        e.preventDefault();
        (async () => {

            var str = $(this).val();
            var parts = str.split('-');
            var package_price = parts[0];
            var unit_amount = parts[1];
            price_amount=unit_amount;
            plan_price=unit_amount;


          // Retrieve the selected option
            var selectedOption = $(this).find('option:selected');
            plan_name = selectedOption.data('plan');
            payment_type = selectedOption.data('type');

            console.log('plan_name :' + plan_name);
            console.log('payment_type :' + payment_type);


            if(unit_amount == 0){
             $('#plan_add_without_card').addClass('plan_add_without_card');
             $('#plan_add_without_card').removeClass('next_btn');
             $('.payment_detail_side_menu').addClass('d-none')
             $('.countChange').text('5. Setup Successful')
             $('.step_no').text('5')
             $('#plan_add_without_card').text('Save');
             hide_card_details=true;
            }else{
                $('#plan_add_without_card').removeClass('plan_add_without_card');
                $('#plan_add_without_card').addClass('next_btn');
                $('.payment_detail_side_menu').removeClass('d-none')
                $('.countChange').text('6. Setup Successful')
                $('.step_no').text('6')
                $('#plan_add_without_card').text('Next');
                hide_card_details=false;
            }

            const pid = {
                id: package_price,
            };
            const encryptedData = await encryptData(pid);
            price_id = encryptedData;
            localStorageData.price_id = price_id;
            localStorageData.plan_price = plan_price;
            localStorageData.plan_name = plan_name;
            localStorageData.payment_type = payment_type;
            localStorageData.hide_card_details = hide_card_details;
            localStorageData.event_step_5_trigger = false
            localStorage.setItem("data", JSON.stringify(localStorageData));
            $(
                ".time-item-detail-tabs .time-item-detail.active .plan-item-detail-tabs .plan-item-detail.active .main-box.price_fea"
            ).css("display", "none");
            $(".fea_" + package_price + "_nn").css("display", "block");
        })();
    });

    $(document).on("click", ".plan_add_without_card", function (e) {
        (async () => {

                document.getElementById(
                    "plan_add_without_card"
                ).disabled = true;


                if(localStorageData.event_step_5_trigger == false){
                    //track
                    window.dataLayer.push({
                        'event': 'begin_checkout',
                        'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    });

                    localStorageData.event_step_5_trigger=true;

                    console.log({
                        'event': 'begin_checkout',
                        'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
                    })
                    $.ajax({
                        url: META_PIXEL,
                        method: 'POST',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Simplified CSRF token selection
                        },
                        data: { // Corrected to `data` for AJAX
                          'event': 'begin_checkout',
                          'user_email': user_email,
                        'first_name': first_name,
                        'last_name': last_name,
                        'plan_name':plan_name,
                        'payment_type':payment_type,
                        'plan_price':plan_price,
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
                 }
                 localStorage.setItem("data", JSON.stringify(localStorageData));

                var response = await planAddWithoutCard(
                    user_id,
                    user_email,
                    first_name,
                    last_name,
                    price_id,
                    company_name,
                    "new_card_to_old_card",
                    company_subscription_id,
                    company_price_id,
                    data_company_id
                );

                if (response.status == true) {

                    if(localStorageData.event_success_trigger == false){
                        //track
                        window.dataLayer.push({
                            'event': 'Lead',
                            'user_email': user_email,
                            'first_name': first_name,
                            'last_name': last_name,
                            'company_name': company_name,
                            'plan_name':plan_name,
                            'payment_type':payment_type,
                            'plan_price':plan_price,
                        });
                        localStorageData.event_success_trigger=true;
                        console.log({
                            'event': 'Lead',
                            'user_email': user_email,
                            'first_name': first_name,
                            'last_name': last_name,
                            'company_name': company_name,
                            'plan_name':plan_name,
                            'payment_type':payment_type,
                            'plan_price':plan_price,
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
                                'plan_name':plan_name,
                                'payment_type':payment_type,
                                'plan_price':plan_price,
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
                     }
                     localStorage.setItem("data", JSON.stringify(localStorageData));
                    $("#terms-conditions").removeClass("active");
                    $("#successfully-registered").addClass("active");
                    console.log('response.stripe_customer_id '+ response.stripe_customer_id)
                    fpr("referral",{uid:response.stripe_customer_id})
					var email = user_email;
					var uid = response.stripe_customer_id;
					if (window.affiliateManager){
						window.affiliateManager.trackLead({email: email,uid: uid});
					} else {
						_affiliateManager=window._affiliateManager||[];window._affiliateManager=_affiliateManager;
						_affiliateManager.push(["event","signup"]);
						_affiliateManager.push(["email",email]);
						_affiliateManager.push(["uid",uid]);
					}
                    window.setTimeout(function () {
                        affliate();
                        localStorage.removeItem("data");
                        location.href = SUBSCRIPTION_CONFIRMED;
                    }, 5000);

                } else {

                    document.getElementById(
                        "plan_add_without_card"
                    ).disabled = false;

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

        })();
    });

    function affliate() {
        var retrievedData = JSON.parse(localStorage.getItem("data"));

        var user_email = retrievedData.email;
        console.log("user_email", user_email);
        trackdesk("task-tracker", "externalCid", {
            externalCid: user_email,
            revenueOriginId: "81d1bf2b-92ca-4647-b725-500c8424c24a",
        });

        trackdesk('task-tracker', 'conversion', {
            conversionType: 'lead'
        });
        trackdesk('task-tracker', 'conversion', {
            conversionType: 'sale'
        });
        // trackdesk('task-tracker', 'conversion', {
        //     conversionType: 'freetrial'
        // });

        fpr("referral", { email: user_email });
    }

    // verify user to allow to perform this action
    async function allowUserToPerformAction(email) {}

    // verify data
    async function userVerify(email) {
        try {
            const requestData = {
                email: email,
            };
            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(USER_VERIFY_ENDPOINT, requestOptions);
            const res = await response.json();

            var dec_data = await decryptData(res.data);

            $(".creloader").hide();

            return dec_data;
            // Process the data here
        } catch (error) {
            console.error(
                "There was a problem with the fetch operation:",
                error
            );
            return false;
        }
    }

    // Authenticate User data
    async function AuthenticateUser(email, password) {
        try {
            const requestData = {
                email: email,
                password: password,
            };
            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(AUTHENTICATE_USER, requestOptions);
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

    async function addUser(email, firstName, lastName, password, user_id) {
        try {
            const requestData = {
                email: email,
                firstName: firstName,
                lastName: lastName,
                password: password,
                user_id: user_id,
            };

            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(ADD_USER, requestOptions);
            const data = await response.json();
            var dec_data = await decryptData(data.data);

            $(".creloader").hide();
            return dec_data;
            // Process the data here
        } catch (error) {
            console.error(
                "There was a problem with the fetch operation:",
                error
            );
            return false;
        }
    }

    async function getSelectedPlan(price_id, old_user = false) {
        try {
            const requestData = {
                price_id: price_id,
                old_user: old_user,
            };
            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(GET_SELECTED_PLAN, requestOptions);
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

    async function paymentCardIntent(
        user_id,
        email,
        firstName,
        lastName,
        price_id,
        company_title,
        update_payment_method = "new_card", //new_card_to_old_card   old_card_to_new_card,
        subscription_id,
        company_price_id,
        data_company_id
    ) {
        try {
            const requestData = {
                user_id: user_id,
                email: email,
                firstName: firstName,
                lastName: lastName,
                price_id: price_id,
                company_title: company_title,
                update_payment_method: update_payment_method,
                subscription_id: subscription_id,
                company_price_id: company_price_id,
                company_type: company_type,
                data_company_id: data_company_id,
                company_create_by_user: true,
                os_info: osInfo,
                location: browserName,
            };
            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            $(".creloader").show();
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(PAYMENT_CARD_INTENT, requestOptions);
            const data = await response.json();
            if (!data.status) {
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
                localStorage.removeItem("data");
                window.location.reload();
            }
            $("#card_payment_intent").html(data.card_payment_intent);
            $(".creloader").hide();
            return true;

            // Process the data here
        } catch (error) {
            console.error(
                "There was a problem with the fetch operation:",
                error
            );
            return false;
        }
    }

    async function paymentConfirmFromOldCard(card_id, enc_data) {
        try {
            const requestData = {
                card_id: card_id,
                enc_data: enc_data,
                firstName: first_name,
                lastName: last_name,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(requestData), // Convert your data object to JSON string
            };
            // $(".creloader").show();
            $(".loading-screen,.overlay-section").removeClass("d-none");
            $(".company-register-section").addClass("dull-section");
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(PAYMENT_FROM_OLD_CARD, requestOptions);
            const data = await response.json();
            $(".loading-screen,.overlay-section").addClass("d-none");
            $(".company-register-section").removeClass("dull-section");
            // $(".creloader").hide();
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

    async function planAddWithoutCard(
        user_id,
        email,
        firstName,
        lastName,
        price_id,
        company_title,
        update_payment_method = "new_card", //new_card_to_old_card   old_card_to_new_card,
        subscription_id,
        company_price_id,
        data_company_id) {
        try {
            const requestData = {
                user_id: user_id,
                email: email,
                firstName: firstName,
                lastName: lastName,
                price_id: price_id,
                company_title: company_title,
                update_payment_method: update_payment_method,
                subscription_id: subscription_id,
                company_price_id: company_price_id,
                company_type: company_type,
                company_id: data_company_id,
                company_create_by_user: true,
                os_info: osInfo,
                location: browserName,
            };
            const encryptedData = await encryptData(requestData);
            const enc = {
                data: encryptedData,
            };
            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(enc), // Convert your data object to JSON string
            };
            // $(".creloader").show();
            $(".loading-screen,.overlay-section").removeClass("d-none");
            $(".company-register-section").addClass("dull-section");
            //   const API_DATA=DATA_API_ENDPOINT+'?'+ JSON.stringify(requestData)
            const response = await fetch(PLAN_ADD_WITHOUT_CARD, requestOptions);
            const data = await response.json();
            $(".loading-screen,.overlay-section").addClass("d-none");
            $(".company-register-section").removeClass("dull-section");
            // $(".creloader").hide();
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

    //  decr

    async function encryptData(data) {
        let iv = CryptoJS.lib.WordArray.random(16),
            key = CryptoJS.enc.Base64.parse(Base64.encode(encryptionKey));
        let options = {
            iv: iv,
            mode: CryptoJS.mode.CBC,
            padding: CryptoJS.pad.Pkcs7,
        };

        // I'm using JSON.stringify(data) instead of just data
        let encrypted = CryptoJS.AES.encrypt(
            JSON.stringify(data),
            key,
            options
        );
        let t_empt = encrypted.toString();
        let tiv = CryptoJS.enc.Base64.stringify(iv);
        let result = {
            iv: tiv,
            value: t_empt,
            mac: CryptoJS.HmacSHA256(tiv + t_empt, key).toString(),
        };
        let result1 = JSON.stringify(result);
        let result2 = CryptoJS.enc.Utf8.parse(result1);
        return CryptoJS.enc.Base64.stringify(result2);
    }

    async function decryptData(encryptedData) {
        var encrypted_json = JSON.parse(Base64.decode(encryptedData));
        var res = CryptoJS.AES.decrypt(
            encrypted_json.value,
            CryptoJS.enc.Base64.parse(Base64.encode(encryptionKey)),
            {
                iv: CryptoJS.enc.Base64.parse(encrypted_json.iv),
                mode: CryptoJS.mode.CBC,
            }
        ).toString(CryptoJS.enc.Utf8);
        var parsedData = JSON.parse(res);
        return parsedData;
    }
});
