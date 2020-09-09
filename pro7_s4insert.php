<?php
	if (!isset($_GET['ShipperID']) || !isset($_GET['CompanyName']) || !isset($_GET['Phone'])) exit;
	require("pro7_s1connect.php");
	$sql = "insert into $tb values('" . $_GET['ShipperID'] . "','" . $_GET['CompanyName'] . "','" . $_GET['Phone'] . "','" . $_GET['sup'] . "','" . $_GET['cat_id'] . "','" . $_GET['qpu'] . "')";
	if ((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE)
			echo "$sql : failed";
		else
		 echo "$sql : succeeded";
	$connect->close();
} else {
		if (!$result = mysql_db_query($db, $sql))
			echo "$sql : failed";
		else
			echo "$sql : succeeded";
		mysql_close($connect);
	}
	echo '<a href="pro7_s0index.php">back</a>';
?>