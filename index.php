<?php
include 'db.php';

$sql=mysqli_query($conn, "SELECT * FROM crud_app ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NetProg | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="website" content="display">
  	<meta name="dandave" content="18/072017">
  	<meta name="author" content="dandave">
  	<meta name="keywords" content="0802341217">
    <link rel="stylesheet" href="flexbox.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="index.css">
  </head>
    <body>
        
        
        <h1><a href="create.php">create/add</a></h1>
        <table width='80%' border=0>

  <tr bgcolor='red'>
    
    <td>EMAIL</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>STATE</td>
    <td>COUNTRY</td>
    <td>GENDER</td>
    <td>PHONE</td>
    <td>UPDATE</td>
    
  </tr>
  <?php 
  
  while($result = mysqli_fetch_array($sql)) {     
    echo "<tr>";
    echo "<td>".$result['email']."</td>";
    echo "<td>".$result['first_name']."</td>";
    echo "<td>".$result['last_name']."</td>";
    echo "<td>".$result['state']."</td>";
    echo "<td>".$result['country']."</td>";
    echo "<td>".$result['gender']."</td>";
    echo "<td>".$result['phone']."</td>"  ;
    echo "<td><a href=\"newedit.php?id=$result[id]\">Edit</a> | <a href=\"delete.php?id=$result[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  }
  ?>
  </table>

