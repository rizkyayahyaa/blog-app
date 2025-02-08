<!-- /Header -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                @if(!Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial']))
                <a id="mobile_btn" href="javascript:void(0);">
                    @if(!Route::is(['index-3']))
                    <span class="bar-icon">
                    @endif
                    @if(Route::is(['index-3']))
                    <span class="bar-icon bar-icon-three">
                    @endif
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                @endif
                <a href="{{url('/')}}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/best.png')}}" class="img-fluid" alt="Logo" width="30" height="auto">
                </a>
                <a href="{{url('/')}}" class="navbar-brand logo-small">
                    <img src="{{ URL::asset('/assets/img/logo-small.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('/')}}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu {{ Request::is('/','index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9') ? 'active' : '' }}">
                        <a href="{{url('/')}}">Home</a>
                    </li>

                    <li class="has-submenu {{ Request::is('provider-dashboard', 'provider-services', 'provider-booking', 'provider-payout', 'provider-availability', 'provider-holiday', 'provider-coupons', 'provider-offers', 'provider-reviews', 'provider-earnings', 'provider-chat') ? 'active' : '' }}">
                        <a href="about-us">About Us</a>
                    </li>

                    <li class="has-submenu {{ Request::is('about-us', 'contact-us', 'how-it-works', 'choose-signup', 'user-signup', 'provider-signup', 'login', 'reset-password', 'password-recovery', 'phone-otp', 'email-otp', 'free-trial', 'booking', 'booking-payment', 'booking-done', 'categories', 'pricing', 'faq', 'maintenance', 'coming-soon', 'privacy-policy', 'terms-condition', 'session-expired') ? 'active' : '' }}">
                        <a href="contact-us">Contact Us</a>
                    </li>

                    @if(!Auth::check())
                        <li class="login-link">
                            <a href="{{url('user-signup')}}">Register</a>
                        </li>
                        <li class="login-link">
                            <a href="{{url('login')}}">Login</a>
                        </li>
                    @else
                        {{-- <li class="has-submenu {{ Request::is('car-rent', 'favorite-cars', 'car-management', 'payment-history') ? 'active' : '' }}">
                            <a href="#">Car Services <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="{{ Request::is('car-rent') ? 'active' : '' }}"><a href="{{ route('cars.available') }}">Booking Cars</a></li>
                                <li class="{{ Request::is('favorite-cars') ? 'active' : '' }}"><a href="{{url('favorite-cars')}}">Favorite Cars</a></li>
                                <li class="{{ Request::is('car-management') ? 'active' : '' }}"><a href="{{url('car-management')}}">Car Management</a></li>
                                <li class="{{ Request::is('payment-history') ? 'active' : '' }}"><a href="{{url('payment-history')}}">Payment History</a></li>
                            </ul>
                        </li> --}}
                        <li class="login-link">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link header-reg" href="{{url('user-signup')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{url('login')}}"><i class="fa-regular fa-circle-user me-2"></i>Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link header-login" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-regular fa-circle-user me-2"></i>Logout</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
