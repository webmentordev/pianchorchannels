@extends('layouts.app')
@section('content')
    <section class="w-full py-[100px] relative overflow-hidden">
        <img data-src="{{ asset('assets/design-1.png') }}" class="lazyload absolute w-[350px] top-[400px] -right-20 670px:hidden">
        <header class="max-w-[900px] h-full m-auto py-6 px-4">
            <h1 class="font-bold text-5xl mb-6">About Us</h1>
            <p class="mb-6 leading-8">Welcome to PiAnchorChannels, a leading provider of innovative anchoring solutions for the construction industry. We are a German company based in Berlin, dedicated to developing and delivering high-quality products that meet the needs of our customers. With a team of experts and a commitment to using the latest technology, we pride ourselves on being at the forefront of the industry. <br> Our range of anchoring solutions are designed to improve the safety, stability, and efficiency of construction projects of all sizes. We are proud to work with some of the most respected contractors and engineers in the industry, and strive to be the go-to provider of anchoring solutions for the construction industry</p>

            <div class="grid grid-cols-1 gap-6 mb-8 text-white 780px:grid-cols-2 490px:grid-cols-1">
                <div class="p-6 bg-gray-900 rounded-lg">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">VISION</h3>
                    <p class="text-gray-300">Be fast: The quickest response time. Be global: A diversified multi-national customer network. Be innovative: Develop products that solve our valued customer‘s problems</p>
                </div>

                <div class="p-6 bg-gray-900 rounded-lg">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">MISSION</h3>
                    <p class="text-gray-300">To develop long-lasting relationships with clients by providing exceptional stakeholder value in an environment of trust and respect.</p>
                </div>

                <div class="p-6 bg-gray-900 rounded-lg">
                    <h3 class="uppercase font-semibold mb-3 text-[20px]">CORE VALUES</h3>
                    <p class="text-gray-300">Integrity, Quality, Reliability, Teamwork, Trust, Customer needs</p>
                </div>
            </div>
        </header>
    </section>
@endsection
