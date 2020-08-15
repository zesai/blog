<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')@if(request()->path() !== '/') - {{ config('app.name', 'Laravel') }} @endif</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style type="text/css">
        header nav {
            box-shadow: none;
        }

        header nav a {
            outline: none;
            color: #5a5a5a;
            font-weight: bolder;
            font-size: 16px;
        }

        header nav ul a:hover {
            background-color: #F56565;
            color: white;
        }

        header nav .brand-logo {
            color: #48BB78;
        }

        #menu i {
            font-size: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body class="bg-gray-100">
@include('home.layouts._header')

<main>
    <div class="container py-4 bg-white">
        @include('home.shared._message')
        @yield('content')
    </div>
</main>


@include('home.layouts._footer')

<!-- Scripts -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // dropdown
        $('.dropdown-trigger').dropdown({
            coverTrigger: false,
            hover: true
        });

        //轮播
        $('.carousel').carousel({
            fullWidth: true,
            padding: 7,
            shift: 10
        });

        //模态框设置
        $('.modal').modal();

        //
        $('.fixed-action-btn').floatingActionButton({
            direction: 'top',
        });


        $('.sidenav').sidenav();

    })

</script>
@yield('scripts')

</body>
</html>
