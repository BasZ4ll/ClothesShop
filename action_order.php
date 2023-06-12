<?php error_reporting(~E_ALL);?>
 
<?php require_once('php/connect.php');
    include('includes/function.php')?>
<?php 
// echo '<pre>',print_r($_REQUEST),'</pre>';
// echo '<pre>',print_r($_SESSION),'</pre>';
// echo '<pre>',print_r($_SESSION['summy']),'</pre>';
$mem_id =$_SESSION['mem_id'];
$datetime=date("Y-m-d H:i:s");
    if(isset($_REQUEST['submit'])){
        
            $order= date('dmyHis');
            $mem_address=$_REQUEST['mem_address'];
            $shipping= $_REQUEST['shipping'];
            $summy= $_SESSION['summy'];
        
            $sql= "INSERT INTO `orders`(`order_id`, `order_number`, `mem_id`, `address`, `order_shipping`, `price_total`, `order_status`, `order_date`) VALUES ('', '$order', '$mem_id', '$mem_address', '$shipping', '$summy', '0', '$datetime')";
            $res=mysqli_query($conn,$sql);

            if($res){
            //delete cart
            $conn->query("DELETE FROM cart WHERE mem_id = '$mem_id'");
            Alert('ทำการสั่งซื้อเรียบร้อย \nกรุณาชำระเงิน','orderhistory.php');

            }else{
                echo mysqli_error($conn);
         }
        
        }
        
?>




