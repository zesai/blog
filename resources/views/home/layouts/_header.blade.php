<header>
    <nav style="height: 64px;" class="bg-white text-gray-500 border-none mb-6 shadow-md">
        <div class="nav-wrapper container flex justify-between">
            <div class="flex justify-between w-full sm:w-full md:w-full lg:justify-start xl:justify-start">
                <!-- logo -->
                <a href="#" class="brand-logo right" style="position: initial">
                    <img src="{{asset('image/logo.png')}}" alt="freedom" class="h-full w-20">
                </a>
                <!-- 侧边菜单栏按钮 -->
                <a href="#" data-target="slide-out" class="sidenav-trigger block sm:block md:block lg:hidden xl:hidden"><i
                            class="material-icons">menu</i></a>

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
                    @if(auth()->guard('socialite')->check())
                        @if(1==2)
                            <li><a href="#"><i class="material-icons">notifications_active</i></a></li>

                        @else
                            <li><a href="#"><i class="material-icons">notifications_none</i></a></li>
                        @endif
                        <li>
                            <a href="#" class="dropdown-trigger" data-target="nav-user-panel">
                                <i class="flex items-center">
                                    <img class="w-16 rounded-full" src="{{asset($socialiteUser->avatar)}}">
                                </i>
                            </a>
                        </li>
                        <ul id="nav-user-panel" class="dropdown-content">
                            <li><a href="#">我的订单</a></li>
                            <li><a href="#">资料设置</a></li>
                            <li><a href="{{route('logout')}}">退出</a></li>
                        </ul>
                    @else
                        <li><a class="modal-trigger" href="#socialiteClient"><i class="material-icons">person_pin</i></a></li>
                        <div id="socialiteClient" class="modal">
                            <div class="modal-title flex-row items-center">
                                <span class="">请选择登录方式</span>
                            </div>
                            <div class="modal-content">
                                <div class="row">
                                    <div class="px-4 py-3">
                                        <a class="btn-floating waves-effect waves-light" href="{{route('socialite.redirect', 'github')}}">
                                            <svg class="h-6 w-6" viewBox="0 0 40 40">
                                                <path
                                                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                                        fill="#FFC107"/>
                                                <path
                                                        d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                                        fill="#FF3D00"/>
                                                <path
                                                        d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                                        fill="#4CAF50"/>
                                                <path
                                                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                                        fill="#1976D2"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
        <!-- 侧边菜单栏start -->
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img class="h-full" src="{{asset('image/1120.jpg')}}">
                    </div>
                    @if(auth()->guard('socialite')->check())
                        <a href="#user"><img class="circle" src="{{asset($socialiteUser->avatar)}}"></a>
                        <a href="#name"><span class="text-red-500 name">{{asset($socialiteUser->name)}}</span></a>
                        <a href="#email"><span class="text-red-500 email">{{asset($socialiteUser->email)}}</span></a>
                    @else

                    @endif


                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
        <!-- 侧边菜单栏end -->
    </nav>
</header>










