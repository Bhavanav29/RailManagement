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
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        input{
            width: 100%;
            height: 100%;
            border: #000000 solid 0px ;
        }
        body, tr, input,select{
            font-family: Nunito;
            font-size: 20px;
        }
        select{
            text-align: center;
            width: 100%;
        }

        .bckimg{
            background-image: url("images/doctorback.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            z-index: -2;
            position: fixed;
        }

        table
        {
            border-radius: 5px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            left: 33%;
            padding-top: 50px;
            border: #00987900 solid 10px;
            background-color: #f1f1f1;
        }
        body{
            background-image: url("images/tabback2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        html,body{
            width: 100%;
            height: 100%;
        }
        input[type="submit"]{
            width: 100%;
            height: 100%;
            border: #f1f1f1 solid 0px;
            font-family: Nunito;
            font-size: 30px;
            color: #009879;
            font-weight: bolder;
        }
        h1
        {
            color: #ffffff;
        }
    </style>
</head>

<body>

<h1 style="text-align: center">Update Reservation</h1>
<form action="puppappact.php" method="post">
    <table class="styled-table">
        <tbody>
        <tr>
            <td>Email</td>
            <td>

                <input type="email" id="email" name="email" placeholder="Enter Email" required>

            </td>
        </tr>
        <tr>
            <td>New Date</td>
            <td>

                <input type="datetime-local" id="dt" name="dt" placeholder="Enter Date" required>

            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Update"></td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>