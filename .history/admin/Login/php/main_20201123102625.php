<?php
    session_start();
    $ten = $_POST['user'];
    $pass = $_POST['pass'];
    //Tạo kết nối đến CSDL
   $conn = mysqli_connect("localhost","root","","thitracnghiemon"); 
    //Câu truy vấn
   $kt = "select * from admin where taikhoan= '".$ten."'";
   $result = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");
   if($row = mysqli_fetch_array($result))
   {
     if($ten == $row['taikhoan'])
     {
       if($pass == $row['matkhau'])
       {
          $_SESSION['ten'] = $_POST['pass'];
         header('location:http://localhost:70/ThiTN/admin/index.html#');
       }
       else
       {
         echo "Mật khẩu không hợp lệ !";
       }
      }
       //Lưu tên đăng nhập
       echo "Vui lòng nhập lại mật khẩu";
     }    
   elseif ($row1 = mysqli_fetch_array($result1)) 
   {
     if($ten == $row1['taikhoan'])
     {
       if($pas == $row1['matkhau'])
       {
         //Hiển thị nội dung thông tin trong sesction
         //Kiểm tra có tồn tại không trước khi nó chuyển trang 
         $_SESSION['ten'] = $_POST['pass'];
         //Hiển thị tên người dùng
         //Sử dụng header location để điều hướng trang và chuyển trang
         header('location:http://localhost:70/ThiTN/index.html');
       }
       else
       {
         echo "Mật khẩu không hợp lệ !";
       }
       //Lưu tên đăng nhập
       echo "Vui lòng nhập lại mật khẩu";
      }   
      }
   else 
     {
       echo "Tên đăng nhập không hợp lệ !";
     }
?>