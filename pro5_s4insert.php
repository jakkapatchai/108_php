<?php
	if (!isset($_GET['OrderID']) || !isset($_GET['CustomerID']) || !isset($_GET['EmployeeID'])) exit;
	require("pro5_s1connect.php");
	$sql = "insert into $tb values('" . $_GET['OrderID'] . "','" . $_GET['CustomerID'] . "','" . $_GET['EmployeeID'] . "','" . $_GET['sup'] . "','" . $_GET['cat_id'] . "','" . $_GET['qpu'] . "')";
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
	echo '<a href="pro5_s0index.php">back</a>';
?>