<?php
$myForm = '<body>
<form action="pro1_s5delete.php">
<input name="delCategoryID" value="">
<input type="submit" value="pro1_s5delete.php">
</form>';
if (!isset($_GET['delCategoryID'])) { 
  echo $myForm;
  exit;
}
require("pro1_s1connect.php");
$sql="delete from $tb ";
$sql.="where CategoryID ='".$_GET['delCategoryID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro1_s0index.php");
mysql_close($connect);
?>
</body>