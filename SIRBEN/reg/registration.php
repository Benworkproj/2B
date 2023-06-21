<!doctype html>
<html lang="en">
 <head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new account</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <style>
    	* {
    		box-sizing: border-box; margin: 0; padding: 0;
		}
		body{
		    background: url(CVSU.jpg); background-size: cover; height: 100vh; font-family: 'Poppins', sans-serif;  
		}
		.container{
			width: 100%;
		}
		.header{
			text-align: center;
		}
		.header img{
			display: relative; margin-left: auto; margin-right: auto; margin-top: 70px; width: 80px; height: 75px;
		}
		.header h1{
			color: white; margin: 30px; font-size: 35px; font-weight: bold; letter-spacing: 2px;
		}
		.card{
			width: 35%; margin: auto; background-color: rgba(255, 255, 255, 0.2); color: white;
		}
		.card form{
			padding: 20px;
		}
		.card form label{
			font-size: 18px;
		}
		.card form input{
			margin-bottom: 10px;	
		}
		button{
			width: 120px; 
		}
    </style>
    
    <script type="text/javascript">
    	
    	function validation(){
    		var form = document.querySelector("form");
    		var em = document.getElementById("email").value;
    		var nem = document.getElementById("name").value;
    		var con = document.getElementById("contactno").value;
    		var pass = document.getElementById("password").value;
    		var cpass = document.getElementById("cpassword").value;
    		var lpass = pass.length;

    		var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    		var nempattern = /^[A-Za-z\s]*$/;
    		var numpattern = /[0-9]/;
    		var sletters = /[a-z]/;
    		var bletters = /[A-Z]/;

    		if (!nempattern.test(nem)) {
            		document.getElementById("nameHelp").innerHTML = "Please enter name with only letters and spaces";
                    return false;
            }
			if (!pattern.test(em)) {                    
                    document.getElementById("emailHelp").innerHTML = "Please enter a valid email";
                    return false;
            }
            if (!numpattern.test(con)) {                    
                    document.getElementById("conHelp").innerHTML = "Please enter a valid Contact Number";
                    return false;
            }
            if (pass == "") {
            		document.getElementById("passHelp").innerHTML = "Please enter a Password";
            		return false;
            }
            if (cpass == "") {
            		document.getElementById("cpassHelp").innerHTML = "Please enter a Password";
            		return false;
            }
            if (lpass < 8) {
            		document.getElementById("passHelp").innerHTML = "Password must contain at 8 characters";
            		return false;
            }
            if (!sletters.test(pass)) {                    
                    document.getElementById("passHelp").innerHTML = "Password must contain at least one lowercase letter";
                    return false;
            }
            if (!bletters.test(pass)) {                    
                    document.getElementById("passHelp").innerHTML = "Password must contain at least one uppercase letter";
                    return false;
            }
            if (!numpattern.test(pass)) {                    
                    document.getElementById("passHelp").innerHTML = "Password must contain at least one numeric characters";
                    return false;
            }
            if (pass == cpass) {
            	alert("Successfully Created your account");
            }else if(pass != cpass){
            	document.getElementById("cpassHelp").innerHTML = "Please enter your password again";
            	return false;
            }else{
            	alert("Hellno");
            }
            return true;
    	}
    	function hide(){    		
			document.getElementById("nameHelp").innerHTML = "";
		}function hide2(){    		
			document.getElementById("emailHelp").innerHTML = "";
		}function hide3(){    		
			document.getElementById("conHelp").innerHTML = "";
		}function passhide(){    		
			document.getElementById("passHelp").innerHTML = "";
		}function cpasshide(){    		
			document.getElementById("cpassHelp").innerHTML = "";
		}

    </script>
</head>
<body>
	<div class="container col-md-12">
		<div class="header">
			<img src="logo.png" alt="CvSU Logo">
			<h1>CREATE AN ACCOUNT</h1>
		</div>

		<div class="card">
			<form class="row" onsubmit="return validation()" action="regp.php" method="POST">
				<div class="col-md-12">
					<label for="validationDefault01" class="form-label">Full Name</label>
					<input type="text" class="form-control" id="name" name="name" value="" onclick="hide()">
					<div id="nameHelp" class="form-text"></div><br>
				</div>

				<div class="col-md-6">
					<label for="inputEmail4" class="form-label">Email</label>					
					<input type="" class="form-control" id="email"value="" name="email" onclick="hide2()">
					<div id="emailHelp" class="form-text"></div><br>
				</div>

				<div class="col-md-6">
					<label for="inputEmail4" class="form-label">Contact No.</label>
					<input type="contactno" class="form-control" id="contactno"value="" name="contactno" onclick="hide3()" maxlength="11">
					<div id="conHelp" class="form-text"></div><br>
				</div>
	        
				<div class="col-md-6">
					<label for="inputPassword5" class="form-label">Create Password</label>
					<input type="password" class="form-control" id="password" name="password" value="" onclick="passhide()" >
					<div id="passHelp" class="form-text"></div><br>   
				</div>
	  
				<div class="col-md-6">
					<label for="inputPassword5" class="form-label">Confirm Password</label>
					<input type="password" class="form-control" id="cpassword" value=""  onclick="cpasshide()">
					<div id="cpassHelp" class="form-text"></div><br>   
				</div>
	       
	    
				<div class="col-md-12 mt-4 text-center">
					<button type="submit" class="btn btn-success">REGISTER</button>
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>


