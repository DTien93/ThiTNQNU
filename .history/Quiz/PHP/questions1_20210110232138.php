<?php
	include('connect.php');

	$sql = 7;
	$sql1= $conn->prepare("SELECT * FROM cauhoidethi WHERE idcauhoi = $sql1");
	$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE idcauhoi = $sql1");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>