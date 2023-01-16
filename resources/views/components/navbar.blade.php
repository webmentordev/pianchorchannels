<nav class="w-full fixed top-0 left-0 z-30 bg-dark border-b border-dark-b animate-navshow">
    <div class=" max-w-[98%] m-auto px-4 py-3 400px:px-2 flex items-center justify-between">
        <a class="flex items-center" href="{{ route('home') }}"><img class="mr-4 400px:w-[50px]" src="{{ asset('assets/logo-white.png') }}" width="70px"> <span class="text-white font-bold text-xl 400px:text-lg">Pi Anchor Channels</span></a>
        <ul class="flex items-center 920px:hidden">
            <a class="px-6 mx-2 text-white" href="{{ route('home') }}">Home</a>
            <a class="px-6 mx-2 text-white" href="{{ route('about') }}">About</a>
            @auth
                <a class="px-6 mx-2 text-white" href="{{ route('dashboard') }}">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="px-6 mx-2 text-white">Logout</button>
                </form>
            @endauth
            <a class="pk-6 ml-2 text-white font-bold py-2 px-4 bg-main rounded-sm " href="{{ route('contact') }}">Contact</a>
        </ul>
        <div x-data="{ open: false }" class="hidden 920px:block">
            <ul x-on:click="open = ! open" class="cursor-pointer">
                <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
                <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
                <li class="h-[1px] bg-white my-2 w-[55px] 400px:w-[45px]"></li>
            </ul>
            <div x-show="open" x-on:click="open = false" x-cloak x-transition class="bg-dark bg-opacity-90 backdrop-blur-lg fixed top-0 left-0 h-screen w-full flex items-center justify-center">
                <ul class="flex flex-col text-center">
                    <a class="px-6 mb-2 text-white text-2xl" href="{{ route('home') }}">Home</a>
                    <a class="px-6 mb-2 text-white text-2xl" href="{{ route('about') }}">About</a>
                    <a class="px-6 mb-2 text-white text-2xl" href="{{ route('contact') }}">Contact</a>
                    @auth
                        <a class="px-6 mb-2 text-white text-2xl" href="{{ route('dashboard') }}">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="px-6 mb-2 text-white text-2xl">Logout</button>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>