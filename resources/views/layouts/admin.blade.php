<!DOCTYPE html>
<html class="h-full bg-gray-100"
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

    <div class="min-h-full">
        <x-admin.shared.navbar />
        <div class="py-10">
            {{ $slot }}
        </div>
    </div>


    @livewireScripts
    @stack('scripts')
</body>

</html>
