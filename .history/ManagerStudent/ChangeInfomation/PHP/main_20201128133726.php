<?php
    $ma = $_POST['mahs'];
    $name = $_POST['hoten'];
    $class1 = $_POST['class'];
    $khoi = $_POST['khoi1'];
    $diacho = $_POST['address'];
    $email1 = $_POST['email'];
    $ngaysinh = $_POST['date1'];
    $ququan = $_POST['que'];

    $conn = mysqli_connect("localhost","root","","thongtin");
    //xay dung cau len truy van
    $kt = "select * from nguoidung where username ='".$ten."'";
?>