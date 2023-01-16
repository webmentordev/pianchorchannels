@extends('layouts.apps')
@section('content')
<div class="min-h-[750px] h-full">
    <div class="max-w-[980px] w-full m-auto py-[100px] px-3">
        <h1 class="mb-3 text-2xl font-bold">Contacts Database | <span class="text-main">{{ count($contacts) }} Contacts</span></h1>
        @if (count($contacts) && $contacts != null)
            @foreach ($contacts as $item)
                <div class="bg-gray-900 p-6 w-full mb-3 text-white rounded-md">
                    <h2 class="text-lg font-semibold mb-2 text-blue-400">{{ $item->email }}</h2>
                    <p>{{ $item->message }}</p>
                    <p class="text-sm float w-full flex justify-end">
                        <span>{{ $item->created_at->diffForHumans() }} | </span>
                        <span class="ml-2 text-orange-600">By {{ $item->name }}</span>
                    </p>
                </div>
            @endforeach
            @if ($contacts->hasPages())
                {{ $contacts->links() }}
            @endif
        @else
            <p class="text-center">No Contacts data exit</p>
        @endif
    </div>
</div>
@endsection