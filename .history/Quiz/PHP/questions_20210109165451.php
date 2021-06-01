<?php
    include('connect.php');
    $sql = "SELECT * FROM cauhoidethi where iddethi =  3 " ;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi where idcauhoi = '".$row['idcauhoi']."'");
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>