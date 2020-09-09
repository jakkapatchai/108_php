<?php
ini_set('display_errors', 0); // 0 =  'Off'
$db     = "northwind"; // will be created in s2crtdb.php
$host   = "localhost";
$uname  = "root";
$upass  = "";
$tb     = "order details";
if (!$connect = mysql_connect($host,$uname,$upass)){
 die('connect : failed');
}
?>