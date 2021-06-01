<?php
	include('connect.php');
	$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi WHERE idcauhoi = 7");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>