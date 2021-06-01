<?php
    $ten = $_POST['user'];
    $mk = $_POST['pass'];
    $mkmoi1 = $_POST['pass1'];
    $mkmoi2 = $_POST['pass2'];
    //ket noi
    $conn = mysqli_connect("localhost","root","","thitracnghiemon");
    //xay dung cau len truy van
    $kt = "select * from hocsinh where taikhoan ='".$ten."'";
    //thuc hien truy van
    $result = mysqli_query($conn,$kt) or die("không thể kết nối được");
    if($row=mysqli_fetch_array($result));
    {
       if($mk==$row['matkhau'])
       {
           if($mkmoi1==$mkmoi2)
           {
               $doi = "update hocsinh set makhau ='".$mkmoi1."' where taikhoan = '".$ten."'";
               mysqli_query($conn,$doi) or die ("không đổi được");
               echo "Đổi mật khẩu thành công!";
           }
    else
           echo "Đổi mật khẩu thất bại!";
           
    //mysqli_close();     
        }
        else
        echo "Nhập vào tài khoản và mật khẩu không hơp lệ!";
    }
?>