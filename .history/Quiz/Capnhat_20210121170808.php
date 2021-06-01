<?php
    session_start();
?>

<?php
    $conn =  mysqli_connect('localhost', 'root','', 'thion');
    $sql = ("SELECT * FROM dethi where idkythi =  '".$_SESSION['idkythi']."'  ") ;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['iddethi'] = $row['iddethi'];
    $sql2 = ("SELECT * FROM thongtinbailam where iddethi = '".$_SESSION['iddethi']."' ");
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $_SESSION['idbailam'] = $row2['idbailam'];
    $diembailam = $_SESSION['diem'];

    $sql3 = " INSERT INTO thongtinbailam (idbailam, iddethi, mahs, diem) VALUES ('".$_SESSION['idbailam']."', '".$_SESSION['iddethi']."', 
                                                                      '".$_SESSION['mahs']."') ";
    $result3 = mysqli_query($conn, $sql3);
    
    echo $_SESSION['idkythi'];
    // if ($result3) {
    //   echo "Them thanh cong";
    // } else {
    //   echo "Them that bai";
    // }
  ?>
