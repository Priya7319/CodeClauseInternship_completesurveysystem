<?php
// Include the database connection file
require_once("conn.php");
require_once('includes/header.php'); 
require_once('includes/navbar.php'); 
require_once('includes/scripts.php');

?>


<div class="container-fluid">

<!-- DataTales Example -->
	<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
	</div>
		<div class="card-body">
			<?php
							
				if(isset($_POST['edit_btn']))
				{
					$id = $_POST['edit_id'];
					$query = "SELECT * FROM signuptable WHERE id = '$id'";
					$query_run = mysqli_query($connection, $query);


				foreach($query_run as $row)
				{
					?>
				
				<form action ="editpost.php" method ="POST">
				<input type="hidden" name="edit_id" value="<?php echo $row['Id'] ?>">
					<div class="form-group">
						<label> Name </label>
						<input type="text" name="name" value = "<?php echo $row['fullname']?>"class="form-control" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="username" value = "<?php echo $row['userid']?>" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email"  value = "<?php echo $row['mailid']?>" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password"  value = "<?php echo $row['pin']?>"  class="form-control" placeholder="Enter Password">
					</div>
					
					<a href="register.php" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
				</form>
					<?php
					}
			}
			?>
			
		</div>
  	</div>
</div>
</div>

