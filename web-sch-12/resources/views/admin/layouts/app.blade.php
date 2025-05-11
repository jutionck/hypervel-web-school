<!--admin/layouts/app-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="backend/assets/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.6.4.0.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    @include('admin.includes.styles')
    <!-- ========== All CSS files linkup ========= -->
</head>

<body>
    <!--alert session-->
    @include('components.alert-session')
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <img src="backend/assets/images/logo/logo.svg" alt="logo" />
            </a>
        </div>
        @include('admin.includes.sidebar')
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('admin.includes.header')
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        @yield('content')
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        @include('admin.includes.footer')
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    @include('admin.includes.scripts')
    <!-- ========= All Javascript files linkup ======== -->
    <!-- ========== admin common script ========== -->
    <script src="{{ asset('backend/assets/js/admin-common.js') }}"></script>
    <!-- ========== admin common script ========== -->

</body>

</html>
