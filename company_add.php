<?php
include('connection/db.php');


 $company = $_POST['company'];
 $company_name = $_POST['company_name'];
 $description = $_POST['description'];
 

$query = mysqli_query($conn, "INSERT INTO `company`(`company`, `company_name`, `disc`)values('$company','$company_name','$description')");


 




if ($query) {
     
} else {
	
     }
?>