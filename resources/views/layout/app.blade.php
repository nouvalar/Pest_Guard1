<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PestGuard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-circle.png') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('tmplt/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('tmplt/css/templt.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tmplt/css/style2.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body id="page-top">

    <!-- Header -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('tmplt/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('tmplt/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('tmplt/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('tmplt/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('tmplt/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('tmplt/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('tmplt/js/demo/chart-pie-demo.js') }}"></script>
</body>
