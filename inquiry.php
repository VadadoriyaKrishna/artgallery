<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <title>Enquiry</title>
    <script>
        function confirm_delete()
            {
                var ans=confirm("Want to delete?");
                if(ans)
                    return true;
                else
                    return false;
            }

    </script>
    <style>
        /* Basic form styling */
form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

textarea {
    resize: vertical;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Center the form */
/*main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Header styling */
body
    {
        background-image:url('image/main.jpg');
        background-image:cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

header h1 {
    font-size: 24px;
}
#tbl{
    background-color:white;
    font-weight:bold;
}


    </style>
</head>
<body>
    
        <header>
            <h1>Art Gallery Inquiry</h1>
        </header>
        <main>
            <form id="inquiry-form" action="submit_inquiry.php" method="post">
            <table border="1" align="center">
                <label for="id">Id:</label>
                <input type="text" id="id" name="id" required>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
    
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
    
                <button type="submit" name="submit">Submit Inquiry</button>
        </table>
            </form>
            <?php
            include "connection.php";
            $query="select * from artdata.inquiry";
            $recordset=mysqli_query($conn,$query);
        ?><br>
        <table border=1 align="center" id="tbl">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        <?php
            while($record=mysqli_fetch_row($recordset))
            {
        ?>
            <tr>
                <td><?php echo $record[0]; ?></td>
                <td><?php echo $record[1]; ?></td>
                <td><?php echo $record[2]; ?></td>
                <td><?php echo $record[3]; ?></td>
                <td><?php echo $record[4]; ?></td>
                <td><a href="insdel.php ? delid=<?php echo $record[0]; ?>"onclick="return confirm_delete()"> delete </a></td>
                <td><a href="insupdate.php ? updateid=<?php echo $record[0]; ?>"><?php echo "update"?></td>
           </tr>
           <?php
            } 
           ?>
        
       

        </table>

        </main>
    
</body>
</html>