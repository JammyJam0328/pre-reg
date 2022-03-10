{{-- <div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Dashboard">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <x-slot:actions>
                </x-slot:actions>
            </x-admin.shared.header>
            <x-admin.shared.main-content>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div>
                    <ul role="list"
                        class="grid grid-cols-1 gap-5 mt-3 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Pending Application</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Application::where('status', 'pending')->count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Portals</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Portal::where('status', 'open')->count() }}/{{ \App\Models\Portal::count() }}
                                    </p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Users</a>
                                    <p class="text-gray-500">{{ \App\Models\User::count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: solid/dots-vertical -->
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Payments to Review</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Payment::where('status', 'review')->count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: solid/dots-vertical -->
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </x-admin.shared.main-content>
        </div>
    </main>
</div> --}}

<div class="py-6">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </div>
    <div class="px-4 mx-auto mt-2 max-w-7xl sm:px-6 md:px-8">
        <div class="p-4 bg-white border rounded-md">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div
                    class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-10 h-10"
                            viewBox="0 0 42 42">
                            <defs>
                                <linearGradient id="b"
                                    x1="1073.403"
                                    x2="1097.116"
                                    y1="516.451"
                                    y2="544.308"
                                    gradientTransform="translate(-1438.388 316.47) scale(1.34562)"
                                    gradientUnits="userSpaceOnUse"
                                    xlink:href="#a" />
                                <linearGradient id="a">
                                    <stop offset="0"
                                        stop-color="#16ff6a" />
                                    <stop offset="1"
                                        stop-color="#0090a5" />
                                </linearGradient>
                            </defs>
                            <g transform="translate(0 -1010.362)">
                                <rect width="42"
                                    height="42"
                                    y="1010.362"
                                    fill="url(#b)"
                                    rx="8.876"
                                    ry="8.876" />
                                <path
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    fill="#fff"
                                    fill-rule="evenodd"
                                    d="m 21.480469,1018.7954 c -3.021901,0 -5.4805,2.4692 -5.480469,5.5 2.9e-5,3.0308 2.458611,5.5 5.480469,5.5 3.021858,0 5.48044,-2.4692 5.480469,-5.5 3e-5,-3.0308 -2.458568,-5.5 -5.480469,-5.5 z m 0,1 c 2.479275,0 4.480494,2.0075 4.480469,4.5 -2.4e-5,2.4925 -2.001229,4.5 -4.480469,4.5 -2.47924,0 -4.480445,-2.0075 -4.480469,-4.5 -2.6e-5,-2.4925 2.001194,-4.5 4.480469,-4.5 z m -2.980469,11 c -4.147628,0 -7.5,3.3682 -7.5,7.5293 l 0,4.5156 a 0.50004994,0.50004994 0 0 0 0.5,0.5 l 3.853516,0 a 0.50004994,0.50004994 0 0 0 0.292968,0 l 11.707032,0 a 0.50004994,0.50004994 0 0 0 0.292968,0 l 3.853516,0 a 0.50004994,0.50004994 0 0 0 0.5,-0.5 l 0,-4.5156 c 0,-4.1611 -3.352371,-7.5293 -7.5,-7.5293 l -6,0 z m 0,1 6,0 c 3.608733,0 6.5,2.9027 6.5,6.5293 l 0,4.0156 -3,0 0,-4.0234 A 0.50004994,0.50004994 0 0 0 27.492188,1037.811 0.50004994,0.50004994 0 0 0 27,1038.3169 l 0,4.0234 -11,0 0,-4.0234 A 0.50004994,0.50004994 0 0 0 15.492188,1037.811 0.50004994,0.50004994 0 0 0 15,1038.3169 l 0,4.0234 -3,0 0,-4.0156 c 0,-3.6266 2.891267,-6.5293 6.5,-6.5293 z"
                                    color="#000"
                                    font-family="sans-serif"
                                    font-weight="400"
                                    overflow="visible" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#"
                            class="focus:outline-none">
                            <span class="absolute inset-0"
                                aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">Total Users</p>
                            <p class="text-sm text-gray-500 truncate">100</p>
                        </a>
                    </div>
                </div>
                <div
                    class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10"
                            viewBox="0 0 48 48">
                            <linearGradient id="a"
                                x1="925.416"
                                x2="937.677"
                                y1="-207.249"
                                y2="-220.57"
                                gradientTransform="matrix(3.0757 0 0 -3.0757 -2840.537 -633.24)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0"
                                    stop-color="#6EC5A6" />
                                <stop offset="1"
                                    stop-color="#3FC0EF" />
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M10.144 0h27.712C43.458 0 48 4.542 48 10.144v27.712C48 43.458 43.458 48 37.856 48H10.144C4.542 48 0 43.458 0 37.856V10.144C0 4.542 4.542 0 10.144 0z" />
                            <path fill="#fff"
                                d="M19.987 21.444a2.09 2.09 0 0 1-2.087-2.087v-.882h1v.882a1.088 1.088 0 0 0 2.174 0v-.882h1v.882a2.09 2.09 0 0 1-2.087 2.087z" />
                            <path fill="#fff"
                                d="M21.654 19.067h-3.341a.5.5 0 0 1-.482-.368l-.286-1.046a1.126 1.126 0 0 1 .654-1.295 1.243 1.243 0 0 1 1.394-.843l1.81.302c.337.056.632.241.829.521s.271.62.21.956l-.297 1.379a.505.505 0 0 1-.491.394zm-2.96-1h2.556l.209-.968a.255.255 0 0 0-.048-.186.267.267 0 0 0-.174-.11l-1.81-.302a.238.238 0 0 0-.205.057.247.247 0 0 0-.089.192c0 .276-.224.52-.5.52a.115.115 0 0 0-.094.045.116.116 0 0 0-.024.101l.179.651zM16.495 25.5a.5.5 0 0 1-.5-.5v-1.45c0-.734.461-1.4 1.148-1.658l1.392-.522v-.75a.5.5 0 0 1 .801-.399c.387.292.915.292 1.302-.001a.5.5 0 0 1 .801.399v1.099a.5.5 0 0 1-1 0v-.324a2.048 2.048 0 0 1-.905 0v.323a.5.5 0 0 1-.324.468l-1.716.644a.774.774 0 0 0-.5.721V25a.499.499 0 0 1-.499.5z" />
                            <path fill="#fff"
                                d="M23.495 25.5a.5.5 0 0 1-.5-.5v-1.45a.774.774 0 0 0-.5-.721l-1.716-.644a.5.5 0 0 1 .352-.936l1.716.644a1.779 1.779 0 0 1 1.148 1.658V25a.5.5 0 0 1-.5.5z" />
                            <path fill="#fff"
                                d="M19.988 23.487a2.727 2.727 0 0 1-2.23-1.16.499.499 0 1 1 .818-.574c.645.919 2.176.921 2.821.001a.501.501 0 0 1 .819.575 2.726 2.726 0 0 1-2.228 1.158z" />
                            <path fill="#fff"
                                d="M35.5 39.5h-23a.5.5 0 0 1-.5-.5V12a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1H13v26h22v-26h-6.5a.5.5 0 0 1 0-1h7a.5.5 0 0 1 .5.5v27a.5.5 0 0 1-.5.5z" />
                            <path fill="#fff"
                                d="M33.5 37.5h-19a.5.5 0 0 1-.5-.5V14a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H15v22h18v-22h-2.5a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5v23a.5.5 0 0 1-.5.5z" />
                            <path fill="#fff"
                                d="M28.5 14.5h-9a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H22c0-1.103.897-2 2-2s2 .897 2 2h2.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5zm-8.5-1h8v-2h-2.592a.501.501 0 0 1-.471-.667c.042-.12.063-.229.063-.333 0-.551-.449-1-1-1s-1 .449-1 1c0 .104.021.213.063.333a.501.501 0 0 1-.471.667H20v2zM31.5 19.5h-6a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5zm-5.5-1h5v-1h-5v1zM31.5 29.5h-15a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5zm-14.5-1h14v-1H17v1zM31.5 21.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zM26.5 21.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM28.5 31.5h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM16.5 31.5c-.07 0-.13-.01-.19-.04a.372.372 0 0 1-.16-.11.355.355 0 0 1-.11-.16A.408.408 0 0 1 16 31c0-.13.05-.26.15-.351a.503.503 0 0 1 .7 0c.1.091.15.221.15.351 0 .069-.01.13-.04.189a.35.35 0 0 1-.11.16c-.04.05-.1.09-.16.11a.395.395 0 0 1-.19.041zM28.5 33.5h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM16.5 33.5a.47.47 0 0 1-.35-.15A.454.454 0 0 1 16 33c0-.13.05-.26.15-.351a.503.503 0 0 1 .7 0c.1.091.15.221.15.351 0 .069-.01.13-.04.189a.35.35 0 0 1-.11.16c-.04.05-.1.09-.16.11a.395.395 0 0 1-.19.041zM28.5 35.5h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM31.5 31.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM31.5 33.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM31.5 35.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zM16.5 35.5a.47.47 0 0 1-.35-.15c-.1-.09-.15-.22-.15-.35s.05-.26.15-.351c.04-.05.1-.09.16-.109.18-.08.4-.04.54.109.1.091.15.221.15.351s-.05.26-.15.35a.47.47 0 0 1-.35.15zM31.5 23.5h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM29.5 25.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#"
                            class="focus:outline-none">
                            <span class="absolute inset-0"
                                aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">Total Application</p>
                            <p class="text-sm text-gray-500 truncate">100</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
