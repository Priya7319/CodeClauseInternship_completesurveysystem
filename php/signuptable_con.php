<?php

$servername = "localhost";
$User_valid = "root";
$Pin_valid = "";
$dbname = "signuppage";

$conn = new mysqli($servername, $User_valid, $Pin_valid, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>