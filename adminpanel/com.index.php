<?php
ob_start();
session_start();
include '../config/com.connect.php';
include '../config/com.function.php';

if ($_GET['p']=='login') {
  # code...
  if (empty($_SESSION['admin'])) {
    # code...

      include 'pages/com.login.php';
  }else {
  header('location:../home/');
}

}else{
  if (empty($_SESSION['admin'])) {
    # code...

      header('location:../login/');
  }else {

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../../../adminpanel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../adminpanel/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../../../adminpanel/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../../../adminpanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview" id="home">
              <a href="../home/">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview" id="user">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>User</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../user/"><i class="fa fa-circle-o"></i> List User</a></li>
                <li><a href="../user/add"><i class="fa fa-circle-o"></i> Add User</a></li>
              </ul>
            </li>
            <li class="treeview" id="pembayaran">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Transaksi</span>
                <?php $aq1=mysqli_query($con, "SELECT COUNT(*) as notif FROM pembayaran WHERE status= '1'");
                  $af1=mysqli_fetch_array($aq1);
                 ?>
                <span class="label label-danger pull-right"><?php echo $af1['notif']?></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../pembayaran/"><i class="fa fa-circle-o"></i>List Transaksi</a></li>
              </ul>
            </li>
            <li class="treeview" id="user">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Pengiriman</span>
                <?php $aq2=mysqli_query($con, "SELECT COUNT(*) as notif FROM beli WHERE status= '0'");
                  $af2=mysqli_fetch_array($aq2);
                 ?>
                <span class="label label-danger pull-right"><?php echo $af2['notif']?></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../pengiriman/"><i class="fa fa-circle-o"></i> pengiriman</a></li>
              </ul>
            </li>
            <li class="treeview" id="product">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Product</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../product/"><i class="fa fa-circle-o"></i> List Product</a></li>
                <li><a href="../product/add"><i class="fa fa-circle-o"></i> Add Product</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->

      <!-- Content Wrapper. Contains page content -->
      <?php include "pages/com.".$_GET['p'].".php";?>

    </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../../../adminpanel/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script>
$(document).ready(function(){
$("#<?php echo $_GET['p']; ?>").removeClass("treeview").addClass("active treeview");

});
</script>
    <!-- jQuery UI 1.11.4 -->

        <!-- jQuery 2.1.4 -->
        <script src="../../../../adminpanel/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../../../../adminpanel/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../../../../adminpanel/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../../../adminpanel/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../../../../adminpanel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../../../adminpanel/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../../../adminpanel/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../../../adminpanel/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
          $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
          });
        </script>
        <script src="../../../../adminpanelplugins/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>
  </body>
</html>

<?php }
} ?>
