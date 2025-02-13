@extends('layout.mainlayout')

@section('content')

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


	<div class="main-wrapper">

		<div class="content">
			<div class="container">


				<div class="customer-chat">
					<div class="row chat-window">

						<div class="login-back mb-3">
							<a href="customer-dashboard.html"> <i class="feather-arrow-left"></i> Back</a>
						</div>

						<!-- Chat User List -->
						<div class="col-lg-5 col-xl-3 chat-cont-left">
							<div class="card mb-sm-3 mb-md-0 contacts_card flex-fill">
								<div class="chat-header">
									<div>
										<h6>Chats</h6>
										<p>Start New Conversation</p>
									</div>
									<a href="javascript:void(0)" class="chat-compose">
										<i class="feather-plus"></i>
									</a>
								</div>
								<div class="chat-search">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="search_btn"><i class="feather-search"></i></span>
										</div>
										<input type="text" placeholder="Search messages or users" class="form-control search-chat">
									</div>
								</div>
								<ul class="chat-list">
									<li>
										<a href="javascript:void(0);" class="active"><i class="feather-message-square"></i> Chat</a>
									</li>
									<li>
										<a href="javascript:void(0);"><i class="feather-phone-call"></i> Call</a>
									</li>
									<li>
										<a href="javascript:void(0);"><i class="feather-users"></i> Contacts</a>
									</li>
								</ul>
								<div class="card-body contacts_body chat-users-list chat-scroll">
									<div class="chat-header inner-chat-header pt-0">
										<div>
											<h6>Favourite</h6>
										</div>
										<a href="javascript:void(0)" class="chat-compose">
											<i class="feather-plus"></i>
										</a>
									</div>
									<a href="javascript:void(0);" class="media d-flex active">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar avatar-online">
												<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">John Steven</div>
												<div class="user-last-chat">Lorem ipsum dolor</div>
											</div>
											<div>
												<div class="last-chat-time">10:12 AM</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media d-flex read-chat">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar avatar-online">
												<img src="assets/img/profiles/avatar-03.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">John Smith</div>
												<div class="user-last-chat"><i class="feather-image"></i> Image</div>
											</div>
											<div>
												<div class="last-chat-time">10:19 AM</div>
												<div class="badge badge-primary badge-pill">2</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media d-flex">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar">
												<img src="assets/img/profiles/avatar-04.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">Audrey</div>
												<div class="user-last-chat"><i class="feather-video"></i> Video</div>
											</div>
											<div>
												<div class="last-chat-time">7:30 PM</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media read-chat d-flex">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar avatar-away">
												<img src="assets/img/profiles/avatar-06.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">David</div>
												<div class="user-last-chat"><i class="feather-file-text"></i>  Document</div>
											</div>
											<div>
												<div class="last-chat-time">6:59 PM</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media read-chat d-flex">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar avatar-online">
												<img src="assets/img/profiles/avatar-05.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">Ashley</div>
												<div class="user-last-chat">typing...</div>
											</div>
											<div>
												<div class="last-chat-time">11:21 AM</div>
											</div>
										</div>
									</a>
									<div class="chat-header inner-chat-header">
										<div>
											<h6>Direct Messages</h6>
										</div>
										<a href="javascript:void(0)" class="chat-compose">
											<i class="feather-plus"></i>
										</a>
									</div>
									<a href="javascript:void(0);" class="media d-flex">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar">
												<img src="assets/img/profiles/avatar-09.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">James</div>
												<div class="user-last-chat">Lorem ipsum dolor</div>
											</div>
											<div>
												<div class="last-chat-time">10:12 AM</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media d-flex read-chat">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar avatar-online">
												<img src="assets/img/profiles/avatar-08.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">Sheila</div>
												<div class="user-last-chat"><i class="feather-image"></i> Image</div>
											</div>
											<div>
												<div class="last-chat-time">10:19 AM</div>
												<div class="badge badge-primary badge-pill">2</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="media d-flex">
										<div class="media-img-wrap flex-shrink-0">
											<div class="avatar">
												<img src="assets/img/profiles/avatar-10.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="media-body flex-grow-1">
											<div>
												<div class="user-name">Eric</div>
												<div class="user-last-chat"><i class="feather-video"></i> Video</div>
											</div>
											<div>
												<div class="last-chat-time">7:30 PM</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- Chat User List -->

						<!-- Chat Content -->
						<div class="col-lg-7 col-xl-6 chat-cont-right">

							<!-- Chat History -->
							<div class="card mb-0">

								<div class="card-header msg_head">
									<div class="d-flex bd-highlight">
										<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
											<i class="fas fa-chevron-left"></i>
										</a>
										<div class="img_cont">
											<img class="rounded-circle user_img" src="assets/img/profiles/avatar-02.jpg" alt="">
										</div>
										<div class="user_info">
											<span>John Steven</span>
											<p class="mb-0 active">Online</p>
										</div>
									</div>
									<div class="chat-options">
										<ul>
											<li><a href="#"><i class="feather-volume-2"></i></a></li>
											<li><a href="#"><i class="feather-search"></i></a></li>
											<li><a href="#"><i class="feather-video"></i></a></li>
											<li><a href="#"><i class="feather-user" id="task_chat"></i></a></li>
											<li><a href="#" class="with-bg"><i class="feather-more-horizontal"></i></a></li>
										</ul>
									</div>
								</div>

								<div class="card-body msg_card_body chat-scroll pt-0">
									<ul class="list-unstyled">
										<li class="chat-date mt-0"><span>Yesterday</span></li>
										<li class="media received d-flex">
											<div class="avatar flex-shrink-0">
												<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<div class="media-body flex-grow-1">
												<div class="msg-box">
													<div>
														<ul class="chat-msg-info">
															<li>John Steven</li>
															<li>
																<span class="chat-time">8:55 PM</span>
																<div class="drop-item">
																	<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
																		<i class="feather-more-horizontal"></i>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather-trash-2"></i> Delete</a>
																	</div>
																</div>
															</li>
														</ul>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut labore et dolore magna aliqua. </p>
													</div>
												</div>
											</div>
										</li>
										<li class="media sent d-flex">
											<div class="avatar flex-shrink-0">
												<img src="assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<div class="media-body flex-grow-1">
												<div class="msg-box">
													<div>
														<ul class="chat-msg-info">
															<li>John Smith</li>
															<li>
																<div class="drop-item">
																	<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
																		<i class="feather-more-horizontal"></i>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather-trash-2"></i> Delete</a>
																	</div>
																</div>
																<span class="chat-time">8:55 PM</span>
															</li>
														</ul>
														<p>Sed ut perspiciatis unde omnis iste natus error accusantium doloremque laudantium</p>
													</div>
												</div>
											</div>
										</li>
										<li class="media received d-flex">
											<div class="avatar flex-shrink-0">
												<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<div class="media-body flex-grow-1">
												<div class="msg-box">
													<div>
														<ul class="chat-msg-info">
															<li>John Steven</li>
															<li>
																<span class="chat-time">8:55 PM</span>
																<div class="drop-item">
																	<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
																		<i class="feather-more-horizontal"></i>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather-trash-2"></i> Delete</a>
																	</div>
																</div>
															</li>
														</ul>
														<div class="chat-msg-attachments">
															<div class="chat-attachment">
																<img src="assets/img/services/service-03.jpg" alt="Attachment">
																<a href="" class="chat-attach-download">
																	<i class="fas fa-download"></i>
																</a>
															</div>
															<div class="chat-attachment">
																<img src="assets/img/services/service-04.jpg" alt="Attachment">
																<a href="" class="chat-attach-download">
																	<i class="fas fa-download"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="media sent d-flex">
											<div class="avatar flex-shrink-0">
												<img src="assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<div class="media-body flex-grow-1">
												<div class="msg-box">
													<div>
														<ul class="chat-msg-info">
															<li>John Smith</li>
															<li>
																<div class="drop-item">
																	<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
																		<i class="feather-more-horizontal"></i>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather-trash-2"></i> Delete</a>
																	</div>
																</div>
																<span class="chat-time">8:55 PM</span>
															</li>
														</ul>
														<div class="chat-file-attachments">
															<div class="chat-file-attach">
																<div class="chat-file-icon">
																	<i class="feather-file-text"></i>
																</div>
																<div class="chat-file-info">
																	<h6>admin_v1.0.zip</h6>
																	<p>25mb Seprate file</p>
																</div>
															</div>
															<a href="" class="chat-file-download">
																<i class="feather-download"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="chat-date"><span>Today</span></li>
										<li class="media sent d-flex">
											<div class="avatar flex-shrink-0">
												<img src="assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<div class="media-body flex-grow-1">
												<div class="msg-box">
													<div>
														<ul class="chat-msg-info">
															<li>John Smith</li>
															<li>
																<div class="drop-item">
																	<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
																		<i class="feather-more-horizontal"></i>
																	</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="feather-trash-2"></i> Delete</a>
																	</div>
																</div>
																<span class="chat-time">8:55 PM</span>
															</li>
														</ul>
														<div class="msg-highlight">
															<a href="javascript:void(0);">Sed ut perspiciatis unde omnis iste natus error accusantium doloremque laudantium</a>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>

								</div>

								<div class="card-footer">
									<div class="input-group">
										<div class="btn-file btn">
											<i class="feather-plus"></i>
											<input type="file">
										</div>
										<input class="form-control type_msg mh-auto empty_check" placeholder="Write your message...">
										<div class="send-action">
											<a href="javascript:void(0);"><i class="fa-solid fa-face-smile"></i></a>
											<a href="javascript:void(0);"><i class="feather-mic"></i></a>
											<button class="btn btn-primary btn_send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
										</div>
									</div>
								</div>

							</div>

						</div>
						<!-- /Chat Content -->

					</div>
				</div>

			</div>
		</div>

		<!-- Cursor -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /Cursor -->

	</div>

@endsection

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Fearther JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- select JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

