<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Polres Pematang Siantar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset') }}/img/bg.jpeg">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('asset') }}/dist/css/styles.css">
</head>
<body id="page-top">
    <!-- Navigation -->
    @include('partials.header')

    <!-- Content -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('asset') }}/js/scripts.js"></script>
</body>
</html>
