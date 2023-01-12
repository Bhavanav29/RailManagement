<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {

    $email = $_POST["email"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phno = $_POST["phno"];
    $addr = $_POST["addr"];
    $psw = $_POST["psw"];
    $pswr = $_POST["psw-repeat"];
    $type = $_POST["utype"];
    echo $email;
    if ($psw == $pswr) {
        $sql = "insert into `user` values('$email','$name','$type','$age','$psw','$phno','$addr')";
        if ($db->query($sql) === TRUE) {
            echo '<script>alert("New record created successfully Please Login");';
            echo 'document.location.href="login.php"</script>';

        } else {
            echo '<script>alert("Registration unsuccessful Try Again");</script>';
        }
    } else {
        echo '<script>alert("Enter correct Password");</script>';
    }
}
else
{
    echo "not post";
}
?>