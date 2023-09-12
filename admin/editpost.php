<?php
include('conn.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE signuptable SET fullname = '$name', userid ='$username', mailid ='$email', pin ='$password' WHERE Id='$id' and user_type = 'admin'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script type='text/javascript'>alert('Data Has been successfully updated.');
            location='register.php';</script>"; 
    }
    else
    {
        echo "<script type='text/javascript'>alert('Data can't be updated.');
            location='register.php';</script>"; 
    }
}

?>

<?php
require_once('conn.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM signuptable WHERE Id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script type='text/javascript'>alert('RECORD DELETED!!.');
        location='register.php';</script>"; 
    }
    else
    {
        echo "<script type='text/javascript'>alert('Can't be DELETED!!.');
        location='register.php';</script>"; 
    }    
}
?>