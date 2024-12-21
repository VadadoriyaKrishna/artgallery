<?php
    include"connection.php";
    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $query="select * from inquiry";
        $data=mysqli_query($conn,$query);
        while($record=mysqli_fetch_row($data))
        {
            if($record[0]==$id)
            {
                header("location:inquiry.php?msg=duplicate entry");
            }
        }
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $subject=$_REQUEST['subject'];
        $message=$_REQUEST['message'];
        
        
        if($id != ""&& $name != ""&& $email != ""&& $subject != ""&& $message != "")
        {
            $query="insert into artdata.inquiry(id,name,email,subject,message)values('$id','$name','$email','$subject','$message')";
            $ins=mysqli_query($conn,$query);

        
        if($ins)
            header("location:inquiry.php?msg=Inserted");
        else
            header("location:inquiry.php?msg=Not Inserted");
        }
    }
?>
