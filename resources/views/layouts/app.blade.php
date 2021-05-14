<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">Laravel App</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a href="{{ route('home.index') }}" class="p-2 text-dark">Home</a>
            <a href="{{ route('home.contact') }}" class="p-2 text-dark">Contact</a>
            <a href="{{ route('posts.index') }}" class="p-2 text-dark">Blog</a>
            <a href="{{ route('posts.create') }}" class="p-2 text-dark">Add Post</a>
        </nav>
    </div>
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
       @yield('content')
    </div>
</body>
