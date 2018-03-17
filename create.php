<?php 
include 'db.php';

if (isset($_POST['insert'])) {
  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];

  if(empty($email) || empty($fname) || empty($lname) || empty($state) || empty($country) || empty($gender) || empty($phone)){

?>
      <script>alert('field empty');</script>
      <?php
}else{
   $sql=mysqli_query($conn,"INSERT INTO crud_app (id,email,first_name,last_name,state,country,gender,phone)  VALUES ('','$email','$fname','$lname','$state','$country','$gender','$phone')");
    
    ?>
    <script>alert('data created suceessfully');location.href='index.php'</script>
    <?php
  }
}

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
        <form action="create.php" method="post" class="registration-form"><br>
            <div>
          <input type="email" placeholder="Email" name="email" ><br>
          <br>
          <input type="text" placeholder="First Name" name='fname' ><br>
          <br>
          <input type="text" placeholder="Last Name" name="lname" ><br>
            <br>
          <input type="text" placeholder="state" name="state" ><br>
            <br>
          <input type="text" placeholder="country" name="country" ><br>
            <br>
            <select name="gender">
               
            <option>male</option>
            <option>female</option>
            </select><br>
                <br>
          
          <input type="text" placeholder="Phone Number" name="phone" ><br>
            <br>
          <input type="submit" value="create" name="insert" >
          </div>

        </form>

        
    </body>
</html>