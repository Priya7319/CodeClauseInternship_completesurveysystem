<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


  
<script>
      function matchPass(){
        var firstpassword=document.form.password.value;
        var secondpassword=document.form.confirmpassword.value;
        
        if(firstpassword==secondpassword){
        return true;
        }
        else{
        alert("password must be same!");
        return false;
        }
        }
  </script>




<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="includes/scripts.php" name="form" method="POST" onsubmit="return matchPass()">

        <div class="modal-body">
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>


  <?php

        $user = 'root';
        $password = '';

        // Database name is geeksforgeeks
        $database = 'signuppage';

        // Server is localhost with
        // port number 3306
        $servername='localhost';
        $mysqli = new mysqli($servername, $user,
                $password, $database);

        // Checking for connections

        if ($mysqli->connect_error)
        {
              die('Connect Error (' .
              $mysqli->connect_errno . ') '.
              $mysqli->connect_error);
        }

          $sql = " SELECT * FROM signuptable WHERE user_type = 'admin'";
          $result = $mysqli->query($sql);
          $mysqli->close();
  ?> 





  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <tr>
            <th> Name </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
          </tr>

             <?php
                    // LOOP TILL END OF DATA
                    while($rows=$result->fetch_assoc())
                    {
              ?>


          <tr>

            <td><?php echo $rows['fullname'];?></td>
            <td><?php echo $rows['userid'];?></td>
            <td><?php echo $rows['mailid'];?></td>
            <td><?php echo $rows['pin'];?></td>

          </tr>
        

      <?php
             }
      ?>
    </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>