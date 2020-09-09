<?php
$myForm = '<body>
<form action="pro6_s5delete.php">
<input name="delProductID" value="">
<input type="submit" value="pro6_s5delete.php">
</form>';
if (!isset($_GET['delProductID'])) { 
  echo $myForm;
  exit;
}
require("pro6_s1connect.php");
$sql="delete from $tb ";
$sql.="where ProductID ='".$_GET['delProductID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro6_s0index.php");
mysql_close($connect);
?>
</body>