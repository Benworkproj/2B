<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registered Users</title>
	<!-- Bootstrap File CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="js./bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
	<script src="https://kit.fontawesome.com/01c4f2bb72.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/registered-users.css">
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
							<a href="admin-settings.php"><li><i class="fa-solid fa-user-gear"></i></i>Account Settings</li></a>
							<a class="sub-btn"><li><i class="fa-solid fa-users"></i>Registered Users<i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
							<div class="sub-menu">
								<a href="user-student.php"><li><p>Student Users</p></li></a>
								<a href="#"><li><p>Admin Users</p></li></a>
							</div>
							<a class="sub-btn"><li><i class="fa-solid fa-address-book"></i>Student Applications<i class="fa-sharp fa-solid fa-caret-down dropdown"></i></li></a>
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

			<!-- ---------------------------------------------------------------------------- Start of Main Content ----------------------------------------------- -->
			
			<div class="col-9 bottom-right" style="background-color: #FBFAF2; min-height: 85vh;">
				<div class="container-fluid content">
					<div class="col-12 hello"><i class="fa-solid fa-users"></i><span>Registered Users - <span class="text-success">Admin</span></span><hr></div> 		
				</div>

				<!-- ---------------------------------------------------------- View Admin Details Modal ---------------------------------------------------------- -->

				<div class="modal fade" id="ViewAdmin" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalToggleLabel">Admin Account Details</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
      			      		<div class="modal-body view">					      			        				      			        
	      			        	<div class="mb-2">
		      			        	<label class="form-label">Full Name:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>Joshua Resarre</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
		      			        	<label class="form-label">Birthdate:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>August 4, 2002</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
		      			        	<label class="form-label">Current Address:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>291 Alapan 1-A Imus City, Cavite</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
		      			        	<label class="form-label">Sex Identification:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>Male</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
		      			        	<label class="form-label">Civil Status:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>Single</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
		      			        	<label class="form-label">Contact Number:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>09673595388</span></div>
	      			        	</div>								      			     

	      			        	<div class="mb-2">
	      			        		<label class="form-label">Email:</label>
	      			        		<div class="col-12 border p-2 bg-light"><span>joshua.resarre@cvsu.edu.ph</span></div>
	      			        	</div>
			      			    				      			     
      			      		</div>

	      			      	<div class="modal-footer">						  
	      			        	<button class="btn btn-success col-12 col-sm-4" data-bs-target="#EditUsersAccount" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa-solid fa-user-pen me-2"></i>Edit Account</button>
	      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i></i>Cancel</button>
	      			      	</div>
						</div>
					</div>
				</div>

				<!-- ------------------------------------------------------- End of View Admin Details Modal -------------------------------------------------------------- -->

				<!-- ------------------------------------------------------------------- Edit User Account Modal ------------------------------------------------------------------- -->
				<div class="modal fade" id="EditUsersAccount" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      			  	<div class="modal-dialog modal-dialog-centered">
      			    	<div class="modal-content">
      			      		<div class="modal-header">
      			        		<h5 class="modal-title" id="exampleModalToggleLabel">Edit Admin Account Details</h5>
      			        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			      		</div>
      			      
      			      		<form action="" method="POST">
	      			      		<div class="modal-body">					      			        				      			       
		      			        	<div class="mb-3">
		      			        		<label class="form-label">Email:</label>
		      			        		<input type="text" class="form-control bg-light">
		      			        	</div>

		      			        	<div class="mb-3">
		      			        		<label class="form-label">Password:</label>
		      			        		<input type="password" class="form-control bg-light">
		      			        	</div>

		      			        	<div class="mb-3">
		      			        		<label class="form-label required">Admin Password:</label>
		      			        		<input type="password" class="form-control bg-light" placeholder="Please confirm your password to make changes" required>
		      			        	</div>					      			    				      			     
	      			      		</div>

		      			      	<div class="modal-footer">						  
		      			        	<button class="btn btn-success col-12 col-sm-6"><i class="fa-solid fa-floppy-disk me-2"></i>Save Account Details</button>
		      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i></i>Cancel</button>
		      			      	</div>
		      			    </form>
      			  		</div>
      				</div>
      			</div>

      			<!-- ---------------------------------------------------- End of Edit User Account Modal ------------------------------------------------------------------- -->

      			<!-- -------------------------------------------------- Delete User Account Modal ------------------------------------------------- -->
				<div class="modal fade" id="DeleteMessage" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      			  	<div class="modal-dialog modal-dialog-centered">
      			    	<div class="modal-content">
      			      		<div class="modal-header">
      			        		<h5 class="modal-title" id="exampleModalToggleLabel">Delete Admin User Account</h5>
      			        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			      		</div>
      			      
      			      		<form action="" method="POST">
	      			      		<div class="modal-body">
	      			      			<div class="text-center mb-3"><i class="fa-solid fa-triangle-exclamation fa-beat text-warning display-3"></i></div>	     	  		   
		      			        	<h4 class="text-center text-danger">Are you sure you want to delete this Admin User Account forever?</h4>
		      			        	<p class="text-center mt-3 mx-3"><span class="text-warning">Note:</span> This will permanently delete this User Account and will never be available again</p>					      			    				      			     
	      			      		</div>

		      			      	<div class="modal-footer">						  
		      			        	<button class="btn btn-success col-12 col-sm-5"><i class="fa-solid fa-trash me-2"></i>Delete Account</button>
		      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i></i>Cancel</button>
		      			      	</div>
		      			    </form>
      			  		</div>
      				</div>
      			</div>

      			<!-- ------------------------------------------------- End of Delete User Account Modal ------------------------------------------------------------------- -->

				<div class="mx-4 mt-3 mb-5 table-div">
					<table class="table table-striped table-bordered pt-3 mb-3 table-fluid" id="myTable">
					  	<thead>
					    	<tr>
					      		<th scope="col">Admin ID</th>
					      		<th scope="col">Fullname</th>
					      		<th scope="col">Contact No.</th>
					      		<th scope="col">Email</th>
					      		<th scope="col">Action</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td>1</td>
					      		<td>Joshua Resarre</td>
					      		<td>09673595388</td>
					      		<td>joshua.resarre@cvsu.edu.ph</td>
					      		<td>
					      			<button type="button" class="btn btn-primary px-2 py-0 mx-1" data-bs-target="#ViewAdmin" data-bs-toggle="modal"><i class="fa-solid fa-eye"></i></button> 
					      			<button type="button" class="btn btn-success px-2 py-0 mx-1" data-bs-target="#EditUsersAccount" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></button> 
					      			<button type="button" class="btn btn-danger px-2 py-0 mx-1" data-bs-target="#DeleteMessage" data-bs-toggle="modal"><i class="fa-solid fa-trash-can mx-1"></i></button>				  					
					      		</td>     			
					    	</tr>
					 	</tbody>
					</table>
				</div>	

			</div>
			
			<!-- ----------------------------------------------------------------------------- End of Main Content ------------------------------------------------ -->
		
		</div>
	</div>

	<script>
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

		/*----------------------------------------------------------------------- Function for the table ------------------------------------------------------------*/
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>

</body>
</html>