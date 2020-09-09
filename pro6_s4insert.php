<?php
	if (!isset($_GET['ProductID']) || !isset($_GET['ProductName']) || !isset($_GET['SupplierID'])) exit;
	require("pro6_s1connect.php");
	$sql = "insert into $tb values('" . $_GET['ProductID'] . "','" . $_GET['ProductName'] . "','" . $_GET['SupplierID'] . "','" . $_GET['sup'] . "','" . $_GET['cat_id'] . "','" . $_GET['qpu'] . "')";
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
	echo '<a href="pro6_s0index.php">back</a>';
?>