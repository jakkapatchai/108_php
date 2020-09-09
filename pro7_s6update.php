<body>
<form action="pro7_s6update.php">
<input name="updShipperID" value="">
<input name="updCompanyName" value="">
<input name="updPhone" value="">
<input type="submit" value="pro7_s6update.php">
</form>
<?php
if (!isset($_GET['updShipperID'])) { exit; }
require("pro7_s1connect.php");
$sql="update $tb set ";
$sql.="ShipperID='". $_GET['updShipperID'] ."', ";
$sql.="CompanyName='". $_GET['updCompanyName'] ."' ";
$sql.="Phone='". $_GET['updPhone'] ."' ";
$sql.="where ShipperID='". $_GET['updShipperID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro7_s0index.php'/>";
mysql_close($connect);
?>
</body>