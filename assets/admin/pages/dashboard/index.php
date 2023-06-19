<?php include_once('../authen.php');
include_once('../../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>D-DAY SHOP</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark text-center">D-DAY SHOP</h1>
            <img src="../../../../logo1.png" class="mx-auto d-block" width="200" height="200">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

      <!-- partial -->
      <div class="main-panel">
        <div class="content">

        <div class="col-md-12 grid-margin transparent">
          
        <div class="row">

<?php 
include '../../connect.php';
$sql="SELECT COUNT(*) as summember FROM `members` WHERE `mem_status`='user'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
          <div class="col-lg-6 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">  
                <p>ผู้ใช้ทั้งหมด</p>
                <h3><?php echo $row['summember']?> คน</h3>
              </div>

              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="../members/index.php" class="small-box-footer">
                เพิ่มเติ่ม <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <?php 
include '../../connect.php';
$sql="SELECT COUNT(*) as sumorders FROM `orders`";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

          <div class="col-lg-6 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">                
                <p>การสั่งซื้อทั้งหมด</p>
                <h3><?php echo $row['sumorders']?> รายการ</h3>


              </div>
              <div class="icon">
              <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="../orders/index.php" class="small-box-footer">
                เพิ่มเติ่ม <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->


          <?php 
include '../../connect.php';
$sql="SELECT COUNT(*) as sumproduct FROM `product`";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
          <div class="col-lg-6 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>สินค้าทั้งหมด</p>
                <h3><?php echo $row['sumproduct']?> รายการ</h3>


              </div>
              <div class="icon">
              <i class="fas fa-store"></i>
              </div>
              <a href="../stores/index.php" class="small-box-footer">
                เพิ่มเติ่ม <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <?php 
include '../../connect.php';
$sql="SELECT COUNT(*) as sumpayment FROM `payment`";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
          <div class="col-lg-6 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>การชำระเงินทั้งหมด</p>
                <h3><?php echo $row['sumpayment']?> รายการ</h3>


              </div>
              <div class="icon">
              <i class="fas fa-credit-card"></i>
              </div>
              <a href="../payment/index.php" class="small-box-footer">
                เพิ่มเติ่ม <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
 
  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</body>
</html>
