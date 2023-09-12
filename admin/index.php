<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php

$user = 'root';
$password = '';

$database = 'mydb';

// Server is localhost with
// port number 3306
$servername='localhost';
$con = mysqli_connect("$servername","$user","$password","$database");
  
    // SQL query to display row count
    // in building table
    $sql = "SELECT * from mytable";
  
    if ($result = mysqli_query($con, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    
}
  
// Close the connection
mysqli_close($con);
  
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <form action="export.php" method="post">
          <button type="submit" id="export" name="export"
          value="Export to excel" class="btn btn-success">Export To Excel</button>
    </form>
  </div>

  <!-- Content Row -->
  <div class="row">

    <div >
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total No of survey</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Received Response: *<?php echo $rowcount;?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  <!-- Content Row -->

  <?php
include('includes/scripts.php');
?>