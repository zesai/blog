@extends('home.layouts.app')

@section('title', '这是首页')

@section('keywords', 'test')

@section('description', '测试')

@section('content')
    <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
        <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
        <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
        <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div>

    <!-- item card -->
    <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
        <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
             src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">
        <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
            <div class="flex items-center">
                <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>
                <p class="text-gray-800 font-semibold tracking-tighter">
                    only
                    <i class="text-gray-600 line-through">60$</i>
                    48$
                </p>
            </div>
            <p class="text-sm text-gray-700 mt-4">
                Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa
                suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam tempore
                commodi ipsa suscipit laboriosam, sit earum at sequi.
            </p>
            <div class="flex items-center justify-end mt-4 top-auto">
                <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
                <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
                <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>
            </div>
        </div>
    </div>

    <div class="card-panel hoverable bg-white border-none rounded shadow shadow-xl max-w-md mx-auto">
        <!-- header -->
        <header class="p-4">
            <img class="w-10 h-10 m-1 mr-3 float-left rounded-full" src="http://lorempixel.com/64/64/nature/5/"/>
            <h3 class="text-lg font-bold">Island Escape Holiday Package</h3>
            <p class="text-sm text-gray-600">5 nights (inc flights) from $1999</p>
        </header>

        <!-- section -->
        <section>
            <img src="http://lorempixel.com/700/450/nature/5/"/>
            <p class="text-sm text-gray-600 p-4">Omnis consectetur voluptatem labore aut et vel itaque recusandae. Et
                molestiae iure qui et nihil minus nes ciunt.</p>
        </section>
        <!-- footer -->
        <footer class="p-4">
            <a href="#" class="uppercase font-bold text-sm text-blue-700 hover:underline mr-3">Book Online</a>
            <a href="#" class="uppercase font-bold text-sm text-blue-700 hover:underline">More Info</a>
            <a href="#" class="float-right">
                <img src="https://img.icons8.com/flat_round/24/000000/share--v1.png"/>
            </a>
            <a href="#" class="float-right mr-3">
                <img src="https://img.icons8.com/flat_round/24/000000/hearts.png"/>
            </a>
        </footer>
    </div>

    <!-- post card -->
    <div class="flex bg-white bg-gray-100 hover:bg-gray-200 mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl ">
        <!--horizantil margin is just for display-->
        <div class="flex items-start px-4 py-6">
            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                 src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                 alt="avatar">
            <div class="">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                    <small class="text-sm text-gray-700">22h ago</small>
                </div>
                <p class="text-gray-700">Joined 12 SEP 2012. </p>
                <p class="mt-3 text-gray-700 text-sm">
                    Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                </p>
                <div class="mt-4 flex items-center">
                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span>12</span>
                    </div>
                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                        <span>8</span>
                    </div>
                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        <span>share</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login -->
    <div id="modal1" class="modal">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                 style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')"></div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Brand</h2>
                <p class="text-xl text-gray-600 text-center">欢迎回来!</p>
                <a href="#"
                   class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <svg class="h-6 w-6" viewBox="0 0 40 40">
                            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                  fill="#FFC107"/>
                            <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                  fill="#FF3D00"/>
                            <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                  fill="#4CAF50"/>
                            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                  fill="#1976D2"/>
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">谷歌登陆</h1>
                </a>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">使用邮箱登陆</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">邮箱地址</label>
                    <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                           type="email">
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label class="block text-gray-700 text-sm font-bold mb-2">密码</label>
                        <a href="#" class="text-xs text-gray-500">忘记密码？</a>
                    </div>

                    <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                           type="password"
                    />
                </div>
                <div class="mt-8">
                    <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">登陆
                    </button>
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 md:w-1/4"></span>
                    <a href="#" class="text-xs text-gray-500">注册</a>
                    <span class="border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </div>


    <div class="fixed-action-btn">
        <a class="btn-floating btn-large bg-red-500">
            <i class="large material-icons">business_center</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>

@endsection
