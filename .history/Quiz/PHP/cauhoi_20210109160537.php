<?php
    include('connect.php');
	
	session_start();
	$sql = "SELECT * FROM dethi where idkythi =  '".$_SESSION['idkythi']."'  ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

		$sql1 = "SELECT * FROM cauhoidethi where iddethi = '".$row['iddethi']."'    " ;
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_array($result1);

		$sql2 = "SELECT * FROM thuviencauhoi where  idcauhoi = '".$row1['idcauhoi']."'    " ;

	
?>