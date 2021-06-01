<?php
	include('connect.php');
	session_start();
	$sql = ("SELECT * FROM dethi where idkythi =  '".$_SESSION['idkythi']."'  ") ;
	$result = mysqli_query($conn, $sql);
	if($row = mysqli_fetch_array($result)){
		$sql1 = ("SELECT * FROM cauhoidethi where iddethi = '".$row['iddethi']."'    ") ;
		$result1 = mysqli_query($conn, $sql1);
		if($row1 = mysqli_fetch_array($result1)){
			$sql2 = ("SELECT * FROM thuviencauhoi where  idcauhoi = '".$row1['idcauhoi']."'    ") ;
		}
	}

	$sql1 = $conn->prepare("SELECT * FROM cauhoidethi WHERE idcauhoi= $sql");
	$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE idcauhoi = $sql1");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>