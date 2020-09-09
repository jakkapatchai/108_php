<?php
$myForm = '<body>
<form action="pro8_s5delete.php">
<input name="delSupplierID" value="">
<input type="submit" value="pro8_s5delete.php">
</form>';
if (!isset($_GET['delSupplierID'])) { 
  echo $myForm;
  exit;
}
require("pro8_s1connect.php");
$sql="delete from $tb ";
$sql.="where SupplierID ='".$_GET['delSupplierID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro8_s0index.php");
mysql_close($connect);
?>
</body>