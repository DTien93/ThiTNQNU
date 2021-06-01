<?php
//index.php
session_start();
if(isset($_SESSION["taikhoan"]))
{
 header("location:home.php");
}
?>