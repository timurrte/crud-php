<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('app.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href=" {{ route('post.index') }} ">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ route('about.index')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class='content'>
        @yield('content')
    </div>
</body>
</html>