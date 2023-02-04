<nav class="w-full fixed top-0 left-0 z-30 border-b border-slate-200 animate-navshow bg-white">
    <div class=" max-w-[98%] m-auto px-4 py-3 400px:px-2 flex items-center justify-between">
        <a class="flex items-center" href="{{ route('home') }}"><img class="mr-4 400px:w-[50px]" src="{{ asset('assets/logo.png') }}" alt="PiAnchorChannel logo" width="40px"> <span class="text-dark font-bold text-xl 400px:text-lg">Pi Anchor Channels</span></a>
        <ul class="flex items-center 1145px:hidden text-dark font-semibold">
            <li><a class="px-6 mx-2" href="{{ route('home') }}">Home</a></li>
            <li><a class="px-6 mx-2" href="{{ route('about') }}">About</a></li>
            <li><a class="px-6 mx-2" href="#">Products</a></li>
            <li><a class="px-6 mx-2" href="#">Applications</a></li>
            <div x-data="{ open: false }" class="font-semibold">
                <span x-on:click="open = ! open" class="px-6 mx-2 cursor-pointer">Download</span>
                <div x-show="open" x-on:click.self="open = false" x-cloak x-transition class="bg-dark bg-opacity-90 backdrop-blur-lg fixed top-0 left-0 h-screen w-full flex items-center justify-center">
                    <div class="p-6 rounded-lg bg-white max-w-lg w-full">
                        <p class="mb-3">Your message has been received and our sales agent will contact you and send you our product details</p>
                        <form action="{{ route('download') }}" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address" required
                            class="mb-3 w-full rounded focus:border-indigo-500 focus:ring-4 focus:ring-indigo-200 text-base outline-none text-gray-900 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out border-gray-200 border">
                            <button type="submit"
                            class="w-fit px-4 py-2 rounded-md bg-main text-white font-semibold">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            @auth
                <a class="px-6 mx-2 text-white" href="{{ route('dashboard') }}">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="px-6 mx-2 text-white">Logout</button>
                </form>
            @endauth
            <a class="pk-6 ml-2 text-white font-bold py-2 px-4 bg-dark rounded-sm " href="{{ route('contact') }}">Contact</a>
        </ul>
        <div x-data="{ open: false }" class="hidden 1145px:block">
            <ul x-on:click="open = ! open" class="cursor-pointer">
                <li class="h-[1px] bg-dark my-2 w-[55px] 400px:w-[45px]"></li>
                <li class="h-[1px] bg-dark my-2 w-[55px] 400px:w-[45px]"></li>
                <li class="h-[1px] bg-dark my-2 w-[55px] 400px:w-[45px]"></li>
            </ul>
            <div x-show="open" x-on:click="open = false" x-cloak x-transition class="bg-dark bg-opacity-90 backdrop-blur-lg fixed top-0 left-0 h-screen w-full flex items-center justify-center">
                <ul class="flex flex-col text-center">
                    <li><a class="px-6 mb-2 text-white text-2xl" href="{{ route('home') }}">Home</a></li>
                    <li><a class="px-6 mb-2 text-white text-2xl" href="{{ route('about') }}">About</a></li>
                    <li><a class="px-6 mb-2 text-white text-2xl" href="#">Products</a></li>
                    <li><a class="px-6 mb-2 text-white text-2xl" href="#">Applications</a></li>
                    <li><a class="px-6 mb-2 text-white text-2xl" href="#">Downloads</a></li>
                    <li><a class="px-6 mb-2 text-white text-2xl" href="{{ route('contact') }}">Contact</a></li>
                    @auth
                        <li><a class="px-6 mb-2 text-white text-2xl" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="px-6 mb-2 text-white text-2xl">Logout</button>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </div>

    @if (session('email_success'))
        <div class="fixed flex items-center bottom-3 z-90 right-3 max-w-lg w-full bg-white border border-gray-200 p-6 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15"><path fill="none" stroke="#07b61b" d="M4 7.5L7 10l4-5m-3.5 9.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Z"/></svg>
            <p class="ml-6">Message sent! Our agent will contact you.</p>
        </div>
    @endif
</nav>