<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-fw fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-fw fa-user"></i> <span>Users</span>
                    <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="#"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ route('admin.account.getIndex') }}"><i class="fa fa-fw fa-user"></i> <span>Accounts</span>
                    <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.account.getIndex') }}"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="#"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ route('admin.comment.getIndex') }}"><i class="fa fa-fw fa-comment"></i> <span>Comments</span>
                    <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.comment.getIndex') }}"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="#"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ route('admin.post.getIndex') }}"><i class="fa fa-fw fa-file-text"></i> <span>Posts</span>
                    <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.post.getIndex') }}"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="#"></span> <span>List New</span></a></li>
                    <li><a href="#"></span> <span>Create</span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('admin.setting.getIndex') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>