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

<!-- Custom Style for Background -->
<style>
body {
    position: relative;
    background-image: url('{{ asset('assets/img/best.png') }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5);
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
                                <img src="assets/img/profiles/avatar-02.jpg" alt="user">
                            </div>
                            <h6>{{ Auth::user()->name }}</h6>
                            <p>Member Since {{ Auth::user()->created_at->format('M Y') }}</p>
                        </div>
                        <div class="settings-menu">
                            <ul>
                                <li>
                                    <a href="customer-dashboard.html">
                                        <i class="feather-grid"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-booking.html">
                                        <i class="feather-smartphone"></i> <span>My Posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.posts.create') }}">
                                        <i class="feather-plus"></i> <span>Create Posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-wallet.html">
                                        <i class="fa-solid fa-comments"></i> <span>Comments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-reviews.html">
                                        <i class="fa-solid fa-tags"></i> <span>All Categories</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer-chat.html">
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

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="service-details.html">
                                        <img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-04.jpg">
                                    </a>
                                    <div class="fav-item">
                                        <a href="javascript:void(0)" class="fav-icon selected">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="providers.html"><span class="item-img"><img src="assets/img/profiles/avatar-01.jpg" class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="service-details.html">Car Repair Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Maryland City, USA<span class="rate"><i class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$50.00</h6>
                                        <a href="booking.html" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

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
</script>

@endsection
