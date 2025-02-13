@extends('layout.mainlayout')

@section('content')
    <div class="container">
        @if($posts->count() > 0)
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image">
                            @else
                                <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                {{-- <a href="{{ route('mypost.edit', $post->id) }}" class="btn btn-primary">Edit</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        @else
            <p class="alert alert-warning">No posts found.</p>
        @endif
    </div>
@endsection
