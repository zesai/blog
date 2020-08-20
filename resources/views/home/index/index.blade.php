@extends('home.layouts.app')

@section('title', '这是首页')

@section('keywords', 'test')

@section('description', '测试')

@section('content')
    <!-- 首页轮播资讯 -->
    @include('home.index._carousel')

    <section>
        <div class="row">
            <div class="col s12 m9 left" style="padding-left: 0px">
                <!-- 顶部文章面板 -->
                <div class="bg-white pt-4 pb-1 px-2 h-75">
                    <ul id="tabs-swipe-demo" class="tabs mb-1">
                        <li class="tab"><a class="active inline-flex items-center" href="#top-article-panel"><span
                                        class="inline-flex items-center"><i class="material-icons text-xl mr-1">vertical_align_top</i>置顶文章</span></a>
                        </li>
                        <li class="tab"><a href="#random-article-panel"><span class="inline-flex items-center"><i
                                            class="material-icons text-xl mr-1">autorenew</i>每日推荐</span></a></li>
                        <li class="tab"><a href="#hot-article-panel"><span class="inline-flex items-center"><i
                                            class="material-icons text-xl mr-1">whatshot</i>热门文章</span></a></li>
                    </ul>
                    <div id="top-article-panel" class="h-75">
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="random-article-panel" class="h-75">
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="hot-article-panel" class="h-75">
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 border-b border-gray-200 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="flex items-center w-full py-2 w-full ml-1">
                            <div class="user-avatar">
                                <a href="" class="rm-tdu" target="_blank">
                                    <img src="{{asset('image/shubao.jpg')}}" alt="" class="w-12 h-10 rounded">
                                </a>
                            </div>
                            <span class="text-sm px-3 cursor-pointer text-center w-20 py-1 bg-red-200 text-red-800 rounded mx-2">翻译</span>
                            <a class="flex w-full items-center justify-between text-gray-700 text-base font-bold mr-2"
                               href="" target="_blank">
                                <span class="article-top-title hover:text-gray-500">[进度 40％] Tailwind CSS 小技巧</span>
                                <span class="hidden sm:hidden md:block lg:block xl:block ml-auto text-right"
                                      style="font-size: 13px">
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="热度 2">
                                            <i class="material-icons text-red-500 text-xl mr-1">whatshot</i>2
                                        </span>
                                    </span>
                                    <span class="inline-flex items-center mx-1">|</span>
                                    <span class="count_set">
                                        <span class="toolTipped inline-flex items-center" data-position="top"
                                              data-tooltip="评论 2">
                                            <i class="material-icons text-teal-500 text-xl mr-1">mode_comment</i>2
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-40 my-4 bg-gray-400 rounded"></div>
                <!--文章列表-->
                <ul class="article-list inline-block">
                    <li>
                        <article
                                class="card-panel hoverable md:flex mx-6 md:mx-auto my-40 max-w-lg md:max-w-full h-64 rounded-lg">
                            <img class="transition duration-500 shadow-none transform scale-100 hover:scale-105 h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                                 src="{{asset('image/shubao.jpg')}}" alt="">
                            <div class="flex flex-col w-full md:w-2/3 px-4 pt-2 bg-white rounded-lg">
                                <div class="flex flex-col">
                                    <a class="text-xl text-gray-800 font-bold mr-auto">主题阿三大苏打撒旦撒旦</a>
                                    <p class="text-sm text-gray-700 mt-4">
                                        Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam
                                        tempore commodi ipsa
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <hr class="divider mb-1">
                                    <div class="flex mt-auto items-center justify-between bottom-0">
                                        <div class="flex flex-row items-center">
                                        <span class="flex items-center mr-2"><i
                                                    class="material-icons">whatshot</i> 135</span>
                                            <span class="flex items-center"><i
                                                        class="material-icons">chat_bubble</i> 135</span>
                                        </div>
                                        <button class="flex items-center btn">
                                            Read more <i class="material-icons">navigate_next</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
            <!-- 文章列表 -->
            <div class="col s12 m3 right" style="padding: 0 0 0 0.75rem;">
            @include('home.user._author_card')
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
        {{--        <div class="carousel bg-white">--}}
        {{--            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/1"></a>--}}
        {{--            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/2"></a>--}}
        {{--            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/3"></a>--}}
        {{--            <a class="carousel-item" href="#four!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/4"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--            <a class="carousel-item" href="#five!"><img class="hover:opacity-75"--}}
        {{--                                                        src="https://lorempixel.com/250/250/nature/5"></a>--}}
        {{--        </div>--}}
    </section>

@endsection
