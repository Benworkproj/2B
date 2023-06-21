<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Settings</title>
	<!-- Bootstrap File CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
	<script src="https://kit.fontawesome.com/01c4f2bb72.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/admin-settings.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-3 top-left">
				<img src="cvsu_admin.png" alt="CvSU" width="220px" height="65px">
			</div>
			<div class="col-9 top-right" style="background-color: #00c866;">
				<div class="row top-right-cont">
					<div class="col-8 col-sm-8 col-md-3 logo"><button class="btn px-0 py-0 open-btn"><i class="fa-solid fa-bars"></i></button><img src="cvsu_logo.png" alt="CvSU" width="60px" height="50px"></div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 ms-auto log-out"><button class="btn px-0 py-0"><i class="fa-solid fa-power-off"></i></button></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 bottom-left">
				
				<div class="row justify-content-evenly navigation-head">
					<div class="col-7" style="margin-top: 3px;"><h3>NAVIGATION</h3></div>
					<div class="col-3"><button class="btn px-0 py-0 close-btn"><i class="fa-solid fa-xmark"></i></button></div>
					<div class="col-12" style="margin-top: -5px"><hr></div>
				</div>

				<div class="row">
					<div class="col-12 navigation-list">
						<ul>
							<a href="admin-dashboard.php"><li><i class="fa-solid fa-tv"></i>Dashboard</li></a>
							<a><li><i class="fa-solid fa-user-gear"></i></i>Account Settings</li></a>
							<a class="sub-btn"><li><i class="fa-solid fa-users"></i>Registered Users<i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
							<div class="sub-menu">
								<a href="user-student.php"><li><p>Student Users</p></li></a>
								<a href="user-admin.php"><li><p>Admin Users</p></li></a>
							</div>
							<a class="sub-btn"><li><i class="fa-solid fa-address-book"></i>Student Applications</i><i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
							<div class="sub-menu">
								<a href="#"><li><p>New Applications</p></li></a>
								<a href="#"><li><p>Pending</p></li></a>
								<a href="#"><li><p>Accepted</p></li></a>
								<a href="#"><li><p>Rejected</p></li></a>
								<a href="#"><li><p>Waitlisted</p></li></a>
								<a href="#"><li><p>Archive</p></li></a>
							</div>
							<a class="sub-btn"><li><i class="fa-solid fa-message"></i>Messages<i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
							<div class="sub-menu">
								<a href="new-messages.php"><li><p>New Messages</p></li></a>
								<a href="read-messages.php"><li><p>Read Messages</p></li></a>
							</div>
							<a class="sub-btn"><li><i class="fa-solid fa-briefcase"></i>Course</i><i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
							<div class="sub-menu">
								<a href="available-course.php"><li><p>Available Courses</p></li></a>
								<a href="archived-course.php"><li><p>Archived Courses</p></li></a>
							</div>
						</ul>
					</div>
				</div>

			</div>

			<!-- --------------------------------------------------------- Start of Main Content ----------------------------------------------- -->
			
			<div class="col-9 bottom-right" style="background-color: #FBFAF2; min-height: 85vh;">
				<div class="container-fluid content">
					<div class="col-12 mb-4"><i class="fa-solid fa-user-gear"></i><span>Account Settings</span><hr></div>

			<!-- -------------------------------------------------------- Edit Account Details Modal ------------------------------------------------------ -->

					<div class="modal fade" id="EditAdminAccount" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	      			  	<div class="modal-dialog modal-dialog-centered">
	      			    	<div class="modal-content">
	      			      		<div class="modal-header">
	      			        		<h5 class="modal-title" id="exampleModalToggleLabel">Edit Account Details</h5>
	      			        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      			      		</div>
	      			      
	      			      		<form action="" method="POST">
		      			      		<div class="modal-body">					      			        				      			        
			      			        	<div class="mb-3">
			      			        		<label class="form-label">Full Name:</label>
			      			        		<input type="text" class="form-control bg-light">
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">Birthdate:</label>
			      			        		<div class="input-group date" id="datepicker">
			      			        		    <input type="text" class="form-control bg-light" id="date"/>
			      			        		    <span class="input-group-append">
			      			        		        <span class="input-group-text bg-muted d-block"> <i class="fa fa-calendar"></i></span>
			      			        		    </span>
			      			        		</div>
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">Current Address:</label>
			      			        		<input type="text" class="form-control bg-light">
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label col-12">Sex:</label>
			      			        		
			      			        		<div class="form-check form-check-inline">
			      			        		  <input class="form-check-input bg-light" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			      			        		  <label class="form-check-label" for="inlineRadio1">Male</label>
			      			        		</div>
			      			        		
			      			        		<div class="form-check form-check-inline">
			      			        		  <input class="form-check-input bg-light" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			      			        		  <label class="form-check-label" for="inlineRadio2">Female</label>
			      			        		</div>
			      			        		
			      			        		<div class="form-check form-check-inline">
			      			        		  <input class="form-check-input bg-light" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
			      			        		  <label class="form-check-label" for="inlineRadio3">Prefer not to say</label>
			      			        		</div>
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">Civil Status:</label>
			      			        		<select class="form-select bg-light" aria-label="Default select example">
			      			        			<option selected value="1">Select current civil status</option>
			      			        		  	<option value="2">Single</option>
			      			        		  	<option value="3">Married</option>
			      			        		  	<option value="4">Widowed</option>
			      			        		  	<option value="5">Divorced</option>
			      			        		</select>
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">Contact Number:</label>
			      			        		<input type="text" class="form-control bg-light">
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">New Email:</label>
			      			        		<input type="text" class="form-control bg-light">
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label">New Password:</label>
			      			        		<input type="password" class="form-control bg-light">
			      			        	</div>

			      			        	<div class="mb-3">
			      			        		<label class="form-label required">Current Password:</label>
			      			        		<input type="password" class="form-control bg-light" placeholder="Please confirm your password to make changes" required>
			      			        	</div>					      			    				      			     
		      			      		</div>

			      			      	<div class="modal-footer">						  
			      			        	<button class="btn btn-success col-12 col-sm-6"><i class="fa-solid fa-floppy-disk"></i>Save Account Details</button>
			      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></i>Cancel</button>
			      			      	</div>
			      			    </form>
	      			  		</div>
	      				</div>
	      			</div>
	      	<!-- -------------------------------------------- End of Edit Account Details Modal ----------------------------------------- -->
	      			
					<div class="border mb-5" style="box-shadow: 0px 0px 3px black;">
						<div class="row p-4 account-details">
							<div class="col-12 text-center"><h4>Account Details</h4><hr></div>

							<div class="col-sm-12 col-md-7 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Full Name:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>Joshua Resarre</p></div>
								</div>
							</div>


							<div class="col-sm-12 col-md-5 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Birthdate:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>August 4, 2002</p></div>
								</div>
							</div>


							<div class="col-12 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Current Address:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>291 Alapan 1-A Imus City, Cavite</p></div>
								</div>
							</div>

							<div class="col-sm-12 col-md-4 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Sex Idetification:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>Male</p></div>
								</div>
							</div>

							<div class="col-sm-12 col-md-4 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Civil Status:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>Single</p></div>
								</div>
							</div>

							<div class="col-sm-12 col-md-4 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Contact Number:</h6></div>
									<div class="col-12 pt-1 mt-1" style="background-color: lightgray;"><p>09673595388</p></div>
								</div>
							</div>

							<div class="col-12 gx-5">
								<div class="row">
									<div class="col-12 p-0 mt-3"><h6>Email:</h6></div>
									<div class="col-12 pt-1 mt-1" id="mail" style="background-color: lightgray;"><p>joshua.resarre@cvsu.edu.ph</p></div>
								</div>
							</div>

							<div class="col-12 mt-3"><hr></div>

							<div class="col-12 gx-5">
								<div class="row justify-content-end">
									<button class="btn btn-primary col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 col-xxl-3" data-bs-target="#EditAdminAccount" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i>Edit Account Details</button>
								</div>
							</div>

						</div>
					</div>			
				</div>
			</div>
			
			<!-- --------------------------------------------------------- End of Main Content ------------------------------------------------ -->
		
		</div>
	</div>

	<!-- Bootstrap File Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="js./bootstrap.min.js"></script>

	<script type="text/javascript">
		/*------------------------------------------------------For the navigation marker------------------------------------------------------*/
		$('.navigation-list ul li').on('click', function(){
			$('.navigation-list ul li.active').removeClass('active');
			$(this).addClass('active');
		});

		/*------------------------------------------------------Function to open the sidebar------------------------------------------------------*/
		$('.open-btn').on('click', function(){
			$('.bottom-left').addClass('active');
		});

		/*------------------------------------------------------Function to close the sidebar------------------------------------------------------*/
		$('.close-btn').on('click', function(){
			$('.bottom-left').removeClass('active');
		});

		/*------------------------------------------------------Function for navigation drop down------------------------------------------------------*/
		$('.sub-btn').click(function(){
			$(this).next('.sub-menu').slideToggle();
			$(this).find('.dropdown').toggleClass('rotate');
		});

		/*------------------------------------------------------ Function for Date Picker ------------------------------------------------------*/
		$(function(){
		  $('#datepicker').datepicker();
		});
	</script>

</body>
</html>