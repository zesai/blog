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
        
        body {
            background-image: url({{asset('image/bg_body.png')}});
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

        h1, h2, h3, h4, h5, h6 {
            color: #34495e;
        }

        a.btn {
            box-shadow: none !important;
            background: none !important;
        }

        a.btn:hover {
            background-color: rgba(60,64,67,0.08) !important;
            border-radius: 50% !important;
        }

        /* 滚动条 */
        ::-webkit-scrollbar-thumb:horizontal { /*水平滚动条的样式*/
            width: 4px;
            background-color: #CCCCCC;
            -webkit-border-radius: 6px;
        }
        ::-webkit-scrollbar-track-piece {
            background-color: #fff; /*滚动条的背景颜色*/
            -webkit-border-radius: 0; /*滚动条的圆角宽度*/
        }
        ::-webkit-scrollbar {
            width: 10px; /*滚动条的宽度*/
            height: 8px; /*滚动条的高度*/
        }
        ::-webkit-scrollbar-thumb:vertical { /*垂直滚动条的样式*/
            height: 50px;
            background-color: #999;
            -webkit-border-radius: 4px;
            outline: 2px solid #fff;
            outline-offset: -2px;
            border: 2px solid #fff;
        }
        ::-webkit-scrollbar-thumb:hover { /*滚动条的hover样式*/
            height: 50px;
            background-color: #9f9f9f;
            -webkit-border-radius: 4px;
        }

    </style>
</head>
<body>
@include('home.layouts._header')

<main>
    <div class="container py-4">
        @include('home.shared._message')
        @yield('content')
    </div>
</main>

@include('home.components._fixed_action_btn')
@include('home.layouts._footer')

<!-- Scripts -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    let uri = "{{Request::getUri()}}";

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

    $.get(uri + 'article', function (data) {
        console.log(data);
    })

</script>
@yield('scripts')

</body>
</html>
