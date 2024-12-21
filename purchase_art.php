<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Art</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .text-center {
            text-align: center;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        body
    {
        background-image:url('image/main.jpg');
        background-image:cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    </style>
    
</head>
<body>
    <div class="container">
        <h2>Art Purchase Form</h2>
        <form action="submit_order.php" method="post">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <!-- Billing Address -->
            <h3>Billing Address:</h3>
            <label for="street-address">Street Address:</label>
            <input type="text" id="street-address" name="street-address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <label for="state">State/Province:</label>
            <input type="text" id="state" name="state" required>

            <label for="zip">ZIP/Postal Code:</label>
            <input type="text" id="zip" name="zip">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country">

            <!-- Artwork Details -->
            <h3>Artwork Details:</h3>
            <label for="artwork-title">Title of Artwork:</label>
            <input type="text" id="artwork-title" name="artwork-title" required>

            <label for="artist-name">Artist Name (if known):</label>
            <input type="text" id="artist-name" name="artist-name">

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="price">Security key:</label>
            <input type="text" id="price" name="security-code" required>

            

            

            
            

            <!-- Terms and Conditions -->
            <h3>Terms and Conditions:</h3>
            <label for="agree">I agree to the terms and conditions of the purchase:</label>
            <input type="checkbox" id="agree" name="agree" required>

            <div class="text-center">
                <button type="submit" name="submit">Submit Your Order</button>
            </div>
        </form>
    </div>
</body>
</html>