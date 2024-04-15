<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
         body{
            background: url('img/page.jpg') no-repeat;
            background-size: cover;

         }

         .pot{
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

         .pot h1{
           font-size: 40px;
           position: relative;;
           text-transform: uppercase;
           margin: 40px;
         }

         .pot label{
           font-size: 20px;
           margin: 15px 0;
            
         }

         .pot input{
           font-size: 15px;
           color: black;
           width: 80;
           padding: 13px 10px;
           border: 80;
           border-radius: 10px;
           background-color: transparent;
    
         }

         .pot a{
           font-size: large;
           color: black;
           text-align: center;

         }

 </style>
</head>
<body>

   <div class="pot">
      
    <h1>Welcome to My Login Page !</h1>
    <form action="process.php" method="POST">

      <label>Email</label></br>
      <input type="email" name="login_email" required placeholder="Email">
      </br></br>

      <label>Password</label></br>
      <input type="password" name="login_pass" required placeholder="Password">
      </br></br>

      <input type="submit" name="login" value="LOGIN">
     
      <a href="reg.php">Create an ACCOUNT</a>

    </form>

    </div>

    
</body>
</html>