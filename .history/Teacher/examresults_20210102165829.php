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
			<li class="sidebar-nav-item">
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
			<li class="sidebar-nav-item  w3-teal">
				<a href="" class="sidebar-nav-link">
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
		<p>
		<input class="w3-border w3-padding w3-card-4" type="text" placeholder="Tìm kiếm tên.." id="myInput" onkeyup="myFunction()">
		</p>	
		<table class="w3-table-all w3-margin-top w3-card-4" id="myTable">
		    <thead>
		        <tr>
		            <th>MSHS</th>
		            <th>Họ & Tên</th>
		            <th>Lớp</th>
		            <th>Điểm Thi</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php 
		        include("connect.php");
		        mysqli_set_charset($conn, "utf8");

		        $sql2 = "select iddethi from dethi where idkythi = '".$_SESSION['idkythi']."'";
				$result2 = mysqli_query($conn, $sql2);
				if($row2 = mysqli_fetch_array($result2))
				{	

		        $sql = "select * from thongtinbailam where iddethi = '".$row2['iddethi']."'";
		        $result = mysqli_query($conn, $sql);
		        while ($row = mysqli_fetch_array($result))
		        {
		        ?>
		            <tr>
		                <td><?php echo $row['mahs']; ?></td>
		            <?php $sql1 = "select * from hocsinh where mahs = '".$row['mahs']."'";
		               	$result1 =mysqli_query($conn, $sql1);
		        		if ($row1 = mysqli_fetch_array($result1)){
		            ?>
		                <td><?php echo $row1['hoTen']; ?></td>
		                <td><?php echo $row1['lop']; ?></td>
		            <?php } ?>    
		                <td><?php echo $row['diem']; ?></td>
		            </tr>
		        <?php } } mysqli_close($conn)?>
		    </tbody>
		</table>
  	</div>
	
	<!-- end main content -->
	<!-- import script -->
	<script>
	function myFunction() {
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[0];
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }
	  }
	}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>