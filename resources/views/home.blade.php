@extends('layouts.app')
@section('content')
    <section class="h-screen relative overflow-hidden">
        <div class="absolute grid grid-cols-8 w-full h-full">
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
            <span class="border-r border-border-c"></span>
        </div>
        <div class="absolute animate-fadeshowup w-full h-full bg-cover bg-center z-10"
            style="background-image: url({{ asset('assets/test_bg.png') }})"></div>
        <header class="max-w-[1400px] h-full m-auto flex items-center relative z-20">
            <div class="px-4">
                <h1 class="text-8xl font-bold text-dark-text leading-[120px] mb-9 animate-moveright 875px:text-6xl 875px:leading-[90px] 490px:text-6xl 490px:leading-[70px] text-dark">A new ERA in  <br> Anchoring <br> Technology</h1>
                <div class="info text-gray-600 mb-8 flow-right-100 animate-moveup">
                    <h2 class="font-bold text-6xl 490px:text-4xl">3x</h2>
                    <p class="text-medium text-2xl 490px:text-lg">More effective</p>
                </div>
                <div class="info text-gray-600 animate-to-right-200 animate-moveup">
                    <h2 class="font-bold text-6xl 490px:text-4xl">10M</h2>
                    <p class="text-medium text-2xl 490px:text-lg">Satisfied customers</p>
                </div>
            </div>
        </header>
    </section>
    <section class="w-full bg-yellow bg-dark">
        <div class="py-[100px] max-w-[960px] m-auto px-4">
            <h2 class="font-bold text-5xl text-white mb-6 670px:text-3xl" data-aos="fade-right">About Pi Anchor Channels</h2>
            <p class="text-lg ml-3 leading-9 text-gray-200 670px:ml-0" data-aos="fade-right" data-aos-duration="3000">We have recently developed a new product family called post-installed anchor channels or PI (π) anchor channels. It offers a wide range of intelligent fastening solutions as an alternative to post-installed anchors (chemical anchors or mechanical anchors) and pre-installed anchor channels (cast-in anchors). It is now possible to install anchor channels in <strong>hardened</strong> concrete, giving the same flexibility as cast-in anchor channels, and even better: <strong>No more misplaced anchor channels</strong>. The installation method is unique and this method is developed and patented by GFC Europe Berlin.</p>
        </div>
    </section>

    <section class="w-full">
        <div class="max-w-[1200px] m-auto px-4 py-[100px] grid grid-cols-3 940px:grid-cols-1">
            <div class="col-span-1">
                <div class="bg-[#F5F5F5] rounded-lg px-8 py-[80px]" data-aos="zoom-in" data-aos-duration="1000">
                    <img data-src="{{ asset('assets/products/product-1.png') }}" class="lazyload m-auto 940px:max-w-[600px]"  alt="Anchor Channel Image">
                </div>
            </div>
            <div class="col-span-2 940px:col-span-1" data-aos="zoom-in" data-aos-duration="2000">
                <div class="p-12 965px:py-6 940px:p-3">
                    <h2 class="font-bold text-4xl mb-6">Post-installed anchor channels</h2>
                    <p class="leading-10 text-gray-700">Keeping in mind the customer demands from the market we have
                    developed a product family called PI-anchor channels.
                    With this product family, a new era has been started in anchoring technology.
                    This product can be used as a repair product when anchor channels
                    are installed out of tolerance. This product can also be used even in
                    new projects where flexibility is required during installation, thanks to the channel
                    profile.Customized PI-HB anchor channels can take very high loads close to the
                    concrete edge.</p>
                </div>
            </div>
        </div>
        <div class="max-w-[1200px] m-auto px-4 py-[100px]">
            <h1 class="font-bold text-3xl mb-6" data-aos="fade-right">What is a PI anchor channel?</h1>
            <p class="text-gray-600 leading-8" data-aos="fade-up">PI or post-installed anchor channel is a system consisting of a perforated channel profile and anchors, which can be installed in hardened concrete or masonry, or any other substrate in a pre-slot. The pre-slot is made on the substrate with the help of a specially designed-machine. The channel profile is fixed in the pre-slot with the help of chemical or mechanical anchors. Post-installed anchor channels are available in steel and stainless steel with matching channel bolts.</p>
            <img data-src="{{ asset('assets/products/about.png') }}" class="lazyload max-w-[600px] m-auto w-full" data-aos="fade-up" data-aos-duration="1000" alt="Pi Anchor Channel Setting">
        </div>
    </section>
    <x-details />
@endsection
