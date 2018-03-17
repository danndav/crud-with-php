<?php
include "db.php";

if($_GET['id']){
  $id=$_GET['id'];

$sql="SELECT * FROM crud_app WHERE id={$id}";
$data=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>crud | insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="website" content="display">
  	<meta name="dandave" content="18/072017">
  	<meta name="author" content="dandave">
  	<meta name="keywords" content="0802341217">
    <link rel="stylesheet" href="flexbox.css">
    <link rel="stylesheet" href="font-awesome.css">
    
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
    <body>
        
        <h1>create/add</h1>
        <form action="newupdate.php" method="post" class="registration-form"><br>
            <div>
          <input type="email" placeholder="Email" name="email" value="<?php echo $result['email']?>"><br>
          <br>
          <input type="text" placeholder="First Name" name='fname' value="<?php echo $result['first_name']?>"><br>
          <br>
          <input type="text" placeholder="Last Name" name="lname" value="<?php echo $result['last_name']?>"><br>
            <br>
          <input type="text" placeholder="state" name="state" value="<?php echo $result['state']?>"><br>
            <br>
          <input type="text" placeholder="country" name="country" value="<?php echo $result['country']?>"><br>
            <br>
            <select name="gender" value="<?php echo $result['gender']?>">
               
            <option>male</option>
            <option>female</option>
            </select><br>
                <br>
          
          <input type="text" placeholder="Phone Number" name="phone"  value="<?php echo $result['phone']?>"><br>
            <br>
            <input type="hidden" name="id"  value="<?php echo $result['id']?>"><br>
            <br>
          <input type="submit" value="update" name="insert" >
          </div>

        </form>

        
    </body>
</html>


<?php
}
?>