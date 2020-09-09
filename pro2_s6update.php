<body>
<form action="pro2_s6update.php">
<input name="updCustomerID" value="">
<input name="updCompanyName" value="">
<input name="updContactName" value="">
<input type="submit" value="pro2_s6update.php">
</form>
<?php
if (!isset($_GET['updCustomerID'])) { exit; }
require("pro2_s1connect.php");
$sql="update $tb set ";
$sql.="CustomerID='". $_GET['updCustomerID'] ."', ";
$sql.="CompanyName='". $_GET['updCompanyName'] ."' ";
$sql.="ContactName='". $_GET['updContactName'] ."' ";
$sql.="where CustomerID='". $_GET['updCustomerID'] ."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=pro2_s0index.php'/>";
mysql_close($connect);
?>
</body>