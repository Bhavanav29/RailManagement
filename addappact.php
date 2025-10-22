<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $dt=$_POST["dt"];

    $sql = "select * from `user` where email='$email';";
    $uid = "";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        $uid = $row["email"];
    }
    $sql = "insert into `res` values('$email','$dt','$phno')";
    if ($db->query($sql) === TRUE) {
        echo '<script>alert("New Reservation created successfully");';
        echo 'document.location.href="doctor.php"</script>';

    } else {
        echo '<script>alert("Reservation unsuccessful Try Again");</script>';
    }
}
else
{
    echo "not post";
}
?>