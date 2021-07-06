@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @if (isset($currentUser))
        <h1>Welcome {{ $currentUser->name }}</h1>
    @else
        <h1>Welcome</h1>
    @endif
@endsection
