<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
        <link rel="icon" type="image/png" href="favicoN.png">

</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hi, welcome to our homepage!, <br>
    <style>
        body {
            background-color:rgb(64, 87, 109);
        }
    </style>
       As we all know great things take time—this page is being built for something amazing! <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['Name'];
        }
       }
       ?>
       
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>