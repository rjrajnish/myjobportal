<?php
include('connection/db.php');
include('include/header.php');
$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and admin_type='Super admin' ");
if(mysqli_num_rows($query)>0){
}else{
	echo"some error";
}


?> 