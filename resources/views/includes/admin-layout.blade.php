<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portal Resmi Pemerintah Kota Depok</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

        <!-- Styles -->
        <script src="https://kit.fontawesome.com/d54b50045e.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body id="page-top">
        <div id="wrapper">
            @guest
                @yield('content')
            @else
                @include('includes.sidebar')
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <!-- Topbar -->
                        @include('includes.admin-navbar')
                        <!-- End of Topbar -->
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            <div class="pb-5">
                                @yield('content')
                            </div>
                            <!-- End of Main Content -->
                            <!-- Footer -->
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Hak Cipta &copy; Depok.go.id 2019</span>
                                    </div>
                                </div>
                            </footer>
                            <!-- End of Footer -->
                        </div>
                        <!-- End of Content Wrapper -->
                    </div>
                    <!-- End of Page Wrapper -->
                </div>
            @endguest
        </div>
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white border-bottom-0">
                        <h5 class="modal-title" id="delete-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Batal
                        </button>
                        <form id="delete-modal-form" method="post" action="">
                            @method('DELETE')
                            @csrf
                            <button id="delete-modal-button" class="btn btn-danger">
                                <strong></strong>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset(mix('js/app.js')) }}"></script>
        <script>
            $('#delete-modal').on('show.bs.modal', function(e) {
                $('#delete-modal-title').text('Hapus ' + e.relatedTarget.dataset.model + ' ' + e.relatedTarget.dataset.name + '?')
                $('#delete-modal-button > strong').text('Hapus ' + e.relatedTarget.dataset.model)
                $('#delete-modal-form').attr('action', e.relatedTarget.href)
            });
        </script>   
        @stack('js')
    </body>
</html>
