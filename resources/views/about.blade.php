@extends('layouts.app')
@section('content')
    <section class="w-full py-[100px] relative overflow-hidden">
        <img src="{{ asset('assets/design-1.png') }}" class="absolute w-[350px] top-[400px] -right-20 670px:hidden">
        <header class="max-w-[900px] h-full m-auto py-6 px-4">
            <h1 class="font-bold text-3xl mb-6">About Us</h1>
            <p class="mb-6">A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.</p>
            <div class="grid grid-cols-3 gap-6 mb-8 text-white 780px:grid-cols-2 490px:grid-cols-1">
                <div class="p-6 bg-gray-900 rounded-lg h-fit">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">VISION</h3>
                    <p class="text-gray-300">Be fast: The quickest response time. Be global: A diversified multi-national customer network. Be innovative: Develop products that solve our valued customer‘s problems</p>
                </div>

                <div class="p-6 bg-gray-900 rounded-lg h-fit">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">MISSION</h3>
                    <p class="text-gray-300">To develop long-lasting relationships with clients by providing exceptional stakeholder value in an environment of trust and respect.</p>
                </div>

                <div class="p-6 bg-gray-900 rounded-lg h-fit">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">CORE VALUES</h3>
                    <p class="text-gray-300">Integrity, Quality, Reliability, Teamwork, Trust, Customer needs</p>
                </div>
            </div>
        </header>
    </section>
@endsection
