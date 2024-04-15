<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gallery</title>
     <style>
        *{
            box-sizing: border-box;
        }
         
        body {
            margin: 0;
            width:100%vh;
            background:url('img/gall.jpg') no-repeat;
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
            box-shadow: 10px 10px 5px gray;
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
         
        .col2 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid gray;
            background-color: white;
            box-shadow: 10px 10px 5px gray;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform:rotate(-8deg);
        }
         
        .col2 span {
            font-weight: bold;
            font-size: 25px;
        }
         
        .col2:hover{
            transform:rotate(0deg);

        }
         
        .row:after {
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
        .he a{
           float: left;
           color: black;
           padding: 14px 16px;
           text-align: center;
           font-size: 28px;
           text-decoration: none;

        }
        .he a:hover{
           background-color: pink;
           color: black;
    
        }

    </style>
</head>

<body>
    <div class="he">
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>
    </div>
    <div class="row">
        
        <div class="col1">
            <img src="img/cweek.jpg" width="100%">
            <span> Cite Week </span>
        </div>
        
        <div class="col2">
            <img src="img/hugyaw.jpg" width="100%">
            <span> Foundation Day   </span>
        </div>

        <div class="col1">
            <img src="img/finals.jpg" width="100%">
            <span> P A L P I T A T E </span>
        </div>

       <div class="col2">
            <img src="img/pin.jpg" width="100%">
            <span> Pinning Day  </span>
        </div>

    </div>
</body>
</html>