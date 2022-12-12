<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.frontend-meta')
</head>
<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <!-- BEGIN::Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- END::Loader -->
    @include('includes.frontend-nav')
    @yield('content')
    @include('includes.frontend-footer')
    @stack('announcement-widget')
    @include('includes.frontend-js')
</body>
</html>
