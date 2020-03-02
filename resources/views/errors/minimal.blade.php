<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pemerintah Kota Depok</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
        <!-- Styles -->
        <script src="https://kit.fontawesome.com/d54b50045e.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">        
    </head>
    <body>
        @include('includes.simple-navbar')
        <main>
            <div class="container h-75">
                <div class="d-flex h-100 text-center align-items-center pt-5">
                    <div class="w-100">
                        <a href="{{ route('beranda') }}" style="text-decoration: none">
                        <img src="{{ asset('img/lambang.png') }}" alt="" class="logo-pemkot">
                        <h1 class="display-4" style="z-index: 2; position: relative; font-size:2.5rem;">Depok.go.id
                        </h1>
                        </a>
                    </div>
                </div>
                <div class="row py-5 justify-content-center">
                    <div class="col">
                        <h1 class="display-1 text-center text-dark">
                        @yield('code')
                        <span class="text-muted">
                            @yield('message')
                        </span>
                        </h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 pb-3 text-center">
                        <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none"> 
                            <i class="fab fa-facebook-f" style='font-size:32px;margin-right:30px;'></i>
                        </a>
                        <a target="_blank" href="https://twitter.com/pemkotdepok?lang=en" style="text-decoration: none">
                            <i class="fab fa-twitter" style='font-size:32px;margin-right:30px;'></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/pemkotdepok/" style="text-decoration: none">
                            <i class="fab fa-instagram" style='font-size:32px;margin-right:30px;'></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/user/kominfodepok" style="text-decoration: none">
                            <i class="fab fa-youtube" style='font-size:32px;margin-right:30px;'></i>
                        </a>
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Hak Cipta &copy; Depok.go.id 2019</span>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
    </body>
</html>
