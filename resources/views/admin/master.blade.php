<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    @include('admin.head')
</head>
<body class="skin-blue sidebar-mini" style="height: auto;">
<div class="wrapper" style="height: auto">
    {{--header--}}
    @include('admin.header')
    {{--sidebar--}}
    @include('admin.sidebar')
    <!-- content -->
        <div class="content-wrapper" style="min-height: 352px;">
            <!-- Content Header (Page header) -->
            @include('admin/content-header')

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
    <!-- end content -->
    @include('admin.footer')
</div>
@include('admin.addition_script')
</body>
</html>