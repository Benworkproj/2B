<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Messages - Read Messages</title>
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
	<link rel="stylesheet" href="css/messages-course.css">
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
								<a href="user-admin.php"><li><p>Admin Users</p></li></a>
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
								<a href="#"><li><p>Read Messages</p></li></a>
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

			<!-- ------------------------------------------------------------------ Start of Main Content ----------------------------------------------- -->
			
			<div class="col-9 bottom-right" style="background-color: #FBFAF2; min-height: 85vh;">
				<div class="container-fluid content">
					<div class="col-12 hello"><i class="fa-solid fa-envelope-open-text"></i><span>Messages - <span class="text-success">Read Messages</span></span><hr></div> 		
				</div>

				<!-- ---------------------------------------------------------- View Message Modal ------------------------------------------------------- -->

				<div class="modal fade" id="ViewMessage" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalToggleLabel">View Message</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
      			      		<div class="modal-body view">					      			        				      			        
	      			        	<div class="mb-2">
		      			        	<label class="form-label">Sender Name:</label>
		      			        		<div class="col-12 border p-2 bg-light"><span>Joshua Resarre</span></div>
	      			        	</div>						      			     

	      			        	<div class="mb-2">
	      			        		<label class="form-label">Sender Email:</label>
	      			        		<div class="col-12 border p-2 bg-light"><span>joshua.resarre@cvsu.edu.ph</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
	      			        		<label class="form-label">Subject:</label>
	      			        		<div class="col-12 border p-2 bg-light"><span>Test Subject</span></div>
	      			        	</div>

	      			        	<div class="mb-2">
	      			        		<label class="form-label">Message:</label>
	      			        		<div class="col-12 border p-2 bg-light message"><span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</span></div>
	      			        	</div>				      			    				      			     
      			      		</div>

	      			      	<div class="modal-footer">						  
	      			        	<button class="btn btn-success col-12 col-sm-3" data-bs-target="#DeleteMessage" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa-solid fa-trash me-2"></i>Delete</button>
	      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i></i>Cancel</button>
	      			      	</div>
						</div>
					</div>
				</div>

				<!-- ----------------------------------------------------------- End of View Message Modal ---------------------------------------------------------- -->

				<!-- ----------------------------------------------------------- Delete New Message Modal ----------------------------------------------------------- -->
				<div class="modal fade" id="DeleteMessage" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      			  	<div class="modal-dialog modal-dialog-centered">
      			    	<div class="modal-content">
      			      		<div class="modal-header">
      			        		<h5 class="modal-title" id="exampleModalToggleLabel">Delete User Account</h5>
      			        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			      		</div>
      			      
      			      		<form action="" method="POST">
	      			      		<div class="modal-body">
	      			      			<div class="text-center mb-3"><i class="fa-solid fa-triangle-exclamation fa-beat text-warning display-3"></i></div>	          
		      			        	<h4 class="text-center text-danger">Are you sure you want to delete this Message forever?</h4>
		      			        	<p class="text-center mt-3 mx-3"><span class="text-warning">Note:</span> This will permanently delete this Message and will never be available to view again</p>				      			    				      			     
	      			      		</div>

		      			      	<div class="modal-footer">						  
		      			        	<button class="btn btn-success col-12 col-sm-5"><i class="fa-solid fa-trash me-2"></i>Delete Message</button>
		      			        	<button class="btn btn-danger col-12 col-sm-3" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i></i>Cancel</button>
		      			      	</div>
		      			    </form>
      			  		</div>
      				</div>
      			</div>

      			<!-- ------------------------------------------------------- End of Delete New Message Modal ------------------------------------------------------- -->

      			      			    
				<div class="mx-4 mt-3 mb-5 table-div">
					<table class="table table-striped table-bordered pt-3 mb-3 table-fluid" id="myTable">
					  	<thead>
					    	<tr>
					      		<th scope="col">Message ID</th>
					      		<th scope="col">Sender Name</th>
					      		<th scope="col">Sender Email</th>
					      		<th scope="col">Subject</th>
					      		<th scope="col">Action</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td>1</td>
					      		<td>Joshua Resarre</td>
					      		<td>joshua.resarre@cvsu.edu.ph</td>
					      		<td>Test Subject</td>
					      		<td>
					      			<button type="button" class="btn btn-primary px-2 py-0 mx-1" data-bs-target="#ViewMessage" data-bs-toggle="modal"><i class="fa-solid fa-eye"></i></button>
					      			<button type="button" class="btn btn-danger px-2 py-0 mx-1" data-bs-target="#DeleteMessage" data-bs-toggle="modal"><i class="fa-solid fa-trash-can mx-1"></i></button>
					      		</td>     			
					    	</tr>
					 	</tbody>
					</table>
				</div>	

			</div>
			
			<!-- ------------------------------------------------------------------ End of Main Content ------------------------------------------------ -->
		
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