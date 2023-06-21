<!DOCTYPE html>
<html>
<head>
	<title>Prototype</title>
	<?php
		$conn = mysqli_connect("localhost","root","", "user");
		$que = mysqli_query($conn, "SELECT * FROM stu");
		if (isset($_POST['submit'])) {
		  	$ins = mysqli_query($conn, "INSERT INTO stu VALUES ('','".$_POST['fname']."','".$_POST['lname']."','')");
		  	echo "Yay";
		}  
		if (isset($_POST['del'])) {
		  	$del = mysqli_query($conn, "DELETE FROM stu WHERE ID='".$_POST['id']."' ");
		  	echo "Yay Deleted";
		}
		if(isset($_POST['upd'])){
			$del = mysqli_query($conn, "UPDATE stu SET fname='".$_POST['fname']."', lname='".$_POST['lname']."' WHERE ID='".$_POST['id']."'");
			echo "Yay Updated";
		}
		if (isset($_POST['dr'])) {
			$sel = $_POST['sel'];
			echo "$sel";
		}
		$que = mysqli_query($conn, "SELECT * FROM stu");  
	?>
</head>
<body>
	<h1>Insert</h1>
	<form action="mid.php" method="POST">
		<label>Firstname: </label><br>
		<input type="text" name="fname" placeholder="Enter your first name..."><br>
		<label>Lastname: </label><br>
		<input type="text" name="lname" placeholder="Enter your last name..."><br><br>
		<input type="submit" name="submit">
	</form>
	<br>
	<h1>Drop Down</h1>
	<form action="mid.php" method="POST">
		<select name="sel">
			<option></option>
			<option value="Philip">Philip</option>
			<option value="Nolasco">Nolasco</option>
			<option value="Villanueva">Villanueva</option>
		</select><br><br>
		<input type="submit" name="dr">
	</form>
	<br>
	<h1>Delete</h1>
	<form action="mid.php" method="POST">
		<label>ID: </label><br>
		<input type="text" name="id"><br><br>
		<input type="submit" name="del">
	</form>
	<h1>Read</h1>
	<?php  
		while ($row = mysqli_fetch_assoc($que)) {
			echo $row['name'].": ".$row['acctype']."<br>";
		}
	?>
	<h1>Update</h1>
	<form action="mid.php" method="POST">
		<label>ID: </label><br>
		<input type="text" name="id"><br>
		<label>Firstname: </label><br>
		<input type="text" name="fname" placeholder="Enter your first name..."><br>
		<label>Lastname: </label><br>
		<input type="text" name="lname" placeholder="Enter your last name..."><br><br>
		<input type="submit" name="upd">
	</form>
</body>
</html>