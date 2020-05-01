<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>


<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="book-hostel.php"><i class="fab fa-accusoft"></i>Book Hostel</a></li>
					<li><a href="room-details.php"><i class="far fa-folder"></i>Room Details</a></li>
					<li><a href="room-fare.php"><i class="fas fa-rupee-sign"></i> Room Fare</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
					<li><a href="change-password.php"><i class="fas fa-key"></i></i>Change Password</a></li>
					
					<li><a href="enquiry.php"><i class="fas fa-info-circle"></i>Enquiry</a></li>
					<li><a href="access-log.php"><i class="fas fa-universal-access"></i>Access log</a></li>
					<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
					<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin/index.php"><i class="fa fa-user"></i> Admin Login</a></li>
				
				
				<?php } ?>

			</ul>
		</nav>
</body>
</html>