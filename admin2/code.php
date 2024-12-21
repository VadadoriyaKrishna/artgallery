<?php
include('includes/dbconnection.php');
?>
<?php
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    
    $password = $_POST['edit_password'];

    $query = "UPDATE users SET username='$username', password='$password' WHERE sno='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: total_users.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: total_users.php'); 
    }
}

?>
