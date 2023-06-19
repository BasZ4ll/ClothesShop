<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>D-DAY SHOP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
.w-50{
  width:30px;
}
</style>
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
            <h1>จัดการข้อมูลสมาชิก</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php 
  include_once('../../connect.php');
?>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">เพิ่มข้อมูล</h3>
        </div>
   
        <form role="form" action="insert.php" method="post">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="mem_username">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control" id="mem_username" name="mem_username" value="" >
              </div>
              <div class="form-group col-md-4">
                  <label for="mem_password">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="mem_password" name="mem_password" value="" >
              </div>
              <div class="form-group col-md-4">
                  <label for="mem_fname">ชื่อ</label>
                  <input type="text" class="form-control" id="mem_fname" name="mem_fname" value="">
              </div>
              <div class="form-group col-md-4">
                  <label for="mem_lname">นามสกุล</label>
                  <input type="text" class="form-control" id="mem_lname" name="mem_lname" value="">
              </div>
              <div class="form-group col-md-4">
                  <label for="mem_email">อีเมล</label>
                  <input type="email" class="form-control" id="mem_email" name="mem_email"  value="">
              </div>

              <div class="form-group col-md-4">
                  <label for="mem_tel">เบอร์โทร</label>
                  <input type="text" class="form-control" id="mem_tel"  name="mem_tel" value="">
              </div>
              <div class="form-group col-md-4">
                  <label for="mem_status">สถานะ</label>
                  <select name="mem_status" id="mem_status" class="form-control">

                  <option value="user" >ลูกค้า</option>
                  <option value="employee">พนักงาน</option>
                  <option value="admin">แอดมิน</option>
                  </select>
                  <?php    
                  ?>
              </div>
            </div>

            <div class="form-group">
                <label for="mem_address">ที่อยู่</label>
                <textarea class="form-control" id="mem_address" name="mem_address"  rows="5"></textarea>
            </div>

          </div>
          <div class="card-footer">
          <a href="index.php" class="btn btn-warning float-left">ย้อนกลับ</a>
          <input type="submit" name="submit" class="btn btn-primary float-right" value="บันทึกข้อมูล">
          </div>
        </form>
      </div>    
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

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
  $('.custom-file-input').on('change', function(){
    var fileName = $(this).val().split('\\').pop()
    $(this).siblings('.custom-file-label').html(fileName)
    if (this.files[0]) {
        var reader = new FileReader()
        $('.figure').addClass('d-block')
        reader.onload = function (e) {
            $('#imgUpload').attr('src', e.target.result)
        }
        reader.readAsDataURL(this.files[0])
    }
  })
</script>

</body>
</html>
