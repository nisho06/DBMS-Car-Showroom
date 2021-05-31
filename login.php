<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['your_email']) && !empty($_POST['psw'])) {
    
	$useremail=$_POST['your_email'];
	$pass=$_POST['psw'];
    $db = mysqli_connect("localhost","root","","car_showroom");
    
	$query=mysqli_query($db,"SELECT * FROM customer WHERE email= '".$useremail."' AND pass='".$pass."'");
    
   	$numrows=mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbuseremail=$row['email'];
            $dbpass=$row['pass'];
            $dbusername=$row['name'];    
	    }

        
        if($useremail == $dbuseremail && $pass == $dbpass)
        {

            $_SESSION['s_name']= $dbusername;

            /* Redirect browser */
            header("Location: indexlogin.php");
        }
	} 
    else 
    {
	   $message = "Invalid credentials !";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

} 
    else {
	echo "All fields are required!";
        }
}
?>









<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free Website Template" name="keywords">
	<meta content="Free Website Template" name="description">

	<!-- Template Stylesheet -->
	<link rel="stylesheet" href="css/style_log.css"/>
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
    
    	


	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">

	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    
</head>
<body class="form-v2">

<div class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container-fluid">
	<?php
	if(isset($_SESSION['s_name'])){
		echo '<a href="indexlogin.php" class="navbar-brand">Auto Express</a> ';
	}else {
		echo '<a href="login.php" class="navbar-brand">Auto Express</a> '	;
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
				<a href="contact.php" class="nav-item nav-link">Contact</a>
				<a href="login.php" class="nav-item nav-link active">LogIn</a>
				<a href="register.php" class="nav-item nav-link">Register</a>

			</div>
		</div>
	</div>
</div>

	<div class="page-content" style = "width:30%; margin:10px 20px 5px 200px;">
		<div class="form-v2-content" style="border: 5px inset grey; border-radius:9px">

			<form class="form-detail" action="#" method="post" id="myform">
				<h2>LOGIN</h2>
				
				<div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder = "support@autoexpress.com">
				</div>
								
				<div class="form-row">
					<label for="password">Password:</label>
					<input type="password" id="psw" name="psw" class="input-text"  required>

				
				<div class="form-row-last">
					<input href="home.php" type="submit" name="login" class="register" value="Sign In">
				</div>
			</form>
		</div>
	</div>

</div>
				<img src="./images/login_car.png" height="60%" width="60%" style="position:absolute; left:650px ; top:150px">

		</div>
    </div> 


<?php include "./footer.html"?>



</body>
</html>
    	
    	
            