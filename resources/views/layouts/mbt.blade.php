<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MBT Media CRM</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7990d3a9fb.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/select2/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <link href="{{ asset('css/mbt.css') }}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <img src="{{ asset('img/logo-menu-white.png') }}" class="img-menu" />
                        <div class="logo-element">
                            <img src="{{ asset('img/logo-menu-white.png') }}" />
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> <span
                                class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('project-index') }}"><i class="fas fa-film"></i> <span
                                class="nav-label">Projekty</span></a>
                    </li>
                    <li>
                        <a href="{{ route('client-index') }}"><i class="far fa-building"></i> <span
                                class="nav-label">Klienci</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">

                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Wyloguj
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @vite(['resources/js/app.js'])

    <script>
        @if ($errors->any())
            @foreach (array_reverse($errors->all()) as $error)
                toastr.error('{!! $error !!}');
            @endforeach
        @endif
        @if (Session::has('success_message'))
            toastr.success('{!! addslashes(Session::get('success_message')) !!}');
        @endif
        @if (Session::has('error_message'))
            toastr.error('{!! addslashes(Session::get('error_message')) !!}');
        @endif
    </script>
</body>

</html>
