<body>
<form action="pro6_s6update.php">
<input name="updProductID" value="">
<input name="updProductName" value="">
<input name="updSupplierID" value="">
<input type="submit" value="pro6_s6update.php">
</form>
<?php
if (!isset($_GET['updProductID'])) { exit; }
require("pro6_s1connect.php");
$sql="update $tb set ";
$sql.="ProductID='". $_GET['updProductID'] ."', ";
$sql.="ProductName='". $_GET['updProductName'] ."' ";
$sql.="SupplierID='". $_GET['updSupplierID'] ."' ";
$sql.="where ProductID='". $_GET['updProductID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro6_s0index.php'/>";
mysql_close($connect);
?>
</body>