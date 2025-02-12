@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<h3>Comments</h3>

<!-- Form Tambah Komentar -->
<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <textarea name="content" class="form-control" placeholder="Write a comment..." required></textarea>
    <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
</form>

<hr>

<!-- List Komentar -->
@foreach($post->comments->where('parent_comment_id', null) as $comment)
    <div class="mb-3">
        <strong>{{ $comment->user->name }}</strong> - {{ $comment->content }}

        <!-- Form Balasan -->
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-2">
            @csrf
            <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
            <textarea name="content" class="form-control" placeholder="Reply to this comment..." required></textarea>
            <button type="submit" class="btn btn-secondary mt-2">Reply</button>
        </form>

        <!-- Tampilkan Balasan -->
        @if($comment->replies->count() > 0)
            <div class="ml-4 mt-2">
                @foreach($comment->replies as $reply)
                    <div class="mb-2">
                        <strong>{{ $reply->user->name }}</strong> - {{ $reply->content }}
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endforeach
