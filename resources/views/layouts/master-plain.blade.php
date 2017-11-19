<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Pengendalian Kedelai Lokal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Google fonts - Noto Sans -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700">
    <!-- theme stylesheet-->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet"> --}}
    <!-- Custom stylesheet - for your changes-->
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#49525f">
    <link rel="shortcut icon" href="/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Font Icons CSS-->
    {{-- <link rel="stylesheet" href="{{ asset('icons-reference/styles.css') }}"> --}}
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @yield('content')
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{-- <script src="{{ asset('js/tether.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.cookie.js') }}"> </script> --}}
    {{-- <script src="{{ asset('js/jquery.validate.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{ asset('js/charts-home.js') }}"></script>
    {{-- <script src="{{ asset('js/front.js') }}"></script> --}}
  </body>
</html>