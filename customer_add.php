<?php
include('connection/db.php');

$email = $_POST['email'];

$pass = $_POST['password'];
$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$admin_type = $_POST['admin_type'];

$query = mysqli_query($conn, "INSERT INTO admin_login(`admin_email`, `admin_pass`, `admin_user`, `first_name`, `last_name`, `admin_type`)values('$email','$pass'
 ,'$username','$first_name','$last_name','$admin_type')");

var_dump($query);




if ($query) {
    echo "<div class='alert alert=success'>Data has been successfully inserted !<?div>";
} else {
    echo "<div class='alert alert=danger'>some error !!<?div>";
}
?>