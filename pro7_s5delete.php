<?php
$myForm = '<body>
<form action="pro7_s5delete.php">
<input name="delShipperID" value="">
<input type="submit" value="pro7_s5delete.php">
</form>';
if (!isset($_GET['delShipperID'])) { 
  echo $myForm;
  exit;
}
require("pro7_s1connect.php");
$sql="delete from $tb ";
$sql.="where ShipperID ='".$_GET['delShipperID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro7_s0index.php");
mysql_close($connect);
?>
</body>