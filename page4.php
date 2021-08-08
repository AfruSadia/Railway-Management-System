<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin">
	<title>Booking History</title>
	<link rel="stylesheet" href="style1.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
		<?php 
			include("login.php");
		?>




		<div class="background">
			<?php 
				include("head.php");
			?>
			<div class="aboutusbody">
				<!-- <div class="Saerch">
					<form>
					Search Train:
					<input type="text" name="username"  >
					From:
					<input type="text" name="username"  >
					To:
					<input type="text" name="username"  >
					<input type="submit" value="Done">
					<input type="reset" value="Reset">
					</form>
				</div> -->
				<div class="tablediv">
				<table  >
					<style>
						th{
							background-color: #4dffd2;
						}
						table, th, td {
						border: 2px solid gray;
						border-collapse: collapse;
						}
						th, td {
						padding: 5px;
						text-align: center;
						}
						table {
							border-spacing: 15px;
							width:100%;
						}
					</style>
	<?php
	
?>				
					
					
				<?php
	// $s = "localhost";
	// $u = "afrin";
	// $p = "afrin";
	// $db = "train schedule";

	// // Create connection
	// $conn = mysqli_connect($s, $u, $p, $db);
	// if (!$conn) {
 //    die("Connection failed: " . mysqli_connect_error());
	// }
	//echo "Connected successfully";
	$sql="select * from afrin";
	  
	$res=mysqli_query($conn,$sql);
	echo '<table border="2">';
	echo '<tr>';
		echo '<th>'.'Serial_No'.'</th>';
		echo '<th>'.'Name'.'</th>';
		echo '<th>'.'Age'.'</th>';
		echo '<th>'.'DepartureFrom'.'</th>';
		echo '<th>'.'DepartureTo'.'</th>';
		echo '<th>'.'Class'.'</th>';
		echo '<th>'.'DateOfJourney'.'</th>';
		
	echo '</tr>';
	
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['Serial_No'].'</td>';
		echo '<td>'.$arr['Name'].'</td>';
		echo '<td>'.$arr['Age'].'</td>';
		echo '<td>'.$arr['DepartureFrom'].'</td>';
		echo '<td>'.$arr['DepartureTo'].'</td>';
		echo '<td>'.$arr['Class'].'</td>';
		echo '<td>'.$arr['DateOfJourney'].'</td>';
		
		echo '</tr>';
	}
	echo '</table>';

?>



				</div>	
			
			
			
				
			</div>
		<footer class="footer">
			<p align="center">Bangladesh Railway website is optimized for Reservation and information. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 2019 by Refsnes Data. All Rights Reserved.
			Powered by Sadia Akter Afrin.<br>Copyright © all reserved here</p>
			
		</footer>
	
	</body>

</html>
