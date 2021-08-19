<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>bigIdeas</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        [hover-scrollbar] {
            overflow-y: hidden;
            overflow-x: hidden;
        }

        [hover-scrollbar]:hover {
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
     @livewireStyles
</head>

<body class="font-sans text-gray-900 text-sm bg-teal-200 hover:text-black hover:border-b-2 hover:border-blue-600 00">
    <header class=" top-0 flex justify-between items-center px-8 py-1">
        <a href="/" class="font-mono font-bold text-xl hover:text-blue-600">BigIdeas</a>
        <div class="flex justify-between items-center">

            @if (Route::has('login'))
            <div class="px-6 py-4 font-semibold font-mono">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" class=" px-3 py-2 hover:bg-red-600 focus:bg-red-600  hover:text-white rounded-full" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 px-3 py-2 rounded-full  hover:bg-blue-600 hover:text-white transition duration-200 ease-in-out">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700  px-3 py-2 rounded-full hover:bg-blue-600 hover:text-white transition duration-200 ease-in-out">Register</a>
                @endif
                @endauth
            </div>
            @endif


            <div class="">
                <img src="
                https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50
                " alt="" class="w-10 h-10 rounded-full">
            </div>
        </div>
    </header>

    <main class="container mx-auto px-auto  flex justify-center mt-2"> 
           
      @livewire("ideas.form")
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class=" w-2/3 pb-3 text-xs font-semibold flex justify-around">
                    <li class="uppercase text-xs px-1 py-3 border-b-4 border-blue-600 hover:text-black hover:border-b-2 hover:border-blue-600 ">All Ideas (87)</li>
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600 ">Continue (32)</li>
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600 ">Projects (25)</li>
                </ul>
                <ul class=" w-1/3 pb-3 text-xs font-semibold flex justify-around">
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600  ">Implemented (12)</li>
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600 ">Closed (25)</li>
                </ul>
            </nav>
            <div classs="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    </div>
     @livewireScripts
</body>

</html>