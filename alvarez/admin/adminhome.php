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
    <title><?php  echo $admin_name;?></title>
    <style>
        body{
           background: url('img/home.webp') no-repeat;
           margin:0; 
           padding: 0;
           box-sizing: border-box;
           scroll-behavior: smooth;
           list-style: none;
           text-decoration: none;
           background-size: cover;
    }

    .tree a{
           float: left;
           color: black;
           padding: 14px 16px;
           text-align: center;
           font-size: 28px;
           text-decoration: none;

    }

    .tree a:hover{
            background-color: #ffdbac;
            color: black;

    }

    .tree h1{
          text-align:center;
          font-size:50px;
          margin:10px;

    }

    .tree h2{
          text-align:center;
          font-size:25px;

    }

    .tree h3{
          text-align:center;
          font-size:25px;

    }   
    
    </style>
</head>
<body>
    <div class="tree">
    <h1> Welcome admin <?php  echo $admin_name;?></h1>

    <hr> </hr>

    <a href="adminhome.php"> HOME </a>
    <a href="user_post.php"> USER'S POST </a> 
    <a href="index.php"> LOGOUT </a> 
    
    </div>

    
</body>
</html>