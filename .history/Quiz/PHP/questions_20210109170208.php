<?php
	include('connect.php');
	
	$sql1 = "select * from cauhoidethi where iddethi = 3";
	$result1 = $conn ->mysqli_query($conn, $sql1);
	$row1 = $conn -> mysqli_fetch_array($result1);
	
	$sql2 = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = '".$row1['idcauhoi']."'");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>