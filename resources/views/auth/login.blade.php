<?php $page = 'login'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mx-auto">
                <div class="login-wrap">
                    <div class="login-header">
                        <h3>Login</h3>
                        {{-- <p>We'll send a confirmation code to your email.</p>
                        <h6>Sign in with <a href="{{ url('login-phone') }}">Phone Number</a></h6> --}}
                    </div>

                    <!-- Login Form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="log-form">
                            <div class="form-group">
                                <label class="col-form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="example@email.com" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label d-block">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="char-length">
                                        <p>Must be 6 characters at least</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end">
                                        <a class="forgot-link" href="{{ url('password-recovery') }}">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                        <p class="no-acc">Don't have an account? <a href="{{ url('register') }}">Register</a></p>
                    </form>
                    <!-- /Login Form -->

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
@endsection
