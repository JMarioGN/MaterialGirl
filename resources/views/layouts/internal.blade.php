<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icono en pestaña -->
    <link rel="shortcut icon" href="{{ asset('images/logol.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MATERIAL GIRL</title><!-- {{ config('app.name', 'Laravel') }} -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm"  style="background-image: url('{{ asset('images/fondoMdd.jpg')}}'); background-size: cover;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logol.png')}}" alt="logotipa MATERIAL GIRL" style="width: 120px; height: 120px; border-radius: 50%; margin: -10px;">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}"  style="color:#333; font:900 16px arial;">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index')  }}">Productos</a>
                            </li>
                        @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}"  style="color:#333; font:900 16px arial;">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('roles.index') }}"  style="color:#333; font:900 16px arial;">Roles</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cproducto.index')  }}" style="color:#333; font:900 16px arial;">Categoria Producto</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index')  }}" style="color:#333; font:900 16px arial;">Productos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('proveedores.index')  }}" style="color:#333; font:900 16px arial;">Proveedores</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{  route('detalle_venta.index') }}" style="color:#333; font:900 16px arial;">Detalle de venta</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#333; font:900 16px arial;" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:#333; font:900 16px arial;">
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

        <main class="p-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
