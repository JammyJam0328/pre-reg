<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
</head>

<body class="h-screen bg-gray-100 font-poppins">
    <div class="flex flex-col justify-center h-full py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="w-auto h-12 mx-auto"
                src="{{ asset('images/sksu1.png') }}"
                alt="logo">
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">Create your account</h2>
        </div>
        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 pt-3 pb-8 bg-white border border-gray-200 sm:rounded-lg sm:px-10">
                <x-jet-validation-errors class="mb-4" />
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="space-y-3"
                    action="{{ route('register') }}"
                    method="POST">
                    @csrf
                    <div>
                        <label for="name"
                            class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                            <input id="name"
                                name="name"
                                type="name"
                                autocomplete="name"
                                required
                                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="email"
                            class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                            <input id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="password"
                            class="block text-sm font-medium text-gray-700"> Password </label>
                        <div class="mt-1">
                            <input id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation"
                            class="block text-sm font-medium text-gray-700"> Confirm Password </label>
                        <div class="mt-1">
                            <input id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required
                                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
                            in</button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 text-gray-500 bg-white"> Or register with </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-6">
                        <div>
                            <a href="#"
                                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                <span class="sr-only">Register with your Facebook account</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    data-name="Ebene 1"
                                    viewBox="0 0 1024 1024">
                                    <path fill="#1877f2"
                                        d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z" />
                                    <path fill="#fff"
                                        d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#"
                                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                <span class="sr-only">Register with your Google account</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 48 48">
                                    <defs>
                                        <path id="a"
                                            d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                    </defs>
                                    <clipPath id="b">
                                        <use xlink:href="#a"
                                            overflow="visible" />
                                    </clipPath>
                                    <path clip-path="url(#b)"
                                        fill="#FBBC05"
                                        d="M0 37V11l17 13z" />
                                    <path clip-path="url(#b)"
                                        fill="#EA4335"
                                        d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                    <path clip-path="url(#b)"
                                        fill="#34A853"
                                        d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                    <path clip-path="url(#b)"
                                        fill="#4285F4"
                                        d="M48 48L17 24l-4-3 35-10z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="flex items-center justify-center mt-2">

                    <div class="text-sm">
                        <a href="/login"
                            class="font-medium text-blue-600 underline hover:text-blue-500">Registered Already ? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
