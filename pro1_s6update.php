<body>
<form action="pro1_s6update.php">
<input name="updCategoryID" value="">
<input name="updCategoryName" value="">
<input name="updDescription" value="">
<input type="submit" value="pro1_s6update.php">
</form>
<?php
if (!isset($_GET['updCategoryID'])) { exit; }
require("pro1_s1connect.php");
$sql="update $tb set ";
$sql.="CategoryID='". $_GET['updCategoryID'] ."', ";
$sql.="CategoryName='". $_GET['updCategoryName'] ."' ";
$sql.="Description='". $_GET['updDescription'] ."' ";
$sql.="where CategoryID='". $_GET['updCategoryID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro1_s0index.php'/>";
mysql_close($connect);
?>
</body>