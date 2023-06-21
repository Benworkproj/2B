<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<script type="text/javascript">
	function enable(){
		var check = document.getElementById("check");
		var btn = document.getElementById("btn");
		if (check.checked) {
			btn.removeAttribute("disabled");
		}
		else{
			btn.disabled = "true";
		}

		var checka = document.getElementById("checka");
		var btna = document.getElementById("btna");
		if (checka.checked) {
			btna.removeAttribute("disabled");
		}
		else{
			btna.disabled = "true";
		}
	}
</script>
<body>
	<input type="checkbox" id="check" onclick="enable()">
	<input type="text" id="btn" disabled="true">

	<input type="checkbox" id="checka" onclick="enable()">
	<input type="text" id="btna" disabled="true">
</body>	
</html>