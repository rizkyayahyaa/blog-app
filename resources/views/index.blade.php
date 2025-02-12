@extends('layout.mainlayout')

@section('title', 'BLOG APP')

@section('styles')
<!-- Favicon -->
<link rel="shortcut icon" href="assets/img/favicon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<!-- Fearther CSS -->
<link rel="stylesheet" href="assets/css/feather.css">

<!-- select CSS -->
<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('content')

<script>
    @if(session('success'))
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = "{{ route('user.posts.index') }}";
        });
    @endif

        document.addEventListener('DOMContentLoaded', function() {
        // Handle reply button clicks
        document.querySelectorAll('.reply-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');
                const replyForm = document.getElementById(`reply-form-${commentId}`);

                // Toggle reply form visibility
                if (replyForm.style.display === 'none') {
                    replyForm.style.display = 'block';
                } else {
                    replyForm.style.display = 'none';
                }
            });
        });
    });
</script>

<!-- Custom Style for Background -->
<style>
body {
    background-image: url('{{ asset('assets/img/best.png') }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.3); /* Mengurangi kegelapan */
    color: #fff;
}


body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
}

.service-content {
    background: #fff;
    border: 1px solid #e0e0e0;
    padding: 15px;
    border-radius: 8px;
}

.post-image img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
}

.post-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.like-share button {
    background: none;
    border: none;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    transition: color 0.3s;
}

.like-share button:hover {
    color: #e74c3c;
}

.btn-like i {
    color: #e74c3c;
}

.btn-like:hover i {
    color: #c0392b;
}

.btn-share i {
    color: #3498db;
}

.btn-share:hover i {
    color: #2980b9;
}

.comments a {
    font-size: 14px;
    color: #3498db;
}

.serv-info {
    margin-top: 15px;
    text-align: center;
}

.btn-book {
    background-color: #2980b9;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.btn-book:hover {
    background-color: #1abc9c;
}

.service-widget.card {
    transition: all 0.3s ease;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.service-widget.card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
}

.pagination .page-item {
    margin: 0 5px;
}

.pagination .page-link {
    border-radius: 5px;
    background-color: #fff;
    color: #3498db;
    padding: 8px 12px;
    transition: background-color 0.3s;
}

.pagination .page-link:hover {
    background-color: #2980b9;
    color: #fff;
}

.comments-section {
    margin-top: 20px;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.comment-item {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 12px;
    margin-bottom: 10px;
}

.comment-header {
    margin-bottom: 5px;
}

.reply-item {
    background: #fff;
    border-radius: 6px;
    padding: 8px;
    margin-left: 20px;
    border: 1px solid #eee;
}

.comment-actions {
    margin-top: 5px;
}

.btn-link {
    padding: 0;
    font-size: 0.875rem;
    text-decoration: none;
}

.reply-form {
    background: #fff;
    padding: 10px;
    border-radius: 6px;
    margin-top: 10px;
}

</style>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-3 theiaStickySidebar">
                    <!-- Settings Menu -->
                    <div class="settings-widget">
                        <div class="settings-header">
                            <div class="settings-img">
                            @if(Auth::user()->image)
                                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Profile Image" class="img-fluid">
                            @else
                                <img src="{{ asset('assets/img/default-avatar.png') }}" alt="Default Avatar" class="img-fluid">
                            @endif                           </div>
                            <h6>{{ Auth::user()->name }}</h6>
                            <p>Member Since {{ Auth::user()->created_at->format('M Y') }}</p>
                        </div>
                        <div class="settings-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('dashboard') }}">
                                        <i class="fa-solid fa-users"></i> <span>All Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('mypost.mypost') }}">
                                        <i class="feather-smartphone"></i> <span>My Posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.posts.create') }}">
                                        <i class="feather-plus"></i> <span>Create Posts</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="customer-wallet.html">
                                        <i class="fa-solid fa-comments"></i> <span>Comments</span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="customer-reviews.html">
                                        <i class="feather-archive"></i> <span>Archive</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('customer.chat') }}">
                                        <i class="feather-message-circle"></i> <span>Direct Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-profile.html">
                                        <i class="feather-settings"></i> <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="feather-log-out"></i> <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings Menu -->
                </div>


                <div class="col-md-8 col-lg-9">
                    <form action="{{ route('user.posts.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search posts..." value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="feather-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <!-- Sort -->
                    <div class="row align-items-center">

                        <div class="col-sm-6 d-flex align-items-center justify-content-end">

                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/icons/filter-icon.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customer-favourite.html">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customer-booking.html">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Sort -->

                    <div class="row">
                        @if(isset($posts) && $posts->count() > 0)
                            <!-- Service List -->
                            @foreach($posts as $post)
                            <div class="col-xl-4 col-md-6">
                                <div class="service-widget servicecontent card">
                                    <div class="service-img">
                                        @if($post->image)
                                            <img class="img-fluid serv-img card-img-top" alt="Post Image" src="{{ asset('storage/' . $post->image) }}">
                                        @endif
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <a href="#"><span class="item-img">
                                                <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" class="avatar" alt="">
                                            </span></a>
                                        </div>
                                    </div>
                                    <!-- Inside your post card -->
                                        <div class="service-content card-body">
                                            <!-- Post content stays the same -->
                                            <h3 class="title">
                                                <a href="#">{{ $post->title }}</a>
                                            </h3>
                                            <span class="user-name">
                                                <i class="fa-solid fa-user"></i> {{ $post->user->name }}
                                            </span>
                                            <p>{{ Str::limit($post->content, 100) }}</p>

                                            <!-- Comments Section -->
                                            <div class="comments-section">
                                                <!-- Comment Form -->
                                                <form action="{{ route('comments.store') }}" method="POST" class="mb-3">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="content" rows="2" placeholder="Write your comment..."></textarea>
                                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Post Comment</button>
                                                    </div>
                                                </form>


                                                <!-- Display Comments -->
                                                @if($post->comments->count() > 0)
                                                    @foreach($post->comments as $comment)
                                                        <div class="comment-item mb-3">
                                                            <div class="d-flex">
                                                                <div class="avatar me-2">
                                                                    @if($comment->user->image)
                                                                        <img src="{{ asset('storage/' . $comment->user->image) }}" alt="User" class="rounded-circle" width="40">
                                                                    @else
                                                                        <img src="{{ asset('assets/img/default-avatar.png') }}" alt="Default" class="rounded-circle" width="40">
                                                                    @endif
                                                                </div>
                                                                <div class="comment-content flex-grow-1">
                                                                    <div class="comment-header">
                                                                        <strong>{{ $comment->user->name }}</strong>
                                                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                                    </div>
                                                                    <p class="mb-1">{{ $comment->content }}</p>

                                                                    <!-- Reply Button & Form -->
                                                                    <div class="comment-actions">
                                                                        <button class="btn btn-sm btn-link reply-toggle" data-comment-id="{{ $comment->id }}">
                                                                            Reply
                                                                        </button>
                                                                        @if(Auth::id() == $comment->user_id)
                                                                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-sm btn-link text-danger">Delete</button>
                                                                            </form>
                                                                        @endif
                                                                    </div>

                                                                    <!-- Reply Form -->
                                                                    <!-- Reply Form -->
                                                                    <div class="reply-form mt-2" id="reply-form-{{ $comment->id }}" style="display: none;">
                                                                        <form action="{{ route('comments.store') }}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                                            <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control form-control-sm" name="content" rows="2" placeholder="Write your reply..."></textarea>
                                                                                <button type="submit" class="btn btn-primary btn-sm mt-2">Reply</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                    <!-- Display Replies -->
                                                                    @if($comment->replies->count() > 0)
                                                                        <div class="replies ms-4 mt-2">
                                                                            @foreach($comment->replies as $reply)
                                                                                <div class="reply-item mb-2">
                                                                                    <div class="d-flex">
                                                                                        <div class="avatar me-2">
                                                                                            @if($reply->user->image)
                                                                                                <img src="{{ asset('storage/' . $reply->user->image) }}" alt="User" class="rounded-circle" width="30">
                                                                                            @else
                                                                                                <img src="{{ asset('assets/img/default-avatar.png') }}" alt="Default" class="rounded-circle" width="30">
                                                                                            @endif
                                                                                        </div>
                                                                                        <div class="reply-content">
                                                                                            <div class="reply-header">
                                                                                                <strong>{{ $reply->user->name }}</strong>
                                                                                                <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                                                                                            </div>
                                                                                            <p class="mb-1">{{ $reply->content }}</p>
                                                                                            @if(Auth::id() == $reply->user_id)
                                                                                                <form action="{{ route('comments.destroy', $reply->id) }}" method="POST" class="d-inline">
                                                                                                    @csrf
                                                                                                    @method('DELETE')
                                                                                                    <button type="submit" class="btn btn-sm btn-link text-danger">Delete</button>
                                                                                                </form>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                            </div>

                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-info text-center">
                                    No posts available. <a href="{{ route('user.posts.create') }}" class="alert-link">Create your first post!</a>
                                </div>
                            </div>
                        @endif
                    </div>


                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="review-pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Pagination -->
                </div>
            </div>
        </div>
    </div>

    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

</div>
<!-- /Main Wrapper -->

@endsection

@section('scripts')
<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Feather JS -->
<script src="assets/js/feather.min.js"></script>
<!-- select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!-- Datepicker JS -->
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
