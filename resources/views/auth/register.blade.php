<?php $page = 'register'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mx-auto">
                <div class="login-wrap">
                    <div class="login-header">
                        <h3>Sign Up</h3>
                    </div>

                    <!-- Sign Up Form -->
                    <form method="POST" action="#">
                        @csrf
                        <div class="log-form">
                            <div class="form-group">
                                <label class="col-form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="example@email.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label d-block">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input" placeholder="*************" required>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label d-block">Confirm Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password_confirmation" class="form-control pass-input" placeholder="*************" required>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 login-btn" type="submit">Register</button>
                        <p class="no-acc">Already have an account? <a href="{{ url('login') }}">Login</a></p>
                    </form>
                    <!-- /Sign Up Form -->

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
