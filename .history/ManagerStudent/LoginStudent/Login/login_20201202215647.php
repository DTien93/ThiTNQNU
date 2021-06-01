<?php
//index.php
session_start();
if(isset($_SESSION["taikhoan"]))
{
    header('location:http://localhost:70/ThiTN/ManagerStudent/index.php');
}
?>