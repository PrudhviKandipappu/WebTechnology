<?php
	header("Access-Control-Allow-Origin: *");
	$host = "138.68.140.83";
	$user = "Prudhvi";
	$password = "Prudhvi@2004";
	$database = "dbPrudhvi";
	$dbConnection = new mysqli($host, $user, $password, $database);
	if ($dbConnection){
		$itemID = $_GET['itemID'];
		$selectQuery = "SELECT *FROM Item WHERE ItemID LIKE '$itemID%'";
		$result = mysqli_query($dbConnection, $selectQuery);
		$totalRows = mysqli_num_rows($result);
		if ($totalRows > 0) {
			?>
			<table border='3'>
				<tr>
					<th>ItemID</th>
					<th>Description</th>
					<th>StockQty</th>
					<th>UnitPrice</th>
					<th>SupplierID</th>
				</tr>
			<?php
			while($data = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo($data['ItemID']); ?></td>
					<td><?php echo($data['Description']);?> </td>
					<td><?php echo($data['StockQty']); ?> </td>
					<td><?php echo($data['UnitPrice']); ?> </td>
					<td><?php echo($data['SupplierID']); ?> </td>
				</tr>
				<?php
			}
			?>
			</table><?php
		}
	}
	$dbConnection->close();
?>
