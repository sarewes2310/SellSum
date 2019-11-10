<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sellsum') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ secure_asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/auth.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            
            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"><img src="{{ secure_asset('asset_icon/sellsum.png') }}" class="logo-item"></div>
                <div class="list-group list-group-flush">
                    @yield('link_asal')
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper">
    
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom text-white" style="margin-left: -1px">
                    
                    <button class="navbar-toggler" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
                    <h5 class="text-center line-disp margin-ato">
                        @yield('title-menu')
                    </h5>
                    <h5 class="atas-bawah-ato">
                        <i class="fas fa-search"></i>
                    </h5>
                    <!--<div class="row text-white">
                        <div class="col-3">
                            <button class="navbar-toggler" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
                        </div>
                        <div class="col-6 text-center margin-ato">
                            <h5 class="text-center line-disp">Pesanan</h5>
                        </div>
                        <div class="col-3 margin-ato">
                            <h5>
                                <i class="fas fa-search"></i>
                            </h5>
                        </div>
                    </div>-->
                </nav>
        
                <main class="#">
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
    @yield('link_javascript')

    <!-- Menu Toggle Script -->
    <script language="JavaScript">
        $("#menu-toggle").click(function(e) {
            //alert('RUNN ');
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
