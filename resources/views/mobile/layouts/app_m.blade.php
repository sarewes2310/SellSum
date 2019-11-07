<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sellsum') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            
            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"><img src="{{ asset('asset_icon/sellsum.png') }}" class="logo-item"></div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">Beli</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Laporan</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Transaksi</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Manajemen</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Pengaturan</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper">
    
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom" style="margin-left: -1px">
                    <div class="row text-white">
                        <div class="col">
                            <button class="navbar-toggler" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
                        </div>
                        <div class="col text-center" style="margin:auto">
                            <h5 class="text-center line-disp">Pesanan</h5>
                        </div>
                        <div class="col">
                            
                        </div>
                    </div>
                </nav>
        
                <main class="py-41">
                    @yield('content')
                </main>

            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            //alert('RUNN ');
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        
    </script>
</body>
</html>
