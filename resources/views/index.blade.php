<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Truelysell | Template</title>

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

	<!-- Custom Style for Background -->
	<style>
body {
    position: relative;
    background-image: url('{{ asset('assets/img/best.png') }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang dengan transparansi */
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam dengan transparansi */
    z-index: -1; /* Agar overlay tidak menutupi konten */
}

    </style>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<header class="header">
			<div class="container">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a href="index.html" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!-- /Header -->

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
								<h6>John Smith</h6>
								<p>Member Since Sep 2021</p>
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
											<i class="feather-smartphone"></i> <span>Bookings</span>
										</a>
									</li>
									<li>
										<a href="customer-favourite.html" class="active">
											<i class="feather-heart"></i> <span>Favorites</span>
										</a>
									</li>
									<li>
										<a href="customer-wallet.html">
											<i class="feather-credit-card"></i> <span>Wallet</span>
										</a>
									</li>
									<li>
										<a href="customer-reviews.html">
											<i class="feather-star"></i> <span>Reviews</span>
										</a>
									</li>
									<li>
										<a href="customer-chat.html">
											<i class="feather-message-circle"></i> <span>Chat</span>
										</a>
									</li>
									<li>
										<a href="customer-profile.html">
											<i class="feather-settings"></i> <span>Settings</span>
										</a>
									</li>
									<li>
										<a href="index.html">
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
											{{-- <a href="categories.html"><span class="item-cat">Car Wash</span></a> --}}
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

</body>
</html>
