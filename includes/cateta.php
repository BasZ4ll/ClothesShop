<?php 
$sql=$conn->query('SELECT DISTINCT product_tag FROM product WHERE product_tag = product_tag');
?>

<nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2" style="background-color: #607D8B">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="stores.php">ประเภทสินค้า:</a>

    <!-- Toggle button -->
    <button 
       class="navbar-toggler" 
       type="button" 
       data-mdb-toggle="collapse" 
       data-mdb-target="#navbarSupportedContent2" 
       aria-controls="navbarSupportedContent2" 
       aria-expanded="false" 
       aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
      <?php while($show=$sql->fetch_array()){?>
        <li class="nav-item">
              <a class="nav-link text-white" href="?product_tag=<?php echo $show['product_tag'] ?>"><?php echo $show['product_tag'] ?></a>
            </li>      
            <?php } ?>
      </ul>

      <!-- Search -->
      <form class="w-auto py-1" style="max-width: 12rem">
        <input type="search" class="form-control rounded-0" id="search" placeholder="Search" aria-label="Search">
      </form>

    </div>
  </div>
  <!-- Container wrapper -->
</nav>