<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Management System</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="icon" href="images/train.png" type="image/icon type">
    <style>

        ol li {
            list-style-type: none;
            counter-increment: item;
        }

        ol li:before {
            content: counter(item);
            margin-right: 5px;
            font-size: 80%;
            background-color: #f9dd94;
            color: #7eb4e2;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 3px;

        }
        li{
            margin-top: 15px;
        }
        div{
            border: #f9dd94 solid 2px;
            border-radius: 10px;
            box-shadow: #f9dd94 10px 10px 5px;
            width: 600px;
        }
        body{
            font-family: Nunito;
            font-size: 30px;
        }
        a{
            text-decoration: None;
            color: #8c7346;
        }
        a:visited
        {

        }
        .content{
            position: fixed;
            margin: auto;
            left: 25%;
            top:30%;
        }
        img
        {
            margin: 50px;
        }
        .bg-image {
            /* The image used */
            background-image: url("images/trainimg.jpg");

            /* Add the blur effect */
            position: fixed;
            top:0;
            z-index: -2;
            margin: 0px;

            /* Full height */
            /*filter: blur(2px);
            -webkit-filter: blur(2px);*/
            width: 100%;
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            font-family: Nunito;
            color: #f9cc1b;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="bg-image"></div>
<h1>Customer Operations</h1>
<div class="content" style="background-color: #ffffff">
    <img src="images/railway-station.png" width="150px" style="float: left">
    <ol class="list">
        <li class="list-item one"><a href="viewapp.php">View Reservation</a></li>
        <li class="list-item two"><a href="puppapp.php">Update Reservation</a></li>
        <li class="list-item three"><a href="pdelapp.php">Delete Reservation</a></li>
        <li class="list-item four"><a href="index.php">Logout</a></li>
    </ol>
</div>
</body>
</html>