<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.head')
</head>
<body id="thetop" class="thetop">
<!-- backtotop - start -->
<div class='backtotop'>
    <a href="#" class='scroll'>
        <i class="ion-arrow-up-c"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader - start -->
<div id="preloader"></div>
<!-- preloader - end -->
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.script')
</body>
</html>
