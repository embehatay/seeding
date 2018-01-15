<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo" target="_blank">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><span class="fa fa-fw fa-dashboard"></span></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Seeding</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- Notifications Menu -->

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{!! \Illuminate\Support\Facades\Auth::user()->name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('home') }}" class="btn btn-default btn-flat">Home</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>