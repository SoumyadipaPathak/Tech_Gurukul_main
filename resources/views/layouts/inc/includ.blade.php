<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    {{-- <link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!--Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.inc.admin-navbar')
            <!-- Main Content -->
            <div id="content">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script> --}}

</body>

</html>
