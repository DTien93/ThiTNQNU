<?php
	session_start();
	include('connect.php');
	$sql = "SELECT iddethi FROM dethi where idkythi =  '".$_SESSION['idkythi']."' ";
	$result = mysqli_query($conn, $sql);
	if($row = mysqli_fetch_array($result)){
		$sql1 = "SELECT * FROM cauhoidethi where iddethi = '".$row['iddethi']."'    " ;
		$result1 = mysqli_query($conn, $sql1);
		if($row1 = mysqli_fetch_array($result1)) {
			$sql2 = $conn>prepare("SELECT * FROM thuviencauhoi where  idcauhoi = '".$row1['idcauhoi']."'  ");
			$sql2->execute();
		}else{
			echo "Lỗi";
		}
	}else{
		echo "Lỗi";
		
	}

	//$sql2 = "SELECT * FROM thuviencauhoi where  idcauhoi = '".$row1['idcauhoi']."'    " ;
	// $sql2 = $conn>prepare("SELECT * FROM thuviencauhoi where  idcauhoi = '".$row1['idcauhoi']."'  ");
	// $sql2->execute();
	// 
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>