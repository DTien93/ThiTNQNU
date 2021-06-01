<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TRANG WEB THI TRẮC NGHIỆM</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="text/css" href="fontawesome-free/css/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="./preview/style.css">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scrollbar">
<?php
							$conn = mysqli_connect("localhost", "root", "" , "tttracnghiem");
							$sql = "select * from hocsinh";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result))
							{
						?>
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
			<!-- <li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li> -->
			<li class="nav-item dropdown">
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
									<div class="dropdown">
						<span>Mouse over me</span>
						<div class="dropdown-content">
						<p>Hello World!</p>
						</div>
						</div>
					</div>
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link">
							
							<!-- <li class="sidebar-nav-item">
								<a href="./LoginStudent/Login/index.html" class="sidebar-nav-link">
								<div class = 'btn-size'>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Thoát</span>
								</a>
							</li> -->
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="./InformationStudent/Information/index.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user-cog"></i>
					</div>
					<span>
						 	Thông tin người dùng
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="./ChangeInfomation/index.html" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user"></i>
					</div>
					<span>
						 	Cập nhật thông tin
					</span>
				</a>
			</li>
			
			<li  class="sidebar-nav-item">
				<a href="http://localhost:70/ThiTN/Quiz/main.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chalkboard-teacher"></i>
					</div>
					<span>
                        Làm bài thi
					</span>
				</a>			
            </li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-book-reader"></i>
					</p>
					<h3>Hướng dẫn</h3>
					<p>Học sinh đăng nhập bằng tài khoản và mật khẩu để tiến hành thi.</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-book-reader"></i>
					</p>
					<h3>Thông báo chung</h3>
					<p>Học sinh theo dõi bảng thông báo để cập nhật thời gian thi chính xác</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-book-reader"></i>
					</p>
					<h3>Quy định chung</h3>
					<p>Mỗi học sinh đăng nhập bằng chính tài khoản của mình.</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-book-reader"></i>
					</p>
					<h3>Thông tin liên hệ</h3>
					<p>Mọi chi tiết xin liên hệ Email: thptngomay@edu.com</p>
				</div>
			</div>
		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>STT</th>
									<th>Thông Báo</th>
									<th>Môn Thi</th>
									<th>Trạng Thái</th>
									<th>Ngày diễn ra thi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-success"></i>
											Chưa mở
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											Chưa mở
										</span>
									</td>
									<td>18/07/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											Mở
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-danger"></i>
											Mở
										</span>
									</td>
									<td>07/07/2020</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Chưa mở
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Thi học kì 1</td>
									<td>Môn toán</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Chưa mở
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Mức độ hoàn thành
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								Thi giữa học kì 1
								<span class="float-right">100%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width: 100%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Thi học kì 1
								<span class="float-right">100%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:100%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Thi giữa học kì 2
								<span class="float-right">100%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:100%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Thi học kì 2
								<span class="float-right">50%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:50%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>