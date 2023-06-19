<?php 
    include_once('../../connect.php');
    if(isset($_POST['submit'])){
        //  echo '<pre>',print_r($_POST),'</pre>';

        $mem_username = $_POST['mem_username'];
        $mem_password = $_POST['mem_password'];
        $mem_fname = $_POST['mem_fname'];
        $mem_lname = $_POST['mem_lname'];
        $mem_email = $_POST['mem_email'];
        $mem_tel = $_POST['mem_tel'];
        $mem_status = $_POST['mem_status'];
        $mem_address = $_POST['mem_address'];
        $mem_create_at = date('Y-m-d');
        if(isset($_POST['submit'])){ 

                    $check_sql="SELECT * FROM members WHERE mem_username= '".$mem_username."' ";
                    $check_username= $conn->query($check_sql) or die($conn->error);
                
                    if(!$check_username->num_rows){
                        $hash_password= password_hash($mem_password, PASSWORD_DEFAULT);
                        $sql="INSERT INTO `members`VALUES ('','$mem_fname','$mem_lname','$mem_email','$mem_tel','$mem_address','$mem_username','$hash_password','$mem_create_at','$mem_status')";
                        $res=mysqli_query($conn,$sql);
                            echo "<script> alert('สำเร็จ');</script>";
                            header('Refresh:0; url=index.php');
                    }else{
                            echo "<script> alert('ชื่อผู้ใช้นี้ ถูกใช้ไปแล้ว! โปรดกรอกข้อมูลใหม่อีกครั้ง');</script>";
                            header('Refresh:0; url=index.php');
                    }

            } else{
                header('Refresh:0; url=index.php');
        }

    }else{
        header('Refresh:0; url=index.php');
    }
   
?>