<?php
	header("Access-Control-Allow-Origin: *");
	$host = "138.68.140.83";
	$user = "Prudhvi";
	$password = "Prudhvi@2004";
	$database = "dbPrudhvi";
	$dbConnection = new mysqli($host, $user, $password, $database);
	if ($dbConnection) {
		$itemID = $_GET['itemID'];
		$selectQuery = "SELECT *FROM Stock WHERE ItemID = '$itemID'";
		$cursor = mysqli_query($dbConnection, $selectQuery);
		if ($result = mysqli_fetch_assoc($cursor)) {
			$jsonData = new stdClass();
			$jsonData->ItemID = $result['ItemID'];
			$jsonData->Description = $result['Description'];
			$jsonData->UnitPrice = $result['UnitPrice'];
			$jsonData->StockQty = $result['StockQty'];
			$jsonData = json_encode($jsonData);
			echo $jsonData;
		}
	}

?>