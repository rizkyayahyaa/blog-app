@extends('layout')

@section('content')
    <h1>Comments for Post</h1>
    <a href="{{ route('comments.create', $postId) }}" class="btn btn-primary">Add Comment</a>

    @foreach ($comments as $comment)
        <div>
            <strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}
            <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
