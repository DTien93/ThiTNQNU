<?php
    include("connect.php");
    $idcauhoi = $_POST["idcauhoi"];
    if(isset($_POST["cancel"])){

        $sql = "delete from cauhoidethi where idcauhoi='".$idcauhoi."'";
        if(mysqli_query($conn, $sql)){
        	header('location:thread.php');
        }
        else{
            echo '<script type="text/javascript">'; 
    	    echo 'if(confirm("FAIL! Xóa không thành công.")){';    
    	    echo 'window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';
    	  	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';    
            echo '</script>';	
       	}
    }
   	mysqli_close($conn);
?>