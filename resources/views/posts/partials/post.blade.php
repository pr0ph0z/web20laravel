<h3>
    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
        {{ $post->title }}
    </a>
</h3>

<div class="mb-3">
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" class="d-inline" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete!" class="btn btn-primary">
    </form>
</div>
