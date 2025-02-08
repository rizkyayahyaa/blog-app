<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

      <title>BLOG APP</title>

      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="#">
      @include('layout.partials.head-main')

      <!-- Custom Background CSS -->
      <style>
        body {
            background: url('{{ URL::asset('/assets/img/best.png')}}') no-repeat center center fixed;
            background-size: cover;
        }

        /* Optional: Tambahkan overlay */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Efek gelap transparan */
            z-index: -1;
        }
      </style>
    </head>
    <body>
      <div class="background-overlay"></div> <!-- Tambahkan overlay -->

      @if(!Route::is(['error-404','error-500','session-expired']))
        <div class="main-wrapper">
      @endif
      @if(Route::is(['session-expired']))
            <div class="main-wrapper error-page">
      @endif
        @include('layout.partials.header-main')
            @yield('content')
            @include('layout.partials.footer-main')
            @include('layout.partials.cursor')
            </div>
            @include('layout.partials.footer-main-scripts')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    </body>
</html>
