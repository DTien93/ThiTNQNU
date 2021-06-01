<?php
	include('connect.php');
	$sql = 6;
    $sql1 = $conn->prepare("SELECT * FROM cauhoidethi WHERE idcauhoi = $sql");;
	$sql1 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE idcauhoi = $sql2");
	$sql1->execute();
	// echo $data;
	echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>