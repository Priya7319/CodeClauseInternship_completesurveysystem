<?php
 include('C:\xampp\htdocs\CodeClauseInternship_completesurveysystem\admin\export.php');
 ?>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Begin Page Content -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 


<style>
td,
th {
	text-align: left;
	padding: .5rem 1rem;
}

tbody tr:nth-child(odd) {
	background-color: #8080ff;
}

th {
	background: #4d4dff;
	color: #fff;
}

/* Pagination. */
.pagination {
	background: #3333ff;
	padding: 1rem;
	margin-bottom: 1rem;
	text-align: center;
	display: flex;
	justify-content: center;
}

#numbers {
	padding: 0;
	margin: 0 2rem;
	list-style-type: none;
	display: flex;
}

#numbers li a {
	color: #fff;
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#numbers li a:hover {
	opacity: 1;
}

#numbers li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}
</style>
</head>

<body>




<script>
  $(function() {
	const rowsPerPage = 3;
	const rows = $('#my-table tbody tr');
	const rowsCount = rows.length;
	const pageCount = Math.ceil(rowsCount / rowsPerPage); // avoid decimals
	const numbers = $('#numbers');
	
	// Generate the pagination.
	for (var i = 0; i < pageCount; i++) {
		numbers.append('<li><a href="#">' + (i+1) + '</a></li>');
	}
		
	// Mark the first page link as active.
	$('#numbers li:first-child a').addClass('active');

	// Display the first set of rows.
	displayRows(1);
	
	// On pagination click.
	$('#numbers li a').click(function(e) {
		var $this = $(this);
		
		e.preventDefault();
		
		// Remove the active class from the links.
		$('#numbers li a').removeClass('active');
		
		// Add the active class to the current link.
		$this.addClass('active');
		
		// Show the rows corresponding to the clicked page ID.
		displayRows($this.text());
	});
	
	// Function that displays rows for a specific page.
	function displayRows(index) {
		var start = (index - 1) * rowsPerPage;
		var end = start + rowsPerPage;
		
		// Hide all rows.
		rows.hide();
		
		// Show the proper rows for this page.
		rows.slice(start, end).show();
	}
});

</script>








<div class="context">

  <!-- Page Heading -->
  <center>
  <div class="content">
    <h1 >Survey Data</h1>
    <form action="admin\export.php" method="post">
          <button type="submit" id="export" name="export"
          value="Export to excel">Export To Excel</button>
    </form>
  </div>
</center>
  <!-- Content Row -->
  
          <div class="pagination">
          <ol id="numbers"></ol>
        </div>

<table id= "my-table">

        <thead>
              <tr>
                  <th style="width:10px">Name</th>
                  <th style="width:10px">Rollno</th>
                  <th style="width:10px">Year</th>
                  <th style="width:10px">College</th>
                  <th style="width:20px">Branch</th>
                  <th style="width:20px">Teacher's communicataion</th>
                  <th style="width:20px">Covered Syllabus percnt</th>
                  <th style="width:20px">Teaching fruitfullness</th>
                  <th style="width:20px">Evaluation method exp</th>
                  <th style="width:20px">Performance discussion</th>
                  <th style="width:20px">Active participation exp</th>
                  <th style="width:20px">Opportunities</th>
                  <th style="width:20px">Total courseoutcome shared exp</th>
                  <th style="width:20px">Teaching technique</th>
                  <th style="width:20px">Percnt of multimedia usage</th>
                  <th style="width:20px">Overall exp</th>
                  <th style="width:20px">Feedback</th>
                  <th style="width:20px">Time of response </th>
                  
              </tr>
       </thead>
            

       <tbody>
              <?php foreach($mytable as $table) { ?>
                  <tr>
                      <td><?php echo $table ['full_name']; ?></td>
                      <td><?php echo $table ['roll_no']; ?></td>
                      <td><?php echo $table ['currentyear']; ?></td>
                      <td><?php echo $table ['collegename']; ?></td>
                      <td><?php echo $table ['branchname']; ?></td>
                      <td><?php echo $table ['communication']; ?></td>
                      <td><?php echo $table ['syllabus_info']; ?></td>
                      <td><?php echo $table ['teaching_process']; ?></td>
                      <td><?php echo $table ['evaluation_process']; ?></td>
                      <td><?php echo $table ['class_performance']; ?></td>
                      <td><?php echo $table ['active_participate']; ?></td>
                      <td><?php echo $table ['opportunities']; ?></td>
                      <td><?php echo $table ['course_outcome_info']; ?></td>
                      <td><?php echo $table ['teaching_technique']; ?></td>
                      <td><?php echo $table ['multimedia']; ?></td>
                      <td><?php echo $table ['overallexp']; ?></td>
                      <td><?php echo $table ['feedback']; ?></td>
                      <td><?php echo $table ['time_of_fill']; ?></td>
                      
                  </tr>
              <?php } ?>
              </tbody>

          </table>


         


      </div>
  </div>


</body>
</html>



