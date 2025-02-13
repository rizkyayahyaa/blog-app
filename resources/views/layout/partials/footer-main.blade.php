<!-- Footer -->
<footer class="footer">

    <style>
        .footer {
            background: rgba(0, 0, 0, 0.6); /* Transparan hitam 60% */
            color: #ffffff; /* Warna teks putih */
            padding: 50px 0;
        }

        .footer a {
            color: #ffffff; /* Warna link putih */
            text-decoration: none;
        }

        .footer a:hover {
            color: #f0ad4e; /* Warna hover oranye */
        }

        .footer-bottom {
            background: rgba(0, 0, 0, 0.3); /* Transparansi lebih tipis */
            padding: 20px 0;
            text-align: center;
        }
    </style>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/best.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>A blog is a platform where individuals or organizations share their thoughts, experiences, and expertise on various topics. It serves as an interactive space for readers to engage with content, offer feedback, and stay updated on new trends, news, and ideas. Blogs can cover anything from personal stories to professional insights, making them a versatile tool for communication and expression.</p>
                        </div>
                        <div class="footer-selects">
                            <h2 class="footer-title">Language & Currency</h2>
                            <div class="row">
                                <div class="col-lg-12 d-flex">
                                    <div class="footer-select">
                                        <img src="{{ URL::asset('/assets/img/icons/global.svg')}}" alt="img">
                                        <select class="select">
                                            <option>English</option>
                                            <option>France</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Quick Links</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <p><span><i class="feather-map-pin"></i></span> 367 Hillcrest Lane, Irvine, California, United States</p>
                            </div>
                            <p><span><i class="feather-phone"></i></span> 321 546 8764</p>
                            <p class="mb-0"><span><i class="feather-mail"></i></span> rentcars@example.com</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Follow Us</h2>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="footer-subtitle">Newsletter Signup</h2>
                        <div class="subscribe-form">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <button type="submit" class="btn footer-btn">
                                <i class="feather-send"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Rizkya Wildani Yahya</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-image">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/visa.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/mastercard.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/stripe.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/discover.png')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
