<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
      
    </style>
</head>
<body>
<?php require 'nav.php'?>
<h2 id="portfolio" class="text-center">
    Portfolio
  </h2>
  <!-- Photo Grid -->
 <div class="row" id="portfolio1" style="margin:10px;">
    <div class="col-4">
    
      <img src="image/b1.jpg" style="width: 100%; height:400px; margin: 5px;">
      <h3>Siya Ram</h3>
      <p>Artist: Vivek</p>
      <p>Price: $1000</p>
      <a href="purchase_art.php" class="action_btn">Order</a> 
    </div>
 
    <div class="col-4">
      <img src="image/b2.jpg" style="width: 100%; height: 400px; margin: 5px;">
      <h3>Radhe krishna</h3>
      <p>Artist: Vivek</p>
      <p>Price: $500</p>
      <a href="purchase_art.php" class="action_btn">Order</a>
    </div>
    <div class="col-4">
      <img src="image/b3.jpg" style="width: 100%; height:400px; margin: 5px;">
      <h3>Nature painting</h3>
      <p>Artist: Vivek</p>
      <p>Price: $90</p>
      <a href="purchase_art.php" class="action_btn">Order</a>
    </div>
    
 </div>
 <div class="row" id="portfolio1" style="margin:10px;">
  <div class="col-8">
    <img src="image/b6.jpg" style="width: 100%; height: 604px; margin: 5px;">
    <h3>Glass painting</h3>
      <p>Artist: Vivek</p>
      <p>Price: $1000</p>
      <a href="purchase_art.php" class="action_btn">Order</a>
    
  </div>
  <div class="col-4">
    <img src="image/b7.jpg" style="width: 100%; height:604px; margin: 5px;">
    <h3>Nature tree</h3>
      <p>Artist: Vivek</p>
      <p>Price: $1000</p>
      <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
</div>
</body>
</html>