@extends('layout.mainlayout')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="width: 50rem;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Create a New Post</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('user.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label fw-bold">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Upload Image (Optional)</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
