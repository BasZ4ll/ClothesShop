<style>
   .card-4 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.imgsxs{
  max-width:80%;
  width:100%;
}

</style>
<?php require_once('php/connect.php'); ?>
<?php 
$sql=$conn->query("Select * from news");
while($show=$sql->fetch_assoc()){
?>
<center>
<img src="assets/image/news/<?php echo $show['new_image']?>" class="border-bottom border-primary card-4 imgsxs"></center>
<?php }?>
</div>