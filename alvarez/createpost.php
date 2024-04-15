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
            background: url('img/pro.webp') no-repeat;
            background-size: cover;
            margin:0; 
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            list-style: none;
            text-decoration: none;

        }
        .she a{
            font-size:x-large;
            color: black;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;

        }
        
        .she a:hover{
            background-color: pink;
            color: black;
        }

        .she h1{
            font-size:70px;
            text-align: center;
        }

        .she label{
            font-size:30px;
        }
    
        .she input{
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

        .she h3{
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="she">
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>

    <h1> Create Post </h1>
    <form action="process.php" method="POST">

    <h3>
    <label> Title of your post </label> </br>
    <input type="text" name="title" required placeholder="Add Title here..."> </p>

    <label> Select Date </label> </br>
    <input type="date" name="mydate" required> </p>

    <label> Add Description </label> </br>
    <textarea cols="50" rows="10" name="desc"></textarea> </p>

    <input type="hidden" name="posted_by" value ="<?php echo $name; ?>">

    <input type="submit" name="create_post" value="POST">

    </h3>
    </form>



</div>
</body>
</html>