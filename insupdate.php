<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Update data</title>
    <style>
        body
      {
        background-image: url('image/main.jpg');
        background-size:cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
      table{
        background-color:white;
      }
      h1
      {
        color:white;
      }

    </style>
</head>
<body>
    <h1 class="text-center">Update data</h1>
<?php
    include "connection.php";
    if(isset($_REQUEST['updateid']))
    {
    $upid=$_REQUEST['updateid'];
    $query="select * from inquiry where id='$upid'";
    $recordset=mysqli_query($conn,$query);
    $record=mysqli_fetch_row($recordset);
    $name=$record[0];
    $name=$record[1];
    $email=$record[2];
    
    //id($record);
?>
<form action="" method="post">
    <table border="1" align="center">
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $record[0]; ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $record[1]; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $record[2]; ?>"></td>
        <tr>
            <td>Subject</td>
            <td><input type="text" name="subject" value="<?php echo $record[3]; ?>"></td>
        </tr>          
        <tr>
            <td>Message</td>
            <td><input type="text" name="message" value="<?php echo $record[4]; ?>"></td>
        </tr>          

        <tr>
            <td colspan="2" align="center"><input type="submit" value="update" name="update"></td>
        </tr>
    </table>
</form>

<?php
    }
    if(isset($_REQUEST['update']))
    {
        $id=$_REQUEST['id'];
        $nm=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $subject=$_REQUEST['subject'];
        $message=$_REQUEST['message'];
        
        /*else
        {
            $subject="NA";
        }*/
       
        $query="update artdata.inquiry set id='$id',name='$nm',email='$email',subject='$subject',message='$message' where id=$id";
        $update=mysqli_query($conn,$query);
        if($update)
            header("location:inquiry.php?msg=record updated");
        else   
            header("location:inquiry.php?msg=record Not updated");
        
    }
?>

</body>
</html>