<header>
    <nav style="height: 64px;" class="bg-white text-gray-500 border-none mb-6 shadow-md">
        <div class="nav-wrapper container flex justify-between">
            <div class="flex justify-between w-full sm:w-full md:w-full lg:justify-start xl:justify-start">
                <!-- logo -->
                <a href="#" class="brand-logo right" style="position: initial">
                    <img src="{{asset('image/logo.png')}}" alt="freedom" class="h-full w-20">
                </a>
                <!-- 侧边菜单栏按钮 -->
                <a href="#" data-target="slide-out" class="sidenav-trigger block sm:block md:block lg:hidden xl:hidden"><i class="material-icons">menu</i></a>

                <!-- 菜单 -->
                <ul id="menu" class="ml-6 hidden sm:hidden md:hidden lg:block xl:block overflow-hidden">
                    <li><a href="#"><i class="material-icons left">home</i>首页</a></li>
                    <li><a class="dropdown-trigger" href="#" data-target="dropdown1">编程
                            <i class="material-icons left">laptop_windows</i>
                        </a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Laravel</a></li>
                            <li><a href="#">MySQL</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="material-icons left">video_library</i>自媒体</a></li>
                    <li><a href="#"><i class="material-icons left">forum</i>留言板</a></li>
                    <li><a href="#"><i class="material-icons left">attachment</i>友情链接</a></li>
                </ul>

            </div>

            <!-- 右侧按钮 -->
            <div class="hidden sm:hidden md:hidden lg:block xl:block">
                <ul class="right flex items-center">
                    <li><a href="#"><i class="material-icons search">search</i></a></li>
                    @if(1==1)
                        @if(1==2)
                            <li><a href="#"><i class="material-icons">notifications_active</i></a></li>

                        @else
                            <li><a href="#"><i class="material-icons">notifications_none</i></a></li>
                        @endif
                        <li>
                            <a href="#" class="dropdown-trigger" data-target="nav-user-panel">
                                <i class="flex items-center"><img class="w-16 rounded-full" src="{{asset('image/02.jpg')}}"></i>
                            </a>
                        </li>
                            <ul id="nav-user-panel" class="dropdown-content">
                                <li><a href="#">我的订单</a></li>
                                <li><a href="#">资料设置</a></li>
                                <li><a href="#">退出</a></li>
                            </ul>
                    @else
                        <li><a href="#"><i class="material-icons">person_pin</i></a></li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- 侧边菜单栏start -->
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
                    <div class="background">
                        <img class="h-full" src="{{asset('image/1120.jpg')}}">
                    </div>
                    <a href="#user"><img class="circle" src="{{asset('image/02.jpg')}}"></a>
                    <a href="#name"><span class="text-red-500 name">John Doe</span></a>
                    <a href="#email"><span class="text-red-500 email">jdandturk@gmail.com</span></a>
                </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
        <!-- 侧边菜单栏end -->
    </nav>
</header>










