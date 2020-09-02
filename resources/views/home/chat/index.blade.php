@extends('home.layouts.app')

@section('title', '聊天')

@section('keywords', 'websocket,聊天,通讯')

@section('description', '聊天窗口')

@section('styles')
    <style type="text/css">
        /* can be configured in tailwind.config.js */
        .group:hover .group-hover\:block {
            display: block;
        }

        .hover\:w-64:hover {
            width: 45%;
        }


        /* NO NEED THIS CSS - just for custom scrollbar which can also be configured in tailwind.config.js*/
        ::-webkit-scrollbar {
            width: 2px;
            height: 2px;
        }

        ::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }

        ::-webkit-scrollbar-thumb {
            background: #2d3748;
            border: 0px none #ffffff;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2b6cb0;
        }

        ::-webkit-scrollbar-thumb:active {
            background: #000000;
        }

        ::-webkit-scrollbar-track {
            background: #1a202c;
            border: 0px none #ffffff;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-track:hover {
            background: #666666;
        }

        ::-webkit-scrollbar-track:active {
            background: #333333;
        }

        ::-webkit-scrollbar-corner {
            background: transparent;
        }

    </style>
@endsection

@section('content')
    <!-- Messenger Clone -->
    <div class="h-screen w-full flex antialiased text-gray-200 bg-gray-900 overflow-hidden">
        <div class="flex-1 flex flex-col">
            <div class="border-b-2 border-gray-800 p-2 flex flex-row z-20">
                <div class="bg-red-600 w-3 h-3 rounded-full mr-2"></div>
                <div class="bg-yellow-500 w-3 h-3 rounded-full mr-2"></div>
                <div class="bg-green-500 w-3 h-3 rounded-full mr-2"></div>
            </div>
            <main class="flex-grow flex flex-row min-h-0">
                <section
                        class="flex flex-col flex-none overflow-auto w-24 hover:w-64 group lg:max-w-sm md:w-2/5 transition-all duration-300 ease-in-out">
                    <div class="header p-4 flex flex-row justify-between items-center flex-none">
                        <div class="w-16 h-16 relative flex flex-shrink-0" style="filter: invert(100%);">
                            <img class="rounded-full w-full h-full object-cover" alt="ravisankarchinnam"
                                 src="https://avatars3.githubusercontent.com/u/22351907?s=60"/>
                        </div>
                        <p class="text-md font-bold hidden md:block group-hover:block">Messenger</p>
                        <a href="#"
                           class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 hidden md:block group-hover:block">
                            <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                <path
                                        d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="search-box p-4 flex-none">
                        <form onsubmit="">
                            <div class="relative">
                                <label>
                                    <input class="rounded-full py-2 pr-6 pl-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                           type="text" value="" placeholder="Search Messenger"/>
                                    <span class="absolute top-0 left-0 mt-2 ml-3 inline-block">
                                    <svg viewBox="0 0 24 24" class="w-6 h-6">
                                        <path fill="#bbb"
                                              d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                                    </svg>
                                </span>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="active-users flex flex-row p-2 overflow-auto w-0 min-w-full">
                        <div class="text-sm text-center mr-4">
                            <button class="flex flex-shrink-0 focus:outline-none block bg-gray-800 text-gray-600 rounded-full w-20 h-20"
                                    type="button">
                                <svg class="w-full h-full fill-current" viewBox="0 0 24 24">
                                    <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                                </svg>
                            </button>
                            <p>Your Story</p>
                        </div>
                        <div class="text-sm text-center mr-4">
                            <div class="p-1 border-4 border-blue-600 rounded-full">
                                <div class="w-16 h-16 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                         src="https://randomuser.me/api/portraits/women/12.jpg"
                                         alt=""
                                    />
                                </div>
                            </div>
                            <p>Anna</p></div>
                        <div class="text-sm text-center mr-4">
                            <div class="p-1 border-4 border-transparent rounded-full">
                                <div class="w-16 h-16 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                         src="https://randomuser.me/api/portraits/men/75.jpg"
                                         alt=""
                                    />
                                    <div class="absolute bg-gray-900 p-1 rounded-full bottom-0 right-0">
                                        <div class="bg-green-500 rounded-full w-3 h-3"></div>
                                    </div>
                                </div>
                            </div>
                            <p>Jeff</p></div>
                        <div class="text-sm text-center mr-4">
                            <div class="p-1 border-4 border-blue-600 rounded-full">
                                <div class="w-16 h-16 relative flex flex-shrink-0">
                                    <img class="shadow-md rounded-full w-full h-full object-cover"
                                         src="https://randomuser.me/api/portraits/women/42.jpg"
                                         alt=""
                                    />
                                </div>
                            </div>
                            <p>Cathy</p></div>
                    </div>
                    <div class="contacts p-2 flex-1 overflow-y-scroll">
                        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                            <div class="w-16 h-16 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/men/97.jpg"
                                     alt=""
                                />
                                <div class="absolute bg-gray-900 p-1 rounded-full bottom-0 right-0">
                                    <div class="bg-green-500 rounded-full w-3 h-3"></div>
                                </div>
                            </div>
                            <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                <p class="font-bold">Tony Stark</p>
                                <div class="flex items-center text-sm font-bold">
                                    <div class="min-w-0">
                                        <p class="truncate">Hey, Are you there?</p>
                                    </div>
                                    <p class="ml-2 whitespace-no-wrap">10min</p>
                                </div>
                            </div>
                            <div class="bg-blue-700 w-3 h-3 rounded-full flex flex-shrink-0 hidden md:block group-hover:block"></div>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-gray-800 rounded-lg relative">
                            <div class="w-16 h-16 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/women/33.jpg"
                                     alt=""
                                />
                            </div>
                            <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                <p>Scarlett Johansson</p>
                                <div class="flex items-center text-sm text-gray-600">
                                    <div class="min-w-0">
                                        <p class="truncate">You sent a photo.</p>
                                    </div>
                                    <p class="ml-2 whitespace-no-wrap">1h</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                            <div class="w-16 h-16 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/men/12.jpg"
                                     alt=""
                                />
                            </div>
                            <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                <p>John Snow</p>
                                <div class="flex items-center text-sm text-gray-600">
                                    <div class="min-w-0">
                                        <p class="truncate">You missed a call John.
                                        </p>
                                    </div>
                                    <p class="ml-2 whitespace-no-wrap">4h</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                            <div class="w-16 h-16 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/women/87.jpg"
                                     alt="User2"
                                />
                                <div class="absolute bg-gray-900 p-1 rounded-full bottom-0 right-0">
                                    <div class="bg-green-500 rounded-full w-3 h-3"></div>
                                </div>
                            </div>
                            <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                <p>Sunny Leone</p>
                                <div class="flex items-center text-sm text-gray-600">
                                    <div class="min-w-0">
                                        <p class="truncate">Ah, it was an awesome one night stand.
                                        </p>
                                    </div>
                                    <p class="ml-2 whitespace-no-wrap">1 Feb</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                            <div class="w-16 h-16 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/men/45.jpg"
                                     alt="User2"
                                />
                            </div>
                            <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                <p>Bruce Lee</p>
                                <div class="flex items-center text-sm text-gray-600">
                                    <div class="min-w-0">
                                        <p class="truncate">You are a great human being.
                                        </p>
                                    </div>
                                    <p class="ml-2 whitespace-no-wrap">23 Jan</p>
                                </div>
                            </div>
                            <div class="w-4 h-4 flex flex-shrink-0 hidden md:block group-hover:block">
                                <img class="rounded-full w-full h-full object-cover" alt="user2"
                                     src="https://randomuser.me/api/portraits/men/45.jpg"/>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="flex flex-col flex-auto border-l border-gray-800">


                    <div class="chat-header px-6 py-4 flex flex-row flex-none justify-between items-center shadow">
                        <div class="flex">
                            <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/women/33.jpg"
                                     alt=""
                                />
                            </div>
                            <div class="text-sm">
                                <p class="font-bold">Scarlett Johansson</p>
                                <p>Active 1h ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- 聊天内容盒子 -->
                    <div class="chat-body p-4 flex-1 overflow-y-scroll chat-message">
                        <div class="flex flex-row justify-start">
                            <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/women/33.jpg"
                                     alt=""
                                />
                            </div>
                            <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-t-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Hey! How are you?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Shall we go for Hiking this weekend?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-b-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Lorem ipsum
                                        dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="p-4 text-center text-sm text-gray-500">SAT 2:10 PM</p>
                        <div class="flex flex-row justify-start">
                            <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                     src="https://randomuser.me/api/portraits/women/33.jpg"
                                     alt=""
                                />
                            </div>
                            <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-t-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Hey! How are you?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Shall we go for Hiking this weekend?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center group">
                                    <p class="px-6 py-3 rounded-b-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">
                                        Lorem ipsum
                                        dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="p-4 text-center text-sm text-gray-500">12:40 PM</p>
                        <div class="flex flex-row justify-end">
                            <div class="messages text-sm text-white grid grid-flow-row gap-2">
                                <div class="flex items-center flex-row-reverse group">
                                    <p class="px-6 py-3 rounded-t-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">
                                        Hey! How are you?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center flex-row-reverse group">
                                    <p class="px-6 py-3 rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Shall we go for
                                        Hiking this weekend?</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center flex-row-reverse group">
                                    <img class=" block w-64 h-64 materialboxed absolute shadow-md rounded-l-lg object-cover"
                                         src="https://unsplash.com/photos/8--kuxbxuKU/download?force=true&w=640"
                                         alt="hiking"/>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center flex-row-reverse group">
                                    <p class="px-6 py-3 rounded-b-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">
                                        Lorem ipsum
                                        dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                        <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                            <path
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 输入 -->
                    <div class="chat-footer flex-none">
                        <div class="flex flex-row items-center p-4">
                            <button type="button"
                                    class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                    <path d="M9,18 L9,16.9379599 C5.05368842,16.4447356 2,13.0713165 2,9 L4,9 L4,9.00181488 C4,12.3172241 6.6862915,15 10,15 C13.3069658,15 16,12.314521 16,9.00181488 L16,9 L18,9 C18,13.0790094 14.9395595,16.4450043 11,16.9378859 L11,18 L14,18 L14,20 L6,20 L6,18 L9,18 L9,18 Z M6,4.00650452 C6,1.79377317 7.79535615,0 10,0 C12.209139,0 14,1.79394555 14,4.00650452 L14,8.99349548 C14,11.2062268 12.2046438,13 10,13 C7.790861,13 6,11.2060545 6,8.99349548 L6,4.00650452 L6,4.00650452 Z"/>
                                </svg>
                            </button>
                            <div class="relative flex-grow">
                                <input id="inputVal"
                                       class="rounded-full py-2 pl-3 pr-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                       type="text" placeholder="请输入内容"/>
                            </div>
                            <button id="submit" type="submit"
                                    class="btn focus:outline-none mx-2 w-24 h-6">
                                <span class="flex items-center justify-between">发送 <i class="material-icons">send</i></span>
                            </button>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/chat.js')}}"></script>

@endsection