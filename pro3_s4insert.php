<?php
	if (!isset($_GET['EployeeID']) || !isset($_GET['LastName']) || !isset($_GET['FirstName'])) exit;
	require("pro3_s1connect.php");
	$sql = "insert into $tb values('" . $_GET['EployeeID'] . "','" . $_GET['LastName'] . "','" . $_GET['FirstName'] . "','" . $_GET['sup'] . "','" . $_GET['cat_id'] . "','" . $_GET['qpu'] . "')";
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
	echo '<a href="pro3_s0index.php">back</a>';
?>