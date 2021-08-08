<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin">
	<title>RESERVATION</title>
	<link rel="stylesheet" href="style1.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
		<?php 
			include("login.php");
		?>


		<?php 
				if(isset($_REQUEST['submit']))
					{
						$Name=trim($_REQUEST['Name']);
						$Age=trim($_REQUEST['Age']);
						$DepartureFrom=trim($_REQUEST['places_from']);
						
						$DepartureTo=trim($_REQUEST['places_to']);
						$Class=trim($_REQUEST['class']);
						$DateOfJourney=trim($_REQUEST['journey_data']);
						
						 
						echo 'testing';
						echo $Name,$Age,$DepartureFrom,$DepartureTo,$Class,$DateOfJourney;
						
						$sql="insert into afrin(Name,Age,DepartureFrom,DepartureTo,Class,DateOfJourney)
									values ('$Name','$Age','$DepartureFrom','$DepartureTo','$Class','$DateOfJourney') ";
						
						mysqli_query($conn,$sql);
						
						
					}
		?>	

		<div class="background">
			<?php 
				include("head.php");
			?>
			<div class="aboutusbody">
					<form style="text-align: center; padding: 10px;" action=""  method="post"">
					Name:
					<input type="text" name="Name"  ><br><br>
					Age:
					<input type="text" name="Age"><br><br>

					Departure From:
					<select name="DepartureFrom">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					</select>
					<br><br>
					Departure To:
					<select name="DepartureTo">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					</select>
					<br><br>
					Class :
					<input type="radio" name="Class" value="" checked> First class Chair
					Date of journey: <input type="text" name="DateOfJourney"><br><br>
					<input type="submit" name="submit" value="Book Your Ticket">
					</form>
							
			</div>
		<footer class="footer">
			<p align="center">Bangladesh Railway website is optimized for Reservation and information. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 2019 by Refsnes Data. All Rights Reserved.
			Powered by Sadia Akter Afrin.<br>Copyright © all reserved here</p>
			
		</footer>
	
	</body>

</html>

