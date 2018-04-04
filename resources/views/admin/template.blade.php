<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') | Pascal Rufi Sport Foundation</title>
  <meta name="description" content="@yield('description')">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{asset('img/favicon.png')}}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <!-- style -->
  <link rel="stylesheet" href="{{asset('dashboard/css/animate.css/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/glyphicons/glyphicons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/material-design-icons/material-design-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/ionicons/css/ionicons.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/styles/app.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/styles/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('dashboard/css/styles/font.css')}}" type="text/css" />
  @yield('styles')
</head>
<body>
  <div class="app" id="app">
    @include('admin.partials.sidebar')
    <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
      Hello World Here
    </div>
  </div>

  <!-- Define a flag URL to use for loading other dynamic assets with ui.load.js  -->
  <script> var flagUrl = '{{asset('/dashboard/')}}';</script>
  <script src="{{asset('dashboard/libs/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
  <script src="{{asset('dashboard/libs/tether/dist/js/tether.min.js')}}"></script>
  <script src="{{asset('dashboard/libs/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
  <script src="{{asset('dashboard/libs/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
  <script src="{{asset('dashboard/libs/PACE/pace.min.js')}}"></script>
  <script src="{{asset('dashboard/libs/jquery-pjax/jquery.pjax.js')}}"></script>
  <script src="{{asset('dashboard/libs/blockUI/jquery.blockUI.js')}}"></script>
  <script src="{{asset('dashboard/libs/jscroll/jquery.jscroll.min.js')}}"></script>

  <script src="{{asset('dashboard/scripts/config.lazyload.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-load.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-jp.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-include.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-device.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-form.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-modal.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-nav.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-list.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-screenfull.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-scroll-to.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-toggle-class.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ui-taburl.js')}}"></script>
  <script src="{{asset('dashboard/scripts/app.js')}}"></script>
  <script src="{{asset('dashboard/scripts/ajax.js')}}"></script>
</body>
</html>
