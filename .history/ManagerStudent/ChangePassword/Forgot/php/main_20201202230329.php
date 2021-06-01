<?php
    $ten = $_POST['tendn'];
    $mk = $_POST['mkc'];
    $mkmoi1 = $_POST['mkm1'];
    $mkmoi2 = $_POST['mkm2'];
    //ket noi
    $conn = mysqli_connect("localhost","root","","thitracnghiemon");
    //xay dung cau len truy van
    $kt = "select * from hocsinh where taikhoan ='".$ten."'";
    //thuc hien truy van
    $result = mysqli_query($conn,$kt) or die("không thể kết nối được");
               $doi = "update hocsinh set matkhau ='".$mkmoi1."' where taikhoan = '".$ten."'";
               mysqli_query($conn,$doi) or die ("không đổi được");
                    echo '<script language="javascript">';
                    echo 'alert("Đổi mật khẩu thành công")';
                    echo '</script>';
                    exit;
                    
        }
    }
?>