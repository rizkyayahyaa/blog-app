<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head_admin')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="main-wrapper">
        @if (
            !Route::is([
                'wallet-history',
                'change-password',
                'device-management',
                'login-activity',
                'facebook-api',
                'google-api',
                'php-mail',
                'smtp',
                'nexmo',
                'paypal',
                'aws-storage',
                'signin',
                'forget-password',
                'signup',
            ]))
            @include('layout.partials.header_admin')
            @include('layout.partials.sidebar_admin')
        @endif
        @yield('content')
    </div>

    @if(Route::is(['index_admin']))
    <div id="overlayer">
        <span class="loader">
        <span class="loader-inner"></span>
        </span>
    </div>
    @endif

    @include('layout.partials.footer_admin-script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
