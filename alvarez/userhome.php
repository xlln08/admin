<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $name= $row -> name;

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
    <style>
        body{
            background: url('img/hm.png') no-repeat;
            margin:0; 
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            list-style: none;
            text-decoration: none;
            background-size: cover;

        }

        .her a{
            color: black;
            padding: 14px 16px;
            text-align: center;
            font-size: 28px;
            text-decoration: none;

        }

        .her a:hover{
            background-color: pink;
            color: black;

        }

        .her h1{
            text-align:center;
            font-size:50px;
            margin:10px;

        }

        .her h2{
            text-align:center;
            font-size:25px;

        }

        .her h3{
            text-align:center;
            font-size:25px;
        }

    </style>
</head>
<body>

    <div class="her">
    <br> 
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>

    <hr> </hr>

    <h1> This is your Post </h1>

    <?php 
   
       $getpost=mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name'");
       while($row1=mysqli_fetch_array( $getpost)){

          ?>

          <h2>Title: <?php echo $row1['title']; ?> </h2>
          <h3>Date: <?php echo $row1['mydate']; ?> </h3>
          <h3>Description: <?php echo $row1['description']; ?> </h3>

          <hr> </hr>


        <?php
       }
       
    ?>


    </div>
    
</body>
</html>