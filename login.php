<?php

	$s = "127.0.0.1";
	$u = "root";
	$p = "";
	$d = "train_schedule";

	// Create connection
	$conn = new mysqli($s, $u, $p, $d);
	//data insert
	if(isset($_REQUEST['signupcheck']))
		{
			
			$name=trim($_REQUEST['name']);
			$phone=trim($_REQUEST['phone']);
			$add=trim($_REQUEST['address']);
			$email=trim($_REQUEST['email']);
			
			$pass=trim($_REQUEST['password']);

			$sql="insert into reg values ('$name','$phone','$add','$email','$pass')";
			if(mysqli_query($conn,$sql)){
				// $mas="Sign Up Successfully";
				echo "<script type='text/javascript'>alert(\"Sign Up Successfully\");</script>";
			}
			else{
				// $mas="Error: Your ID already used";
				echo "<script type='text/javascript'>alert(\"Sign Up Successfully\");</script>";
			}
			

			
	}
	// if(isset($_POST['username']))
	// {	
	
	// }
	// $uname=$_POST['username'];
	// $password=$_POST['password'];
	
	// $sql="select * from login where username='".$uname."' AND password='".$password."'limit 1 ";
	
	// $result=mysqli_query($conn,$sql);
	// if(mysqli_num_rows($result)==1){
		
		

	// }
	
	// else{
	// 	echo "Error";
	// 	exit();
	// }




?>


<div id="popup" >

		<div class="mainpopup">
			<h6 style="color: white; font-weight: bold; display: inline-block; font-size: 14px;padding: 0px;margin: 0;"> LOG IN </h6>
			<i class="fa fa-close" style="float:right; color:white;display: inline-block; " onclick="facclose()"></i>
			<div class="subpopup">
			<!-- <form >
			
				
				
					USERNAME:
					  <input type="text" name="username"  ><br><br>
					PASSWORD:
					  <input type="password" name="password"><br><br>
					  <hr>
					  
					  <input type="submit" value="Login">					  
					  
			</form> -->
			<?php
					session_start();
					if(isset($_REQUEST['login']))
					{
						$phone=trim($_REQUEST['phone']);
						$pass=trim($_REQUEST['pass']);
						echo $phone;
						//DB checking
						
						// $conn=mysqli_connect('localhost','root','','neub');
						// if(isset($conn)){ echo '</br>Connected Successfully</br>'; }
						$sql="select * from reg where phone='$phone' and pass='$pass' ";
						$res=mysqli_query($conn,$sql);
						if(mysqli_num_rows($res)==1)
						{
							//login successful
							if(isset($_REQUEST['rem']))
							{
								//if user checked on remember me
								setcookie('phone',$phone,time()+86400,"/");
								setcookie('pass',$pass,time()+86400,"/");
							}
							
							
							$_SESSION['phone']=$phone;
							$_SESSION['pass']=$pass;
							
							//echo 'Login Successsful';
						}
						else
						{
							//echo 'Invalid information';
						}
					}
					
					if(isset($_REQUEST['logout']))
					{
						unset($_SESSION['phone']);
						unset($_SESSION['pass']);
						//echo '</br>Logout successful</br>';
					}

					
					
					
				?>
			<form style="text-align: center; padding: 10px;" action=""  method="post">
				Phone No: <input type="text" name="phone" value="<?php if(isset($_COOKIE['phone'])){ echo $_COOKIE['phone']; }?>" required /></br><br>
				Password: <input type="password" name="pass" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass']; }?>" required /></br><br>
				
				<input type="checkbox" name="rem"> Remember ME</br>
				<input type="submit" name="login" value="Login"></br>
				
				
			</form>
			

			


		</div>

	</div>

	
</div>
<div id="popupS" >
	<style type="text/css">
					
					.mainpopupS table {
						width:100%;
					}
					.mainpopupS  th{
						background-color: #b3e6ff;
					}
					.mainpopupS input{
						text-align: center;
						width: 280px;
						height: 30px;
					}
				</style>
		<div class="mainpopupS">
			<h6 style="color: white; font-weight: bold; display: inline-block; font-size: 14px;padding: 0px;margin: 0;"> SIGN UP </h6>
			<i class="fa fa-close" style="float:right; color:white;display: inline-block; " onclick="faccloseS()"></i>
			<div class="subpopupS">

			<form style="text-align: center; padding: 10px;" action="login.php" method="post" enctype="multipart/form-data">
				
				
				
					<table>
					<tr>
						<td>
							<input type="text" name="name" placeholder="Name">
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="phone" placeholder="Phone"required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="address" placeholder="Address"required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="email" name="email" placeholder="Email"required="">
						</td>
					</tr>
						
					<tr>
						<td>
							<input type="password" name="password" placeholder="Password"required="">
						</td>
						
					</tr>
					<tr>
						<td>
							<input type="password" name="iird" placeholder="Confirm Password"required="">
						</td>
						
					</tr>

						
					<tr >							
							<td>
						<input type="submit" value="SignUp" name="signupcheck" class="buttom"> 
						</td>
					</tr>
					
				</table>
					  

			</form>
		</div>

	</div>

	
</div>