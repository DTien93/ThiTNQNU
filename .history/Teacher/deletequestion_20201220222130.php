<?php
    include("connect.php");
    $sql = "delete from thuviencauhoi where idcauhoi='".$_SESSION['idcauhoi']."'";
    if(mysqli_query($conn, $sql)){
    	echo '<script type="text/javascript">'; 
	    echo 'if(confirm("Xóa câu hỏi thành công.")){';    
	    echo 'window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';
	   	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';    
	    echo '</script>';
    }
    else{
        echo '<script type="text/javascript">'; 
	    echo 'if(confirm("FAIL! Xóa không thành công.")){';    
	    echo 'window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';
	  	echo 'else { window.location="http://localhost:8080/ThiTN/Teacher/questionlibrary.php";}';    
        echo '</script>';	
   	}
   	mysqli_close($conn);
?>