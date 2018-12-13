<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>eCommerce Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link href="styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- top Starts -->
	<div id="top">
		<!-- container Starts -->
		<div class="container">
			<!-- col-md-6 offer Starts -->
			<div class="col-md-6 offer">
				<a href="#" class="btn btn-success btn-sm">Welcome :Guest</a>
				<a href="#">Shopping Cart Total Price: $279, Total Items 3</a>
			</div>
			<!-- col-md-6 offer Ends -->
			<!-- col-md-6 Starts -->
			<div class="col-md-6">
				<!-- col-md-6 Starts -->
				<ul class="menu">
					<!-- menu Starts -->
					<li>
						<a href="customer_register.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>                  
					</li>
					<li>
						<a href="cart.php">Go to Cart</a>
					</li>
					<li>
						<a href="checkout.php"> Login </a>                  
					</li>
				</ul>
				<!-- menu Ends -->
			</div>
			<!-- col-md-6 Ends -->
		</div>
		<!-- container Ends -->
	</div>
	<!-- top Ends -->	

	<!-- navbar navbar-default Starts -->
	<div class="navbar navbar-default" id="navbar">
		<!-- container Starts -->
      <div class="container" >
      	<!-- navbar-header Starts -->
         <div class="navbar-header">
         	<!--- navbar navbar-brand home Starts -->
            <a class="navbar-brand home" href="index.php" >
               <img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
               <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >
            </a>
            <!--- navbar navbar-brand home Ends -->
         </div>
         <!-- navbar-header Ends -->
			
			<!-- navbar-collapse collapse Starts -->
			<div class="navbar-collapse collapse" id="navigation" >
				<!-- padding-nav Starts -->
				<div class="padding-nav" >
					<!-- nav navbar-nav navbar-left Starts -->
					<ul class="nav navbar-nav navbar-left">
						<li class="active">
							<a href="index.php"> Home </a>
						</li>
						<li>
							<a href="shop.php"> Shop </a>
						</li>
						<li>
							<a href='checkout.php' >My Account</a>                     
						</li>
						<li>
							<a href="cart.php"> Shopping Cart </a>
						</li>
						<li>
							<a href="contact.php"> Contact Us </a>
						</li>
					</ul>
					<!-- nav navbar-nav navbar-left Ends -->
				</div>
				<!-- padding-nav Ends -->

				<!-- btn btn-primary navbar-btn right Starts -->
				<a class="btn btn-primary navbar-btn right" href="cart.php">
					<i class="fa fa-shopping-cart"></i>
					<span> 3 items in cart </span>
				</a>
				<!-- btn btn-primary navbar-btn right Ends -->

				<!-- navbar-collapse collapse right Starts -->
				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				<!-- navbar-collapse collapse right Ends -->
				
				<!-- collapse clearfix Starts -->
				<div class="collapse clearfix" id="search">
					<!-- navbar-form Starts -->
					<form class="navbar-form" method="get" action="results.php">
						<!-- input-group Starts -->
						<div class="input-group">
							<input class="form-control" type="text" placeholder="Search" name="user_query" required>
							<!-- input-group-btn Starts -->
							<span class="input-group-btn">
								<button type="submit" value="Search" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</span>
							<!-- input-group-btn Ends -->
						</div>
						<!-- input-group Ends -->
					</form>
					<!-- navbar-form Ends -->
				</div>
				<!-- collapse clearfix Ends -->
			</div>
			<!-- navbar-collapse collapse Ends -->
      </div>   
      <!-- container Ends -->

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >
			<span class="sr-only">Toggle Navigation</span>
			<i class="fa fa-align-justify"></i>
		</button>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
			<span class="sr-only">Toggle Search</span>
			<i class="fa fa-search" ></i>
		</button>
   </div>
   <!-- navbar navbar-default Ends -->

	<!-- slider container Starts -->
	<div class="container" id="slider">
		<!-- col-md-12 Starts -->
		<div class="col-md-12">
			<!-- carousel slide Starts --->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- carousel-indicators Starts -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- carousel-indicators Ends -->

				<!-- carousel-inner Starts -->
				<div class="carousel-inner">
					<div class='item active'>
						<a href='http://localhost/Ecom_store/shop.php'><img src='admin_area/slides_images/1.jpg'></a>
					</div>
					<div class='item'>
						<a href='htttp://www.computerfever.com/services'><img src='admin_area/slides_images/2.jpg'></a>
					</div>
					<div class='item'>
						<a href='http://urdustories.computerfever.com'><img src='admin_area/slides_images/3.jpg'></a>
					</div>
					<div class='item'>
						<a href='http://www.computerfever.com'><img src='admin_area/slides_images/slide-5.jpg'></a>
					</div>
				</div>
				<!-- carousel-inner Ends -->

				<!-- left carousel-control Starts -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"> </span>
					<span class="sr-only"> Previous </span>
				</a>
				<!-- left carousel-control Ends -->
				<!-- right carousel-control Starts -->
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"> </span>
					<span class="sr-only"> Next </span>
				</a>
				<!-- right carousel-control Ends -->
			</div>
			<!-- carousel slide Ends --->
		</div>
		<!-- col-md-12 Ends -->
	</div>
	<!-- slider container Ends -->

	<!-- advantages Starts -->
	<div id="advantages">
		<!-- container Starts -->
		<div class="container">
			<!-- same-height-row Starts -->
			<div class="same-height-row">
				<!-- col-sm-4 Starts -->
				<div class="col-sm-4">
					<!-- box same-height Starts -->
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart" ></i>
						</div>
						<h3><a href="#"> BEST PRICES </a></h3>
						<p>You can check on all others sites about the prices and than compare with us.</p>
					</div>
					<!-- box same-height Ends -->
				</div>
				<!-- col-sm-4 Ends -->
				<div class="col-sm-4">
					<!-- col-sm-4 Starts -->
					<div class="box same-height">
						<!-- box same-height Starts -->
						<div class="icon">
							<i class="fa fa-heart" ></i>
						</div>
						<h3><a href="#"> 100% SATISFACTION GUARANTEED From Us </a></h3>
						<p>Free returns on everything for 3 months.</p>
					</div>
					<!-- box same-height Ends -->
				</div>
				<!-- col-sm-4 Ends -->
				<div class="col-sm-4">
					<!-- col-sm-4 Starts -->
					<div class="box same-height">
						<!-- box same-height Starts -->
						<div class="icon">
							<i class="fa fa-heart" ></i>
						</div>
						<h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
						<p>We are known to provide best possible service ever</p>
					</div>
					<!-- box same-height Ends -->
				</div>
				<!-- col-sm-4 Ends -->
			</div>
			<!-- same-height-row Ends -->
		</div>
		<!-- container Ends -->
	</div>
	<!-- advantages Ends -->

	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>