<!DOCTYPE html>
<html class="h-full "
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</head>

<body class="h-full bg-gray-100 font-poppins">
    <div>

        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-indigo-700">
                <div class="flex-shrink-0 px-2 ">
                    <div class="flex items-center w-full p-3 space-x-2 bg-white rounded-full">
                        <img class="w-10 h-10"
                            src="{{ asset('images/sksu1.png') }}"
                            alt="">
                        <h1 class="text-2xl font-bold text-gray-600">SKSU PAS</h1>
                    </div>
                </div>
                <div class="flex flex-col flex-1 mt-5">
                    <nav class="flex-1 px-2 pb-4 space-y-1">

                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center px-2 py-2 text-lg font-medium text-indigo-100 rounded-md hover:bg-indigo-600 group">
                            <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            Dashboard
                        </a>
                        <a href="{{ route('admin.form-portals') }}"
                            class="flex items-center px-2 py-2 text-lg font-medium text-indigo-100 rounded-md hover:bg-indigo-600 group">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Application Portals
                        </a>

                        {{-- <a href="{{ route('admin.applications') }}"
                            class="flex items-center px-2 py-2 text-lg font-medium text-indigo-100 rounded-md hover:bg-indigo-600 group">
                            <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Applications
                        </a> --}}
                        <a href="{{ route('admin.payments') }}"
                            class="flex items-center px-2 py-2 text-lg font-medium text-indigo-100 rounded-md hover:bg-indigo-600 group">
                            <svg class="flex-shrink-0 w-6 h-6 mr-3 text-indigo-300"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Payments
                        </a>

                    </nav>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 md:pl-64">
            <div class="sticky top-0 z-10 flex flex-shrink-0 h-16 bg-white border">
                <button type="button"
                    class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <div class="flex justify-between flex-1 px-4">
                    <div class="flex flex-1">

                    </div>
                    <div class="flex items-center mx-4 md:ml-6">
                        <form method="POST"
                            action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                class="flex space-x-2"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-gray-600"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="text-lg text-gray-600 uppercase">Log out</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

            <main>
                {{ $slot }}

            </main>
        </div>
    </div>


    @livewireScripts
    @stack('scripts')
</body>

</html>
