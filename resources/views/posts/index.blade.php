@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    @forelse ($posts as $key => $post)
        <p>{{ $post['title'] }}</p>

        <form action="{{ route('posts.destroy', ['post' => $post->id])}}" class="d-inline" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete!" class="btn btn-primary">
        </form>
    @empty
    No posts found!
    @endforelse
@endsection
