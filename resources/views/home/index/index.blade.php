@extends('home.layouts.app')

@section('title', '这是首页')

@section('keywords', 'test')

@section('description', '测试')

@section('content')
    <!-- 首页轮播资讯 -->
    @include('home.index._carousel')

    <!-- 置顶文章 -->
    <section>
        <div class="row">
            <div class="col s12 m9 bg-white left">
                <ul>
                    <li class="flex">
                        <span>置顶</span>
                        <img src="" alt="">
                        <h6>这是标题1</h6>
                        <ul class="flex">
                            <li><i class="material-icons">timer</i></li>
                            <li><i class="material-icons">thumb_up</i></li>
                            <li><i class="material-icons">mode_comment</i></li>
                            <li><i class="material-icons">visibility</i></li>
                        </ul>
                    </li>
                    <li class="flex">
                        <span>置顶</span>
                        <img src="" alt="">
                        <h6>这是标题2</h6>
                        <ul class="flex">
                            <li><i class="material-icons">timer</i></li>
                            <li><i class="material-icons">thumb_up</i></li>
                            <li><i class="material-icons">mode_comment</i></li>
                            <li><i class="material-icons">visibility</i></li>
                        </ul>
                    </li>
                    <li class="flex">
                        <span>置顶</span>
                        <img src="" alt="">
                        <h6>这是标题3</h6>
                        <ul class="flex">
                            <li><i class="material-icons">timer</i></li>
                            <li><i class="material-icons">thumb_up</i></li>
                            <li><i class="material-icons">mode_comment</i></li>
                            <li><i class="material-icons">visibility</i></li>
                        </ul>
                    </li>
                    <li class="flex">
                        <span>置顶</span>
                        <img src="" alt="">
                        <h6>这是标题4</h6>
                        <ul class="flex">
                            <li><i class="material-icons">timer</i></li>
                            <li><i class="material-icons">thumb_up</i></li>
                            <li><i class="material-icons">mode_comment</i></li>
                            <li><i class="material-icons">visibility</i></li>
                        </ul>
                    </li>
                    <li class="flex">
                        <span>置顶</span>
                        <img src="" alt="">
                        <h6>这是标题5</h6>
                        <ul class="flex">
                            <li><i class="material-icons">timer</i></li>
                            <li><i class="material-icons">thumb_up</i></li>
                            <li><i class="material-icons">mode_comment</i></li>
                            <li><i class="material-icons">visibility</i></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col s12 m3 right" style="padding: 0 0 0 0.75rem;">
                @include('home.user._author_card')
            </div>
        </div>
    </section>

    <!-- 文章，sidebar -->
    <section>
        <div class="row flex justify-between">
            <!-- 文章列表 -->
            <div class="col-11">
                <ul id="staggered-test">
                    <li class="" style="transform: translateX(0px); opacity: 1;">
                        <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                            <div class="mt-4 rounded-r-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-red-500">
                                0								Follower
                            </div>

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
                    </li>
                    <li class="" style="transform: translateX(0px); opacity: 1;">
                        <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                            <div class="mt-4 rounded-r-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-red-500">
                                0								Follower
                            </div>

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
                    </li>
                    <li class="" style="transform: translateX(0px); opacity: 1;">
                        <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                            <div class="mt-4 rounded-r-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-red-500">
                                0								Follower
                            </div>

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
                    </li>
                    <li class="" style="transform: translateX(0px); opacity: 1;">
                        <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                            <div class="mt-4 rounded-r-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-red-500">
                                0								Follower
                            </div>

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
                    </li>
                    <li class="" style="transform: translateX(0px); opacity: 1;">
                        <div class="card-panel hoverable md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
                            <div class="mt-4 rounded-r-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-red-500">
                                0								Follower
                            </div>

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
                    </li>
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col-1">
                <div> div1</div>
                <div>div2</div>
                <div>div3</div>
            </div>
        </div>
    </section>


    <!-- 推荐资源 -->
    @include('home.components._bottom_recommend')

    <!-- item card -->




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

    <section>
        <div class="carousel bg-white">
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75" src="https://lorempixel.com/250/250/nature/5"></a>
        </div>
    </section>

@endsection
