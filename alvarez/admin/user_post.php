<?php
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname= mysqli_query($conn, "SELECT * FROM admin
    WHERE  email='$email'");

    while($row=mysqli_fetch_object($getadminname)){
        $admin_name= $row -> admin_name;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $admin_name; ?></title>
    <style>
        body{
            background: url('img/user.avif') no-repeat;
            margin:0; 
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            list-style: none;
            text-decoration: none;
            background-size: cover;

        }

        .four a{
            color: black;
            padding: 14px 16px;
            text-align: center;
            font-size: 28px;
            text-decoration: none;

        }

        .four a:hover{
            background-color: #ffe39f;
            color: black;

        }

        .four h1{
            text-align:center;
            font-size:50px;
            margin:10px;

        }
        .four h2{

            text-align:center;
            font-size:25px;

        }

        .four h3{
            text-align:center;
            font-size:25px;

        }

    </style>

</head>
<body>

    <div class="four">
    <h1>Welcome admin <?php  echo $admin_name;?></h1>
    <hr> </hr>

    <a href="adminhome.php"> HOME </a> 
    <a href="user_post.php"> USER'S POST </a> 
    <a href="index.php"> LOGOUT </a> 

   <h1> ALL POST BY THE USERS</h1>
   <hr> </hr>

   <?php 

    $getuserpost=mysqli_query($conn, "SELECT * FROM post");
    while($row1=mysqli_fetch_array($getuserpost)){
        ?>
           <h2> Title: <?php echo $row1['title'];?></h2>
           <h2> Date: <?php echo $row1['mydate'];?></h2>
           <h2> Description: <?php echo $row1['description'];?></h2>
           <h2> Posted By: <?php echo $row1['posted_by'];?></h2>
           <hr> </hr>
        <?php

    }
?>  

    </div>
    
</body>
</html>