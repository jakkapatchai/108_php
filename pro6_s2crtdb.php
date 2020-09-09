<?php
if(file_exists("pro6_s1connect.php")) 
  require("pro6_s1connect.php"); 
else
  die("File not found");
 
/* Section 2 : main activity */
dbWork("create database $db");
qWork("create table $tb (ProductID varchar(20),ProductName varchar(20),SupplierID varchar(20) ,)");
mysql_close($connect);
echo '<a href="pro6_s0index.php">back</a>';
 
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