@extends('layout.mainlayout')

@section('content')

<div class="main-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center mb-4">Edit Blog Post</h2>

                    <div class="card shadow-sm p-4">
                        <form action="{{ route('mypost.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <small class="text-muted">Leave empty if you don't want to change the image.</small>
                                <div class="mt-2">
                                    @if($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="200">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('mypost.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
