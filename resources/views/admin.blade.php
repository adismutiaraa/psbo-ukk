<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ url('page-admin/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('page-admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('page-admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('page-admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('page-admin/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('page-admin/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ url('page-admin/assets/scss/style.css') }}">
    <link href="{{ url('page-admin/assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ url('page-admin/images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ url('page-admin/images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UKK IPB</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="{{route('laporan-masuk')}}">Masuk</a></li>
                            <li><i class="fa fa-file"></i><a href="{{route('laporan-dikonfirmasi')}}">Telah di konfirmasi</a></li>
                            
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-thumb-tack"></i>Pengumuman</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-thumb-tack"></i><a href="{{route('pengumuman')}}">Buat Pengmuman</a></li>
                            <li><i class="fa fa-thumb-tack"></i><a href="{{route('pengumuman-dipost')}}">Postingan Pengumuman</a></li>
                            
                        </ul>
                    </li>

                    

                     <li>
                        <a href="{{route('daftar-user')}}"> <i class="menu-icon fa fa-list-ul"></i>Daftar User</a>
                    <!-- <li><a class="drop" href="#">{{Auth:: user()-> name}}</a> -->
                    <!-- <ul>
                    <li><a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul> -->
                  <!-- </li> -->
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                     </form>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                        <div class="dropdown for-message">
                          
                          <div class="dropdown-menu" aria-labelledby="message">
                            
                            
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i > {{Auth:: user()-> name}} </i>
                            
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            
                            <div class="dropdown-item">
                                <ul><li><a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">

            
            @yield('content')

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ url('page-admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ url('page-admin/assets/js/plugins.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/main.js') }}"></script>


    <script src="{{ url('page-admin/assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/widgets.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ url('page-admin/assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
