<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $sql = "delete from `app` where umail='$email'; ";
    if ($db->query($sql) === TRUE) {
        echo '<script>alert("Record updated successfully");';
        echo 'document.location.href="doctor.php"</script>';

    } else {
        echo '<script>alert("Updation unsuccessful Try Again");</script>';
    }
}
else
{
    echo "not post";
}
?>
