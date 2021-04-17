<!DOCTYPE html>
<html lang="en">
@include('admin.template.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        @include('admin.template.partials.preloader')

        <!-- Navbar -->
        @include('admin.template.partials.navbar')

        <!-- Main Sidebar Container -->
        @include('admin.template.partials.slidebar')


        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        </div>
    </div>
    <!-- /.content-wrapper -->
    @include('admin.template.partials.footer')

    <!-- Control Sidebar -->
    @include('admin.template.partials.control-slidebar')
    </div>

    <!-- jQuery -->
    @include('admin.template.partials.scripts')
</body>

</html>
