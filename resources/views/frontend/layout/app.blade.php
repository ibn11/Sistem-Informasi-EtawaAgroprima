
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Etawa Agroprima </title>

  {{-- css  --}}
  @include('frontend.component.css')

</head>

<body class="@yield('class')">

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{ asset('asset/frontend/images/hero-bg.jpg') }}" alt="">
    </div>
    <!-- header section strats -->
    @include('frontend.component.header')
    <!-- end header section -->
    <!-- slider section -->
    @yield('slide')
    
  </div>

  @yield('content')


  <!-- footer section -->
  @include('frontend.component.footer')
  <!-- footer section -->

  @include('frontend.component.js')

</body>

</html>