<?php
	include('connect.php');
	
	$sql1 = "select * from cauhoidethi where iddethi = 3";
	$result1 = $coon ->mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	
	$sql1 = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = '".$row1['idcauhoi']."'");
	$sql1->execute();
	// echo $data;
	echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>