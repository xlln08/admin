<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>

        body{
            background: url('img/regist.webp') no-repeat;
            background-size: cover;

        }

        .base{
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

        .base h1{
           font-size: 40px;
           text-align: center;
           text-transform: uppercase;
           margin: 40px;
        }

        .base label{
           font-size: 20px;
           margin: 15px 0;
            
        }

        .base input{
           font-size:20px;
           color: black;
           width: 80;
           padding: 13px 10px;
           border: 80;
           border-radius: 10px;
           background-color: transparent;
    
        }

        .base a{
           font-size: large;
           color: black;
           text-align: center;

        }

 </style>
</head>
<body>
    <div class="base">
          <h1>Create an ACCOUNT</h1>

          <form action="process.php" method="POST">
                  
                <label>Name </label> </br>
                <input type="text" name="nm" required></p>

                <label>Email </label> </br>
                <input type="email" name="email" required></p>

                <label>Password </label> </br>
                <input type="password" name="pass" required></p>

                <label>Phone Number </label> </br>
                <input type="text" name="pn" required></p>
                <div class="best">
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="reg_button" value="CREATE">
                &nbsp;
                <a href="index.php">Click to Login</a>
          </form>
    </div>

</body>
</html>