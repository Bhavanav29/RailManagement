<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email= $_POST['uname'];
    $pass= $_POST['psw'];
    $type= $_POST['utype'];
    $sql="select * from user where email='$email';";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($row as $data);
    if($pass==$data['pass']??'' and $type==$data['type']??'')
    {
        if($type=="admin")
        {
            header("Location:admin.php");
        }
        else if($type=="employee")
        {
            header("Location:doctor.php");
        }
        else if($type=="customer")
        {
            header("Location:patient.php");
        }
    }
    else
    {
        echo '<script type="text/JavaScript">alert("Login Unsuccessful"); document.location.href=\'login.php\';</script>';
        
    }
    echo $data['email']??'';
    echo $data['pass']??'';
    echo $data['type']??'';
}
?>