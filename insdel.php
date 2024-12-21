<?php
    include "connection.php";
    if(isset($_REQUEST['delid']))
    {
        $id=$_REQUEST['delid'];
        $query="delete from inquiry where id='$id'";
        $ans=mysqli_query($conn,$query);
        if($ans)
            header("location:inquiry.php?msg=Record deleted");
        else
            header("location:inquiry.php?msg=Record Not deleted");

    }
?>
