
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
        <h3>FRUITS</h3>
        <hr>
        
      </div>
      
    </div>




    <!---===-------------vegetables------------>

     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/fruits/1531141114_apple-washington.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>apple-washington</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531141114_apple-washington.jpg">
                     <input type="hidden" name="Iteamname" value=">apple-washington">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/fruits/1531141352_banana-yelakki.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>banana-yelakki</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531141352_banana-yelakki.jpg">
                     <input type="hidden" name="Iteamname" value="banana-yelakki">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/1531142452_guava-white.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Guava-white</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">18/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">9/-</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142452_guava-white.jpg">
                     <input type="hidden" name="Iteamname" value="Guava-white">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/1531142511_amla.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>amla</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">24/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">6/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142511_amla.jpg">
                     <input type="hidden" name="Iteamname" value="amla">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 



  <br>

     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/fruits/1531142657_papaya.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Papaya</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142657_papaya.jpg">
                     <input type="hidden" name="Iteamname" value="Papaya">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/fruits/1531142497_pinapple2.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Pinapple</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
               <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142497_pinapple2.jpg">
                     <input type="hidden" name="Iteamname" value="Pinapple">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/1531142636_pomogranate-kabul.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>pomogranate-kabul</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">18/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">9/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142636_pomogranate-kabul.jpg">
                     <input type="hidden" name="Iteamname" value="pomogranate-kabul">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/1605685243_Grapes-green-seedless.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Grapes-green</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">24/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">6/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1605685243_Grapes-green-seedless.jpg">
                     <input type="hidden" name="Iteamname" value="Grapes-green">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>
      
    </div>

   </div> 


<br>


     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="img/fruits/mango.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Papaya</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                       <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                      <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/mango.jpg">
                     <input type="hidden" name="Iteamname" value="Papaya">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
       
                  </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="img/fruits/1531142475_sapotta.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>sapotta</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">50/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">25/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531142475_sapotta.jpg">
                     <input type="hidden" name="Iteamname" value="sapotta">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/images_orange_czj9k2.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Orange</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">35/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">18/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">9/-</i>
                        <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/images_orange_czj9k2.jpg">
                     <input type="hidden" name="Iteamname" value="Orange">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>  



        
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="img/fruits/1531141529_sweetlime.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Sweetlime</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="fa fa-inr" aria-hidden="true">24/-</i>|
                     <span>500gm</span><i class="fa fa-inr" aria-hidden="true">12/-</i>|
                     <span>250gm</span><i class="fa fa-inr" aria-hidden="true">6/-</i>
                        <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="img/fruits/1531141529_sweetlime.jpg">
                     <input type="hidden" name="Iteamname" value="Sweetlime">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                    </div>   
        
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
  
     <script>
      function msg()
      {
        alert("Add successfully..");
      }
    </script>
  </body>
  </html>



