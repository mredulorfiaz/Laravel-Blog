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
            <li ><a href="#" class="p-3">Home</a></li>
            <li><a href="#" class="p-3">Dashboard </a></li>
            <li><a href="#" class="p-3">Posts</a></li>
        </ul>

        <ul class="flex items-center">
            <li><a class ="p-3"  href="#">Orfiaz</a></li>
            <li><a  class ="p-3" href="#">Login</a></li>
            <li><a class ="p-3"  href="{{ route('register') }}">Register</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>
