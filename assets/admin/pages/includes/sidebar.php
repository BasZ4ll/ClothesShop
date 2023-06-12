<style>
.user-panel img{
  width: 6.4rem;
  height: auto;
}
.img-thumbnails{
    box-shadow: 0 1px 2px rgba(0,0,0,.075);
    max-width: 100%;
}
</style>

<?php 
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$name = $link_array[count($link_array) - 2];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
</nav>
<?php 
include('../../connect.php');
$sql9="select * from members where mem_id = '".$_SESSION['mem_id']."'";
$res9=mysqli_query($conn,$sql9);
$row9=mysqli_fetch_array($res9);
?>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block">Admin Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <center>
          <a href="#" class="d-block h5"><?php echo $_SESSION['mem_fname']?>  <?php echo $_SESSION['mem_lname']?></a>
          </center>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../members" class="nav-link <?php echo $name == 'members' ? 'active': '' ?>">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>จัดการผู้ใช้</p>
            </a>
            <li class="nav-item">
            <a href="../stores" class="nav-link <?php echo $name == 'stores' ? 'active': '' ?>">
              <i class="fas fa-store nav-icon"></i>
              <p>สินค้า</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../news" class="nav-link <?php echo $name == 'news' ? 'active': '' ?>">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>News</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../payment" class="nav-link <?php echo $name == 'payment' ? 'active': '' ?>">
            <i class="fas fa-credit-card nav-icon"></i>
              <p>ชำระเงิน</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../orders" class="nav-link <?php echo $name == 'orders' ? 'active': '' ?>">
              <i class="fas fa-credit-card nav-icon"></i>
              <p>การสั่งซื้อ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../product_tag" class="nav-link <?php echo $name == 'product_tag' ? 'active': '' ?>">
              <i class="fas fa-credit-card nav-icon"></i>
              <p>ประเภทสินค้า</p>
            </a>
          </li>

          <li class="nav-header dropdown">Account Settings</li>
          <li class="nav-item">
            <a href="../dashboard/logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>