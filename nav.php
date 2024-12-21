<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--link rel="stylesheet" href="css/style.css"-->
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    
    <title>Responsive Navbar</title>
    <style>
      nav{
        background-color:white;
      }
      .navbar-brand
      {
        font-size:35px;
        
        font-weight:bold;
        
      }
      .navbar-brand a 
      {
        color:#762500;
       
        
      }
      #navbarNav li a
      {
        color:#762500;
        margin: 0 20px;
        font-size:20px;
       
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
  <img src="image/onlinelogomaker-081123-1043-7587.png" id="image">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" id="tbtn"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="arts.php">Arts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin2/login.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
    
    <main>
        <!-- Your main website content goes here -->
    </main>

    
</body>
</html>
