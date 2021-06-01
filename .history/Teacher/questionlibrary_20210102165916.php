<?php session_start();
?>
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
							<a href="inforteacher.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Thông Tin</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="exit.php" class="dropdown-menu-link">
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
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="createquestions.html" class="sidebar-nav-link">
					<div>
						<i class="fas fa-pencil-ruler"></i>
					</div>
					<span>
						 	Tạo Câu Hỏi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item w3-teal">
				<a href="questionlibrary.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book"></i>
					</div>
					<span>
						 	Thư Viện Câu Hỏi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="checkthread.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-edit"></i>
					</div>
					<span>
						 	Tạo Đề
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="examinformation.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-poll-h"></i>
					</div>
					<span>
						 	Thông Tin Kỳ Thi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="examresults.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-poll"></i>
					</div>
					<span>
						 	Kết Qủa Thi
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

		<form class="">
			<p>	
				<div class="w3-row-padding">
				    <div class="w3-col m3 w3-card-4">
				     	<select onselect="" class="w3-select" style="width:50%" name="optionKhoiLop">
						    <option value="" disabled selected>Khối Lớp</option>
						    <option value="10">10</option>
						    <option value="11">11</option>
						    <option value="12">12</option>
					  	</select>
				   	</div>
				   	<div class="w3-col m3 w3-card-4">
				      	<select class="w3-select" style="width: 60%" name="optionIdMT">
						    <option value="" disabled selected>Tên Môn Thi</option>
						    <option value="1">Toán</option>
						    <option value="2">Vật Lý</option>
						    <option value="3">Hóa Học</option>
						    <option value="4">Tiếng Anh</option>
						    <option value="5">Lịch Sử</option>
						    <option value="6">Địa Lý</option>
					  	</select>
			      	</div>
			    </div>		
			</p>	
		</form>
		<table class="w3-table-all w3-margin-top w3-card-4" id="myTable">
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Môn</th>
		            <th>Lớp</th>
		            <th>Câu hỏi</th>
		            <th>Đáp án đúng</th>
		            <th style="text-align: center; font-size: 1.2em"><i class="fas fa-cog"></i></th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php 
		        include("connect.php");
		        mysqli_set_charset($conn, "utf8");

		        $sql = "select * from thuviencauhoi";
				$result = mysqli_query($conn, $sql);
		        while ($row = mysqli_fetch_array($result))
		        {
		        ?>
		            <tr>
		            	<form action="detailedquestion.php" method="POST">	
		                <td style="width: 5%">
		                	<input type="text" style="width: 80%" name="idcauhoi" readonly value="<?php echo $row['idcauhoi']; ?>">
		                </td>
		                <?php $sql1 = "select * from monthi where idmon = '".$row['idmon']."'";
		               	$result1 =mysqli_query($conn, $sql1);
		        		if ($row1 = mysqli_fetch_array($result1)){
		            	?>
		                <td style="width: 10%"><?php echo $row1['tenmon']; ?></td>
		            	<?php }?>
		                <td style="width: 5%"><?php echo $row['lop']; ?></td>
		                <td style="width: 45%"><?php echo $row['cauhoi']; ?></td>
		                <td style="width: 25%"><?php echo $row['dapandung']; ?></td>
		                <td>
		                	<button name="detail" class="w3-button w3-border w3-teal"><i class="fas fa-info-circle"></i>&nbsp;Chi Tiết</button>
		                	<button name="delete" class="w3-button w3-border w3-red"><i class="fas fa-trash-alt"></i>&emsp;Xóa&emsp;</button>
		                </td>
		                </form>
		            </tr>
		        <?php } mysqli_close($conn)?>
		    </tbody>
		</table>
  	</div>
	
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>