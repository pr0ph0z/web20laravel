<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body>
    @if(session('status'))
        <div style="background: green; color: white;">
            {{ session('status') }}
        </div>
    @endif
    <h1>@yield('title')</h1>
       @yield('content')
</body>
