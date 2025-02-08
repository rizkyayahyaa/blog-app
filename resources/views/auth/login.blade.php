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
                    <form action="{{ route('login') }}" method="POST">
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
        border: 1px solid #dbdbdb;
        padding: 40px;
        background-color: white;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    .login-header img {
        width: 100%;
        max-width: 150px;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 5px;
        padding: 12px;
        border: 1px solid #dbdbdb;
    }

    .login-btn {
        background-color: #0095f6;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        color: white;
    }

    .forgot-link {
        color: #0095f6;
        font-size: 14px;
        text-decoration: none;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    .no-acc a {
        color: #0095f6;
    }

    .no-acc a:hover {
        text-decoration: underline;
    }

    .login-header {
        margin-bottom: 20px;
    }
</style>
@endsection
