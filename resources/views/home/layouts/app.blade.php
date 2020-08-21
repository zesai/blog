<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        a.btn {
            box-shadow: none !important;
            background: none !important;
        }

        a.btn:hover {
            background-color: rgba(60, 64, 67, 0.08) !important;
            border-radius: 50% !important;
        }

        .tabs .tab a {
            color: #26a69a;
            font-weight: bold;
        }


        .card-panel {
            box-shadow: none;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
@include('home.layouts._header')

<main>
    <div class="container py-1">
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
            no_wrap: false, //不循环播放子项目。(默认: false) ：没什么变化
        });

        //tooltip 提示
        $('.toolTipped').tooltip({
            margin: 3,
            transitionMovement: 5,
        });

        //tabs 选项卡
        $('.tabs').tabs();

    });

    $.get(uri + 'article', function (data) {
        console.log(data);
    })

</script>
<script src="{{asset('js/scrollTop.js')}}"></script>
@yield('scripts')

</body>
</html>
