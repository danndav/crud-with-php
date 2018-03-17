<?php
include 'db.php';

if ($_POST) {
  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];

  $id=$_POST['id'];
  $sql="UPDATE crud_app SET email='$email',first_name='$fname',last_name='$lname',state='$state',country='$country',gender='$gender',phone='$phone' WHERE id='$id'" or die(mysqli_error());

  if (mysqli_query($conn,$sql) ===true) {
    echo "update successful".header("Location: index.php");


  }else{
    echo "update not succesful";
}
}


?>