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
            style="background-image: url({{ asset('assets/header-bg-blue.png') }})"></div>
        <header class="max-w-[960px] h-full m-auto flex items-center justify-center relative z-20">
            <div class="bg-dark p-6 rounded-lg max-w-[500px] w-full">
                <form action="{{ route('contact') }}" method="post" class="flex flex-col p-4">
                    @csrf
                    <h1 class="font-bold text-3xl mb-2 text-white">Contact Us</h1>
                    @if (session('success'))
                        <p class="py-2 text-green-600"><i class="fas fa-check"></i> {{ session('success') }}</p>
                    @endif
                    <input type="text" name="name" placeholder="Full Name" autocomplete="off"
                    class="mb-3 w-full bg-dark-b rounded focus:border-indigo-500 focus:ring-2 focus:ring-dark-b text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('name')
                        <p class="text-red-600 mb-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="email" placeholder="Email Address" autocomplete="off"
                    class="mb-3 w-full bg-dark-b rounded focus:border-indigo-500 focus:ring-2 focus:ring-dark-b text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('email')
                        <p class="text-red-600 mb-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="subject" placeholder="Subject" autocomplete="off"
                    class="mb-3 w-full bg-dark-b rounded focus:border-indigo-500 focus:ring-2 focus:ring-dark-b text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('subject')
                        <p class="text-red-600 mb-1">{{ $message }}</p>
                    @enderror
                    <textarea name="message" id="message" cols="30" rows="4" autocomplete="off"
                    class="mb-3 w-full bg-dark-b rounded focus:border-indigo-500 focus:ring-2 focus:ring-dark-b text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Write message!"></textarea>
                    @error('message')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="w-fit px-4 py-2 rounded-md bg-main text-white font-semibold">Send Message</button>
                </form>
            </div>
        </header>
    </section>
@endsection