<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <style>
      td{
        padding:20px;
      }
      body
      {
        background-image: url('images/main.jpg');
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
<?php

include('includes/dbconnection.php');
?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM artdata.tblcontact";
                $query_run = mysqli_query($con, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <h1><center>All Contact</center></h1>
    <table border= 1 align="center">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
                    
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                                
                                
                                
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
</body>
</html>