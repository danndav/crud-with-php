<?php 
include 'db.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	echo $id=$_GET['id'];
}
$sql=mysqli_query($conn,"DELETE FROM crud_app WHERE id='$id'") or die(mysql_error());
if ($sql) {
	
?>
      <script>alert('deleted');location.href='index.php'</script>
      <?php
}else{
 
    ?>
    <script>alert('error in deleting data');</script>
    <?php
}

