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
        * {
            outline: none;
        }

        header nav a {
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

        header nav .dropdown-content > li > a {
            font-size: 13px;
            color: #5a5a5a;
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
    <div class="container py-4">
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

        //轮播组件
        $('.carousel.carousel-slider').carousel({
            full_width: true, //全宽度滑块
            time_constant: 200, //转换时间(默认: 200) ：没测出什么意思，没什么变化
            dist: -90, //缩放， 如过是0，所有的子项都是相同的尺寸 (默认: -100)：滑动时当前滑块缩放
            shift: 0, //设置中间项的空隙。(默认: 0):滑动时两个滑块的空隙
            padding: 0, //设定非中间项的内补白。(默认: 0) :滑动时两个滑块的空隙
            indicators: true, //设置是否显示指标。(默认: false) :滑块下面的点链接
            no_wrap: false //不循环播放子项目。(默认: false) ：没什么变化
        });
    })

</script>
@yield('scripts')

</body>
</html>
