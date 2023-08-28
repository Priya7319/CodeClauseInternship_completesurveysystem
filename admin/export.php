<?php

$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'mydb';

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



$mytable = array();
$sql = " SELECT * FROM mytable ;";
$result = $mysqli->query($sql);

//Store table records into an array
while( $row = $result->fetch_assoc() ) {
$mytable[] = $row;
}
//Check the export button is pressed or not
if(isset($_POST["export"])) {
//Define the filename with current date
$fileName = "mytabledate-".date('d-m-Y').".xls";

//Set header information to export data in excel format
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$fileName);

//Set variable to false for heading
$heading = false;

//Add the MySQL table data to excel file
if(!empty($mytable)) {
foreach($mytable as $table) {
if(!$heading) {
echo implode("\t", array_keys($table)) . "\n";
$heading = true;
}
echo implode("\t", array_values($table)) . "\n";
}
}
exit();
}

?>