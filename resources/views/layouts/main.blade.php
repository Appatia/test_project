<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Welcome to Ukraine</title>
</head>
<body>
{{-- welcome to ukraine--}}
<div class="container">
    <div class="row">
    <nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Main <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
{{--        </nav>--}}
{{--        <ul>--}}
{{--            <li><a href="{{ route('main.index') }}">Main</a></li>--}}
{{--            <li><a href="{{ route('about.index') }}">About</a></li>--}}
{{--            <li><a href="{{ route('contact.index') }}">Contacts</a></li>--}}
{{--            <li><a href="{{ route('blog.index') }}">Blogs</a></li>--}}
{{--            <li><a href="{{ route('post.index') }}">Posts</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
    </div>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
