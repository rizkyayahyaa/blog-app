@extends('layout.mainlayout')

@section('content')

<div class="main-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 mb-3">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-pill">Back to Dashboard</a>
                    </div>
                    <div class="row">

                        @if(isset($posts) && $posts->count() > 0)
                            @foreach($posts as $post)
                                <div class="col-lg-3 col-md-3 mb-3">
                                    <div class="card shadow-lg border-0 h-100 transform-hover">
                                        <div class="position-relative">
                                            @if($post->image)
                                                <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
                                            @else
                                                <img class="card-img-top" src="{{ asset('images/default.jpg') }}" alt="Default Image">
                                            @endif
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title text-truncate" style="max-width: 100%;">{{ $post->title }}</h5>
                                            <p class="card-text flex-grow-1 text-muted">{{ Str::limit($post->content, 120) }}</p>

                                            <div class="mt-3 d-flex justify-content-between">
                                                <a href="{{ route('mypost.edit', $post->id) }}" class="btn btn-edit btn rounded-pill">Edit</a>
                                                <a href="{{ route('mypost.edit', $post->id) }}" class="btn btn-edit btn rounded-pill">Archive</a>

                                                <form action="{{ route('mypost.destroy', $post->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-delete btn rounded-pill">Delete</button>
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

@section('styles')
<style>
    .transform-hover:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .btn-edit {
        background: linear-gradient(135deg, #f0c27b, #4b1248);
        color: white;
        border: none;
        padding: 8px 15px;
        text-transform: uppercase;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-edit:hover {
        background: linear-gradient(135deg, #ff914d, #c53f82);
        transform: translateY(-2px);
    }

    .btn-delete {
        background: linear-gradient(135deg, #ff4e50, #f9d423);
        color: white;
        border: none;
        padding: 8px 15px;
        text-transform: uppercase;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #ff7043, #f57c00);
        transform: translateY(-2px);
    }

    .card-title {
        font-weight: bold;
    }

    .card-body {
        padding: 1.25rem;
    }
</style>
@endsection
