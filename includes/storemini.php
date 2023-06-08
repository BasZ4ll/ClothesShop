<style>
.carousel-item {
      height: 50vh;
    }
.card {
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 width: 100%;
 height: 100%;
 
}
.footer-cta {
  box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
}
.price {
  color: #263238;
  font-size: 24px;
}

.card-title {
color:#263238
}

.badge {
  background-color: #4CAF50
}

.sale {
  color: #E53935
}

.sale-badge {
  background-color: #E53935
}

.btn {
    background-color: #607D8B; 
    color: black; 
    border: 2px solid #607D8B;
}

.btn:hover {

    background-color: #fff;
    color: black;
}

.imgm {
    max-width: 100%;
    width: 300px;
  }


/* Styles for the modal */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* Center the modal vertically and horizontally */
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 500px;
}
/* Close button style */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<?php 
include_once('./php/connect.php');
$sql="SELECT * FROM product ORDER BY product_id DESC LIMIT 4";
$res=mysqli_query($conn,$sql);
?>
<!-- Show Shop -->
<div class="container"><br>
    <h3><center>สินค้าใหม่</center></h3><br>
  <div id="result">
  <div class="row">

<?php while ($row = mysqli_fetch_array($res)) { ?>
<?php
$a = $row['product_price'];  //ราคาสินค้า 
$b = $row['product_discount'];   //ส่วนลด 5%

$discount = $a*$b/100;  //คำนวณส่วนลด
$price = $a-$discount;  //ราคาสินค้าหลังหักส่วนลด
?>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card" data-toggle="modal" data-target="#myModal<?php echo $row["product_id"]; ?>">
      <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        <img src="assets/image/store/<?php echo $row["product_image"] ?>" alt="Card image cap"
          class="w-100" />

          <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-danger ms-2">ใหม่</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>

        <a href="#!">
          <div class="mask">
            <div class="d-flex justify-content-start align-items-end h-100">
            <?php if ($row['product_discount'] > 0) { ?>
              <h5><span class="badge ms-2">ลด <?php echo $row['product_discount']; ?> %</span></h5>
              <?php } else { ?>
                <br>
              <?php } ?>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </div>
        </a>
      </div>
      <div class="card-body">
        <a href="" class="text-reset">
          <h5 class="card-title mb-2"><?php echo $row["product_name"]; ?></h5>
        </a>
        <a href="" class="text-reset ">
          <p><?php echo $row["product_tag"]; ?></p>
        </a>
        <?php if ($row['product_discount'] > 0) { ?>
        <a class="text-reset"><s><?php echo number_format($row['product_price'], 2) ?> บาท</s></a>
        <h6 class="mb-3 price"><?php echo number_format($price, 2) ?> บาท</h6>
        <?php } else { ?>
          <br><br>
        <h6 class="mb-3 price"><?php echo number_format($row['product_price'], 2) ?> บาท</h6>
        <?php } ?>
      </div>
        <form action="includes/addcart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                <button type="submit" class="btn btn-sm btn-block" style="padding-top: 15px;padding-bottom: 15px;" name="addcart"><i class="fas fa-shopping-cart fa-1x"></i> Add To Cart </button>
        </form>
    </div>
  </div>
  <!-- Modal -->

      <div class="modal" id="myModal<?php echo $row["product_id"]; ?>">
        <!-- Modal content -->
        <div class="modal-content">

            <div class="gallery__hero">           
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <img class="imgm" src="assets/image/store/<?php echo $row["product_image"] ?>">
            </div>
          <h3><?php echo $row["product_name"]; ?></h3>
          <p><?php echo $row["product_detail"]; ?></p>
          <h2><?php 
                        echo " ";
                        echo number_format($row['product_price'], 2);
                        echo " ";
                        echo $baht; ?></h2>
                    <br>
        
        </div>
      </div>
      <!-- Modal -->
<?php } ?>
</div>
</div>
</div>

<!-- Show Shop -->

<!--- /container--->
