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
			background-image: url('bkg.png');					
		}
		.cont{
			margin-left: 25%;
			margin-top: 4%;
			background-color: #00FF82;
			width: 50%;
			height: 62vh;
			align-items: center;
			justify-content: center;
			text-align: center;
			border-radius: 10px;
		}
		.cont div{
			height: 10vh;
		}
		input{
			width: 70%;
			padding: 15px;
		}
		input[type=text]{
			border: 2px solid black;
			border-radius: 5px;
		}
		input[type=submit]{
			background-color: #62C4DA;
			width: 40%;
			font-size: 16px;
			border-radius: 3px;
		}
		img{
			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			width: 10%;
  			margin-top: 1%;
		}
		a{
			text-decoration: none;
			color: black;
		}
	</style>
	<?php
		session_start();
		$conn = mysqli_connect("localhost","root","","user");

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			$que = mysqli_query($conn,"SELECT * FROM stu WHERE name = '$email'");  
			$row = mysqli_fetch_array($que);
			$_SESSION["name"] = $row['name'];
			
			if ($row['acctype'] == "admin") {
				if ($row['pass'] == $password) {
					header("Location:dash.php");
				}
			}
			elseif ($row['acctype'] == "student") {
				if ($row['pass'] == $password) {
					header("Location:addash.php");
				}
				
			}	
		}
	?>
</head>
<body>
	<img src="logo.png">
	<h1 style="text-align: center;margin-top: 1%;">Administrator Portal</h1>
	<div class="cont">
		<h2 style="margin-left: 90%;margin-top: -5%;"><a href="index.php">X</a></h2>
		<br>
		<h1>Admin Login</h1>
		<br>	
		<hr style="border: 2px solid black;width: 90%;margin-left: 5%;">
		<h3 style="margin-top: -13px;width: 10%;background-color: #00FF82;margin-left: 45%;">Login</h3>
		<br><br>
		<div>
		<form method="post" action="adminlogin.php" autocomplete="off" >
			<input type="text" name="email" required><br><br>
			<input type="text" name="password" required><br><br>
			<input type="submit" name="submit" value="Login">
		</form>
		<br>
		<a href="reg/registration.php"><input type="submit" value="Register" style="background-color: red;color:white"></a>
		</div>
	</div>

</body>
</html>