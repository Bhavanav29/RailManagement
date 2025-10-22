<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $dt=$_POST["dt"];
    $sql = "update `res` set dt='$dt' where umail='$email'; ";
    if ($db->query($sql) === TRUE) {
        echo '<script>alert("Record updated successfully");';
        echo 'document.location.href="patient.php"</script>';

    } else {
        echo '<script>alert("Updation unsuccessful Try Again");</script>';
    }

}
else
{
    echo "not post";

}
?>
