<?php
include "conn.php";
session_start();

$e=$_SESSION['email'];

$getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
while($row=mysqli_fetch_object($getname)){

    $id= $row -> id;
    $name= $row -> name;
    $email= $row -> email;
    $pass= $row -> password;
    $pn= $row -> phone_number;
    

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
            background: url('img/pro.webp') no-repeat;
            background-size: cover;
            margin:0; 
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            list-style: none;
            text-decoration: none;

        }

        .him a{
            font-size:x-large;
            color: black;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;

        }
        
        .him a:hover{
            background-color: pink;
            color: black;

        }

        .him h1{
            font-size:80px;
        }

        .him label{
            font-size:30px;
        }

        .him input{
            background-color: transparent;
            font-size: 16px;
            width:200px;
            padding: 13px 10px;
            border: 0;
            border-radius: 5px;

        }
        
        .updatebox input{
            font-size: 16px;
            width:100px;
            padding: 13px 10px;
            border: 0;
            border-radius: 5px;
        }

   </style>

</head>
<body>

    <div class="him">

    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST</a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>

     <center>
        <h1> UPDATE PROFILE </h1>

        <form action="process.php?id=<?php echo $id;?>" method="POST">

        <label> Name </label> </br>
        <input type="text" name="up_name" value="<?php echo $name;?>" required> </p>

        <label> Email </label> </br>
        <input type="email" name="up_email" value="<?php echo $email;?>" required> </p>

        <label> Password </label> </br>
        <input type="password" name="up_pass" value="<?php echo $pass;?>" required> </p>

        <label> Phone Number </label> </br>
        <input type="text" name="up_pn" value="<?php echo $pn;?>" required> </p>

        <input type="submit" value="UPDATE" name="update_account">
     </center>


    </div>


</body>
</html>