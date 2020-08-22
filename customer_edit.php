<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
$id = $_GET['edit'];

$query = mysqli_query($conn, "select *from admin_login where id ='$id'");
while ($row = mysqli_fetch_array($query)) {
     $email = $row['admin_email'];
     $first_name = $row['first_name'];
     $last_name = $row['last_name'];
     $pass = $row['admin_pass'];
     $user = $row['admin_user'];
     $admin_type = $row['admin_type'];
}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
               <li class="breadcrumb-item"><a href="customers.php">customers</a></li>
               <li class="breadcrumb-item"><a href="#">update customer</a></li>


          </ol>
     </nav>

     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">update Customer </h1>
          <div class="btn-toolbar mb-2 mb-md-0">

          </div>
     </div>
     <div style="width:60% ; margin-left:25%; background-color:darkgray;">

          <form action="" style="margin:3%; padding:3%;" name="customer_form" id="customer_form">
               <div id="msg"></div>
               <div class="form-group">
                    <label for="customer email"> Customer Email</label>
                    <input type="email" name="email" id="email" value=" <?php echo $email; ?>" class="form-control" placeholder="Enter Customer User Email">
               </div>
               <div class="form-group">
                    <label for="customer user name">Customer User </label>
                    <input type="text" name="username" id="username" value=" <?php echo  $user; ?>" class="form-control" placeholder="Enter Customer User Name">
               </div>
               <div class="form-group">
                    <label for="Enter Password">Enter Password</label>
                    <input type="password" name="password" id="password" value=" <?php echo $pass; ?>" class="form-control" placeholder="Enter Password">
               </div>
               <div class="form-group">
                    <label for="first name">First Name </label>
                    <input type="text" name="first_name" id="first_name" value=" <?php echo $first_name; ?>" class="form-control" placeholder="Enter First Name">
               </div>
               <div class="form-group">
                    <label for="last name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value=" <?php echo $last_name; ?>" class="form-control" placeholder="Enter Last Name">
               </div>
               <div class="form-group">
                    <label for="Admin Type">Admin Type</label>
                    <select name="admin_type" class="form-control" id="admin_type" value=" <?php echo $admin_type; ?>">
                         <option value="super admin">Super Admin</option>
                         <option value="customer admin">Customer Admin</option>

                    </select>
                    <input type="hidden" name="id" id="id" value=" <?php echo $_GET['edit']; ?>" </div> <div class="form-group">
                    <div align="right">
                         <input type="submit" class="btn btn-success" placeholder="update" name="submit" id="submit">

                    </div>



               </div>







          </form>



     </div>

</main>
</div>
</div>
<script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
     window.jQuery || document.write('<script src=" js/jquery.slim.min.js"><\/script>')
</script>
<script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js "></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>




</body>

</html>