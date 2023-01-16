<footer class="w-full">
    <button class="p-3 px-[18px] shadow-lg rounded-full bg-dark-b text-white fixed bottom-3 right-3 z-40"><i class="fas fa-caret-up"></i></button>
    <div class="bg-dark">
        <div class="max-w-[900px] m-auto py-[100px] grid grid-cols-3 520px:grid-cols-1 border-b border-b-dark-b">
            <div class="p-6 w-full col-span-2 520px:col-span-1">
                <h2 class="text-white mb-3 text-2xl font-bold">About Us</h2>
                <p class="text-gray-100">A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.</p>
            </div>
            <div class="p-6 w-full col-span-1">
                <h2 class="text-white mb-3 text-2xl font-bold">Navigation</h2>
                <ul class="flex flex-col">
                    <a class="mb-3 font-semibold text-gray-100" href="{{ route('home') }}">Home</a>
                    <a class="mb-3 font-semibold text-gray-100" href="{{ route('about') }}">About</a>
                    <a class="mb-3 font-semibold text-gray-100" href="{{ route('contact') }}">Contact</a>
                </ul>
            </div>
        </div>
    </div>
    <p class="bg-dark text-white font-semibold text-lg py-6 text-center">Copyrights &copy; {{ date('Y') }} | All <a href="{{ route('login') }}">Reserved</a></p>
</footer>