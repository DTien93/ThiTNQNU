<?php
	include('connect.php');
	
	$sql1 = "select * from cauhoidethi where iddethi = 3'";
    $sql = "SELECT * FROM cauhoidethi where iddethi =  3 " ;
	$result = mysqli_query($conn, $sql);
	$row1 = mysqli_fetch_array($result);
	
	$sql1 = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = '".$row1['idcauhoi']."'");
	$sql1->execute();
	// echo $data;
	echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>