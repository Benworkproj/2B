<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student Dashboard</title>
    <?php  
        session_start();
        $conn = mysqli_connect("localhost","root","","user");
        $name = $_SESSION["name"];
        $que = mysqli_query($conn, "SELECT * FROM stu WHERE name = '$name' ");
        $row = mysqli_fetch_array($que);
        $_SESSION["cid"] = $row['cid'];
        $que = mysqli_query($conn, "SELECT * FROM admissioninfo WHERE cid = '".$_SESSION['cid']."' ");
        $tab = mysqli_fetch_array($que);
        $que2 = mysqli_query($conn, "SELECT * FROM personalinfo WHERE cid = '".$_SESSION['cid']."' ");
        $tab2 = mysqli_fetch_array($que2);
        $que3 = mysqli_query($conn, "SELECT * FROM familybackground WHERE cid = '".$_SESSION['cid']."' ");
        $tab3 = mysqli_fetch_array($que3);
        $que4 = mysqli_query($conn, "SELECT * FROM educationalbackground WHERE cid = '".$_SESSION['cid']."' ");
        $tab4 = mysqli_fetch_array($que4);
        $que5 = mysqli_query($conn, "SELECT * FROM medhinfo WHERE cid = '".$_SESSION['cid']."' ");
        $tab5 = mysqli_fetch_array($que5);  
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
    			<h1 style="float: right;margin-right: 5%;margin-top: 3%;">Welcome,<?php echo $_SESSION["name"];
                ?> </h1>
    		</div>
    	</div>
    	<div class="row" style="height: 83vh;">
    		<!--Navigation Panel-->
    		<div class="col-sm-4" style="background-color: #2A363E;color: white;">
    			<h2>Dashboard</h2><br>
    			<h2>Fill Forms</h2>
    			<h2 style="margin-top: 90%;"><a href="index.php" style="text-decoration: none;color: white;">Sign out</a></h2>
    		</div>
    		<!-- large white space-->
    		<div class="col-sm-8" style="background-color: #D9D9D9;"><div class="row" style="height: 15vh;">
    			<div class="col-sm-12" style="background-color: #D9D9D9;height: 7vh">
    				<!--milestone-->
    				
    			</div>
    			<div class="col-sm-5" style="background-color: #D9D9D9;height: 70vh;display: ">
    				<!--5 red button-->
                    <h4 style="text-align: center;margin-bottom: 5%;">Admission Information</h4>
    				<h3 style="margin-bottom: 20px;"><a href="forms/adinfo.php" style="padding: 10px; 
                    <?php if ($tab['status'] == "completed") {
                        echo "background-color: green;pointer-events: none;";}
                        else{
                            echo "background-color: red";
                        }
                        ?>;color: white;text-decoration: none;margin: 25%;">
                        <?php if ($tab['status'] == "completed") {
                        echo "Completed";}
                        else{
                            echo "Incomplete";
                        }
                        ?>
                        </a></h3>
                    <h4 style="text-align: center;margin-bottom: 5%;">Personal Information</h4>
                    <!--Personal info php !COMPLETED!-->
    				<h3 style="margin-bottom: 20px;"><a href="forms/pinfo.php" style="padding: 10px;                    
                    <?php if ($tab2['status'] == "completed") {
                        echo "background-color: green;";}
                        else{
                            echo "background-color: red";
                        }
                        ?>;color: white;text-decoration: none;margin: 25%;">
                        <?php if ($tab2['status'] == "completed") {
                        echo "Completed";}
                        else{
                            echo "Incomplete";
                        }
                        ?>
                        </a></h3>
                    <h4 style="text-align: center;margin-bottom: 5%;">Family Background</h4>
    				<h3 style="margin-bottom: 20px;"><a href="forms/faminfo.php" style="padding: 10px;
                    <?php if ($tab3['status'] == "completed") {
                        echo "background-color: green;pointer-events: none;";}
                        else{
                            echo "background-color: red";
                        }
                        ?>;color: white;text-decoration: none;margin: 25%;">
                        <?php if ($tab3['status'] == "completed") {
                        echo "Completed";}
                        else{
                            echo "Incomplete";
                        }
                        ?>
                        </a></h3>
                    <h4 style="text-align: center;margin-bottom: 5%;">Educational Background</h4>
    				<h3 style="margin-bottom: 20px;"><a href="forms/educinfo.php" style="padding: 10px;
                    <?php if ($tab4['status'] == "completed") {
                        echo "background-color: green;pointer-events: none;";}
                        else{
                            echo "background-color: red";
                        }
                        ?>;color: white;text-decoration: none;margin: 25%;">
                        <?php if ($tab4['status'] == "completed") {
                        echo "Completed";}
                        else{
                            echo "Incomplete";
                        }
                        ?>
                        </a></h3>
                    <h4 style="text-align: center;margin-bottom: 5%;">Medical History Information</h4>
    				<h3 style="margin-bottom: 20px;"><a href="forms/medinfo.php" style="padding: 10px;
                    <?php if ($tab5['status'] == "completed") {
                        echo "background-color: green;pointer-events: none;";}
                        else{
                            echo "background-color: red";
                        }
                        ?>;color: white;text-decoration: none;margin: 25%;">
                        <?php if ($tab5['status'] == "completed") {
                        echo "Completed";}
                        else{
                            echo "Incomplete";
                        }
                        ?>
                        </a></h3>	    				
    			</div>    			
                <div class="col-sm-1" style="background-color: #D9D9D9;height: 70vh;"></div>
                <div class="col-sm-5" style="background-color: #C8D0CC;height: 70vh;text-align: center;letter-spacing: 4px;"><h4 style="margin-top: 10%;">Please complete the sections to get your control number and your application form.</h4><br><br><br><h5>For questions and technical problems, Contact Admission Office</h5></div>
                <div class="col-sm-1" style="background-color: #D9D9D9;height: 70vh;"></div>
    		</div>
    		</div>
    	</div>
  </body>
</html>