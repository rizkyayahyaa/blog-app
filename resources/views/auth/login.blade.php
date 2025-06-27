<?php $page = 'login'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="login-wrap">
                    <div class="login-header text-center">
                        <img src="{{ URL::asset('/assets/img/best.png')}}" alt="Instagram Logo" class="mb-4" style="width: 150px;">
                    </div>

                    <!-- Login Form -->
                    <form action="{{ route('login.authenticate') }}" method="POST">
                        @csrf
                        <div class="log-form">
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Phone number, username, or email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Login Button -->
                        <button class="btn btn-primary w-100 login-btn" type="submit">Log In</button>

                        <!-- Forgot Password Link -->
                        <div class="text-center mt-3">
                            <a href="{{ url('password-recovery') }}" class="forgot-link">Forgot password?</a>
                        </div>
                    </form>
                    <!-- /Login Form -->

                    <!-- Signup Link -->
                    <div class="text-center mt-4">
                        <p class="no-acc">Don't have an account? <a href="{{ url('register') }}">Sign up</a></p>
                    </div>

                    <!-- SweetAlert2 Script -->
                    @if(session('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                title: 'Success!',
                                text: '{{ session('success') }}',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .login-wrap {
        border: 1px solid rgba(219, 219, 219, 0.3); /* Border semi-transparan */
        padding: 40px;
        background-color: rgba(255, 255, 255, 0.1); /* Background transparan 10% */
        backdrop-filter: blur(10px); /* Efek blur untuk glassmorphism */
        -webkit-backdrop-filter: blur(10px); /* Support untuk Safari */
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); /* Shadow lebih halus */
        border-radius: 15px; /* Rounded corners */
    }

    .login-header img {
        width: 100%;
        max-width: 150px;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
        border: 1px solid rgba(219, 219, 219, 0.4);
        background-color: rgba(255, 255, 255, 0.2); /* Input transparan */
        backdrop-filter: blur(5px);
        color: #333;
    }

    .form-control::placeholder {
        color: rgba(0, 0, 0, 0.6); /* Placeholder lebih gelap agar terlihat */
    }

    .form-control:focus {
        background-color: rgba(255, 255, 255, 0.3);
        border-color: rgba(0, 149, 246, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(0, 149, 246, 0.25);
    }

    .login-btn {
        background-color: rgba(0, 149, 246, 0.8); /* Button semi-transparan */
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        color: white;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .login-btn:hover {
        background-color: rgba(0, 149, 246, 1); /* Solid saat hover */
        transform: translateY(-1px);
    }

    .forgot-link {
        color: #0095f6;
        font-size: 14px;
        text-decoration: none;
        text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8); /* Text shadow untuk visibility */
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    .no-acc {
        color: #333;
        text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
    }

    .no-acc a {
        color: #0095f6;
        text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
    }

    .no-acc a:hover {
        text-decoration: underline;
    }

    .login-header {
        margin-bottom: 20px;
    }

    .text-danger {
        text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
    }

    /* Background menggunakan dari mainlayout */
</style>
@endsection