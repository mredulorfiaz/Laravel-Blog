<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white justify-between flex">
        <ul class="flex items-center">
            <li ><a href="/" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard </a></li>
            {{-- <li><a href="{{ route('posts') }}" class="p-3">Posts</a></li> --}}
            <li><a href="{{ route('showNews') }}" class="p-3">News</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li><p class="p-3 inline"> {{ auth()->user()->name}} </p></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <div class="inline p-3">
                            <button type="submit">Logout</button>
                        </div>
                    </form>
                </li>
            @endauth
            @guest
                <li><a class ="p-3"  href="{{ route('login')}}">Login</a></li>
                <li><a class ="p-3"  href="{{ route('register') }}">Register</a></li>
            @endguest


            
        </ul>
    </nav>
    @yield('content')
</body>

</html>
