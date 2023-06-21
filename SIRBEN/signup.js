$(document).ready(function() {
  $('#signupForm').submit(function(e) {
    e.preventDefault();  

    var em =  $("#email").val();
    var nem =  $("#name").val();
    var con =  $("#contactno").val();
    var pass =  $("#password").val();
    var cpass =  $("#cpassword").val();
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
            	alert(lpass);
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
            	return true;
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
		
	});
  });
    