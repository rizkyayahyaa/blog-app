@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Create New Post</h4>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf

                            <!-- Dropdown for selecting user_id from users table -->
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User</label>
                                <select class="form-control" id="user_id" name="user_id" required>
                                    <option value="" disabled selected>Select User</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
