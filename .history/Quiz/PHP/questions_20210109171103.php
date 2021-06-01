<?php
	include('connect.php');
	
	$sql = "select * from cauhoidethi where iddethi = 3";
	$result1 = $conn ->mysqli_query($sql);
	$row1 = $conn -> mysqli_fetch_array($result1);
	
	$sql2 = $conn->prepare("select * from thuviencauhoi where idcauhoi =  '".$row1['idtenkt']."'");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>