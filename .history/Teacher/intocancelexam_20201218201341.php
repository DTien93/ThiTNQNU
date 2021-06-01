<?php
    session_start();
    $_SESSION['idkythi'] = $_POST['idKT'];
    // echo $_SESSION['idkythi'];
    if(isset($_POST["Intoexam"])){
    	header('location:examinformation.php');
    }
    else if(isset($_POST["Cancelexam"]))
    {
    	include("connect.php");
    	$sql = "delete from kythi where idkythi='".$_SESSION['idkythi']."'";
    // 	echo '<script type="text/javascript">'; 
	   //  echo 'if(confirm("Hủy kỳ thi???.")){';    
	   // 			if(mysqli_query($conn, $sql)){
	   // 				echo 'window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.php";';
	   // 			}
	  	// echo '}else { window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.html";}';    
	   // 	echo '</script>';
    	if(mysqli_query($conn, $sql)){
    		echo '<script type="text/javascript">'; 
	        echo 'if(confirm("Xóa kỳ thi thành công.")){';    
	        echo 'window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.php";}';
	      	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.php";}';    
	        echo '</script>';
    	}
    	else{
    		echo '<script type="text/javascript">'; 
	        echo 'if(confirm("FAIL! Xóa không thành công.")){';    
	        echo 'window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.php";}';
	      	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/exammanagement.php";}';    
	        echo '</script>';	
    	}
    	mysqli_close($conn);
    }
?>