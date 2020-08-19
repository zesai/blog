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
        <div class="row">
            <!-- 文章列表 -->
            <div class="col s12 m9 left">
                <ul class="article-list md:">
                    <li class="">
                        <article
                                class="card-panel hoverable md:flex mx-6 md:mx-auto my-40 max-w-lg md:max-w-full h-64 rounded-lg">
                            <img class="transition duration-500 shadow-none transform scale-100 hover:scale-105 h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                                 src="{{asset('image/shubao.jpg')}}" alt="">
                            <div class="flex flex-col w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                                <div class="flex flex-col">
                                    <a class="text-xl text-gray-800 font-bold mr-auto">主题阿三大苏打撒旦撒旦</a>
                                    <p class="text-sm text-gray-700 mt-4">
                                        Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam
                                        tempore commodi ipsa
                                    </p>
                                </div>
                                <hr class="divider">
                                <div class="flex mt-auto items-center justify-between">
                                    <div class="flex flex-row items-center">
                                        <span class="flex items-center mr-2"><i class="material-icons">whatshot</i> 135</span>
                                        <span class="flex items-center"><i class="material-icons">chat_bubble</i> 135</span>
                                    </div>
                                    <button class="flex items-center btn">
                                        Read more <i class="material-icons">navigate_next</i>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article
                                class="card-panel hoverable md:flex mx-6 md:mx-auto my-40 max-w-lg md:max-w-full h-64 rounded-lg">
                            <img class="transition duration-500 shadow-none transform scale-100 hover:scale-105 h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                                 src="{{asset('image/shubao.jpg')}}" alt="">
                            <div class="flex flex-col w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                                <div class="flex flex-col">
                                    <a class="text-xl text-gray-800 font-bold mr-auto">主题阿三大苏打撒旦撒旦</a>
                                    <p class="text-sm text-gray-700 mt-4">
                                        Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam
                                        tempore commodi ipsa
                                    </p>
                                </div>
                                <hr class="divider">
                                <div class="flex mt-auto items-center justify-between">
                                    <div class="flex flex-row items-center">
                                        <span class="flex items-center mr-2"><i class="material-icons">whatshot</i> 135</span>
                                        <span class="flex items-center"><i class="material-icons">chat_bubble</i> 135</span>
                                    </div>
                                    <button class="flex items-center btn">
                                        Read more <i class="material-icons">navigate_next</i>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article
                                class="card-panel hoverable md:flex mx-6 md:mx-auto my-40 max-w-lg md:max-w-full h-64 rounded-lg">
                            <img class="transition duration-500 shadow-none transform scale-100 hover:scale-105 h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                                 src="{{asset('image/shubao.jpg')}}" alt="">
                            <div class="flex flex-col w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                                <div class="flex flex-col">
                                    <a class="text-xl text-gray-800 font-bold mr-auto">主题阿三大苏打撒旦撒旦</a>
                                    <p class="text-sm text-gray-700 mt-4">
                                        Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam
                                        tempore commodi ipsa
                                    </p>
                                </div>
                                <hr class="divider">
                                <div class="flex mt-auto items-center justify-between">
                                    <div class="flex flex-row items-center">
                                        <span class="flex items-center mr-2"><i class="material-icons">whatshot</i> 135</span>
                                        <span class="flex items-center"><i class="material-icons">chat_bubble</i> 135</span>
                                    </div>
                                    <button class="flex items-center btn">
                                        Read more <i class="material-icons">navigate_next</i>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col s12 m3 right sm:hidden md:hidden lg:block xl:block">
                <div class="card border-blue-100 border-2 w-full h-64">
                    <div class="card-header-pills">asdasdasd</div>
                    <div class="card-content">asdjsadihaiowdwoqndo</div>
                </div>
                <div>

                </div>
                <div>
                    <div>
                        <span></span>
                        <span><i></i></span>
                    </div>
                    <div>

                    </div>
                </div>
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
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"
                                                        src="https://lorempixel.com/250/250/nature/5"></a>
        </div>
    </section>

@endsection
