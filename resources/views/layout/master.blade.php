<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

</head>
<body>

    <!-- top menu bar -->
    <div class="w-full  bg-gray-200 px-10 py-5 flex items-center justify-between     ">

        <!-- Logo link -->
        <p class="font-bold text-gray-700"> @yield('page-header') page </p>


        <!-- links  -->
        <div>
            <a href="{{ url('/about') }}" class="px-4">About</a>
            <a href="{{ url('/contact-us') }}" class="px-4">Contact US</a>
            <a href="{{ url('/team') }}" class="px-4">Team</a>
        </div>

    </div>

    <!-- content -->
    <div class="h-screen bg-gray-100 px-10 py-2">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="w-full bg-blue-300 h-64">
        <p class="text-center">This the general footer</p>
    </div>

    @yield('page-level-js')

</body>
</html>