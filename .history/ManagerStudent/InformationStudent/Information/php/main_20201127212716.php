<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ManagerStudent/InformationStudent/Information/css/style.css">
</head>
<body>
    <h2>Thông tin người dùng</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Mã học sinh</th>
            <th>Họ tên</th>
            <th>Lớp</th>
            <th>Môn</th>
            <th>Khối</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Quê Quán</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "123456789" , "thongtin");
        $sql = "select * from ttstudents";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
    ?>
        </thead>
        <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>     
        
        <tbody>
    </table>
</div>
</body>
</html>