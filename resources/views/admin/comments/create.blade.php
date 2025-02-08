@extends('layout')

@section('content')
    <h1>Add Comment</h1>

    <form action="{{ route('comments.store', $postId) }}" method="POST">
        @csrf
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
