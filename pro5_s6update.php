<body>
<form action="pro5_s6update.php">
<input name="updOrderID" value="">
<input name="updCustomerID" value="">
<input name="updEmployeeID" value="">
<input type="submit" value="pro5_s6update.php">
</form>
<?php
if (!isset($_GET['updOrderID'])) { exit; }
require("pro5_s1connect.php");
$sql="update $tb set ";
$sql.="OrderID='". $_GET['updOrderID'] ."', ";
$sql.="CustomerID='". $_GET['updCustomerID'] ."' ";
$sql.="EmployeeID='". $_GET['updEmployeeID'] ."' ";
$sql.="where OrderID='". $_GET['updOrderID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro5_s0index.php'/>";
mysql_close($connect);
?>
</body>