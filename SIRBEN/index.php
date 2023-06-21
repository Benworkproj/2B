<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-image: url('cvsu.png');			
			background-repeat: no-repeat;
			background-size: cover;
		}
		.cont{			
			margin-left: 25%;
			height: 20vh;
			width: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
		}		
		a{
			text-decoration: none;
			font-size: 17px;
			color: black;
			border-radius: 10px;
			padding: 15px 105px;
			margin-top: 5%;
			background-color: #00FF82;
		}		
		img{
			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			width: 15%;
  			margin-top: 1%;
		}
	</style>
	<?php
		$conn = mysqli_connect("localhost","root","","user");  		
	?>
</head>
<body>
	<img src="logo.png">
	<h1 style="text-align: center;margin-top: 1%;color: white;font-family: 'Poppins',">Cavite State University - Imus Campus <br> Online Admission System</h1><br>
	<div class="cont">
	<form>
		
		<a href="adminlogin.php" >Admin Portal</a>
		
	</form>
	</div>

</body>
</html>