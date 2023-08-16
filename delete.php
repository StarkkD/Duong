<?php

	$uid = $_GET['uid'];

	require '../connect.php';
	$sql = "DELETE from user
			WHERE
			uid = '$uid'";

	mysqli_query($connect, $sql);
	mysqli_close($connect);

	header('location:index.php');
	exit;

?>
