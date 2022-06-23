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
<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome to Urkaine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Главная</a>
                <a class="nav-link" href="{{ route('video.index') }}">Video</a>
                <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                <a class="nav-link" href="{{ route('post.index') }}">Post</a>
              </div>
        </div>
    </div>
</nav>
</div>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
