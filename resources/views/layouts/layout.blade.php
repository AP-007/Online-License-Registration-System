<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title> Nepal Government | Ministry Of Physical Infrastructure And Transport | Department Of Transport Management </title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="{{ asset('images/emblem.png') }}">
</head>

<body>
<header class="text-gray-600 body-font" style="background-color: #003f58">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{ asset('images/emblem.png') }}" alt="" width="50px">
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" style="color: white">
            <a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Home</a>
{{--            <a href="{{ url('/contact') }}" class="mr-5 hover:text-gray-900">Contact</a>--}}
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/application') }}" class="mr-5 hover:text-gray-900">Application</a>
                    <a href="{{route('logout')}}" class="mr-5 hover:text-gray-900"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log out') }}
                    </a>
                    @else
                        <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Register</a>
                        @endif
                    @endauth
            @endif
        </nav>
    </div>
</header>

@yield('content')

<footer class="text-gray-600 body-font" style="background-color: #072835">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col" style="color: white">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="{{ asset('images/emblem.png') }}" alt="" width="100px">
            <span class="ml-3 text-xl" style="color: white">Department Of Transportation</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
           style="color: white">
            © 2021 Nepal Electronic Driving Licence And Vehicle Registration System
        </p>
    </div>
</footer>
</body>

</html>
