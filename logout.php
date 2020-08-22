<?php 
session_start();
session_unset();
header('location:admin_login.php');
 echo '<script>alert("you have successful logout")</script>';
?>
 