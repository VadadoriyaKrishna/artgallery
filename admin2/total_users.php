<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                $query = "SELECT * FROM artdata.users";
                $query_run = mysqli_query($con, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <h1><center>All Users</center></h1>
            <table border= 1 align="center">
             <thead>
                <tr>
                <th>Sno</th>
                <th>Username</th>
                <th>Passowrd</th>
                <th>Date</th>
                <th colspan=2>Action</th>
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
                                <td><?php  echo $row['sno']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['dt']; ?></td>
                                <td>
                                    <form action="edit_user.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['sno']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                    </form>
                                </td>
                                
                                
                                <td>
                                    <form action="del_user.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['sno']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
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