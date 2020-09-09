<?php
	if (!isset($_GET['CategoryID']) || !isset($_GET['CategoryName']) || !isset($_GET['Description'])) exit;
	require("pro1_s1connect.php");
	$sql = "insert into $tb values('" . $_GET['CategoryID'] . "','" . $_GET['CategoryName'] . "','" . $_GET['Description'] . "','" . $_GET['sup'] . "','" . $_GET['cat_id'] . "','" . $_GET['qpu'] . "')";
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
	echo '<a href="pro1_s0index.php">back</a>';
?>