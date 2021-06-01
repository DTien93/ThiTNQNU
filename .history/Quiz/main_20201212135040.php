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
                    <?php
							$conn = mysqli_connect("localhost", "root", "" , "tttracnghiem");
							$sql = "select * from kythi";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result))
							{
                  <?php
                  ?>
					?>
        <h2 class="btn-warning">Kỳ Thi</h2>
        
</div>
<div class="row-fluid">

        
     
            </div>
            </div>
            </div>
         </div>
</div>
<?php } ?>
    </body>
</html>
