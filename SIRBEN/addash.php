<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Hello, world!</title>
    <?php  
        session_start();
    ?>
  </head>
  <body>
  				
    			
    	<div class="row" style="height: 15vh;">
    		<div class="col-sm-4" style="background-color: #36444E;">
    			<div class="row">
    			<div class="col-sm-6" style="background-color: #36444E;">
    				<!--Logo-->
    				<img src="logo.png" style="width: 60%;margin-left: 15%;">
    			</div>
    			<div class="col-sm-6" style="background-color: #36444E;color: white">
    				<h3 style="margin-left: -20%;margin-top: 10%;">CvSu - Imus<br>Student Portal</h3>
    			</div>
    			</div>
    		</div>
    		<div class="col-sm-8" style="background-color: #01C867;">
    			<h1 style="float: right;margin-right: 5%;margin-top: 3%;">Welcome, <?php echo $_SESSION["name"];
                ?> </h1>
    		</div>
    	</div>
    	<div class="row" style="height: 83vh;">
    		<!--Navigation Panel-->
    		<div class="col-sm-4" style="background-color: #2A363E;color: white;">
    			<h2>Dashboard</h2>
    			<h2>Registered Users</h2>
                <h2>Student Applications</h2>
                <h2>Messages</h2>
                <h2>Courses</h2>                
    			<h2 style="margin-top: 70%;"><a href="index.php" style="text-decoration: none;color: white;">Sign out</a></h2>
    		</div>
    		<!-- large white space-->
    		<div class="col-sm-8" style="background-color: #D9D8D8;">
            <div class="row" >
            <!--Dashboard Content-->    
                <!--1st-->
                <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-4" style="background-color: blue;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: red;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: orange;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                </div>
                </div>
                <!--2nd-->
                <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-4" style="background-color: blue;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: red;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: orange;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                </div>
                </div>
                <!--3rd-->
                <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-4" style="background-color: blue;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: red;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                    <div class="col-sm-4" style="background-color: orange;border-radius: 10px;">
                        <h1>Hello</h1>
                    </div>
                </div>
                </div>                 
    		</div>
    	</div>
  </body>
</html>