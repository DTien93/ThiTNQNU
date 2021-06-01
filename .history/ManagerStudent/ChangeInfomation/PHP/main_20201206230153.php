<?php
      $ma = $_POST['ma'];
      $ten = $_POST['name'];
      $class = $_POST['class'];
      $khoi = $_POST['block'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $hometown = $_POST['hometown'];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten1."',  lop = '".$class1."', khoi = '".$khoi1."' , diaChi1 = '".$address1."', Email1 = '".$email1."',
        ngaySinh  = '".$date."', queQuan = '".$hometown1."' where mahs = '".$ma1."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>