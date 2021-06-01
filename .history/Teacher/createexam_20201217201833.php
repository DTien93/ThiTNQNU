<?php
	session_start();
	include("connect.php");
	$idTenKyThi = $_POST["optionIdKT"];
    $khoiLop = $_POST["optionKhoiLop"];
    $idTenMonThi = $_POST["optionIdMT"];
	$ngayThi = $_POST["tday"];
    $thoiLuong = $_POST["quantity"];
    $ghiChu = $_POST["cmt"];
    
	if(isset($_POST["create"]))
	{
		// echo $_SESSION['magv'];
		// //Kiểm tra kỳ thi đã tồn tại chưa
		$sql = "select * from kythi where idtenkt='".$idTenKyThi."' and khoi='".$khoiLop."' and idmon='".$idTenMonThi."'";
		$kt = mysqli_query($conn,$sql);
		if(mysqli_num_rows($kt) > 0)
		{
			echo '<script type="text/javascript">'; 
            echo 'if(confirm("Kỳ thi đã tồn tại!.")){';    
            echo 'window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}'; 
          	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}';   
            echo '</script>';
		}
		else
		{
			$sql1 = "insert into kythi(magv, idtenkt, khoi, idmon, ngaythi, thoiluong, ghichu) 
			values('".$_SESSION['magv']."','".$idTenKyThi."','".$khoiLop."','".$idTenMonThi."','".$ngayThi."','".$thoiLuong."', '".$ghiChu."')";
			if(mysqli_query($conn, $sql1)){
				echo '<script type="text/javascript">'; 
	            echo 'if(confirm("Tạo kỳ thi thành công.")){';    
	            echo 'window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}';
	          	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}';    
	            echo '</script>';
			}
			else{
				echo '<script type="text/javascript">'; 
	            echo 'if(confirm("FAIL!")){';    
	            echo 'window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}';
	          	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/createexam.html";}';    
	            echo '</script>';
			}
			
		}
	}
	mysqli_close($conn);
?>