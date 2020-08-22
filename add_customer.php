<?php 
session_start();
if ($_SESSION['email']==TRUE) {
   
}else {
  header('location:admin_login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>admin_dashboard </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/jquery.min.js"></script>

 
    <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
   
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
    <link href="css/dashboard.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>
     

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="job_create.php">
              <span data-feather="bar-chart-2"></span>
              job create
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="company.php">
              <span data-feather="layers"></span>
             company
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="add_customer.php">customers</a></li>
    <li class="breadcrumb-item"><a href="#">Add customer</a></li>
     

  </ol>
</nav>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Customer </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        </div>
      </div>
     <div style="width:60% ; margin-left:25%; background-color:darkgray;" > 
     
         <form action="" style="margin:3%; padding:3%;" name="customer_form" id="customer_form">
         <div id="msg" ></div>
             <div class="form-group">  
                 <label for="customer email"> Customer Email</label>
                 <input type="email"  name="email" id="email" class="form-control" placeholder="Enter Customer User Email">
            </div>
            <div class="form-group">  
                 <label for="customer user name">Customer User </label>
                 <input type="text" name="username" id="username" class="form-control" placeholder="Enter Customer User Name">
            </div>
            <div class="form-group">  
                 <label for="Enter Password">Enter Password</label>
                 <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">  
                 <label for="first name">First Name </label>
                 <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group">  
                 <label for="last name">Last Name</label>
                 <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">  
                 <label for="Admin Type">Admin Type</label>
                  <select name="admin_type" class="form-control" id="admin_type">  
                      <option value="super admin">Super Admin</option>
                      <option value="customer admin">Customer Admin</option>

                  </select>
                </div>
                  <div class="form-group" >  
                  <div align="right">
                  <input type="submit" class="btn btn-success" placeholder="Save" name="submit" id="submit">
                       
                  </div>
    
                 
                  
                </div> 
                
            





         </form>



     </div>
 
    </main>
  </div>
</div>
<script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src=" js/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js "></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>
    <script>
        
       $(document).ready(function(){
       $("#submit").click(function(){
           var email=$("#email").val();
           var username=$("#username").val();
           var password=$("#password").val();
           var first_name=$("#first_name").val();
           var last_name=$("#last_name").val();
           var admin_type=$("#admin_type").val();
           var data= $("#customer_form").serialize();
           alert

           $.ajax({
               type:"POST",
               url:"customer_add.php",
               data:data,
               success:function(data){
                 alert(data);
                 
                
               }
           });
           
       });
       });
    </script>



    </body>
</html>
