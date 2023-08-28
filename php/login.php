<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');




$servername = "localhost";
$usercheck = "root";
$pincheck = "";
$dbname = "signuppage";


$conn = new mysqli($servername, $usercheck, $pincheck, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




  //$user_check = $_POST['username'];
  //$pass_check= $_POST['passwordfield'];


/*if(isset($_POST['login'])) {
    $sql = mysqli_query($conn,
    "SELECT userid,pin FROM signuptable WHERE userid='"
    . $_POST["username"] . "' AND
    pin='" . $_POST["passwordfield"] . "'    ");

    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        echo '<script>alert("Hey u have succesfully loggedin")</script>';
        header("Location: home.php");
        exit();
    }
    else {
        echo '<script>alert("Invalid user id or password!!")</script>';
    }
}*/


//testing

     
  $uname = $_POST["username"];
  $password = $_POST["passwordfield"];
  $utype = "admin";
  $sql = "SELECT * FROM signuptable";
  $result = mysqli_query($conn, $sql);
  mysqli_fetch_all($result, MYSQLI_ASSOC);

   
  foreach($result as $user) {
  if(isset($_POST['login']))  
  {
      if(($user['userid'] == $uname) &&
        ($user['pin'] == $password) && ($user['user_type'] == $utype)) {
          echo "<script type='text/javascript'>alert('Hey admin We are redirecting you to admin page');
          location=' ../admin/index.php';</script>";
      }
      else if(($user['userid'] == $uname) &&
          ($user['pin'] == $password)) {
            echo "<script type='text/javascript'>alert('You are redirecting to survey page please wait!!');
          location=' ../survey.html';</script>";
             
      }
      
  }
  
}

?>
    
