<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>Danh sách kỳ thi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="container-fluid">
<div class="row-fluid">
          
        <h2 class="btn-warning">Kỳ Thi</h2>

        <?php
							$conn = mysqli_connect("localhost", "root", "" , "thion");
							$sql = "select * from kythi";
              $result = mysqli_query($conn, $sql);
              mysqli_query($conn, "set names utf8");
							while($row = mysqli_fetch_array($result))
							{                        
					?>
            <div class="span3  small ">
                <div class="pricing-table-header-small">
                </div>
                <div class="pricing-table-features">
                    <p><strong>Mã kỳ thi:</strong>  <?php echo $row['idkythi']; ?></p>
                    <p><strong>Mã giáo viên:</strong>  <?php echo $row['magv']; ?></p>
                    <p><strong>Tên kì thi:</strong>  <?php echo $row['tenkythi']; ?></p>
                    <p><strong>Khối:</strong>  <?php echo $row['khoi']; ?></p>
                    <p><strong>Môn:</strong>  <?php echo $row['monthi']; ?> </p>
                    <p><strong>Ngày thi:</strong>  <?php echo $row['ngaythi']; ?></p>
                    <p><strong>Thời lượng thi: </strong> <?php echo $row['thoiluong']; ?></p>
                    <p><strong>Ghi chú: </strong> <?php echo $row['ghichu']; ?></p>
                </div>
               <div class="pricing-table-signup-small">
                  <p><a href="./index.php">Vào thi</a></p>
                </div>
                
          </div>
          <?php } ?>
              </div>
              </div>
    </body>
</html>
