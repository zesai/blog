<header>
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                    aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                    aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                         document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                      style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <div class="mb-3">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-2 text-base font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">首页</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">编程文章</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">资源下载</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">自媒体</a>
                        <div @click.away="open = false" class="relative" x-data="{ open: true }">
                            <button @click="open = !open" class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>More</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                                <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Appearance</p>
                                                <p class="text-sm">Easy customization</p>
                                            </div>
                                        </a>

                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Comments</p>
                                                <p class="text-sm">Check your latest comments</p>
                                            </div>
                                        </a>

                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Analytics</p>
                                                <p class="text-sm">Take a look at your statistics</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- item card -->
{{--<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">--}}
{{--    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">--}}
{{--    <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">--}}
{{--        <div class="flex items-center">--}}
{{--            <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>--}}
{{--            <p class="text-gray-800 font-semibold tracking-tighter">--}}
{{--                only--}}
{{--                <i class="text-gray-600 line-through">60$</i>--}}
{{--                48$--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <p class="text-sm text-gray-700 mt-4">--}}
{{--            Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequi.--}}
{{--        </p>--}}
{{--        <div class="flex items-center justify-end mt-4 top-auto">--}}
{{--            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>--}}
{{--            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>--}}
{{--            <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- post card -->
{{--<div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->--}}
{{--    <div class="flex items-start px-4 py-6">--}}
{{--        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">--}}
{{--        <div class="">--}}
{{--            <div class="flex items-center justify-between">--}}
{{--                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>--}}
{{--                <small class="text-sm text-gray-700">22h ago</small>--}}
{{--            </div>--}}
{{--            <p class="text-gray-700">Joined 12 SEP 2012. </p>--}}
{{--            <p class="mt-3 text-gray-700 text-sm">--}}
{{--                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!--}}
{{--            </p>--}}
{{--            <div class="mt-4 flex items-center">--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-3">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>--}}
{{--                    </svg>--}}
{{--                    <span>12</span>--}}
{{--                </div>--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-8">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>--}}
{{--                    </svg>--}}
{{--                    <span>8</span>--}}
{{--                </div>--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-4">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>--}}
{{--                    </svg>--}}
{{--                    <span>share</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- login -->
{{--<div class="">--}}
{{--    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">--}}
{{--        <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')"></div>--}}
{{--        <div class="w-full p-8 lg:w-1/2">--}}
{{--            <h2 class="text-2xl font-semibold text-gray-700 text-center">Brand</h2>--}}
{{--            <p class="text-xl text-gray-600 text-center">欢迎回来!</p>--}}
{{--            <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">--}}
{{--                <div class="px-4 py-3">--}}
{{--                    <svg class="h-6 w-6" viewBox="0 0 40 40">--}}
{{--                        <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107"/>--}}
{{--                        <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00"/>--}}
{{--                        <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50"/>--}}
{{--                        <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">谷歌登陆</h1>--}}
{{--            </a>--}}
{{--            <div class="mt-4 flex items-center justify-between">--}}
{{--                <span class="border-b w-1/5 lg:w-1/4"></span>--}}
{{--                <a href="#" class="text-xs text-center text-gray-500 uppercase">使用邮箱登陆</a>--}}
{{--                <span class="border-b w-1/5 lg:w-1/4"></span>--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <label class="block text-gray-700 text-sm font-bold mb-2">邮箱地址</label>--}}
{{--                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <div class="flex justify-between">--}}
{{--                    <label class="block text-gray-700 text-sm font-bold mb-2">密码</label>--}}
{{--                    <a href="#" class="text-xs text-gray-500">忘记密码？</a>--}}
{{--                </div>--}}

{{--                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"--}}
{{--                       type="password"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <div class="mt-8">--}}
{{--                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">登陆</button>--}}
{{--            </div>--}}
{{--            <div class="mt-4 flex items-center justify-between">--}}
{{--                <span class="border-b w-1/5 md:w-1/4"></span>--}}
{{--                <a href="#" class="text-xs text-gray-500">注册</a>--}}
{{--                <span class="border-b w-1/5 md:w-1/4"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

