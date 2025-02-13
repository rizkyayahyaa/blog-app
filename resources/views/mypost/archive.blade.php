@extends('layout.mainlayout')

@section('content')

<div class="main-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Archived Posts</h3>

                    @if($archivedPosts->count() > 0)
                        <div class="row">
                            @foreach($archivedPosts as $post)
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
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            No archived posts available.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
