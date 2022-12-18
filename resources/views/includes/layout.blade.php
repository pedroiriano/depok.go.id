<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
        <meta name="description" content="Portal Resmi Pemerintah Kota Depok. Depok sebagai Kota untuk Berbagi, Bersahabat dan Berkolaborasi">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portal Resmi Pemerintah Kota Depok</title>

        <!-- Styles -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        @stack('css')
        
        <script src="https://kit.fontawesome.com/d54b50045e.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    </head>

    <body style="background-color: #F7FAFC">
        <div id="app">
            @include('includes.navbar')
            <main>
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
        <!-- Untuk Analytics Google : Global site tag (gtag.js) - Google Analytics -->
        <script src="{{ asset('js/public.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-17742526-4" crossorigin="anonymous"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-17742526-4');
        </script>
        @stack('js')
    </body>
</html>
