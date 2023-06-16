<?php error_reporting(~E_NOTICE);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> <!--เรียกbootstrap -->
    <link rel="stylesheet" href="node_modules/font-awesome5/css/fontawesome-all.css"> <!--เรียกfontawesome -->
    <link rel="stylesheet" href="node_modules/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <title>D-Day Shop</title>
</head>
<style>
    body{
        background-color:#a9a8a863;
        
    }
    .container{
        background-color: white;
        color:black;
    }
    
    .card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
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
.btn {
    background-color: #607D8B; 
    color: black; 
    border: 2px solid #607D8B;
}

.btn:hover {

    background-color: #fff;
    color: black;
}
</style>
<?php 
require_once 'config.php';
include('includes/navbar.php')?><br><br><br>

<body>
    <!-- The Modal -->
    <br><br> <br>
    <div class="container card-5">
      <br>
        <h1><center>ติดต่อเรา</center></h1><br>
        <div class="col-md-12 text-center">            
            <img src="logo.png" width="200" height="200" alt="logo"><br><br>
            <Center><h2>D-Day Shop</h2></Center>
            <p>เว็บไซต์ขายเสื้อผ้าออนไลน์</p>

            <i class="fa fa-phone" aria-hidden="true"></i>  เบอร์โทรศัพท์ :  02-123-4567<br>
            <i class="fa fa-envelope" aria-hidden="true"></i>  อีเมล : d-day@gmail.com<br>
            <i class="fa fa-map-marker" aria-hidden="true"></i>  16/5 ม.12 ต.ร่อนพิบูลย์ อ.ร่อนพิบูลย์ จ.นครศรีธรรมราช<br>
            <br>

            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://line.me/R/ti/p/%40ddayshop"><i class="fab fa-line fa-2x"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter-square fa-2x"></i></a>
            </p>
            <br><br><br><br>
            
        </div>

    </div>
    <br> <br><br><br>
 <?php 
 include('includes/footer.php'); ?>
<script src="node_modules/jquery/dist/jquery.min.js"></script><!--เรียกjquery -->
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script><!--เรียกpopper -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script><!--เรียกbootstrap.min.js -->
<script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script><!--เรียกjquery.validate -->
</body>
</html>
