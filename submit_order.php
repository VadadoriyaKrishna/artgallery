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
        $full_name=$_REQUEST['full-name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $street_address=$_REQUEST['street-address'];
        $city=$_REQUEST['city'];
        $state=$_REQUEST['state'];
        $zip=$_REQUEST['zip'];
        $country=$_REQUEST['country'];
        $artwork_title=$_REQUEST['artwork-title'];
        $artist_name=$_REQUEST['artist-name'];
        $price=$_REQUEST['price'];
        $security_code=$_REQUEST['security-code'];


        
        
        
        
            $query="insert into art_purchase(full_name,email,phone,street_address,city,state,zip,country,artwork_title,artist_name,price,security_code)values('$full_name','$email','$phone','$street_address','$city','$state','$zip','$country','$artwork_title','$artist_name','$price','$security_code')";
            $ins=mysqli_query($conn,$query);

        
        if($ins)
            header("location:purchase_art.php?msg=Inserted");
        else
            header("location:purchase_art.php?msg=Not Inserted");
        
    }
?>
