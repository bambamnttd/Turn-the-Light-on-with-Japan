<?php
$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="Hanabi";
$objConnect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_set_charset($objConnect, "utf8");
?>