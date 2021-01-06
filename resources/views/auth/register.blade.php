@extends('layouts.app')

@section('content')

<div class="flex justify-center p-4">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <h1 class="text-center mb-4 font-medium">Register</h1>
        <form action=" {{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name')}}">

                @error('name')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror

            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Enter A Username</label>
                <input type="text" name="username" id="username" placeholder="UserName" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('username')}}">
                @error('name')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror


            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email')}}">

                @error('email')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')
                    border-error-500 text-red
                @enderror" value="{{ old('password')}}">

                @error('password')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Repeat Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Password Again" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('password_confirmation')}}">

                @error('name')
                    <div class="text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Register </button>
            </div>
        </form>
    </div>
</div>
@endsection