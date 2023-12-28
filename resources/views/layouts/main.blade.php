<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->

    <title>Lelemon | {{ $title }}</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('045c1390d831e0b231da', {
        cluster: 'ap1'
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
      });
    </script>

    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- manifest PWA --}}
    {{-- <link rel="manifest" href="manifest.json" /> --}}

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landpage/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landpage/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landpage/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landpage/assets/img/favicons/favicon.png') }}">
    <link rel="manifest" href="{{ asset('landpage/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('landpage/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('landpage/assets/css/theme.css') }}" rel="stylesheet" />
</head>

<body>
<main class="main" id="top">

  @include('partials.header')

     @yield('container')

  @include('partials.footer')

</main>

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="{{ asset('landpage/vendors/@popperjs/popper.min.js') }}"></script>
  <script src="{{ asset('landpage/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landpage/vendors/is/is.min.js') }}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('landpage/vendors/fontawesome/all.min.js') }}"></script>
  <script src="{{ asset('landpage/assets/js/theme.js') }}"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
    rel="stylesheet">
</body>

</html>