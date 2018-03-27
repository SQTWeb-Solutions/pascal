<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') | Pascal Rufi Sport Foundation</title>
  <meta name="description" content="@yield('description')">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CLato:300,400,700,700%7CPlayfair+Display:400,700i" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{asset('img/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('web/css/iconfont.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/isotope.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/woocommerce.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/plugins.css')}}" />
  <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  <script src="{{asset('web/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
  @yield('styles')
</head>
<body class="woocommerce">
  <!--[if lt IE 10]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="preloader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
  @include('partials.header')
  @include('partials.modal')
  @yield('content')
  @include('partials.footer')
  <script src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('web/js/plugins.js')}}"></script>
  <script src="{{asset('web/js/Popper.js')}}"></script>
  <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('web/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('web/js/parallax.min.js')}}"></script>
  <script src="{{asset('web/js/spectragram.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('web/js/scrollax.js')}}"></script>
  @yield('scripts')
  <script src="{{asset('web/js/main.js')}}"></script>
</body>
</html>
