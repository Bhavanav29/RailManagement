<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["email"];
    $sql = "delete from `user` where email='$email'; ";
    if ($db->query($sql) === TRUE) {
        echo '<script>alert("Record deleted successfully");';
        echo 'document.location.href="admin.php"</script>';

    } else {
        echo '<script>alert("Deletion unsuccessful Try Again");</script>';
    }

}
else
{
    echo "not post";

}
?>
