<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Create new account</title>
    <style>
      *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }
    body{
        background: url(bkg.png);
        background-size: auto;
    }
    form{
        box-shadow: 2px 6px 100px #24ac09;
    }
    </style>
    <?php  
    	if (isset($_POST['btn'])) {
    		echo $_POST['fname'];
    	}
    ?>
    <script type="text/javascript">
    	function validateEmail(email) {
  			
  			var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  			var email = getDocumentById("inp");
  			
  			return pattern.test(email);
		}

    </script>
</head>
<div class="container col-md-1 mt-5">
  <img class="ttr-logo-mobile" alt="" src="logo.png" width="75" height="75">
</div>
   <div class="container-fluid">
   <header class="text-center">
   <h1 class="display-6">Create an Account</h1>
   </header>
   </div>
    <section class="container my-2 bg-success bg-gradient w-50 text-dark p-2">
    <form class="row g-3 p-3"  action="reg2.php" method="POST">

        <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="validationDefault01" name="fname">
        </div>

        <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Lastname</label>
        <input type="text" class="form-control" id="validationDefault02">
        </div>

        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Mobile No.</label>
        <input type="mobile" class="form-control" id="mobile">
        </div>
        
        <div class="col-md-6">
        <label for="inputPassword5" class="form-label">Create a Password</label>
        <input type="password" class="form-control" id="inputPassword5">   
        <label for="inputPassword5" class="form-label">Confirm a Password</label>
        <input type="password" class="form-control" id="inputPassword5">
        </div>
    
        <div class="col-md-12 mt-5 text-center">
        <input type="submit"  name="btn" class="btn btn-primary">
        </div>
    </form>
    </section>
  </body>
</html>