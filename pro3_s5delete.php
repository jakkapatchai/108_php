<?php
$myForm = '<body>
<form action="pro3_s5delete.php">
<input name="delEployeeID" value="">
<input type="submit" value="pro3_s5delete.php">
</form>';
if (!isset($_GET['delEployeeID'])) { 
  echo $myForm;
  exit;
}
require("pro3_s1connect.php");
$sql="delete from $tb ";
$sql.="where EployeeID ='".$_GET['delEployeeID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro3_s0index.php");
mysql_close($connect);
?>
</body>