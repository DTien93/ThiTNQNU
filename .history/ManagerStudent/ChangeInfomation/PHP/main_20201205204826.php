<?php
            if (isset($_POST['update'])) {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tttracngiem";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                $ma = $_POST['ma'];
                $ten = $_POST['name'];
                $class = $_POST['class'];
                $khoi = $_POST['block'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $date = $_POST['date'];

                $query = UPDATE `hocsinh` SET `mahs`=[value-1],`hoTen`=[value-2],`lop`=[value-3],`mon`=[value-4],`khoi`=[value-5],`taikhoan`=[value-6],`matkhau`=[value-7],`diaChi`=[value-8],`Email`=[value-9],`ngaySinh`=[value-10],`queQuan`=[value-11] WHERE `mahs`;
            }
?>