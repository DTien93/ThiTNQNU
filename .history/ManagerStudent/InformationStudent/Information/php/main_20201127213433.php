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
            <th>Khối</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Quê Quán</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect("localhost", "root", "" , "thitracnghiemon");
        $sql = "select id, mahs, hoTen, lop, khoi, diaChi, Email, ngaySinh, queQuan from hocsinh";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
    ?>
        <tr>
          <td> <?php echo $row['id']; ?></td>
          <td> <?php echo $row['mahs']; ?></td>
          <td> <?php echo $row['hoTen']; ?></td>
          <td> <?php echo $row['khoi']; ?></td>
          <td> <?php echo $row['diaChi']; ?></td>
          <td> <?php echo $row['Email']; ?></td>
          <td> <?php echo $row['ngaySinh']; ?></td>
          <td> <?php echo $row['queQuan']; ?></td>

        </tr>     
        
        <tbody>
        <?php } ?>
    </table>
</div>
</body>
</html>