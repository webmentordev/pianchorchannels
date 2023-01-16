@extends('layouts.apps')
@section('content')
<div class="min-h-[700px] h-full bg-gray-100 flex items-center justify-center">
    <div class="max-w-[450px] w-full">
        <form action="{{ route('login') }}" method="post" class="bg-white p-6 shadow-md rounded-md">
            @csrf
            <img src="{{ asset('assets/favicon.png') }}" width="120px" class="m-auto mb-3">
            <h1 class="text-2xl mb-3 font-bold text-center">Login Account</h1>

            @if (session('failed'))
                <p class="text-red-600 text-center mb-2">{{ session('failed') }}</p>
            @endif
            <input type="email" name="email" placeholder="Email Address" required
            class="w-full rounded border bg-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-3">
            @error ('email')
                <p class="text-red-600 mb-2">{{ $message }}</p>
            @enderror
            
            <input type="password" name="password" placeholder="Password" required
            class="w-full rounded border bg-gray-100 focus:border-indigo-500 focus:ring-4 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mb-2">
            <div class="flex mb-2 ml-2">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
            @error ('password')
                <p class="text-red-600 mb-2">{{ $message }}</p>
            @enderror
            
            <button class="py-2 px-6 bg-dark text-white rounded-md">Login</button>
        </form>
    </div>
</div>
@endsection

