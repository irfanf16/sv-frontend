var revapi, revapi4, revapi2, revapi3, revapi6, revapi5, revapi7;
function checkHeight(e) {
    var a = e
        .clone()
        .css({
            position: "absolute",
            visibility: "hidden",
            height: "auto",
            width: e.width(),
        })
        .appendTo("body"),
        t = a.height();
    (a.remove(), t <= 335)
        ? e.closest(".pricing-data").find(".overlay-text").addClass("d-none")
        : e
            .closest(".pricing-data")
            .find(".overlay-text")
            .removeClass("d-none");
}
function checkScrollEnd(e) {
    e.prop("scrollHeight") === e.height() + e.scrollTop()
        ? (console.log("Reached end of scroll"),
            e.closest(".pricing-data").find(".overlay-text").addClass("d-none"))
        : e
            .closest(".pricing-data")
            .find(".overlay-text")
            .removeClass("d-none");
}
$(function () {
    1 == load_model && $(".signInButton").trigger("click"),
        $("#contact_us_staff_vizz").click(function () {
            console.log('contact-us-form clicked');
            $(".lds-roller-footer").show(),
                $("#contact_us_staff_vizz").attr("disabled", "disabled");
            var e = $("#name").val(),
                a = $("#email").val(),
                t = $("#number").val(),
                r = $("#website").val(),
                s = $("#message").val(),
                o = $("#opt_in").prop("checked"),
                i = $("#csr_token").val();
            $.ajax({
                url: app_ajax_url + "contact-post",
                type: "POST",
                cache: !1,
                data: {
                    _token: i,
                    name: e,
                    email: a,
                    number: t,
                    website: r,
                    message: s,
                    opt_in: o,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                datatype: "JSON",
                success: function (e) {
                    "01" == e.responseCode && Object.keys(e.errors).length > 0
                        ? ($(".contact_error").html(
                            '<div class="alert alert-danger text-left"></div>'
                        ),
                            $.each(e.errors, function (e, a) {
                                $(".contact_error .alert").append(
                                    '<div class="w-100"><li>' +
                                    a[0] +
                                    "</li></div>"
                                );
                            }),
                            $(".lds-roller-footer").hide(),
                            $("#contact_us_staff_vizz").removeAttr("disabled"),
                            setTimeout(function () {
                                $(".contact_error div").remove();
                            }, 3e3))
                        : ($(".lds-roller-footer").hide(),
                            $(".contact_error").html(
                                '<div class="alert alert-success text-left">' +
                                e.responseDescription +
                                "</div>"
                            ),
                            $("#contact_us_staff_vizz").removeAttr("disabled"),
                            window.dataLayer.push({
                                'event': 'contact_us',
                                'form_id': 'contactUsForm',
                                'name': $("#name").val(),
                                'email': $("#email").val(),
                                'number': $("#number").val(),
                                'website': $("#website").val(),
                                'message': $("#message").val(),
                                'opt_in': $("#opt_in").prop("checked"),
                            }),
                            $(function () {
                                let data = {};
                                data['name'] = $("#name").val();
                                data['email'] = $("#email").val();
                                data['number'] = $("#number").val();
                                data['website'] = $("#website").val();
                                data['message'] = $("#message").val();
                                data['opt_in'] = $("#opt_in").prop("checked");
                                $.ajax({
                                    url: app_ajax_url + 'contact-pixel',
                                    method: 'POST',
                                    dataType: 'json',
                                    data: JSON.stringify(data),
                                    contentType: 'application/json',
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
                                })
                            }),
                            setTimeout(function () {
                                $("#name").val(""),
                                    $("#email").val(""),
                                    $("#number").val(""),
                                    $("#website").val(""),
                                    $("#message").val(""),
                                    $(".custom_field input[type='checkbox']").prop("checked", false);
                                    $(".alert.alert-success").remove();
                            }, 5e3));
                },
            });
        }),
        $("#gitex_contact_us_staff_vizz").click(function () {
            $(".lds-roller-footer").show(),
                $("#gitex_contact_us_staff_vizz").attr("disabled", "disabled");
            var e = $("#name").val(),
                a = $("#email").val(),
                t = $("#number").val(),
                r = $("#designation").val(),
                s = $("#company").val(),
                i = $("#csr_token").val();
            $.ajax({
                url: app_ajax_url + "gitex-contact-post",
                type: "POST",
                cache: !1,
                data: {
                    _token: i,
                    name: e,
                    email: a,
                    number: t,
                    designation: r,
                    company: s,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                datatype: "JSON",
                success: function (e) {
                    "01" == e.responseCode && Object.keys(e.errors).length > 0
                        ? ($(".contact_error").html(
                            '<div class="alert alert-danger text-left"></div>'
                        ),
                            $.each(e.errors, function (e, a) {
                                $(".contact_error .alert").append(
                                    '<div class="w-100"><li>' +
                                    a[0] +
                                    "</li></div>"
                                );
                            }),
                            $(".lds-roller-footer").hide(),
                            $("#gitex_contact_us_staff_vizz").removeAttr(
                                "disabled"
                            ),
                            setTimeout(function () {
                                $(".contact_error div").remove();
                            }, 3e3))
                        : ($(".lds-roller-footer").hide(),
                            $(".contact_error").html(
                                '<div class="alert alert-success text-left">' +
                                e.responseDescription +
                                "</div>"
                            ),
                            $("#contact_us_staff_vizz").removeAttr("disabled"),
                            setTimeout(function () {
                                $("#name").val(""),
                                    $("#email").val(""),
                                    $("#number").val(""),
                                    $("#designation").val(""),
                                    $("#company").val(""),
                                    $(".early_success div").remove(),
                                    (window.location.href =
                                        app_ajax_url + "thank-you");
                            }, 5e3));
                },
            });
        }),
        $("#add_early_bird_email").click(function () {
            $(".lds-roller").show(),
                $("#add_early_bird_email").attr("disabled", "disabled");
            var e = $("#early_name").val(),
                a = $("#early_email").val(),
                t = $('input[name="privacy_agree"]:checked').val(),
                r = $("#csr_token").val();
            $.ajax({
                url: app_ajax_url + "subscribe",
                type: "POST",
                cache: !1,
                data: {
                    _token: r,
                    early_name: e,
                    early_email: a,
                    agree_policy: t,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                atype: "JSON",
                success: function (e) {
                    "01" == e.responseCode && Object.keys(e.errors).length > 0
                        ? ($(".modal_early_error").html(
                            '<div class="alert alert-danger text-left"></div>'
                        ),
                            $.each(e.errors, function (e, a) {
                                $(".modal_early_error .alert").append(
                                    '<div class="w-100"><li>' +
                                    a[0] +
                                    "</li></div>"
                                );
                            }),
                            $(".lds-roller").hide(),
                            $("#add_early_bird_email").removeAttr("disabled"),
                            setTimeout(function () {
                                $(".modal_early_error div").remove();
                            }, 3e3))
                        : ($(".lds-roller").hide(),
                            $("#add_early_bird_email").removeAttr("disabled"),
                            $("#early_bird_form_block").hide(),
                            $(".early_success").show(),
                            setTimeout(function () {
                                $("#early_name").val(""),
                                    $("#early_email").val(""),
                                    $(".early_success div").remove(),
                                    $("#modalId").modal("hide"),
                                    $("#early_bird_form_block").show(),
                                    $(".early_success").hide();
                            }, 5e3));
                },
            });
        }),
        $("#subscribeNewsletter").click(function () {
            $(".lds-roller-footer").show(),
                $("#subscribeNewsletter").attr("disabled", "disabled");
            var e = $(".inputForNewslwtter").val(),
                a = $('input[name="subscribe_privacy_check"]:checked').val(),
                t = $("#csr_token").val();
            $.ajax({
                url: app_ajax_url + "mail-subscribe",
                type: "POST",
                cache: !1,
                data: { _token: t, early_email: e, subscribe_privacy_check: a },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                datatype: "JSON",
                success: function (e) {
                    "01" == e.responseCode && Object.keys(e.errors).length > 0
                        ? ($.each(e.errors, function (e, a) {
                            $(".subscribe_early_error").append(
                                '<div class="alert text-left p-0 m-0"><div class="w-100"><li style="color:red">' +
                                a[0] +
                                "</li></div></div>"
                            );
                        }),
                            $(".lds-roller-footer").hide(),
                            $("#subscribeNewsletter").removeAttr("disabled"),
                            setTimeout(function () {
                                $(".subscribe_early_error div").remove();
                            }, 3e3))
                        : ($(".inputForNewslwtter").val(""),
                            $(".lds-roller-footer").hide(),
                            $("#subscribeNewsletter").removeAttr("disabled"),
                            $(".subscribe_early_error").html(
                                '<div class="alert text-left" style="color: lightgreen;position: absolute;bottom: -102px;left: -19px;">' +
                                e.responseDescription +
                                "</div>"
                            ),
                            setTimeout(function () {
                                $(".subscribe_early_error div").hide();
                            }, 3e3));
                },
            });
        });
});
$(".table-buttons .list-item").click(function (e) {
    e.preventDefault();
    var a = !0;
    $(".table-buttons .list-item").removeClass("active");
    var t = $(this);
    t.is("[href]") || (a = !1);
    var r = t.attr("data-class");
    if (
        (console.log(r),
            $(".freq").css("display", "none"),
            $(r).css("display", "block"),
            a)
    ) {
        var s = $(this).attr("href");
        $(this).addClass("active"),
            (l = $(".prices-tables"))
                .find(".list-item-tab.active")
                .removeClass("active"),
            l.find(".list-item-tab" + s).addClass("active");
        var i = $(".prices-tables .list-item-tab" + s);
        setTimeout(function () {
            $("body, html").animate({ scrollTop: i.offset().top - 50 }, 50);
        }, 500);
    } else {
        var l,
            o = $(this).index() + 1;
        $(this).addClass("active"),
            (l = $(".prices-tables"))
                .find(".list-item-tab.active")
                .removeClass("active"),
            l
                .find(".list-item-tab:nth-child(" + o + ")")
                .addClass("active"),
            (i = $(".prices-tables .list-item-tab:nth-child(" + o + ")")),
            setTimeout(function () {
                $("body, html").animate(
                    { scrollTop: i.offset().top - 50 },
                    50
                );
            }, 500);
    }
});
$(".prices-tables .list-item-price").click(function () {
    var e = $(this).parent();
    e.find(".list-item-price").removeClass("active");
    var a = $(this).index() + 1;
    $(this).addClass("active");
    var t = e.next();
    t.find(".list-item-price-tab.active").removeClass("active"),
        t
            .find(".list-item-price-tab:nth-child(" + a + ")")
            .addClass("active");
});
$(document).ready(function () {
    $(".prices-tables .main-text ul").each(function () {
        var e = $(this);
        $(window).on("load", function () {
            checkHeight(e);
        }),
            $(window).on("resize", function () {
                checkHeight(e);
            }),
            e.on("scroll", function () {
                checkScrollEnd(e);
            });
    });
});
$(".features-detail-section .load-more").click(function (e) {
    var a = $(this);
    a.parent().prev().find(".sub-feature-box").removeClass("hide"),
        a.next().removeClass("hide"),
        a.addClass("hide");
});
$(".features-detail-section .load-less").click(function (e) {
    var a = $(this);
    a.parent().prev().find(".sub-feature-box:gt(8)").addClass("hide"),
        a.prev().removeClass("hide"),
        a.addClass("hide");
});
$(".blog-listing-section .owl-carousel").owlCarousel({
    loop: !0,
    margin: 20,
    dots: !0,
    dotsEach: 1,
    autoplay: !0,
    autoplayTimeout: 3e3,
    autoplayHoverPause: !0,
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 992: { items: 3 } },
});
$(".header-alert-bar .close").click(function (e) {
    $(".header-alert-bar").addClass("hide"),
        $(".header-alert-bar")
            .next()
            .next()
            .find(".overlay")
            .css("height", ""),
        $(".header-alert-bar")
            .next()
            .next()
            .find("video")
            .css("height", "")
            .css("max-height", "");
});
$(document).ready(function () {
    $(".header-alert-bar").removeClass("hide");
    var e = $(".header-alert-bar").outerHeight() + 14,
        a =
            parseFloat(
                $(".header-alert-bar")
                    .next()
                    .next()
                    .find(".overlay")
                    .css("height")
            ) + e;
    $(".header-alert-bar")
        .next()
        .next()
        .find(".overlay")
        .css("height", a + "px"),
        $(".header-alert-bar")
            .next()
            .next()
            .find("video")
            .css("height", a + "px")
            .css("max-height", a + "px");
});
$(document).ready(function () {
    if ($(".Optional-add .addon-container .outer-box").length > 3) {
        var e =
            $(".Optional-add .addon-container .showAddons").outerHeight() +
            50;
        $(".Optional-add .addon-container")
            .addClass("less")
            .css("height", e + "px");
    } else $(".Optional-add .addon-load-more").hide();
    $(".Optional-add .addon-load-more").click(function (e) {
        var a = $(this),
            t = a.prev();
        t.removeClass("less").removeAttr("style"),
            t.find(".outer-box").removeClass("disabled"),
            a.hide();
    });
});
$(".features-listing-section .owl-carousel").owlCarousel({
    loop: !1,
    margin: 20,
    nav: !0,
    autoplay: !1,
    responsive: { 0: { items: 1 }, 768: { items: 4 }, 992: { items: 6 } },
});
$(document).click(function (e) {
    var a = $(e.target);
    !a.closest(".navbar-collapse").length &&
        !a.hasClass("navbar-toggler") &&
        !a.closest(".navbar").length &&
        $(".navbar-collapse").hasClass("show") &&
        $(".navbar-toggler").click();
});
$(document).ready(function () {
    let lastScrollTop = 0;
    window.addEventListener('scroll', function () {
        let currentScroll = window.scrollY;
        if (currentScroll > 650) {
            if (currentScroll < lastScrollTop) {
                $('header').addClass('sticky');
            } else {
                $('header').removeClass('sticky');
            }
        } else {
            $('header').removeClass('sticky');
        }
        lastScrollTop = currentScroll;
    });
});
$(document).ready(function () {
    $('.blog-detail-section .table-content .table-content-box a').on('click', function (e) {
        e.preventDefault();

        // Get the target element's ID from the href attribute
        var target = $(this).attr('href').substring(1); // Remove the '#' from href

        // Select the element using an attribute selector to handle special characters
        var $targetElement = $('[id="' + target + '"]');

        console.log('Target:', target, 'Element:', $targetElement, 'Length:', $targetElement.length);

        // If the element exists, scroll to it
        if ($targetElement.length) {
            $('html, body').animate({
                scrollTop: $targetElement.offset().top - 110
            }, 500);
        }
    });
});
$(document).ready(function () {
    var $sidebar = $('.blog-detail-section .table-content');
    var $parentSection = $('.blog-detail-section');

    $(window).on('scroll resize', function () {
        var windowWidth = $(window).width();
        
        if (windowWidth >= 768) {
            var scrollTop = $(window).scrollTop();
            var parentTop = $parentSection.offset().top;
            var parentBottom = parentTop + $parentSection.outerHeight();
            var sidebarHeight = $sidebar.outerHeight();

            // Check if the parent section is within the viewport
            var parentInView = (scrollTop + $(window).height() > parentTop) && (scrollTop < parentBottom);

            if (parentInView) {
                // Sidebar becomes fixed when the parent section is in view
                if (scrollTop >= parentTop && scrollTop + sidebarHeight < parentBottom) {
                    $sidebar.css({
                        'position': 'fixed',
                        'top': '0',
                        'right': '0',
                        'max-height': '100vh',
                        'overflow-y': 'auto',
                    });
                } else if (scrollTop + sidebarHeight >= parentBottom) {
                    // Stop the sidebar when the parent section reaches the bottom
                    $sidebar.css({
                        'position': 'absolute',
                        'top': $parentSection.outerHeight() - sidebarHeight + 'px',
                        'right': '0',
                        'max-height': 'none',
                        'overflow-y': 'visible',
                    });
                } else {
                    // Reset sidebar to normal flow when above the parent section
                    $sidebar.removeAttr('style');
                }
            } else {
                // Reset sidebar if parent section is out of view (make it static)
                $sidebar.removeAttr('style');
            }
        }
    });

    // Manually trigger scroll event to ensure it's active when window loads, if window width >= 768px
    if ($(window).width() >= 768) {
        $(window).trigger('scroll');
    }
});

