<?php
$myForm = '<body>
<form action="pro5_s5delete.php">
<input name="delOrderID" value="">
<input type="submit" value="pro5_s5delete.php">
</form>';
if (!isset($_GET['delOrderID'])) { 
  echo $myForm;
  exit;
}
require("pro5_s1connect.php");
$sql="delete from $tb ";
$sql.="where OrderID ='".$_GET['delOrderID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro5_s0index.php");
mysql_close($connect);
?>
</body>