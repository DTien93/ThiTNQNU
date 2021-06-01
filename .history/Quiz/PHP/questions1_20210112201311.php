<?php
	include('connect.php');
	session_start();

	$sql = $conn->prepare("SELECT * FROM dethi where idkythi =  '".$_SESSION['idkythi']."'  ") ;
	
	// $sql1 = 7;

	// $sql1 = $conn->prepare("SELECT * FROM cauhoidethi WHERE idcauhoi= $sql");
	//$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE idcauhoi = $sql1");
	$sql1->execute();
	// echo $data;
	echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>