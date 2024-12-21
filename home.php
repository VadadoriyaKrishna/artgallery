<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="jQuery.js"></script>


  <title>Art Gallery</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style1.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<!--script type="text/javascript">
    
    function Randomize() {
    var images = ['image/k1.jpg','image/k1.jpg'];
    var imageNum = Math.floor(Math.random() * images.length);
    document.getElementById("divid").style.backgroundImage = "url('" + images[imageNum] + "')";
}

window.onload = Randomize;
</script-->
<script>
  $(document).ready(function(){
    $("#img1").mouseenter(function(){
      $("#img1").animate({height:'400px',width:'90%'},2000);
    })
    
    $("#portfolio").mouseenter(function(){
      $("#portfolio").animate({fontSize:'3em'},"slow");
    })
   
    $("#portfolio1").hover(function(){
      $("#portfolio").animate({height: 'toggle'});
    })
    $(".action_btn").hover(function(){
      $(".action_btn").animate({},1000);
    })
    

  })
</script>

<body>
  

    
  <header>
    <div class="navbar">
        <div class="logo">
            <a href="#">Art World</a>
        </div>
       
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
                <a class=" dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Art Type
                </a>
               
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="arts.php">Oil Paintings</a><br>
                <a href="arts.php">Water Paintings</a><br>
                <a href="arts.php">Painting</a><br>
                <a href="arts.php">Street Art</a><br>
                <a href="arts.php">Visual Art</a><br>
                <a href="arts.php">Conceptual art</a>
                                          
                </div>
             </li>
            <li><a href="admin2\login.php">Admin</a></li>
            
        </ul>
        <div>
        <a href="signup.php" class="action_btn1">Signup</a>
        <a href="login.php" class="action_btn1">Login</a>
        
        </div>
        
        
        <div class="toggle_btn">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
    
      
  </div>
 
  </header>
  <div class="container-fluid">
    <div class="row all">
      <div class="col-md-3">
        <div class="content">
          <h1><br><br>Art Gallery</h1><br>
          <a href="" class="action_btn">Get Started</a>
        </div>
      </div>
      <div class="col-md-8">
        <img src="image/k1.jpg" style="width:100%;height:600px;margin:  10px;" id="img1">
        <!--div id="divid" style="width: 100%; height:420px; margin: 10px;"></div-->
      </div>
      <!--div class="col-6">
        <img src="image/k1.jpg" style="width: 100%; height: 397px;">
      </div-->
      <div class="col-md-1">
        <a href="#" class="fa fa-facebook" style="padding: 1rem;font-size: 20px;"></a><br>
        <a href="#" class="fa fa-twitter" style="padding: 1rem;font-size: 20px;"></a><br>
        <a href="#" class="fa fa-instagram" style="padding: 1rem;font-size: 20px;"></a><br>
        <a href="#" class="fa fa-linkedin" style="padding: 1rem;font-size: 20px;"></a><br>
      </div>
    </div>

    
  </div>
  <h2 id="portfolio">
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
<h2>
  About
</h2>
<div class="about">
  <div class="row">
    <div class="col-4">
      <p id="about">At Art World Hub, we're passionate about making art accessible to everyone. 
        <br><br>Our mission is to create a platform that connects artists, enthusiasts, collectors, and industry professionals in a vibrant online community.</p>
    </div>
    <div class="col-8">
      <img src="image/bg4.jpg" style="height: 400px; width: 100%;">
    </div>
  </div>
</div>
<h2>New Arrivals</h2>
<section id="section">
  
<div class="container row">
  <div class="col-4" id="gallery">
    <img src="image/a1.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
  <div class="col-4" id="gallery">
    <img src="image/a2.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
  <div class="col-4" id="gallery">
    <img src="image/a3.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
</div>
<div class="container row">
  <div class="col-4" id="gallery">
    <img src="image/a4.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
  <div class="col-4" id="gallery">
    <img src="image/a5.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
  <div class="col-4" id="gallery">
    <img src="image/a6.jpg" style="width: 100%;height: auto;">
    <a href="inquiry.php" class="action_btn">Enquiry</a>
    <a href="purchase_art.php" class="action_btn">Order</a>
  </div>
</div>

</section>

<!--section class="artworks">
  
  <div class="artwork">
    <img src="image/a1.jpg" alt="Artwork 1">
    <h3>Artwork Title 1</h3>
    <p>Artist: Artist Name 1</p>
    <p>Price: $1000</p>
</div>
<div class="artwork">
    <img src="artwork2.jpg" alt="Artwork 2">
    <h3>Artwork Title 2</h3>
    <p>Artist: Artist Name 2</p>
    <p>Price: $800</p>
</div>

  < Artwork listings go here>
</section-->

<div class="contact">
  
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
        <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom:10px;">Submit</button>
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
          <a href="mailto:info@example.com">krishnavadadoriya026@gmail.com</a>
        </address>
      </div>
    </div>
  </div>
  
<!-- footer section -->
<footer class="footer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6">
          <p>
            <marquee>Thank you for visiting this website.&copy; 2023 Art Gallery. All Rights Reserved.</marquee>
        
           

          </p>
        </div>
        <div class="col-xl-6">
          <div class="link_box">
            <a class="" href="index.php">
              Home
            </a>
            <a class="" href="about.php">
              About
            </a>
            <a class="" href="portfolio.php">
              Portfolio
            </a>
           
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->
  <script>
    const toggleBtn=document.querySelector(".toggle_btn")
    const toggleBtnItem=document.querySelector(".toggle_btn i")
    const dropDownMenu=document.querySelector(".dropdown-menu")
    toggleBtn.onclick=function (){
        dropDownMenu.classList.toggle('open')
    }
  </script>
  
</body>
</html>
