<?php
include 'db.php';

if (isset($_POST['update'])){

  $id = $_POST['id'];
  echo "$id";
  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];

 $sql=mysqli_query($conn,"UPDATE crud_app SET email='$email',first_name='$fname',last_name='$lname',state='$state',country='$country',gender='$gender',phone='$phone' WHERE id='$id'") or die(mysqli_error());
header("Location: index.php");

  
  if ($sql) {
    echo "update successful".header("Location: index.php");


  }else{
    echo "update not succesful";
  }
}
?>
<?php
//getting id from url
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id=$_GET['id'];
}

$id = $_GET["id"];
//selecting data associated with this particular id
$sql=mysqli_query($conn,"SELECT * FROM crud_app WHERE id='$id'");
$result=mysqli_fetch_array($sql)

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
          <input type="email" placeholder="Email" name="email" value=<?php echo $result['email'];?>> <br>
          <br>
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
