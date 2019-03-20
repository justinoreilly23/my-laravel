<!doctype html>
<html lang="en" >
<head >

  <!-- Required meta tags -->
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" >

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js" ></script >
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" ></script >

  <!-- jQuery -->
  <script rel="text/javascript"
          src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
          crossorigin="anonymous" ></script >

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" >

  <!-- Font Awesome -->
  <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous" >

  <!-- Favicon links -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" >
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" >
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" >
  <link rel="manifest" href="/site.webmanifest" >

  <!-- Providers/TitleServiceProvider.php -->
  <title >
    {{ $sc_title }}
  </title >

</head >
<body class="theme-{{ $sc_theme }}" >

@include('partials.admin')
@include('partials.message')
@include('partials.header')

@hassection('content')
  <div class="mt-3 jumbotron container-fluid theme content-theme-{{ $sc_theme }}" >
    @yield('content')
  </div >
@endif

@include('partials.footer')

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous" ></script >

<script src="{{ mix('js/app.js') }}" ></script >

</body >
</html >