<?php
      $ma1 = $_POST['ma'];
      $ten1 = $_POST['name'];
      $class1 = $_POST['class'];
      $khoi1 = $_POST['block'];
      $address1 = $_POST['address'];
      $email1 = $_POST['email'];
      $date = $_POST['birthday'];
      $hometown1 = $_POST['hometown'];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten1."',  lop = '".$class1."', khoi = '".$khoi1."' , diaChi1 = '".$address1."', Email1 = '".$email1."',
        ngaySinh  = '".$date."', queQuan = '".$hometown1."' where mahs = '".$ma1."'";
        if ($query) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>