<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Countdown</title>

	<style type="text/css">

	</style>
</head>
<body>

<div class="container">
	<p id="countdown"></p>
</div>





<script>

// Used
countdown("2015-02-08 00:00");




// NOT REQUIRE JQUERY
function countdown(timeEnd) {

	// set the date we're counting down to
	var target_date = new Date(timeEnd).getTime();
	
	// variables for time units
	var days, hours, minutes, seconds;

	// get tag element
	var countdown = document.getElementById("countdown");

	calculate_countdown();
	setInterval(function () {
	    calculate_countdown();
	}, 1000);



	function calculate_countdown() {
		// find the amount of "seconds" between now and target
		var current_date = new Date().getTime();
		var seconds_left = (target_date - current_date) / 1000;

		days = parseInt(seconds_left / 86400);
		seconds_left = seconds_left % 86400;
		 
		hours = parseInt(seconds_left / 3600);
		seconds_left = seconds_left % 3600;
		  
		minutes = parseInt(seconds_left / 60);
		seconds = parseInt(seconds_left % 60);

		countdown.innerHTML = days + "d, " + hours + "h, " + minutes + "m, " + seconds + "s"; 
	}
}

</script>


</body>
</html>