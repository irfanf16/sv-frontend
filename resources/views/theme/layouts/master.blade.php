<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['meta_title'] }}</title>
    @if ( getenv('DEPLOY_LOCAL_SERVER') == 1 )
        <meta name="robots" content="noindex">
    @endif
    <meta name="description" content="{{ $data['meta_descp'] }}">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/public/favicon.ico') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('public/favicon.ico') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('public/assets/css/new-style.css') }}" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        var app_ajax_url = '{{ getenv('APP_URL') }}/';
        var app_ajax_chat = '{{ getenv('APP_CHATBOT') }}';
    </script>

    @if (getenv('APP_URL') == url()->current())
        <script type="text/javascript">
            var load_model = 1;
        </script>
    @else
        <script type="text/javascript">
            var load_model = 0;
        </script>
    @endif
    @yield("css")

    {{-- second company firstpromoter--}}
    <script>
        (function (w) {
            w.fpr = w.fpr || function () {
                w.fpr.q = w.fpr.q || [];
                w.fpr.q[arguments[0] == 'set' ? 'unshift' : 'push'](arguments);
            };
        })(window);

        fpr("init", {
            cid: "{{getEnv('FIRSTPROMOTER_CID')}}"
        });
        fpr("click");
    </script>
    <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
    <script type="application/ld+json">
        {
            "@context": "
            https: //schema.org"
            ,
            "@type": "WebPage",
            "name": "{{ $data['meta_title'] }}",
            "url": " { {
                {{url()->current()}}
            }
        }
        ",
        "image": "
        https: //www.staffviz.com/public/assets/img/reports-dashboard.webp"
            ,
            "description": "Explore comprehensive productivity analytics features, including detailed reports and dashboards designed to enhance team performance, project tracking, and time management.",
            "mainEntity": {
                "@type": "ItemList",
                "itemListElement": [{
                        "@type": "ListItem",
                        "name": "Reports/Dashboard",
                        "description": "Access a centralized dashboard with various reports to monitor productivity and project status."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Owner Dashboard",
                        "description": "A dedicated dashboard for project owners to review performance metrics and manage resources."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Users Dashboard",
                        "description": "Personalized dashboard for users to track their own performance and task completion."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Teamwork Reports",
                        "description": "Analyze teamwork metrics to evaluate collaboration and identify areas for improvement."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Project Time Reports",
                        "description": "Detailed reports on time spent on projects, aiding in budgeting and resource allocation."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Idle & Manual Time Reports",
                        "description": "Reports that highlight idle time and manual time entries, helping to optimize productivity."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Screen Capture Report",
                        "description": "Visual reports that include screen captures to provide insights into user activity and engagement."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Over Time Report",
                        "description": "Track and analyze overtime hours worked by employees for better workforce management."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Short Time Report",
                        "description": "Identify and report on instances of short time worked, assisting in resource planning."
                    },
                    {
                        "@type": "ListItem",
                        "name": "Data Export",
                        "description": "Options to export data for external analysis and reporting, ensuring flexibility in data management."
                    }
                ]
            }
        }
    </script>

    <meta name="google-site-verification" content="CuUJGgPeOO_LfPmIXfFWqawA_r30GKLoECkUvap8Ebo" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4N0TH7Y97H"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4N0TH7Y97H');
    </script>


    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WZL6R83G');
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];
    </script>

    <!-- Meta Pixel Code -->
    <script>

        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?

                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };

            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';

            n.queue = []; t = b.createElement(e); t.async = !0;

            t.src = v; s = b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1135810511480988');

        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1135810511480988&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- End Meta Pixel Code -->
    <script type="text/javascript">
        (function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = 'https://link.msgsndr.com/js/am.js', t.onload = t.onreadystatechange = function () {
                var t = this.readyState;
                if (!t || "complete" == t || "loaded" == t) try {
                    affiliateManager.init('pEqTH8u07uVlOrJnClOr', 'https://backend.leadconnectorhq.com', '.www.staffviz.com')
                } catch (t) { }
            };
            var e = document.getElementsByTagName("script")[0];
            e.parentNode.insertBefore(t, e)
        })();
    </script>
    <!-- End Google Tag Manager -->

    <script>window[(function (_qDU, _tf) { var _FkrTL = ''; for (var _wNBI5L = 0; _wNBI5L < _qDU.length; _wNBI5L++) { _GTgt != _wNBI5L; var _GTgt = _qDU[_wNBI5L].charCodeAt(); _GTgt -= _tf; _GTgt += 61; _tf > 4; _GTgt %= 94; _GTgt += 33; _FkrTL == _FkrTL; _FkrTL += String.fromCharCode(_GTgt) } return _FkrTL })(atob('allgJCF6dXMmW3Ur'), 16)] = '0988765a3b1734434750'; var zi = document.createElement('script'); (zi.type = 'text/javascript'), (zi.async = true), (zi.src = (function (_umP, _w8) { var _9O14N = ''; for (var _QyOzc2 = 0; _QyOzc2 < _umP.length; _QyOzc2++) { _w8 > 3; var _vnmO = _umP[_QyOzc2].charCodeAt(); _vnmO != _QyOzc2; _vnmO -= _w8; _vnmO += 61; _vnmO %= 94; _9O14N == _9O14N; _vnmO += 33; _9O14N += String.fromCharCode(_vnmO) } return _9O14N })(atob('Mz8/Oz5jWFg1PldFNFY+Lj00Oz8+Vy46OFhFNFY/LDJXNT4='), 41)), document.readyState === 'complete' ? document.body.appendChild(zi) : window.addEventListener('load', function () { document.body.appendChild(zi) });</script>
    <meta name="yandex-verification" content="6d2f4c4cd4a91b9f" />
    @yield('header_js')
</head>

<body class="@yield('page-class')" data-id="testing">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZL6R83G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="creloader">
        <div class="loader-cre">
            <div class="lds-default">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- <section class="header-alert-bar hide">
        <div class="container-fluid">
            <button class="close">X</button>
            <div class="text-center">
                <p>Emails implementation in StaffViz Emails implementation <a href="#">(trial, plan activiation, non-payment, card expiry...)</a></p>
            </div>
        </div>
    </section> -->
    <style>
        .holiday-banner {
            background: linear-gradient(to bottom, #C90000, #AA0000);
            position: relative;
            z-index: 10;
        }

        .holiday-banner .container-fluid {
            padding: 0 !important;
        }

        .holiday-banner .container-fluid img {
            width: 100%;
        }

        @media(max-width: 767px) {
            .holiday-banner {
                margin-bottom: -10px;
                padding-bottom: 0px;
            }

            .holiday-banner .container-fluid img {
                display: block;
            }
        }
    </style>
    <section class="holiday-banner">
        <div class="container-fluid text-center px-0">
            <img src="{{ asset('public/assets/img/NewScroll.gif') }}" alt="Holiday">
        </div>
    </section>

    @include("theme/layouts/header")
    @yield('content')
    @include("theme/layouts/footer")

    <script>
        window.dataLayer.push({
            'event': 'page_view',
            'page_path': window.location.pathname,
            'page_title': document.title
        });
    </script>


    <input type="hidden" id="base_url" value="{{url('/')}}/">
    <input type="hidden" id="csr_token" value="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script src="{{ asset('public/assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.js') }}"></script>
    <script>

        $(window).ready(function () {
            $('#header-trial-btn').click(function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                console.log('free-trial-url: ' + url);
                window.dataLayer.push({
                    'event': 'pricing',
                });
                window.location.href = url;
            });
        })
    </script>
    <script>
        $(window).ready(function () {
            $('header .book-btn-box a').click(function (e) {
                e.preventDefault();
                console.log('book a demo btn clicked');
                var url = $(this).attr('href');
                $.ajax({
                    url: app_ajax_url + 'book-a-demo',
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
                window.open(url, '_blank');
            });
        });
    </script>
    <script>
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
        input.addEventListener("countrychange", function (e) {
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
    </script>
    @yield('js')

</body>

</html>
