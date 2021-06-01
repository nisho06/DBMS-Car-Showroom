
<?php
    session_start();

if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
?>






<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free Website Template" name="keywords">
	<meta content="Free Website Template" name="description">

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/header.css" rel="stylesheet" type="text/css" media="all" />

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>





<body>
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container-fluid">
		<a href="indexlogin.php" class="navbar-brand">Auto Express</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
			<div class="navbar-nav ml-auto">

                			<a href="indexlogin.php" class="nav-item nav-link active">Home</a>
                			<a href="services.php" class="nav-item nav-link">Brands</a>
                            <a href="booking.php" class="nav-item nav-link">Booking</a>
                            <a href="orders.php" class="nav-item nav-link">Orders</a>
                            <a href="logout.php" class="nav-item nav-link">Logout</a>
                            <a class="nav-item nav-link"> Welcome  <?=$_SESSION['s_name'];?> !! </a>
			</div>
		</div>
	</div>
</div>
<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">

			</div>
		</div>
	</div>
</div>

<div class="main-content">
	<div class="wrap">
		<div class="main-box">
		   <div class="box_wrapper"><h1>Car Brands In Our Showroom</h1></div>
			<div class="section group">

				<div class="col_1_of_4 span_1_of_4">
					<img src="images/Toyota.jpg" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">TOYOTA</p>
					</div>
					<div class="Details">
				     <a href="toyota.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>


				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/audi.jpg" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">AUDI</p>
					</div>
					<div class="Details">
				     <a href="audi.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>


				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/bmw.jpg" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">BMW</p>
					</div>
					<div class="Details">
				     <a href="bmw.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>


				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/Chevrolet.jpg" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">CHEVROLET</p>
					</div>
					<div class="Details">
				     <a href="chervolet.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>

				<div class="col_1_of_4 span_1_of_4">
					<img src="images/Aston%20Martin.png" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">ASTON MARTIN</p>
					</div>
					<div class="Details">
				     <a href="aston%20martin.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>

				<div class="col_1_of_4 span_1_of_4">
					<img src="images/Mitsubishi.jpg" alt="" style="width: 300px; height: 200px;"/>
					<div class="grid_desc">
						<p class="title">MITSUBISHI</p>
					</div>
					<div class="Details">
				     <a href="mitsubishi.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">cars<span></span></a></div>
				</div>


				<div class="clear"></div>
			</div>


		</div>
	</div>
</div>




<br><br>
<?php include "./footer.html"?>

</body>
</html>
        
        
        
 
        
        
        
        
        
        
        
        
        
        

    	
    	
            