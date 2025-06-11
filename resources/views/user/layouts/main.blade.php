<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.head')
</head>

<body>
    @include('user.layouts.navbar')

    @yield('container')
    <!-- Footer Start -->

    <footer>
        @include('user.layouts.footer')
    </footer>
    <!-- Back to Top -->
    @include('user.layouts.scripts')
</body>
</html>
