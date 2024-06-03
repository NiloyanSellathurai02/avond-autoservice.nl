<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Avond Autoservice</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/site_logo/logo_blue.svg') }}">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cursor.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Vanilla Calendar - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vanilla-calendar.min.css') }}">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.css') }}">

    <!-- Pricing Range - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="page_wrapper">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Fraimwork - Jquery Include -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-dropdown-ml-hack.js') }}"></script>

    <!-- Animation - jquery include -->
    <script src="{{ asset('assets/js/cursor.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

    <!-- Text Animation - Jquery Include -->
    <script src="{{ asset('assets/js/splitting.min.js') }}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    <!-- Counter - Jquery Include -->
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>

    <!-- Vanilla Calendar - Jquery Include -->
    <script src="{{ asset('assets/js/vanilla-calendar.min.js') }}"></script>

    <!-- Image Before After - Jquery Include -->
    <script src="{{ asset('assets/js/imagebeforeafter.js') }}"></script>

    <!-- Pricing Range - Jquery Include -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- Dark & Light Mode - Jquery Include -->
    <script src="{{ asset('assets/js/dark-light.js') }}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
