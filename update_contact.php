<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agmsaid']==0)) {
  header('location:logout.php');
  }
  else{

    if(isset($_REQUEST['update']))
    {
       
        $nm=$_REQUEST['name'];
        $email=$_REQUEST['email'];
       
        $message=$_REQUEST['message'];
        
        /*else
        {
            $subject="NA";
        }*/
       
        $query="update tblcontact set name='$nm',email='$email',message='$message' where id=$id";
        $update=mysqli_query($conn,$query);
        if($update)
            header("location:contact.php?msg=record updated");
        else   
            header("location:contact.php?msg=record Not updated");
        
    }

   ?>
</body>
</html>
<?php  } ?>