<?php  
	session_start();
	$conn = mysqli_connect("localhost","root","","user");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$con = $_POST['contactno'];
		$password = $_POST['password'];

		$que = mysqli_query($conn,"INSERT INTO stu (cid,name,email,contact,pass,acctype) VALUES ('','$name','$email','$con','$password','student') ");
		header("Location: ../index.php"); 
		
	}
?>