{{-- BEGIN::Google Search Meta --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="description" content="Portal Resmi Pemerintah Kota Depok. Depok sebagai Kota untuk Berbagi, Bersahabat dan Berkolaborasi" />
<meta name="keywords" content="website, portal, website resmi, portal resmi, depok, kota depok, pemerintah kota depok, website resmi kota depok, portal resmi kota depok, website resmi pemerintah kota depok, portal resmi pemerintah kota depok">
<meta name="author" content="Pedro Iriano" />
{{-- END::Google Search Meta --}}

{{-- BEGIN::CSRF --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- BEGIN::CSRF --}}

{{-- BEGIN::Title --}}
<title>{{ config('app.name', 'Portal Resmi Pemerintah Kota Depok') }}</title>
{{-- END::Title --}}

<!-- BEGIN::Main CSS -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
<link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
<!-- END::Main CSS -->

<!-- BEGIN::Style CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css" crossorigin="anonymous">
{{-- <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" crossorigin="anonymous">
{{-- <link rel="stylesheet" href={{ asset("css/owl/owl.carousel.min.css") }}>
<link rel="stylesheet" href={{ asset("css/owl/owl.theme.default.min.css") }}> --}}
<link href="{{ asset('assets/libs/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.5/flowbite.min.css" crossorigin="anonymous" />
{{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" crossorigin="anonymous" /> --}}
{{-- <link rel="stylesheet" href={{ asset("css/flowbite/flowbite.min.css") }}> --}}
<script src="https://kit.fontawesome.com/d54b50045e.js" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js" crossorigin="anonymous"></script> --}}
<!-- END::Style CSS -->

<!-- BEGIN::Canonical -->
<link rel="canonical" href="https://depok.go.id" />
<!-- END::Canonical -->

<!-- BEGIN::Facebook Meta -->
<meta property="og:title" content="Depok | Portal Depok - Kota Depok">
<meta property="og:type" content="portal">
<meta property="og:url" content="https://depok.go.id">
<meta property="og:site_name" content="Depok">
<meta property="og:description" content="Portal Resmi Pemerintah Kota Depok">
<meta property="og:image" content="">
<!-- END::Facebook Meta -->

<!-- BEGIN::Twitter Meta -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Depok | Portal Depok - Kota Depok">
<meta name="twitter:description" content="Portal Resmi Pemerintah Kota Depok">
<meta name="twitter:image" content="">
<!-- END::Twitter Meta -->

<!-- BEGIN::Favicons -->
<link rel="apple-touch-icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_180x180.png') }}" sizes="180x180">
<link rel="icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_32x32.png') }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_16x16.png') }}" sizes="16x16" type="image/png">
<!-- END::Favicons -->
