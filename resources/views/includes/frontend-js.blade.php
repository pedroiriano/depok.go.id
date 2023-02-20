<!-- BEGIN::Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script> --}}
<script src="{{ asset('assets/libs/wow.js/wow.min.js') }}"></script>
<script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
<script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
<script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js') }}"></script>
{{-- <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script> --}}
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.5/flowbite.min.js" crossorigin="anonymous"></script>
{{-- <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js" crossorigin="anonymous"></script> --}}
{{-- <script src="{{ asset('assets/js/flowbite/flowbite.js') }}"></script> --}}
<!-- END::Javascripts -->

<!-- BEGIN::GPR Widget -->
{{-- <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js" crossorigin="anonymous"></script> --}}
{{-- <script type="module" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js" crossorigin="anonymous"></script> --}}
{{-- <script async src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js" crossorigin="anonymous"></script> --}}
<script crossorigin="anonymous"></script>
<script>
    window.onload = function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://widget.kominfo.go.id/gpr-widget-kominfo.min.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    }
</script>
<!-- END::GPR Widget -->

<!-- BEGIN::Analytics Google -->
<script src="{{ asset('js/public.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-17742526-4" crossorigin="anonymous"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-17742526-4');
</script>
<!-- END::Analytics Google -->
