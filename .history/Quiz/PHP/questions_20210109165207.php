<?php
    include('connect.php');
    $sql1 = "SELECT * FROM cauhoidethi where iddethi =  3 " ;
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = 6");
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>