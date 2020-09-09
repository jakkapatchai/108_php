<body>
<form action="pro3_s6update.php">
<input name="updEployeeID" value="">
<input name="updLastName" value="">
<input name="updFirstName" value="">
<input type="submit" value="pro3_s6update.php">
</form>
<?php
if (!isset($_GET['updEployeeID'])) { exit; }
require("pro3_s1connect.php");
$sql="update $tb set ";
$sql.="EployeeID='". $_GET['updEployeeID'] ."', ";
$sql.="LastName='". $_GET['updLastName'] ."' ";
$sql.="FirstName='". $_GET['updFirstName'] ."' ";
$sql.="where EployeeID='". $_GET['updEployeeID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro3_s0index.php'/>";
mysql_close($connect);
?>
</body>