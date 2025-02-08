@extends('layout')

@section('content')
    <h1>Edit Comment</h1>

    <form action="{{ route('comments.update', $comment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ $comment->content }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
