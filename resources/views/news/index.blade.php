@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-center text-4xl mb-6">News</h1>
            @if ($news->count())
                @foreach ($news as $n)
                <div class="mb-4">
                    <a href="{{ $n -> link}}" class="font-bold" target="_blank">{{ $n-> title}}</a> <span class="text-gray-600 text-small">{{ $n -> author}}</span>
                    <p class="mb-2"> {{$n->description}} </p>
                </div>
                @endforeach
            @else
                <p class="text-center text-red-500">No news Found</p>
            @endif
        </div>
    </div>
    
@endsection