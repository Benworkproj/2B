<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<!-- Bootstrap File CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
	<script src="https://kit.fontawesome.com/01c4f2bb72.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/admin-dashboard.css">
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
							<a><li><i class="fa-solid fa-tv"></i>Dashboard</li></a>
							<a href="admin-settings.php"><li><i class="fa-solid fa-user-gear"></i></i>Account Settings</li></a>
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

			<!-- --------------------------------------------------------------- Start of Main Content ----------------------------------------------- -->
			
			<div class="col-9 bottom-right" style="background-color: #FBFAF2; min-height: 85vh;">
				<div class="container-fluid content">
					<div class="col-12 hello"><i class="fa-solid fa-user-large"></i><span>Hello, Adminname!</span></div> 
					<div class="col-12 log"><p>Last login: June 11, 2023 10:32:56 am </p><hr></div>

					<div class="row dash-row">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 gx-3 dashboard-div">
							<div class="p-3 dashboard-cards-content" id="reg">
								<div class="row">									
									<div class="col-8">
										<div class="row">
											<div class="col-12"><p>No. of Users: <b>1</b> </p></div>
											<div class="col-12"><b><p>Registered Users</p></b></div>
										</div>
									</div>								
									<div class="col-4"><i class="fa-solid fa-users"></i></div>
									<div class="col-12"><hr></div>							
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 gx-3 dashboard-div">
							<a href="#"><div class="p-3 dashboard-cards-content" id="new">
								<div class="row">									
									<div class="col-8">
										<div class="row">
											<div class="col-12"><p>No. of Application: <b>1</b> </p></div>
											<div class="col-12"><b><p>New Applications</p></b></div>
										</div>
									</div>								
									<div class="col-4"><i class="fa-regular fa-file-lines"></i></div>
									<div class="col-12"><hr></div>							
								</div>
							</div></a>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 gx-3 dashboard-div">
							<a href="#"><div class="p-3 dashboard-cards-content" id="pend">
								<div class="row">									
									<div class="col-8">
										<div class="row">
											<div class="col-12"><p>No. of Pending: <b>1</b> </p></div>
											<div class="col-12"><b><p>Pend Applications</p></b></div>
										</div>
									</div>								
									<div class="col-4"><i class="fa-solid fa-spinner"></i></div>
									<div class="col-12"><hr></div>							
								</div>
							</div></a>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 gx-3 dashboard-div">
							<a href="new-messages.php"><div class="p-3 dashboard-cards-content" id="mes">
								<div class="row">									
									<div class="col-8">
										<div class="row">
											<div class="col-12"><p>New Messages: <b>1</b> </p></div>
											<div class="col-12"><b><p>Messages/Inquiries</p></b></div>
										</div>
									</div>								
									<div class="col-4"><i class="fa-solid fa-envelope-open-text"></i></div>
									<div class="col-12"><hr></div>							
								</div>
							</div></a>
						</div>
					</div>
				
				</div>
			</div>
			
			<!-- ----------------------------------------------------------------- End of Main Content ------------------------------------------------ -->
		
		</div>
	</div>

	<!-- Bootstrap File Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="js./bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
	</script>

</body>
</html>