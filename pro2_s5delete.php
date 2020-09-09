<?php
$myForm = '<body>
<form action="pro2_s5delete.php">
<input name="delCustomerID" value="">
<input type="submit" value="pro2_s5delete.php">
</form>';
if (!isset($_GET['delCustomerID'])) { 
  echo $myForm;
  exit;
}
require("pro2_s1connect.php");
$sql="delete from $tb ";
$sql.="where CustomerID ='".$_GET['delCustomerID']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro2_s0index.php");
mysql_close($connect);
?>
</body>