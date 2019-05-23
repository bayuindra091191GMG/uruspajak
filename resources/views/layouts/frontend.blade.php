<!DOCTYPE html>
<html class="js" lang="en">

<head>
    @yield('head_and_title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('template/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/main.css') }}">

    <link href="{{ asset('css/frontend/custom.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body>

    @include('partials.frontend._header')

    @yield('content')
    <!-- Footer #1============================================= -->
    @include('partials.frontend._footer')

    <script src="{{ asset('template/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('template/js/easing.min.js') }}"></script>
    <script src="{{ asset('template/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('template/js/superfish.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.tabs.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/simple-skillbar.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/mail-script.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

    @yield('scripts')

</body>

</html>
