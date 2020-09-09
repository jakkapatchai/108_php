<body>
<form action="pro4_s6update.php">
<input name="updOrderID" value="">
<input name="updProductID" value="">
<input name="updUnitPrice" value="">
<input type="submit" value="pro4_s6update.php">
</form>
<?php
if (!isset($_GET['updOrderID'])) { exit; }
require("pro4_s1connect.php");
$sql="update $tb set ";
$sql.="OrderID='". $_GET['updOrderID'] ."', ";
$sql.="ProductID='". $_GET['updProductID'] ."' ";
$sql.="UnitPrice='". $_GET['updUnitPrice'] ."' ";
$sql.="where OrderID='". $_GET['updOrderID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro4_s0index.php'/>";
mysql_close($connect);
?>
</body>