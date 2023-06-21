<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
	<script type="text/javascript">
		function enable(){
			var em = document.getElementById("email").value;
			var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

			if (!pattern.test(em)) {                    
                    document.getElementById("emailHelp").innerHTML = "Please enter a valid email";
                    return false;
            }
            return true;
		}
		function hide(){
			document.getElementById("emailHelp").innerHTML = "";
		}
	</script>
</head>
<body><center>
	<form method="POST" action="new.php" onsubmit="return enable()">
		<label for="email">Email: </label>
		<input type="text" name="email" id="email" onclick="hide()">
		<div id="emailHelp" class="form-text"></div>
		<label for="pass">Password: </label>
		<input type="password" name="pass" id="pass"><br>
		<input type="submit" name="sub" id="demo" value="Submit" onclick="enable()">
	</form>
	
	<p id="demo" onclick="enable()">Click me to change my HTML content (innerHTML).</p>
</body></center>
</html>