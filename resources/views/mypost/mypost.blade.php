@extends('layout.mainlayout')

@section('content')

<div class="main-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">Latest Blog Posts</h2>
                    <div class="row">
                        @if(isset($posts) && $posts->count() > 0)
                            @foreach($posts as $post)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card shadow-sm border-0 h-100">
                                        <div class="position-relative">
                                            <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="height: 200px; object-fit: cover;">
                                            <div class="position-absolute top-0 start-0 bg-primary text-white px-4 py-1 small">
                                                {{ $post->category }}
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text flex-grow-1">{{ Str::limit($post->content, 100) }}</p>
                                            <a href="#" class="btn btn-outline-primary mt-auto">Read More</a>

                                            <div class="mt-3">
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-info text-center">
                                    No blog posts available. <a href="#" class="alert-link">Create your first post!</a>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Pagination -->
                    {{-- <div class="d-flex justify-content-center mt-4">
                        {{ $posts->links() }}
                    </div> --}}
                    <!-- /Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
