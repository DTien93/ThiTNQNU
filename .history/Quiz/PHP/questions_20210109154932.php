<?php
    include('connect.php');
    
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi WHERE mon = 'Van' ");
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>