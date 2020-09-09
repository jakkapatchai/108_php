<?php
if(file_exists("pro8_s1connect.php")) 
  require("pro8_s1connect.php"); 
else
  die("File not found");
 
/* Section 2 : main activity */
dbWork("create database $db");
qWork("create table $tb (SupplierID varchar(20),CompanyName varchar(20),ContactName varchar(20) ,)");
mysql_close($connect);
echo '<a href="pro8_s0index.php">back</a>';
 
/* Section 3 : function */
function dbWork($sql) {
  global $connect;
  if (!$result=mysql_query($sql,$connect))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
function qWork($sql) {
  global $db;
  if (!$result=mysql_db_query($db,$sql))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
?>