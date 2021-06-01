<?php 
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","car_showroom");

// REGISTER USER
if(isset($_POST['book'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model'];   
    $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	if($numrows1 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model'];         
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['c_id'];
                    }
                }
                 $carupdate = " DELETE from car where model = '".$dbmodelno."' LIMIT 1 ";
                mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into sale2 (customer_id,carmodel) VALUES ('$dbuserid', '$dbmodelno')";
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! the car you searching for is currently not available ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
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
	<Script>
		function enableButton()
{
    var selectelem = document.getElementById('corpusname');
    var btnelem = document.getElementById('seedoc');
    btnelem.disabled = !selectelem.value;
}

	</Script>
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

                			<a href="indexlogin.php" class="nav-item nav-link ">Home</a>
                			<a href="services.php" class="nav-item nav-link ">Brands</a>
                            <a href="booking.php" class="nav-item nav-link active">Booking</a>
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
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>BOOK YOUR CAR !
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="booking.php" method="post" >
                    
           <div>
               <label>Select Your Car Model</label><br>
               
              <select name = "model" ID = 'corpusname' style="width:575px; height: 40px;" >
                <!-- <option value = ""  selected disabled hidden >-Select a Car-</option> -->
                <option value = "" disabled style = ' font-weight: 700'>  Toyota</option>
                
                
				<option value = "Land Cruiser Prado"> &nbsp;&nbsp;&nbsp;&nbsp;Land Cruiser Prado</option>
				<option value = "Fortuner"> &nbsp;&nbsp;&nbsp;&nbsp;Fortuner </option>
				<option value = "Camry"> &nbsp;&nbsp;&nbsp;&nbsp;Camry </option>
				<option value = "Innova Crysta"> &nbsp;&nbsp;&nbsp;&nbsp;Innova Crysta </option>
				<option value = "Etios Cross"> &nbsp;&nbsp;&nbsp;&nbsp;Etios Cross</option>
				
				<option value = "" disabled style = ' font-weight: 700'> Audi </option>
				
				<option value = "R8"> &nbsp;&nbsp;&nbsp;&nbsp;R8</option>
				<option value = "Q7"> &nbsp;&nbsp;&nbsp;&nbsp;Q7 </option>
				<option value = "RS7"> &nbsp;&nbsp;&nbsp;&nbsp;RS7 </option>
				<option value = "A8"> &nbsp;&nbsp;&nbsp;&nbsp;A8</option>
				<option value = "TT"> &nbsp;&nbsp;&nbsp;&nbsp;TT</option>
				
				<option value = "" disabled style = ' font-weight: 700'> BMW </option>
				
				<option value = "M4"> &nbsp;&nbsp;&nbsp;&nbsp;M4 </option>
				<option value = "X6"> &nbsp;&nbsp;&nbsp;&nbsp;X6 </option>
				<option value = "i8"> &nbsp;&nbsp;&nbsp;&nbsp;i8</option>
				<option value = "M3"> &nbsp;&nbsp;&nbsp;&nbsp;M3</option>
				<option value = "X3"> &nbsp;&nbsp;&nbsp;&nbsp;X3 </option>
				
				<option value = ""disabled style = ' font-weight: 700'> Chervolet</option>
				
				<option value = "Trailblazer"> &nbsp;&nbsp;&nbsp;&nbsp;Trailblazer </option>
				<option value = "Cruze"> &nbsp;&nbsp;&nbsp;&nbsp;Cruze</option>
				<option value = "Sail"> &nbsp;&nbsp;&nbsp;&nbsp;Sail</option>
				<option value = "Beat"> &nbsp;&nbsp;&nbsp;&nbsp;Beat </option>
				<option value = "Volt"> &nbsp;&nbsp;&nbsp;&nbsp;Volt</option>
								
				<option value = "" disabled style = ' font-weight: 700'> Aston </option>
				
				<option value = "Db11"> &nbsp;&nbsp;&nbsp;&nbsp;Martin Db11 </option>
				<option value = "Rapide"> &nbsp;&nbsp;&nbsp;&nbsp;Martin Rapide</option>
				<option value = "Vanquish"> &nbsp;&nbsp;&nbsp;&nbsp;Martin Vanquish</option>
				<option value = "Vantage"> &nbsp;&nbsp;&nbsp;&nbsp;Martin Vantage</option>
				<option value = "vulcan"> &nbsp;&nbsp;&nbsp;&nbsp;vulcan</option>	

				<option value = "" disabled style = ' font-weight: 700'> Mitsubishi </option>
				
				<option value = "Cedia"> &nbsp;&nbsp;&nbsp;&nbsp;Cedia </option>
				<option value = "Lancer"> &nbsp;&nbsp;&nbsp;&nbsp;Lancer</option>
				<option value = "Montero">  &nbsp;&nbsp;&nbsp;&nbsp;Montero</option>
				<option value = "Outlander"> &nbsp;&nbsp;&nbsp;&nbsp;Outlander </option>
				<option value = "Pajero"> &nbsp;&nbsp;&nbsp;&nbsp;Pjero</option>
				<!-- <option value = "" disabled> </option> -->
			</select>
             </div>
             
             <div><br>
                <button id = "seedoc" type="submit" name="book" class="btn btn-warning" value="book" style= 'border-width: 0'>Book the car</button>
             </div>
             
         </form>     
          </div>
          
         
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>








<?php include "./footer.html"?>

</body>
</html>