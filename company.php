<?php 
include('include/header.php');
include('include/sidebar.php');



?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="company.php">company</a></li>
     
     

  </ol>
</nav>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3 mb-4 border-bottom">
      <h1 class="h2">company </h1>
        <div class="btn-toolbar mb-4 mb-md-0">
          <div class="btn-group mr-4">
            <a class="btn-primary" href="add_company.php">Add company</a>
          </div>
           
        </div>
      </div>
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SL</th>
                 
                <th>Company</th>
                <th>Company Name</th>
                <th>Description</th>
                <th>Action</th>

                 

                
            </tr>
        </thead>
        <tbody>
            <?php 
            include('connection/db.php');

            $query=mysqli_query($conn,"select * from company");
            while($row=mysqli_fetch_array($query)){
            
            ?>
            <tr>
                <td><?php echo $row['company_id']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['company_name']; ?></td>
                <td><?php echo $row['disc']; ?></td>
                
                <td>
                  <div class="row">
                    <div class="btn-group">
                        <a href=" company_edit.php?edit=<?php echo $row['company_id']; ?>" class="btn btn-success"><span class=" glyphicon glyphicon-pencil"></span></a>
                        <a href="company_delete.php?del=<?php echo $row['company_id']; ?>" class="btn btn-danger"><span class=" glyphicon glyphicon-trash"></span></a> 

                    </div>

                  </div>

                </td>
                 
               
            </tr>
            <?php } ?>
            
             
        </tbody>
         
    </table>
 
    </main>
  </div>
</div>
<script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src=" js/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js "></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>
       
    </body>
</html>

