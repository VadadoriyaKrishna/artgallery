<?php
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
    <h1><center>All Inquiry</center></h1>
    <table border= 1 align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch data from the database
            $sql = "SELECT * FROM inquiry";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['subject'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No records found";
            }

            // Close the database connection
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</body>
</html>
