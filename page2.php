<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin">
	<title>TRAIN SCHEDULE</title>
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
	$sql="select * from trainschedule";
	  
	$res=mysqli_query($conn,$sql);
	echo '<table border="2">';
	echo '<tr>';
		echo '<th>'.'Serial_No'.'</th>';
		echo '<th>'.'Train No'.'</th>';
		echo '<th>'.'Train Name'.'</th>';
		echo '<th>'.'Destination'.'</th>';
		echo '<th>'.'Depart_time'.'</th>';
		echo '<th>'.'Arrival'.'</th>';
		echo '<th>'.'Arrival_time'.'</th>';
		echo '<th>'.'Off Day'.'</th>';
		echo '<th>'.'Status'.'</th>';
	echo '</tr>';
	
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['Serial_No'].'</td>';
		echo '<td>'.$arr['Train No'].'</td>';
		echo '<td>'.$arr['Train Name'].'</td>';
		echo '<td>'.$arr['Destination'].'</td>';
		echo '<td>'.$arr['Depart Time'].'</td>';
		echo '<td>'.$arr['Arrival'].'</td>';
		echo '<td>'.$arr['Arrival Time'].'</td>';
		echo '<td>'.$arr['Off Day'].'</td>';
		echo '<td>'.$arr['Status'].'</td>';
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
