<h3>
    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
        {{ $post->title }}
    </a>
</h3>

<p class="text-muted">
    Ditambahkan pada {{ $post->created_at->diffForHumans() }}
    Oleh {{ $post->user->name }}
</p>

<div class="mb-3">
    @can('update', $post)
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
    @endcan

    @can('delete', $post)
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" class="d-inline" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete!" class="btn btn-primary">
    </form>
    @endcan
</div>
