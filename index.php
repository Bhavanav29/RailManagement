<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Management System</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="icon" href="images/train.png" type="image/icon type">

    <style>
        body
        {
            font-family: Nunito;
        }
        table
        {
            width: 90%;
            height: 100%;
            
            margin-left: 50px;
        }
        td{
            margin: 50px;
        }
        input
        {
            width: 70%;
            height: 100px;
            background:linear-gradient( #05fffc,#ffffff);
            border: 10px none #000000;
            font-size: 50px;
            font-family: Nunito;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <tr>
                <td colspan="2" align="center"><h1>Railway Management System</h1></td>
            </tr>
            <td style="width: 40%;"><img src="images/mainimg2.jpg" style="width: 100%;"/></td>
            <td style="width: 60%;text-align:center;">
                <table>
                    <tr>
                        <td>
                            <form>
                                <input type="button" value="Login" onclick="document.location.href='login.php'">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form>
                                <input type="button" value="Register" onclick="document.location.href='register.php'">
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>