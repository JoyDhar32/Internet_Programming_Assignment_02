<?php
include('header.php');
include('manage_cart.php');
?>

<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
			<div class="col-lg-8 ftco-animate">
				<div class="text w-100 text-center mb-md-5 pb-5" style="padding-bottom:15px;">
					<h1 class="mb-5">Fast &amp; Easy Way To Rent A Car</h1>
					<a href="booking_history.php" class="btn btn-info py-4 px-5">
						Rental History
					</a>

				</div>

			</div>
		</div>
	</div>
</div>
</div>



<section class="ftco-section bg-light">
	<div class="container">


		<div class="">
			<div class="row" id="car-list"></div>
		</div>

		<script>
			$(document).ready(function() {
				$.ajax({
					url: 'cars.json',
					dataType: 'json',
					success: function(data) {
						// Data is loaded successfully, perform necessary operations
						displayCarData(data);
					},
					error: function() {
						// Error occurred while loading JSON file
						$('#car-list').text('Error loading car data.');
					}
				});
			});

			function displayCarData(data) {
				// Clear the car-list div before populating with new data
				document.getElementById('car-list').innerHTML = '';

				// Iterate through the car data and create HTML elements to display it
				data.forEach(function(car) {
					var carInfo = '<div class="col-lg-4 col-md-6 col-sm-12">' +
						'<form action ="" method="POST"' +
						'<div class="card car-card mb-3">' +
						'<img src="' + car.image + '" class="card-img-top" style="width: 100%;height:200px;" alt="Car Image">' +
						'<div class="card-body">' +
						'<input type="hidden" name="image" value=' + car.image + ' />' +

						'<strong class="card-title ">' + car.make + "-" + car.model + "-" + car.year + '</strong>' +
						'<input type="hidden" name="title" value=' + car.make + '-' + car.model + '-' + car.year + ' />' +

						'<p class="card-text">Milage: ' + car.mileage + '</p>' +
						'<input type="hidden" name="mileage" value=' + car.mileage + ' />' +

						'<p class="card-text">Fuel_Type: ' + car.fuel_type + '</p>' +
						'<input type="hidden" name="fuel_type" value=' + car.fuel_type + ' />' +

						'<p class="card-text">Seats: ' + car.seats + '</p>' +
						'<input type="hidden" name="seats" value=' + car.seats + ' />' +

						'<p class="card-text"><b>Price:</b> ' + car.rental_price + '$' + '</p>' +
						'<input type="hidden" name="price" value=' + car.rental_price + ' />' +

						'<p class="card-text">Availability: ' + (car.availability ? "<span style='color:green;font-weight:bold'> Available </span>" : "<span style='color:red;font-weight:bold'> Not Avalable </span>") + '</p>' +
						'<input type="hidden" name="availability" value=' + car.availability + ' />' +

						'<p class="card-text card-text-extended"style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;">Description:' + car.description + '</p>' +
						'<p class="d-flex mb-0 d-block"> <input type="submit" name="submit" class="btn btn-primary py-2 mr-1" value="Add to Cart"/> </p>' +

						'</div>' +
						'</div>' +
						'</div>';

					document.getElementById('car-list').innerHTML += carInfo;
				});
			}
		</script>



	</div>
</section>



<?php include("footer.php");
include('message.php'); ?>