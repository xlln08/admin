<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body{
           background: url('img/index.jpg') no-repeat;
           background-size: cover;

        }

       .lag{
            padding: 80px;
            background-color: transparent;
            opacity: 0.8;
            border-radius: 50px;
            width: 2500px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            color: black;
            text-align:center;

        }

        .lag h1{
            font-size: 40px;
            text-align: center;
            text-transform: uppercase;
            margin: 40px;

        }

        .lag label{
           font-size: 20px;
           margin: 15px 0;

        }

        .lag input{
           font-size: 15px;
           color: black;
           width: 95;
           padding: 13px 10px;
           border: 90;
           border-radius: 10px;
           background-color: transparent;
    
        }

        .lag a{
          font-size: large;
          color: black;

        }

    </style>
</head>
<body>

    <div class="lag">

        <h1> Login Page for Admin</h1>

        <form action="adminprocess.php" method="POST">
          <label> Email </label> </br>
           <input type="email" name="email" required placeholder="Email here.."> </p>

          <label> Password </label> </br>
          <input type="password" name="pass" required placeholder="Password here.."> </p>

          <input type="submit" name="admin_login" value="LOGIN">

        </form>

    </div>
    
</body>
</html>