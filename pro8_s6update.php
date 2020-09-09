<body>
<form action="pro8_s6update.php">
<input name="updSupplierID" value="">
<input name="updCompanyName" value="">
<input name="updContactName" value="">
<input type="submit" value="pro8_s6update.php">
</form>
<?php
if (!isset($_GET['updSupplierID'])) { exit; }
require("pro8_s1connect.php");
$sql="update $tb set ";
$sql.="SupplierID='". $_GET['updSupplierID'] ."', ";
$sql.="CompanyName='". $_GET['updCompanyName'] ."' ";
$sql.="ContactName='". $_GET['updContactName'] ."' ";
$sql.="where SupplierID='". $_GET['updSupplierID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro8_s0index.php'/>";
mysql_close($connect);
?>
</body>