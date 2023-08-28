<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// get the post records
$fname = $_POST['fullname'];
$rollno = $_POST['universityrollno'];
$pyear = $_POST['cyear'];
$clg = $_POST['college'];
$dept = $_POST['department'];
$commu = $_POST['communicate'];
$syll = $_POST['syllabus'];
$prep = $_POST['preparation'];
$eval = $_POST['evaluation'];
$pfm = $_POST['performance'];
$act = $_POST['active'];
$learn = $_POST['learngrow'];
$out = $_POST['outcomes'];
$examp = $_POST['examples'];
$project  = $_POST['projectors'];
$quality = $_POST['overallquality'];
$sugg = $_POST['suggestions'];
$perf = null;


/*$error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$Email)) {
 
    $error_message .= '<li><p>The completed e-mail address appears to be incorrect<p></li>';
 
  }*/

// database insert SQL code
$sql = "INSERT INTO mytable (full_name, roll_no, currentyear, collegename, branchname, communication, syllabus_info, teaching_process, evaluation_process, class_performance, 	active_participate, opportunities, course_outcome_info, teaching_technique, multimedia, overallexp, feedback) VALUES ('$fname'  ,'$rollno' ,'$pyear' ,'$clg' ,'$dept' ,'$commu' ,'$syll' , '$prep' ,'$eval' , '$pfm' ,'$act' , '$learn' , '$out' , '$examp' , '$project' , '$quality' , '$sugg')";
// insert in database 
if(mysqli_query($conn, $sql)){
  echo "<script type='text/javascript'>alert('Thank you your response has been received');
  location=' ../index.html';</script>";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

