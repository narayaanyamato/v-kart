
  

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
      <li class="nav-item active">
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
          <a class="dropdown-item" href="Logup">Logup</a>
          
      </li>
     
    </ul>
    
  </div>
</nav>

<!--end of nav---mc_-->

  	<div class="container-fluid">
      <div class="container vegetables">
        <h3>VEGETABLES</h3>
        <hr>
        
      </div>
      
    </div>




    <!---===-------------vegetables------------>

     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/veg/1531136946_ivy-gourd.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Parwal</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531136946_ivy-gourd.jpg">
                     <input type="hidden" name="Iteamname" value="Parwal">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/veg/1531140168_brinjal-vari.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Brinjal Vari</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140168_brinjal-vari.jpg">
                     <input type="hidden" name="Iteamname" value="Brinjal Vari">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531136995_bitter--gourd.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Bitter Gourd</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">18/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">9/-</i>
                        <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531136995_bitter--gourd.jpg">
                     <input type="hidden" name="Iteamname" value="Bitter Gourd">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531136694_tomato-local.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Tomato</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">24/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">6/-</i>
                    <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531136694_tomato-local.jpg">
                     <input type="hidden" name="Iteamname" value="Tomato">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 





     <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/veg/1531140750_cabbage2.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>White Cabbage</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140750_cabbage2.jpg">
                     <input type="hidden" name="Iteamname" value="White Cabbage<">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/veg/1531140098_ladies-finger.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Ladies-finge</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140098_ladies-finger.jpg">
                     <input type="hidden" name="Iteamname" value="Ladies-finge">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531137046_bottle-gourd.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>bottle-gourd</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">18/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">9/-</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531137046_bottle-gourd.jpg">
                     <input type="hidden" name="Iteamname" value="bottle-gourd">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531140777_cauli-flower.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Cauliflower</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">24/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">6/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140777_cauli-flower.jpg">
                     <input type="hidden" name="Iteamname" value="Cauliflower">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 





     <div class="container" style="margin-bottom: 30px;">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/veg/1531137330_radish.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>radish</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">45/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531137330_radish.jpg">
                     <input type="hidden" name="Iteamname" value="radish">
                     <input type="hidden" name="price" value="45">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/veg/1531137157_yellow-pumkin.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Yellow Pumpkin- Cut</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531137157_yellow-pumkin.jpg">
                     <input type="hidden" name="Iteamname" value="Yellow Pumpkin- Cut">
                     <input type="hidden" name="price" value="25">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531136905_cucumber.jpg" width="100%" height="300px">
                <div class="caption">
                  <p> Cucumber</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">55/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">27/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">15/-</i>
                    <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531136905_cucumber.jpg">
                     <input type="hidden" name="Iteamname" value="Cucumber">
                     <input type="hidden" name="price" value="55">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531140721_raw-banana.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Raw Banana</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">20/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">10/-</i>|
                    
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140721_raw-banana.jpg">
                     <input type="hidden" name="Iteamname" value="Raw Banana">
                     <input type="hidden" name="price" value="20">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 
    
     <div class="container" style="margin-bottom: 30px;">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/veg/1531137220_beetroot.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Beetroot</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">55/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">23/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531137220_beetroot.jpg">
                     <input type="hidden" name="Iteamname" value="Beetroot">
                     <input type="hidden" name="price" value="55">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/veg/1531140113_gree-capsigum.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Green-capsigum</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">65/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531140113_gree-capsigum.jpg">
                     <input type="hidden" name="Iteamname" value="Green-capsigum">
                     <input type="hidden" name="price" value="65">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1531136728_potato.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>potato</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">17/-</i>|
                    
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1531136728_potato.jpg">
                     <input type="hidden" name="Iteamname" value="potato">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/veg/1605683173_Cluster-Beans.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Cluster-Beans</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                    
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/veg/1605683173_Cluster-Beans.jpg">
                     <input type="hidden" name="Iteamname" value="Cluster-Beans">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 
 
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

    
  
  </body>
  </html>



