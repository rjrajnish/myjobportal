<?php
include('connection/db.php');
$del = $_GET['del'];

$query = mysqli_query($conn, "delete from company where company_id='$del' ");

if ($query) {
    echo "<script> alert('data successfully')</script>";

    header('location:company.php');
} else {
}
?>
