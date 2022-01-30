<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <title>@yield('title',"UcuzYükdaşıma")</title>
    <meta name="author" content="Kanan Mirzayev">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset(\App\Models\settings::first()->favicon) }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset(\App\Models\settings::first()->favicon) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">
    <script src="https://cdn.tiny.cloud/1/yahzv43skfbm5cymv16nlsakpodrrqufvmb6ocxn8ve3fy4o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @yield('css')
</head>
