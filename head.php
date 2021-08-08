<div class="head">
				<h1 class="title">Railway Management System</h1>
			</div>
			<div class="subheader">
			<ul>
				<li><a href="page1.php">HOME</a></li>||
				<li><a href="page2.php">TRAIN SCHEDULE</a></li>||
				
				<?php
						//checker function logged in or not
					
					if(!(isset($_SESSION['phone'])) or !(isset($_SESSION['pass'])) )
					{
						unset($_SESSION['phone']);
						unset($_SESSION['pass']);
						
				?>

				<li style="float: right; border: 1px solid gray; border-radius: 5px; padding:1px;  cursor: pointer;color: white; background-color: #00b3b3;" onclick="fac()">LOGIN</li>
				<?php }
					else
					{?>
					  <li style="float: right; border: 1px solid gray; border-radius: 5px; padding:1px;  cursor: pointer;color: white; background-color: #00b3b3;" "><a href="page1.php?logout=yes">Log Out</a></li>
					  <li><a href="page3.php">RESERVATION</a></li> ||
						<li><a href="page4.php">BOOKING HISTORY</a></li>||

					  <?php	
				}
				session_write_close();
			?>

				<li style="float: right; border: 1px solid gray; border-radius: 5px; padding:1px;  cursor: pointer;color: white; background-color: #00b3b3;" onclick="facSign()">SIGNUP</li>
				<li><a href="aboutus.php">ABOUT US</a></li>||



				<script type="text/javascript">
							
					function fac()
					{								
						document.getElementById('popup').style.display='block';	
					}
					function facclose(){
						document.getElementById('popup').style.display='none';
					}
					function facSign(){
						document.getElementById('popup').style.display='none';
						document.getElementById('popupS').style.display='block';	
					}
					function faccloseS(){
						document.getElementById('popupS').style.display='none';
					}

				</script>

			</ul>
			</div>