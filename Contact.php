
  
<?php

 session_start();
         
          $count=0;
        if (isset($_SESSION['cart']))
         {
          $count=count($_SESSION['cart']);
      
          # code...
        }
?>

  <!------------------made with love......-->

  <!DOCTYPE html>
  <html>
  <head>

  	<html lang="en">
	<link rel="icon" href="img\th (1).jfif" height="20%"/>
	<title>Index page</title>
	<!-- for-mobile-apps -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store"/>
    <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens. online Vegetables and fruits Shopping now made easy. Order Vegetables and fruits online with door step delivery all over Chennai at the best price & quality with get free home delivery."/>

     
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

     <!-- bootystrap java script---->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

    <!----coustum styles sheet--->
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

  	<div class="container-fluid head">
  			<div class="row">
  				<div class="col-md-8">

  					<div class="icon">
  					<a href="">	<i class="fa fa-facebook-official" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-instagram" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-twitter" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
  					</div>
  					
  				</div>
  				
  				<div class="col-md-4 ">
  					<div class="icon2">
  					<i class="fa fa-mobile" aria-hidden="true"></i><p>+91 6370126361</p>
  				</div>
  				</div>
  			</div>
  		
  	</div>

  	<div class="container">
  		<div class="row">

  			<div class="col-md-4">
  			 <div class="brand">
  			 	 <h2><span>V</span>-Kart</h2>
  			 </div>	
  			</div>
  			<div class="col-md-4">
  				<div class="form">
  				<form method="post">
                  <input type="search" name="search" required="" placeholder="Search your Iteams...">
                  <input type="submit" name=""> 					
  				</form>
  			</div>
  			</div>
  			<div class="col-md-4">
  				<div class="icon3">
  					<a href="https://goo.gl/maps/ZQUnuedvt6E5mjjv5"> <i class="fa fa-map-marker" aria-hidden="true">Location</i></a>
  		  <a  href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Add To Card(<?php echo $count; ?>)</i></a>
  				</div>
               
  			</div>


  		</div>
  		
  	</div>

    <!--------------------navbar....================------------m_c_1_4_3-------------->

      <nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">V-kart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="vegetables.php">Vegetables</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Fruitd.php">Fruits</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="Logup.php">Logup</a>
          
      </li>
     
    </ul>
    
  </div>
</nav>

<!--end of nav---mc_-->
  <div class="container">
    <div class="Contact">
        <h3> CONTACT US</h3>
        <hr>
    </div>
    
  </div>

  <div class="container Contact">
    <div class="row">
      <div class="col-md-6 col-xs-12">

         <h4>SEND A MESSAGE</h4>
                      <form method="post" name="form" onsubmit="return(validate())">
                          <div class="form-group">
                            <label>Name:</label>
                            <input name="fname" type="text" class="form-control" id="fname" placeholder="Enter your Full Name" >              
                            </div>

                            <div class="form-group">
                            <label>Phone:</label>
                            <input name="phone" type="text" class="form-control" placeholder="Enter your Phone Number.." >                
                             </div>

                          <div class="form-group">
                          <label>Email:</label>
                          <input name="email" type="text"  class="form-control" placeholder="Enter your Email Name" >
                           </div>

                           <div class="form-group">
                          <label>Subject:</label>
                          <input name="Subject" type="text"  class="form-control" type="text" placeholder="Enter your Subject" >
                           </div>

                           <div class="form-group">
                          <label>Message:</label>
                           <textarea class="form-control" placeholder="Type Something .." id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                           <input type="submit" name="sub" value="Send Now">
                       </form>
          
        
      </div>
      <div class="col-md-6 col-xs-12">
        
          <h4>LOCATION & ADDRESS</h4>


           <p>Email:-mbalaram886@gmail.com</p>
            <p>Phone:-+91 6370126361</p>
            <p>Address:-Via-Pital,Pin:-761102,Bramnhan-shai,Ganjam,Odisha,India</p>

           
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d448.52934432418186!2d84.7287378!3d19.5399944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a22b3c90c511c39%3A0x80c98e4bc490af05!2sSantosh%20general%20store!5e1!3m2!1sen!2sin!4v1619601990233!5m2!1sen!2sin" width="100%" height="50%" style="border-radius:10px; background: #0b650c ; " allowfullscreen="" loading="lazy"></iframe>

      </div>
      
    </div>
    
  </div>
  <br>
    <!---footer part--->

    <div class="container-fluid button_link">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3>INFORMATION</h3>
            <div class="imp_link">
              <a href="">Home</a>
              <a href="">Vegitables</a>
              <a href="">Fruits.</a>
              <a href="">About</a>
              <a href="">Contact</a>
            </div>
          </div>


          <div class="col-md-4">
             <h3>MY ACCOUNT</h3>
            <div class="imp_link">
              <a href="">Login</a>
              <a href="">Logout</a>
              <a href="">Logup.</a>
              <a href="">FaQ</a>
              <a href="">Sitemap</a>
            </div>
            
          </div>

          <div class="col-md-4">
            <h3>FOLLOW US</h3>
            <div class="imp_link">
              <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>



    <div class="container-fluid footer">
      
      <h3>© 2021 V-kart . All Rights Reserved | Design by Balaram!</h3>
    </div>
  <script type="text/javascript" src="js/javascript.js"></script>
  </body>
  </html>



