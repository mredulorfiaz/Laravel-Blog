@extends('layouts.app')

@section('content')
    <div class="flex justify-center pb-3">
        <div class="w-8/12 bg-white p-6 rounded-lg">
        @if (!empty($news))
                    @foreach ($news as $n)
                        <div class="mb-4">
                            <a href={{ $n -> link}} class="font-bold text-l">{{ $n-> title}}</a> <span class="text-gray-600 text-small">{{ $n-> author}}</span>
                            <p class="mb-2"> {{$n->description}} </p>
                        </div>
            @endforeach

            {{-- <div class=""> {{ $posts->links()}}</div> --}}
        @else
            <p class="text-center text-red-600 font-bold text-xl">No News found</p>
        @endif
        </div>
    </div>

@endsection