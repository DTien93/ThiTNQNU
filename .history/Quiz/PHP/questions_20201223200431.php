<?php
    include('connect.php');
    
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi WHERE mon = 'Toan' AND lop = '12' ");
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>