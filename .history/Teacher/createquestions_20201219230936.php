<?php
	include("connect.php");
	mysqli_query($conn,"set names utf8");
    $idTenMonThi = $_POST["optionIdMT"];
    $khoiLop = $_POST["optionKhoiLop"];
    $cauHoi = $_POST["cauHoi"];
	$dapAn1 = $_POST["dapAn1"];
	$dapAn2 = $_POST["dapAn2"];
	$dapAn3 = $_POST["dapAn3"];
	$dapAn4 = $_POST["dapAn4"];
	$dapAn = $_POST["dapAn"];
    $phanHoi = $_POST["phanHoi"];
    

	if($dapAn == 1){
		$dapAnDung = $dapAn1;
	}
	elseif ($dapAn == 2) {
		$dapAnDung = $dapAn2;
	}
	elseif ($dapAn == 3) {
		$dapAnDung = $dapAn3;
	}
	else{
		$dapAnDung = $dapAn4;
	}


	if(isset($_POST["save"]))
	{
		$sql = "insert into thuviencauhoi(idmon, lop, cauhoi, dapan1, dapan2, dapan3, dapan4, dapandung, phanhoi) 
		values('".$idTenMonThi."','".$khoiLop."','".$cauHoi."','".$dapAn1."','".$dapAn2."','".$dapAn3."', '".$dapAn4."', '".$dapAnDung."', '".$phanHoi."')";
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript">'; 
	        echo 'if(confirm("Tạo câu hỏi thành công.")){';    
	        echo 'window.location="http://localhost:8080/ThiTN/Teacher/createquestions.html";}';
	      	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/createquestions.html";}';    
	        echo '</script>';
		}
		else{
			echo '<script type="text/javascript">'; 
	        echo 'if(confirm("FAIL!")){';    
	        echo 'window.location="http://localhost:8080/ThiTN/Teacher/createquestions.html";}';
	       	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/createquestions.html";}';    
	        echo '</script>';
		}			
	}
	mysqli_close($conn);
?>