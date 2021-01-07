@extends('layouts.app')

@section('content')
<div class="flex justify-center p-3">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        {{-- <h1 class="text-center mb-4 font-medium" >Posts</h1> --}}

        <form action="{{ route('posts') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="id" cols="30" rows="4"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"></textarea>

                @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white w-2/12 rounded px-4 py-2 font-medium">
                    Post
                </button>
            </div>
            <input type="submit" style="display: none" />
        </form>

        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4">
                    <a href="font-bold">{{ $post-> user -> name}}</a> <span class="text-gray-600 text-small">{{ $post-> created_at -> diffForHumans()}}</span>
                    <p class="mb-2"> {{$post->body}} </p>
                </div>
            @endforeach

            <div class=""> {{ $posts->links()}}</div>
        @else
            <p>No Post found</p>
        @endif
    </div>
</div>

@endsection
