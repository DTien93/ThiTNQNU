<?php
    include('connect.php');
    $sql = "SELECT * FROM cauhoidethi where iddethi =  3 " ;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	
	$sql1 = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = '".$row['idcauhoi']."'");
	$sql1->execute();
	// echo $data;
	echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>