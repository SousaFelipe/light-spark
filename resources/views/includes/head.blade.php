<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="author" content="Felipe de Sousa do Carmo">
    <meta name="generator" content="flpssdocarmo">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="apple-touch-icon" href="{{ asset('images/favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('images/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('images/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="{{ asset('images/favicons/safari-pinned-tab.svg') }}" color="#7952b3">
    <link rel="icon" href="{{ asset('images/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('images/favicons/manifest.json') }}">

    @yield('head-styles')

</head> 