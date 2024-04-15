<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Project</title>
    <style>
     *  {
          box-sizing: border-box;
        }
         
        body {
          margin: 0;
          width:100%vh;
          background:url('img/proj.jpg') no-repeat;
          background-size:cover;

        }

        .row {
          padding:50px;

        }

        .col1{
          width:25%;
          padding: 10px 20px 10px;
          border: 5px solid black;
          background-color: white;
          box-shadow: 10px 10px 5px pink;
          float: left;
          -ms-transform: rotate(7deg);
          -webkit-transform: rotate(7deg);
          transform:rotate(7deg);

        }
         
         
        .col1 span{
           font-weight: bold;
           font-size: 25px;

        }
         
        .col1:hover{
            transform: rotate(0deg);

        }
         
         
        .col2{
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid gray;
            background-color: white;
            box-shadow: 10px 10px 5px pink;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform:rotate(-8deg);

        }
         
        .col2 span{
            font-weight: bold;
            font-size: 25px;

        }
         
        .col2:hover{
            transform:rotate(0deg);

        }
         
        .row:after{
            content: " ";
            display: table;
            clear: both;

        }
         
        @media screen and (max-width:600px) {
            .col1 {
                width: 100%;
            }
            .col2 {
                width: 100%;
            }
        }

        .him a{
           float: left;
           color: black;
           padding: 14px 16px;
           text-align: center;
           font-size: 28px;
           text-decoration: none;

        }

        .him a:hover{
            background-color: pink;
            color: black;

        }

    </style>
</head>

<body>
    <div class="him">
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>
    </div>
    
        
        <div class="col1">
            <img src="img/land.png" width="100%">
            <span> UI Scholarship Connect </span>
            <span> Landing Page </span>
            <p class="desc1">The landing page of our Capstone Project it features the  ABOUT, TEAM, ACCOUNT and Timein/Timeout.</p>
        </div>
        
        <div class="col2">
            <img src="img/admin.png" width="100%">
            <span> Admin Dashboard </span>
            <p class="desc2"> Admin dashboard, where it contains the list of Hk students and teachers.
            Also the record of their duty hours and rendered hours.</p>
        </div>

        <div class="col1">
            <img src="img/teacher.png" width="100%">
            <span> Teacher Dashboard</span>
            <p class="desc1">Teacher dashboard it contains hk student/s where they will do duty, 
            when they choose there if they want to be lab assistant or assistant facilitator. 
            Their time records and rendered hours can also be found there.</p>
        </div>

       <div class="col2">
            <img src="img/student.png" width="100%">
            <span> Student Dashboard </span>
            <p class="desc2">Student dashboard contains their DTR where they can see their duty consumption and 
            when they finish it they will receive a certificate which is proof that they have completed the duty hours given to them.</p>
        </div>

    </div>

    
</body>
</html>