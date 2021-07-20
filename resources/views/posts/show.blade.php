@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p class="text-muted">
    Ditambahkan pada {{ $post->created_at->diffForHumans() }}
    Oleh {{ $post->user->name }}
</p>

@if(now()->diffInMinutes($post->created_at) < 5) <div class="alert alert-info">New!</div>
    @endif
    @endsection
