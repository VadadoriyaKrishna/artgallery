<?php
    include"connection.php";
    if(isset($_REQUEST['submit']))
    {
        /*$id=$_REQUEST['id'];
        $query="select * from inquiry";
        $data=mysqli_query($conn,$query);
        while($record=mysqli_fetch_row($data))
        {
            if($record[0]==$id)
            {
                header("location:inquiry.php?msg=duplicate entry");
            }
        }*/
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        
        
        if($name != ""&& $email != "" && $message != "")
        {
            $query="insert into tblcontact(name,email,message)values('$name','$email','$message')";
            $ins=mysqli_query($conn,$query);

        
        if($ins)
            header("location:contact.php?msg=Inserted");
        else
            header("location:contact.php?msg=Not Inserted");
        }
    }
?>
