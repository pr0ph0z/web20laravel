@extends('layouts.app')

@section('content')
    <h1>{{ $user->title }}</h1>
    <p>{{ $user->content }}</p>
@endsection
