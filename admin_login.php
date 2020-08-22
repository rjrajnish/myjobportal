<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Admin Login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src=" js/bootstrap.min.js"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
    <script src=js/admin_login.js ></script>
  </head>
  <body class="text-center">

    <form class="form-signin" id="admin_login" method="post" action="admin_login.php" name="admin_login">
  <img class="mb-4" src="image/joblogo.jpeg" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Please Login in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="pass" id="pass " class="form-control" placeholder="Password" required>
  
  <input class="btn btn-lg btn-primary btn-block" name="submit" placeholder="sign in" id="submit"type="submit">  
  <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>

</form>
</body>
</html>
 
<?php 
include('connection/db.php');

if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $query=mysqli_query($conn, "select*from admin_login where admin_email='$email' and admin_pass='$pass'");
    if ($query) {
        if (mysqli_num_rows($query)==true) {
          $_SESSION['email']=$email;
            header('location:dashboard.php');
        } else {
            echo "<script>alert('please try again !!')</script>";
        }
    }
}
















?>