<?php 
session_start(); 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>HERTZ-UTS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css?v=1.1">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css?v=3.0" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		.car-card {
			padding: 10px;
		}

		/* CSS styles for the right-side section */
		.right-section {
			width: 250px;
			height: 100%;
			background-color: #f1f1f1;
			position: fixed;
			right: -250px;
			transition: right 0.3s;
		}

		/* CSS styles for the button */
		.open-btn {
			background-color: #f1f1f1;
			border: none;
			color: #333;
			cursor: pointer;
			padding: 10px 15px;
			font-size: 16px;
		}

		/* CSS styles to shift the main content when the right section is open */
		.shift-content {
			margin-right: 250px;
			transition: margin-right 0.3s;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"><span>Hertz-UTS</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<?php
$count = 0;
 if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
 }
                    ?>
                    
                    <li class="nav-item" style="background:#1089ff ;"><a href="mycart.php" class="nav-link" style="color:white !important"><i class='fas fa-cart-plus' style='font-size:24px;color:white'></i> Car Reservation (<span style="font-weight:bold;color:orange;"><?php echo $count; ?></span>)</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
