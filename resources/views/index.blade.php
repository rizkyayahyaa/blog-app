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
                                        <i class="feather-grid"></i> <span>Home</span>
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
                                        <i class="fa-solid fa-users"></i> <span>All Post</span>
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
                                    <div class="service-content card-body">
                                        <h3 class="title">
                                            <a href="#">{{ $post->title }}</a>
                                        </h3>
                                        <p>{{ Str::limit($post->content, 100) }}</p>

                                        <!-- Post Actions -->
                                        <div class="post-actions">
                                            <div class="like-share">
                                                <button class="btn-like" data-toggle="tooltip" title="Like this post">
                                                    <i class="fas fa-heart"></i> Like
                                                </button>
                                                <button class="btn-share">
                                                    <i class="fas fa-share"></i> Share
                                                </button>
                                            </div>
                                            <div class="comments">
                                                <a href="#">View Comments (3)</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input Comment Section -->
                                    <div class="comment-input card-footer">
                                        <form action="#" method="POST">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" placeholder="Write your comment here..."></textarea>
                                                <br>
                                                <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
                                            </div>
                                        </form>
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

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

</script>


@endsection
