<?php
            if (isset($_POST['update'])) {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tttracnghiem";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                $ma = $_POST['ma'];
                $ten = $_POST['name'];
                $class = $_POST['class'];
                $khoi = $_POST['block'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                $hometown = $_POST['hometown'];

                $query = "update hosinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$khoi."' , diaChi = '".$address."', email = '".$email."',
                 ngaySinh  = '".$date."', queQuan = '".$hometown."' where ma = '".$ma."'";
                $result = mysqli_query($connect, $query);
                if ($result) {
                    echo 'Cập nhật thông tin thành công';
            } else {
                echo 'Đổi thất bại';
            }
        }
?>