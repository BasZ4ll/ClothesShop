<?php include_once('../authen.php') ?>
<?php 
include_once('../../connect.php');
  $sql="select * from orders order by order_id desc";
  $res=mysqli_query($conn,$sql);
  $i=1;
?>
<style>
.successa {
 
 color: #fff;

 background-color: #28a745;
 border-radius: 35px;

 padding:5px;
}
.infos {
 
 color: #fff;
 background-color: #17a2b8;
 border-radius: 35px;
 border: 1px solid rgba(23, 162, 184, 0.75); 
 padding:5px;

}
</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Orders Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="stylesheet" href="../../../../node_modules/responsive/responsive.bootstrap4.min.js">
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
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
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css"><!-- responsive-->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลการสั่งซื้อ</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">รายการการสั่งซื้อ</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped w-100 ">
            <thead>
            <tr>
              <th>#</th>
              <th>MEM ID</th>
              <th>หมายเลขการสั่งซื้อ</th>
              <th>ที่อยู่</th>
              <th>ค่าจัดส่ง</th>
              <th>ราคาสินค้า</th>
              <th>ราคารวม</th>
              <th>สถานะ</th>
              <th>วันที่</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($res)) { ?>
              <tr>
              <td><?php echo $i++; ?></td>
                <td><?php echo $row['mem_id']; ?></td>
                <td><?php echo $row['order_number']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['order_shipping']; ?></td>
                <td><?php echo $row['price_total']; ?></td>
                <?php
                $sum=$row['price_total']+$row['order_shipping'];
                ?>
                <td><?php echo $sum; ?></td>
                <?php 
                if($row['order_status']==0){
                  $status="ตรวจสอบ";
                }else{
                  $status="ชำระเรียบร้อย";
                }
                ?>
                <td><?php  echo $status ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td>
                  <a href="delete.php?order_id=<?php echo $row['order_id']?>" onClick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่');" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> ลบ</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- DataTables -->
<script src="../../../../node_modules/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/responsive/dataTables.responsive.min.js"></script> <!-- responsive-->


<script>
  function deleteItem (mem_id) { 
    if( confirm('คุณต้องการลบข้อมูลนี้หรือไม่') == true){
      window.location=`delete.php?mem_id=${mem_id}`;
      // window.location='delete.php?id='+id;
    }else{

    }
  };

</script>

</body>
</html>
