<html>
<head>
	<title>PNR Status</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body style="background-color:#ebebeb">
	<div class="row" style="margin-top:10%">
		<div class="container">
			<div class="col col-md-12">
			<img src="<?php ?>" alt="My Image">

				<h3 class="text-center bg-primary" style="padding: 7px;">
					Passenger Current Status Enquiry
				</h3>
				<div style="text-align: center;"><input type="text" class="pnr" placeholder="ENTER PNR No." />
					<button type="button" id="status" class="btn btn-success">Get your train status</button>
				</div>
				<table border="1" class="table table-bordered table-responsive text-center" id="journeyDetailsTable">
					<thead>
						<tr class="bg-primary">
							<th><b> Train Number</b></th>
							<th><b>Train Name</b></th>
							<th><b>Journey_date Date <br>(DD-MM-YYYY)</b></th>
							<th><b>Boarding Point</b></th>
							<th><b>reservationUpto</b></th>
							<th><b>Distance</b></th>
							<th><b>Number of passengers</b></th>
							<th><b>chartStatus</b></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="train_number"></td>
							<td class="train_name"></td>
							<td class="journey_date"></td>
							<td class="boardingPoint"></td>
							<td class="reservationUpto"></td>
							<td class="distance"></td>
							<td class="numberofpassengers"></td>
							<td class="chartStatus"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function () {
		$('#status').click(function () {
			var pnr = $('.pnr').val();
			$.ajax({
				url: 'index.php/welcome/get_status',
				dataType: "JSON",
				data: { pnr: pnr },
				success: function (data) {
					$('.train_name').html(data.trainName);
					$('.train_number').html(data.trainNumber);
					$('.journey_date').html(data.dateOfJourney);
					$('.distance').html(data.distance);
					$('.numberofpassengers').html(data.numberOfpassenger);
					$('.boardingPoint').html(data.boardingPoint);
					$('.reservationUpto').html(data.reservationUpto);
					$('.chartStatus').html(data.chartStatus);
				}
			});
		});
	});
</script>
</html>