<?php
	$host = "138.68.140.83";
	$user = "Prudhvi";
	$password = "Prudhvi@2004";
	$database = "dbPrudhvi";
	$dbConnection = new mysqli($host, $user, $password, $database);
	if ($dbConnection) {
		$itemID = $_GET['itemID'];
		$description = $_GET['description'];
		$stockQty = $_GET['stockQty'];
		$unitPrice = $_GET['unitPrice'];
		$insertQuery = "INSERT INTO Stock VALUES ('$itemID', '$description', '$stockQty', '$unitPrice')";
		$cursor = mysqli_query($dbConnection, $insertQuery);
	}
?>