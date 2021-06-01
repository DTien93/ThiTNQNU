<?php
	include('connect.php');
	$sql = 6;
    $sql1 = $conn->prepare("SELECT * FROM cauhoidethi WHERE idcauhoi = $sql");;
	$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE iddethi = $sql1");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>