<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TRANG WEB THI TRẮC NGHIỆM</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="text/css" href="fontawesome-free/css/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body, html {
		  height: 100%;
		  line-height: 1.5;
		}
		.bgimg-1 {
		  background-position: center;
		  background-size: cover;
		  background-image: url("assets/background-cong-nghe34.jpg");
		  min-height: 100%;
		}
	</style>

</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<h2 class = "title">THI TRẮC NGHIỆM</h2>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="./assets/pngtree-vector-users-icon-png-image_4144740 (1).jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a href="information.html" class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Thông Tin</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Thoát</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav" style="background-color:Gray">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<span>
						 	
					</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="w3-bar w3-black">
		  <a href="home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Trang chủ</a>
		  <a href="createexam.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Tạo kỳ thi</a>
		  <a href="exammanagement.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Quản lý kỳ thi</a>
		</div>
		<form class="bgimg-1">
			
		</form>
  	</div>
	
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>