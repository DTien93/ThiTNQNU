<?php
	session_start();
    include('connect.php');
	$sql = $conn->prepare("SELECT * FROM dethi where idkythi =  '".$_SESSION['idkythi']."'  ") ;
	$result = mysqli_query($conn, $sql);
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi where   ") ;
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
?>