<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phno = $_POST["phno"];
    $addr = $_POST["addr"];
    $psw = "hosp@123";
    $type = $_POST["utype"];
        $sql = "insert into `user` values('$email','$name','$type','$age','$psw','$phno','$addr')";
        if ($db->query($sql) === TRUE) {
            echo '<script>alert("New record created successfully");';
            echo 'document.location.href="admin.php"</script>';

        } else {
            echo '<script>alert("Registration unsuccessful Try Again");</script>';
        }
}
else
{
    echo "not post";
}
?>