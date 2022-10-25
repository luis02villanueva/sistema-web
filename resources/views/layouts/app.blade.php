{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sistema-Ferreteria y Matizados Tonny´s</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dist/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dist/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dist/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dist/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dist/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('dist/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('dist/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('dist/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/assets/favicon/favicon-16x16.png"') }}>
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('dist/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('dist/css/examples.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('dist/vendors/@coreui/chartjs/css/coreui-chartjs.css') }} " rel="stylesheet">
  </head>
  <body>


           {{-- El sidebar para cambiar opciones  --}}
           <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">

            <div class="sidebar-brand d-none d-md-flex">
                <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('dist/assets/brand/coreui.svg') }}"></use>
                </svg>
                <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('dist/assets/brand/coreui.svg') }}"></use>
                </svg>
            </div>

            <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
                <li class="nav-item"><a class="nav-link" href="/home">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"  ></use>
                    </svg> Dashboard</a></li>

                <li class="nav-title">SRGURIDAD</li>
                <li class="nav-item"><a class="nav-link" href="/usuarios">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-people') }}"></use>
                    </svg> Usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="/roles">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-beach-access') }}"></use>
                    </svg> Permisos</a></li>


                <li class="nav-title">MAESTRO</li>
                <li class="nav-item"><a class="nav-link" href="/blogs">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                    </svg> Categoria</a></li>
                <li class="nav-item"><a class="nav-link" href="/unidad">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-list-numbered-rtl') }}"></use>
                    </svg> Unidad de medida</a></li>
                <li class="nav-item"><a class="nav-link" href="/marca">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-bookmark') }}"></use>
                    </svg> Marca</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/tipodocumentos">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
                    </svg> Tipo documento</a>
                </li>

                <li class="nav-title">ALMACÉN</li>
                <li class="nav-item"><a class="nav-link" href="colors.html">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-building') }}"></use>
                    </svg> Almacén</a></li>
                <li class="nav-item"><a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-clipboard') }}"></use>
                    </svg> Kardéx</a></li>
                </ul>

             <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
        </div>



    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        <header class="header header-sticky mb-4">
            <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('dist/assets/brand/coreui.svg#full') }}"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                    </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                    </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                    </svg></a></li>
            </ul>

            {{--Perfil de usuario --}}
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('dist/assets/img/avatars/8.jpg') }}" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">Configuración</div>
                    </div><a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                    </svg> Perfil</a><a class="dropdown-item" href="#">

                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <svg class="icon me-2">
                        <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                    </svg> Salir</a>




                 </a>
                </div>
                </li>
            </ul>


            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single--><span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
                </ol>
            </nav>
            </div>
        </header>

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                    @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div> Ferreteria y Matizados Tonny's</div>
        </footer>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('dist/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src=" {{ asset('dist/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('dist/vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script>
    </script>

  </body>
</html>
