<?php
	include('connect.php');
	session_start();
	//$sql = "select * from cauhoidethi where iddethi = 3";
	//$result1 = $conn ->mysqli_query($sql);
	//$row1 = $conn -> mysqli_fetch_array($result1);
	// $stmt = $conn->prepare("SELECT * from cauhoidethi where iddethi = 3")
	// $sql = "select * from cauhoidethi where iddethi = 3";
	// $result1 = $conn->prepare( $sql);
	// $row1 = $result1->rowCount($result1);	
	// $sql1 = 	$row1['idcauhoi'];
	// $sql2 = $conn->prepare("select * from thuviencauhoi where idcauhoi = $sql1");
	// $sql2->rowCount($sql2);
	$sql =  $conn-> prepare("SELECT iddethi FROM dethi where idkythi =  '".$_SESSION['idkythi']."' ");
    
	$sql = $conn->prepare("SELECT * FROM thuviencauhoi  ");
	$sql->execute();
	// echo $data;
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
// ?>