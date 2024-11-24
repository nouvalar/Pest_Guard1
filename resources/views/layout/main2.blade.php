<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .content-wrapper {
            margin-left: 250px;
            padding: 20px;
            padding-top: 60px;
            /* Sesuaikan dengan tinggi navbar */
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding: 20px;
            background-color: #29593D;
            color: white;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #29593D;
        }

        .navbar {
            z-index: 1050;
        }
        
    </style>

</head>

<body id="">

    <!-- Include Navbar -->
    @include('partials.navbar-admin')

    <!-- Include Sidebar -->
    @include('partials.sidebar-admin')

    <!-- Main Content -->
    <div class="content">
        @yield('contents')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include CKEditor from CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</body>

</html>
