<?php
	include('connect.php');
	
	//$sql = "select * from cauhoidethi where iddethi = 3";
	//$result1 = $conn ->mysqli_query($sql);
	//$row1 = $conn -> mysqli_fetch_array($result1);
	// $stmt = $conn->prepare("SELECT * from cauhoidethi where iddethi = 3")
		$sql = "select * from cauhoidethi where iddethi = 3";
		$result1 = $conn->prepare( $sql);
		$row1 = $result1->rowCount($result1);	
	$sql1 = 	$row1['idcauhoi'];
	$sql2 = $conn->prepare("select * from thuviencauhoi where idcauhoi = $sql1");
	$sql3->execute($sql2);
	// echo $data;
	echo json_encode($sql3->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>