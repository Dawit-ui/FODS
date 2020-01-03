<?php


?>
<!DOCTYPE html>
<html>
   <head>
      <title>MY KITCHEN </title>
	  <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   </head>
   <body>
   <!---- NavigationBar (<img src="imgs/food1.png">) ---->
   <section id="nav-bar">
     <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#home"><img src="imgs/food1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#promo" >Our Team</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#menu" >Food Menu</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#" >Testimonials</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#" >Contact</a>
      </li>
    </ul>
  </div>
</nav> 
   </section>
   
   
   <!------slider------->
   <div id="slider">
      <div id="headerslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-slide-to="1"></li>
    <li data-target="#headerslider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>My Kitchen Is The Best</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>EAT WHAT U WANT</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>WE HAVE ALL YOU NEED</h5>
	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
   </div>
   
   
   <!---------About--------->
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
            <h2>About Us</h2>
			<div class"about-content">
			My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. My kitchen restaurant was found by Mr. XXXX  in Adama,
			Ethiopia in 2010 G.C with a mission to introduce traditional and foreign food in Adama. 
			Since then My Kitchen has been growing and making more customers in Adama.
			</div>
			<button type="button" class="btn btn-primary">Read More>> </button>
			</div>
			<div class="col-md-6 skills-bar">
            
			<p>Burger</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			<p>Pizza</p>
			<div class="progress">
			<div class="progress-bar" style="width:80%;">80%</div>
			</div>
			<p>Sandwich</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			<p>Juice</p>
			<div class="progress">
			<div class="progress-bar" style="width:50%;">50%</div>
			
			</div>
	
			</div>
         </div>
      </div>
   
   
   </section>
   
   <!-------------services----->
   <section id="services">
      <div class="container">
         <h1>Our Services </h1>
            <div class="row services">
               <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Burger</h3>
				  <p> My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Pizza</h3>
				  <p> My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Sandwich</h3>
				  <p> My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Juice</h3>
				  <p> My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. </p>
               </div>
   
            </div>
   
      </div>
   
   </section>
 
 <!--------------Team Members--------------->
 
 
 <!--------------Promo--------------->
 <section id="promo">
 <div class="container">
 <p> GET GOOD BURGERS AND PIZZA</p> 
 <a href="log/login.php" class="btn btn-primary">Order Now</a>
 </div>
 
 </section>
 
<!--------------menu--------------->

<section id="menu">
<div class="container">
<h1> Food Menu </h1>
<h3>Burgers</h3>
<div class="row">
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="login.php">Order Now</a>
</div>

</div>

</div>
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>

<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>
</div>
</div>



</section>

 
   </body>
</html>