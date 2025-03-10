<?php $page = 'register'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="login-wrap">
                    <div class="login-header text-center">
                        <img src="{{ URL::asset('/assets/img/best.png')}}" alt="Logo" class="mb-4" style="width: 150px;">
                        <h3>Create New Account</h3>
                    </div>

                    <!-- Sign Up Form -->
                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="log-form">
                            <!-- Name Field -->
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email Field -->
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password Field -->
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Confirm Password Field -->
                            <div class="form-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <!-- Role Selection -->
                            <div class="form-group mb-3">
                                <select name="role" class="form-control" required>
                                    <option value="">Select Role</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Profile Picture</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Register Button -->
                        <button class="btn btn-primary w-100 login-btn" type="submit">Sign Up</button>

                        <!-- Login Link -->
                        <div class="text-center mt-3">
                            <p class="no-acc">Already have an account? <a href="{{ url('/') }}">Log in</a></p>
                        </div>
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
