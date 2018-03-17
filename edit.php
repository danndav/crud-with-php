 
<?php 

include 'db.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id=$_GET['id'];
}

$sql=mysqli_query($conn,"SELECT * FROM crud_app WHERE id='$id'");
$result=mysqli_fetch_array($sql);




if (isset($_POST['update'])) {

  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];

   $sql=mysqli_query($conn,"UPDATE crud_app SET email='$email',first_name='$fname',last_name='$lname',state='$state',country='$country',gender='$gender',phone='$phone' WHERE id=$id");


  #if(empty($email) || empty($fname) || empty($lname) || empty($state) || empty($country) || empty($gender) || empty($phone)){
if ($sql) {
  # code...

?>
      <script>alert('field empty');</script>
      <?php
}else{
 #  $sql=mysqli_query($conn,"UPDATE crud_app SET email='$email',first_name='$fname',last_name='$lname',state='$state',country='$country',gender='$gender',phone='$phone' WHERE id=$id");
    
    ?>
    <script>alert('data created suceessfully');</script>
    <?php

  }
}


?>
<!--<?php
/**
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$sql = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
while($result = mysqli_fetch_array($sql))
{
 $email=$result['email'];
  $fname=$result['fname'];
  $lname=$result['lname'];
  $state=$result['state'];
  $country=$result['country'];
  $gender=$result['gender'];
  $phone=$result['phone'];
  

}
**/
?>
-->
<html>
<head>  
  <title>Edit Data</title>
</head>

<body>
  <div class="container">
  <a href="index.php">Home</a>
  <br/><br/>
  <form action="create.php" method="post" class="registration-form"><br>
            <div >
          <input type="email" placeholder="Email" name="email" value=<?php echo $result['email'];?>> <br>
          <br.
          <input type="text" placeholder="First Name" name='fname' value=<?php echo $result['first_name'];?> ><br>
          <br>
          <input type="text" placeholder="Last Name" name="lname" value=<?php echo $result['last_name'];?>> <br>
            <br>
          <input type="text" placeholder="state" name="state" value=<?php echo $result['state'];?>><br>
            <br>
          <input type="text" placeholder="country" name="country" value=<?php echo $result['country'];?>><br>
            <br>
            <select name="gender" value=<?php echo $result['gender'];?>>
               
            <option>male</option>
            <option>female</option>
            </select><br>
                <br>
          
          <input type="text" placeholder="Phone Number" name="phone" value=<?php echo $result['phone'];?>><br>
            <br>
          <input type="submit" value="update" name="update" >
          </div>

        </form>
    </div>

    </body>
</html>