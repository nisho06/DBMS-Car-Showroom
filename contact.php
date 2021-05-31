<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<title>Car Showroom</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free Website Template" name="keywords">
<meta content="Free Website Template" name="description">

<!-- Template Stylesheet -->
<link href="css/style_home.css" rel="stylesheet" type="text/css" media="all" />
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
  
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #059142;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #059142;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 50px auto;
	padding-right: 500px;
}
</style>

</head>
<body>
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
			<?php
	if(isset($_SESSION['s_name'])){
		echo '<a href="indexlogin.php" class="navbar-brand">Auto Express</a> ';
	}else {
		echo '<a href="index.php" class="navbar-brand">Auto Express</a> '	;
		}
	?>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="services.php" class="nav-item nav-link">Brands</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <a href="login.php" class="nav-item nav-link">LogIn</a>
                        <a href="register.php" class="nav-item nav-link">Register</a>

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
<div class="header-bottom">
	<div class="wrap" style = "width:35%; margin:15px 20px 40px 600px;">
		<div class="single"  style="border: 5px inset grey; border-radius:9px">
			<div class="heading">
				<h2 style="color:#343a40 ; font-weight:900 ; font-size:50px">Contact Us</h2>
				<p style = "font-size:20px; width:500px; font-family:Garamond,Times New Roman,Georgia ; margin-left:28px;">If you have any query, please contact us by filling the form below .
				    We will respond you as soon as posible!  </p>
			</div>
			<div class="section group" >
				<div class="col span_2_of_contact">
				  <div class="contact-form">
				  
					    <form method="post" action="contact.php">
					    	<div>
						    	<span style="font-size:20px"><label>Name :-</label></span>
						    	<span style="font-size:20px"><input name="userName" type="text" class="textbox" placeholder="John" style="width:90%"></span>
						    </div>
						    <div>
						    	<span  style="font-size:20px"><label>E-Mail :-</label></span>
						    	<span style="font-size:20px"><input name="userEmail" type="text" class="textbox" placeholder="support@autoexpress.com" style="width:90%"></span>
						    </div>
						    
						    <div>
						    	<span  style="font-size:20px"><label>SUBJECT :-</label></span>
						    	<span style="font-size:20px"><textarea name="userMsg" placeholder="Text Area" style="width:90%"> </textarea></span>
						    </div>
						   <div>
                           <a href="#myModal" class="trigger-btn" data-toggle="modal" >
						   		<span><input type="submit" value="Submit"></span>
                            </a>
						  </div>
                          <div id="myModal" class="modal fade">
								<div class="modal-dialog modal-confirm">
									<div class="modal-content">
										<div class="modal-header">
											<div class="icon-box">
												<i class="material-icons">&#xE876;</i>
											</div>				
											<h4 class="modal-title w-100">Submitted Sucessfully!</h4>	
										</div>
										<div class="modal-body">
											<p class="text-center">We will takecare of the issue</p>
										</div>
										<div class="modal-footer">
										<button class="btn btn-success btn-block" data-dismiss="modal" onclick="window.location.href='contact.php'">Done</button>
										</div>
									</div>
								</div>
						</div>


					    </form>
				  </div>
  				</div>
				
				 <div class="clear"></div> 
				
			  </div>
		  </div>
	</div>
</div>
<?php include "./footer.html"?>

</body>
</html>

    	
    	
            