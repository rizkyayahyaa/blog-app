@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Edit Comment</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="content">Comment</label>
                        <textarea class="form-control" name="content" id="content" rows="3" required>{{ $comment->content }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Comment</button>
                    <a href="{{ route('admin.comments.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
