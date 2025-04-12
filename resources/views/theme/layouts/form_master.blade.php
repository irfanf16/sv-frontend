<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['meta_title'] }}</title>
    <meta name="description" content="{{ $data['meta_descp'] }}">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('public/favicon.ico') }}">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style2.css') }}" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        var app_ajax_url = '{{ getenv('APP_URL') }}/';
    </script>

    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('html_element', {
                'sitekey': '6LdblPIpAAAAAEYsQdRcFgGd_DvnPXx9hw9eYBvD'
            });
        };
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

    <!-- Trackdesk tracker begin -->
    <script async src="//cdn.trackdesk.com/tracking.js"></script>
    <script>
        (function (t, d, k) {
            (t[k] = t[k] || []).push(d);
            t[d] = t[d] || t[k].f || function () {
                (t[d].q = t[d].q || []).push(arguments)
            }
        })(window, "trackdesk", "TrackdeskObject");
        trackdesk("task-tracker", "click");
    </script>


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
    <!-- End Google Tag Manager -->



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
    @yield('header_js')
</head>

<body data-id="testing">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZL6R83G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @yield('content')

</body>

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
<input type="hidden" id="base_url" value="{{url('/')}}/">
<input type="hidden" id="csr_token" value="{{ csrf_token() }}">
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/owl-carousel/owl.carousel.min.js') }}"></script>
@yield('js')

</body>

</html>