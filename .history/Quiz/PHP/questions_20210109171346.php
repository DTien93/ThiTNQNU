<?php
	include('connect.php');
	
	//$sql = "select * from cauhoidethi where iddethi = 3";
	//$result1 = $conn ->mysqli_query($sql);
	//$row1 = $conn -> mysqli_fetch_array($result1);
	$stmt = $db->prepare("SELECT userID FROM miembros WHERE user=:username and  pass=:password AND confirm IS NULL");
	$result = $stmt->execute($prepared);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	$sql2 = $conn->prepare("select * from cauhoidethi where iddethi = 3");
	$sql2->execute();
	// echo $data;
	echo json_encode($sql2->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>