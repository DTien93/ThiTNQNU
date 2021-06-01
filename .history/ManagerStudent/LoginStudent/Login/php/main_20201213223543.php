<?php
    session_start();
    $ten = $_POST['user'];
    $pass = $_POST['pass'];
    //Tạo kết nối đến CSDL
   $conn = mysqli_connect("localhost","root","","tttracnghiem"); 
    //Câu truy vấn
   $kt = "select * from hocsinh where taikhoan= '".$ten."'";
   $result = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");
   if($row = mysqli_fetch_array($result))
   {
     if($ten == $row['taikhoan'])
     {
       if($pass == $row['matkhau'])
       {
          $_SESSION['ten'] = $_POST['pass'];
         header('location:http://localhost:70/ThiTN/ManagerStudent/index.php');
         $_SESSION['taikhoan'] = $ten;
         echo "Xin chào " . $ten . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
         die();
       }
       else
       {
        // echo '<script language="javascript">';
        // echo 'alert("Mật khẩu không hợp lệ !")';
        // echo '</script>';
        <script>
    function sweetalert2(){
        Swal({
            title: 'Success',
            text: 'Do you want to continue',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    }
</script>
       }
      }
       echo '<script language="javascript">';
      echo 'alert("Vui lòng nhập lại mật khẩu !")';
      echo '</script>';
     }    
   else 
     {
      echo '<script language="javascript">';
      echo 'alert("Tên đăng nhập không hợp lệ !")';
      echo '</script>';
     }
?>