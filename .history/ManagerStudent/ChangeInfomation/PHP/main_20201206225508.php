<?php
      $ma1 = $_POST['ma'];
      $ten1 = $_POST['name'];
      $class1 = $_POST['class'];
      $khoi1 = $_POST['block'];
      $address1 = $_POST['address'];
      $email1 = $_POST['email'];
      $date1 = $_POST['date'];
      $hometown1 = $_POST['hometown'];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$khoi."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."' where mahs = '".$ma."'";
        if ($result) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>