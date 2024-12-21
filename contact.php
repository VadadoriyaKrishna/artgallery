<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    *
    {
      color:#762500;
    }
  </style>
</head>

<body>

<?php require 'nav.php' ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Contact Us</h2>
      <form action="submit_contact.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
    </div>
    <div class="col-md-6">
      <h2>Visit Us</h2>
      <address>
        <strong>Your Company Name</strong><br>
        123 Main Street<br>
        City, State ZIP Code<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Email</strong><br>
        <a href="mailto:info@example.com">info@example.com</a>
      </address>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
