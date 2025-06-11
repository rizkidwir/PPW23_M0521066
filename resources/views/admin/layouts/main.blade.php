<!doctype html>
<html lang="en">

<head>
  @include('admin.layouts.head')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('admin.layouts.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        @include('admin.layouts.header')
      <!--  Header End -->
      @yield('container')
    </div>
  </div>
  @include('admin.layouts.scripts')
</body>

</html>
