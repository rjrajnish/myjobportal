<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

 $id = $_GET['edit'];

$query = mysqli_query($conn, "select *from company where company_id ='$id'");

 while ($row = mysqli_fetch_array($query)){
    

 $company = $row['company'];
 $company_name = $row['company_name'];
 $description=$row['disc'];
 
 

 }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
               <li class="breadcrumb-item"><a href="company.php">company</a></li>
               <li class="breadcrumb-item"><a href="#">update customer</a></li>


          </ol>
     </nav>

     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Company </h1>
          <div class="btn-toolbar mb-2 mb-md-0">

          </div>
     </div>
     <div style="width:60% ; margin-left:25%; background-color:darkgray;">
<form action="" style="margin:3%; padding:3%;" name="company_form",id="company_form" >
        
             <div class="form-group">  
                 <label for="company"> company  </label>
                 <input type="text"  name="company" id="company" value="<?php echo $row['company'] ;?> " class="form-control" placeholder="Enter Company">
            </div>
            <div class="form-group">  
                 <label for="company_name">company Name</label>
                 <input type="text" name="company_name" id="company_name" value="<?php echo  $company_name;?> "  class="form-control" placeholder="Enter Company Name">
            </div>
            <div class="form-group">  
                 <label for="description">description</label>
                 <textarea  id="description"  name="description" rows="10" cols="87 " class="form-control" value="<?php echo  $description ;?> "  placeholder="Enter description"></textarea>
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
<script>
     window.jQuery || document.write('<script src=" js/jquery.slim.min.js"><\/script>')
</script>
<script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js "></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>





<script > 
  $(document).ready(function(){
     $('#example').DataTable();
  });


</script>
</body>

</html>
<?php 
 include('connection/db.php');
 if(isset($_POST['submit'])){
     $id=$_POST['company_id'];
     $company=$_POST['company'];
     $company_name=$_POST['company_name'];
     $description=$_POST['disc'];


     $query2=mysqli_query($conn,"update company set company='$company',' $company_name','$description' where companu_id='$id' ");

     if($query2){
          echo "<script>alert ('record updated')</script>";
     }else{
           echo "<script>alert ('record not updated')</script>";
     }

}

?>