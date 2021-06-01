<?php
    $ten = $_POST['tendn'];
    $mk = $_POST['mkc'];
    $mkmoi1 = $_POST['mkm1'];
    $mkmoi2 = $_POST['mkm2'];
    $conn = new mysqli('localhost', 'root', 'vertrigo', 'FreetutsDemo');
 
        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        } 
        
        // Lệnh update
        $sql = "UPDATE News SET title='Tiêu đề updated' WHERE id=1";
        
        // Thực hiện update
        if ($conn->query($sql) === TRUE) {
            echo "update thành công";
        } else {
            echo "Update thất bại: " . $conn->error;
        }
        
// ngắt kết nối
$conn->close();
?>