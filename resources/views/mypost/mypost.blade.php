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
                                            @if($post->image)
                                            <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
                                        @else
                                            <img class="card-img-top" src="{{ asset('images/default.jpg') }}" alt="Default Image">
                                        @endif

                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text flex-grow-1">{{ Str::limit($post->content, 100) }}</p>
                                            {{-- <a href="#" class="btn btn-outline-primary mt-auto">Read More</a> --}}

                                            <div class="mt-3">
                                                <a href="{{ route('mypost.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                                <form action="{{ route('mypost.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
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
