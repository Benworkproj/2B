<!DOCTYPE html>
<html>
<head>
	<title>
		TEST HTML
	</title>
	<style type="text/css">
		
		.hello form{
			width: 50%;
			display: flex;
        	flex-wrap: wrap;
        	justify-content: space-between;
		}				 
	</style>
	<?php
		if (isset($_POST['submit'])) {
		  	echo "hello";
		  }  
	?>
</head>
<body>
	<div class="hello">
	<form action="" method="POST">		
  		
  		<input type="text" id="fname" name="fname"><br><br>  		  		
  		
  		<input type="text" id="lname" name="lname">
  		<br><br>
  		<input type="text" id="fname" name="fname"><br><br>  		
  		<input type="text" id="fname" name="fname"><br><br>  		  		
  		
  		<input type="text" id="lname" name="lname">
  		<br><br>
  		<input type="text" id="fname" name="fname"><br><br>    		
  		
  		
  		

  		<button type="submit" name="submit">Submit</button>
  		
	</form>
	</div>
</body>
</html>