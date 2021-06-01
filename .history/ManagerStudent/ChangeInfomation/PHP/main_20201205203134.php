<?php
         $ma = $_POST['mahs'];
         $name = $_POST['hoten'];
         $class1 = $_POST['class'];
         $khoi = $_POST['khoi1'];
         $diachi = $_POST['address'];
         $email1 = $_POST['email'];
         $ngaysinh = $_POST['date1'];
         $quequan = $_POST['que'];

        $coon = mysqli_connect("localhost", "root", "", "tttracnghiem");

        $check = "select * form hocsinh where mahs  = ".$ma."'";

        $result = mysqli_query($coon, $check) or die("Không thể kết nối được");

        $sql = "Update hocsinh set name = '".$name."', 

?>