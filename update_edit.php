
<?php
include 'db.php';

if (isset($_Post['update'])) {

   $sql=mysqli_query($conn,"UPDATE crud_app SET email='$email',first_name='$fname',last_name='$lname',state='$state',country='$country',gender='$gender',phone='$phone' WHERE id='$id'") or die(mysqli_error());
echo $id;
    if ($sql) {

echo "update successful" .header('location:index.php');

  }else{
    echo "error in updating" .header('location:index.php');
  }
}

$id='';
$email='';
$fname='';
$lname='';
$state='';
$country='';
$gender='';
$phone='';

if (isset($_GET['id'])) {

  $sql="SELECT * FROM crud_app WHERE id=".$_GET['id'] ;
  $res=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($res);
$id=$result['id'];
$email=$result['email'];
$fname=$result['first_name'];
$lname=$result['last_name'];
$state=$result['state'];
$country=$result['country'];
$gender=$result['gender'];
$phone=$result['phone'];

  
}


?>

<html>
<head>  
  <title>Edit Data</title>
</head>

<body>
  <div class="container">
  <a href="index.php">Home</a>
  <br/><br/>
<form action="update.php" method="post" class="registration-form"><br>
            <div >
          <input type="email" placeholder="Email" name="email" value=<?php echo $email;?>> <br>
          <br>
          <input type="text" placeholder="First Name" name='fname' value=<?php echo $fname;?> ><br>
          <br>
          <input type="text" placeholder="Last Name" name="lname" value=<?php echo $lname;?>> <br>
            <br>
          <input type="text" placeholder="state" name="state" value=<?php echo $state;?>><br>
            <br>
          <input type="text" placeholder="country" name="country" value=<?php echo $country;?>><br>
            <br>
            <select name="gender" value=<?php echo $gender;?>>
               
            <option>male</option>
            <option>female</option>
            </select><br>
                <br>
          
          <input type="text" placeholder="Phone Number" name="phone" value=<?php echo $phone;?>><br>
            <br>
          <input type="submit" value="update" name="update" >
          </div>

        </form>
    </div>

    </body>
</html>
