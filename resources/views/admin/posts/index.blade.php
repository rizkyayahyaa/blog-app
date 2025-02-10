@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Posts List</h4>
            <!-- Create Post Button -->
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
        </div>

        <div class="row">
            <!-- Display Posts -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Post Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="max-width: 100px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Display Users -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users List</h5>
                        <div class="list-group">
                            @foreach ($users as $user)
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span>{{ $user->name }}</span>
                                <span class="badge bg-primary rounded-pill">{{ $user->email }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
