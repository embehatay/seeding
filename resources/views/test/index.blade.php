<html lang="en" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="lbFF5umXmElf51HO0qahIc3SpAE9Y6w223fvdrIa">
  <title>Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/skins/skin-blue.min.css') }}">

      <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    <style>
        input, th span {
            cursor: pointer;
        }
    </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini" style="height: auto;">
<div class="wrapper" style="height: auto;">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo" target="_blank">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><span class="fa fa-fw fa-dashboard"></span></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>#######S</b></span>
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
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61.jpg?s=80&amp;d=mm&amp;r=g" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">GreatAdmin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61.jpg?s=80&amp;d=mm&amp;r=g" class="img-circle" alt="User Image">
                <p>GreatAdmin</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a id="logout" href="#" class="btn btn-default btn-flat">Sign out</a>
                  <form id="logout-form" action="#" method="POST" class="hide">
                    <input type="hidden" name="_token" value="lbFF5umXmElf51HO0qahIc3SpAE9Y6w223fvdrIa">
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li>
          <a href="#"><i class="fa fa-fw fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        
          <li class="treeview">
    <a href="#"><i class="fa fa-fw fa-user"></i> <span>Users</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
    </a>
    <ul class="treeview-menu">
                    <li><a href="http://localhost:8888/anhltblog/public/admin/users"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="http://localhost:8888/anhltblog/public/admin/users?new=on"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
            </ul>
</li>
          <li class="treeview">
    <a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Contacts</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
    </a>
    <ul class="treeview-menu">
                    <li><a href="http://localhost:8888/anhltblog/public/admin/contacts"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="http://localhost:8888/anhltblog/public/admin/contacts?new=on"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
            </ul>
</li>
          <li class="treeview">
    <a href="#"><i class="fa fa-fw fa-comment"></i> <span>Comments</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
    </a>
    <ul class="treeview-menu">
                    <li><a href="http://localhost:8888/anhltblog/public/admin/comments"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="http://localhost:8888/anhltblog/public/admin/comments?new=on"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
            </ul>
</li>
        <li><a href="http://localhost:8888/anhltblog/public/admin/categories"><i class="fa fa-list"></i> <span>Categories</span></a></li>

        
        <li class="treeview">
    <a href="#"><i class="fa fa-fw fa-file-text"></i> <span>Posts</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
    </a>
    <ul class="treeview-menu">
                    <li><a href="http://localhost:8888/anhltblog/public/admin/posts"><span class="fa fa-fw fa-circle-o text-blue"></span> <span>List All</span></a></li>
                    <li><a href="http://localhost:8888/anhltblog/public/admin/posts?new=on"><span class="fa fa-fw fa-circle-o text-yellow"></span> <span>List New</span></a></li>
                    <li><a href="http://localhost:8888/anhltblog/public/admin/posts/create"><span class="fa fa-fw fa-circle-o text-green"></span> <span>Create</span></a></li>
            </ul>
</li>
        <li><a href="http://localhost:8888/anhltblog/public/admin/medias"><i class="fa fa-image"></i> <span>Medias</span></a></li>

                  <li><a href="http://localhost:8888/anhltblog/public/admin/settings"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 352px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users Gestion
              </h1>
      <ol class="breadcrumb">
                  <li>
                          <a href="/admin">
                                      <span class="fa fa-dashboard"></span>
                        dashboard
                          </a>
                      </li>
                  <li class="active">
                                      <span class="fa fa-user"></span>
                        users
                      </li>
              </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <strong>Roles :</strong> &nbsp;
                    <input type="radio" name="role" value="all" checked=""> All&nbsp;
                    <input type="radio" name="role" value="admin"> Administrator&nbsp;
                    <input type="radio" name="role" value="redac"> Redactor&nbsp;
                    <input type="radio" name="role" value="user"> User&nbsp;<br>
                    <strong>Status :</strong> &nbsp;
                    <input type="checkbox" name="new"> New&nbsp;
                    <input type="checkbox" name="valid"> Valid&nbsp;
                    <input type="checkbox" name="confirmed"> Confirmed                    <div id="spinner" class="text-center"></div>
                </div>
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name<span id="name" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Email<span id="email" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Role<span id="role" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>New</th>
                            <th>Valid</th>
                            <th>Confirmed</th>
                            <th>Creation<span id="created_at" class="fa fa-sort-desc pull-right" aria-hidden="true"></span></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>New</th>
                            <th>Valid</th>
                            <th>Confirmed</th>
                            <th>Creation</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody id="pannel">
                            <tr>
        <td>21</td>
        <td>Sorditofublos</td>
        <td>sordi@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="21" checked="">
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>Fri Jan 12 14:45:54 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/21/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/21" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>22</td>
        <td>Martinobinus</td>
        <td>martin@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="22" disabled="">
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>Fri Jan 12 14:45:54 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/22/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/22" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Jack Kuvalis</td>
        <td>pjacobs@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="6" checked="">
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/6/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/6" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Morgan Gislason</td>
        <td>meghan37@example.org</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="7" checked="">
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/7/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/7" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>8</td>
        <td>Monty Fadel</td>
        <td>lwhite@example.org</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="8" checked="">
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/8/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/8" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Korey Mayert</td>
        <td>keaton24@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="9" checked="">
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/9/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/9" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>10</td>
        <td>Kelsie Legros</td>
        <td>ritchie.rachael@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="10" checked="">
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span class="fa fa-check"></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/10/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/10" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>
    <tr>
        <td>11</td>
        <td>Burdette Olson</td>
        <td>eweimann@example.com</td>
        <td>
                            User
                    </td>
        <td>
            <input type="checkbox" name="seen" value="11" checked="">
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>Fri Jan 12 14:45:52 2018</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/11/edit" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="http://localhost:8888/anhltblog/public/admin/users/11" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
    </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="pagination" class="box-footer">
                    <ul class="pagination pagination-sm no-margin pull-right">
        
                    <li class="disabled"><a href="#">«</a></li>
        
        
                    
            
            
                                                                        <li class="active"><a href="#">1</a></li>
                                                                                <li><a href="http://localhost:8888/anhltblog/public/admin/users?order=created_at&amp;direction=desc&amp;role=all&amp;valid=0&amp;confirmed=0&amp;new=0&amp;page=2">2</a></li>
                                                                                <li><a href="http://localhost:8888/anhltblog/public/admin/users?order=created_at&amp;direction=desc&amp;role=all&amp;valid=0&amp;confirmed=0&amp;new=0&amp;page=3">3</a></li>
                                                        
        
                    <li><a href="http://localhost:8888/anhltblog/public/admin/users?order=created_at&amp;direction=desc&amp;role=all&amp;valid=0&amp;confirmed=0&amp;new=0&amp;page=2" rel="next">»</a></li>
            </ul>

                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>© Blog. </strong> All Rights Reserved.
  </footer>

</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3.2.0 -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>

    <script src="http://localhost:8888/anhltblog/public/adminlte/js/back.js"></script>
    <script>

        var user = (function () {

            var url = 'http://localhost:8888/anhltblog/public/admin/users'
            var swalTitle = 'Really destroy user ?'
            var confirmButtonText = 'Yes'
            var cancelButtonText = 'No'
            var errorAjax = 'Looks like there is a server issue...'

            var onReady = function () {
                $('#pagination').on('click', 'ul.pagination a', function (event) {
                    back.pagination(event, $(this), errorAjax)
                })
                $('#pannel').on('change', ':checkbox[name="seen"]', function () {
                        back.seen(url, $(this), errorAjax)
                    })
                    .on('click', 'td a.btn-danger', function (event) {
                        back.destroy(event, $(this), url, swalTitle, confirmButtonText, cancelButtonText, errorAjax)
                    })
                $('th span').click(function () {
                    back.ordering(url, $(this), errorAjax)
                })
                $('.box-header :radio, .box-header :checkbox').click(function () {
                    back.filters(url, errorAjax)
                })
            }

            return {
                onReady: onReady
            }

        })()

        $(document).ready(user.onReady)

    </script>

<!-- AdminLTE App -->
<script src="http://localhost:8888/anhltblog/public/adminlte/js/app.min.js"></script>

<!-- Commom -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>

</body></html>