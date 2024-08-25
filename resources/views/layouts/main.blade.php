<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="container">
    <header class="head">
        <h2>Application</h2>
        <nav class="navbar" class="row">
            <ul >
                <a class="navitem" href="{{route('app.index')}}"><li>Main</li></a>
                <a class="navitem" href="{{route('post.index')}}"><li>Posts</li></a>
                <a class="navitem" href="{{route('about.index')}}"><li>About</li></a>
                <a class="navitem" href="{{route('contact.index')}}"><li>Contact</li></a>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>