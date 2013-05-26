<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

// Create connection
$logcon = mysqli_connect("mysql.idtso.com","","","idtsoservicelog");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
		$query = "INSERT INTO `idtsoservicelog`.`servicelog` (`ID`, `Part Replaced`, `Date Replaced`, `Odometer`, `Volvo Part Number`, `New Part Origin`, `New Part Number`) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($logcon, $query);
		mysqli_stmt_bind_param($stmt, 'sssisss', $id, $partReplaced, $dateReplaced, $odometer, $volvoPartNum, $newPartOrigin, $newPartNum);
		$partReplaced = $_POST["partReplaced"];
		$dateReplaced = $_POST["dateReplaced"];
		$odometer = $_POST["odometer"];
		$volvoPartNum = $_POST["volvoPartNum"];
		$newPartOrigin = $_POST["newPartOrigin"];
		$newPartNum = $_POST["newPartNum"];
		$id = NULL;
		mysqli_stmt_execute($stmt);
		printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));
		echo "Mileage successfully saved in database.";
		
		$selectQuery = "SELECT * FROM `servicelog`";
		//echo "Mileage successfully saved in database.";
		//mysqli_query($logcon, $query);
		/*$select = mysqli_query($logcon, $selectQuery);

		while($row = mysqli_fetch_assoc($select)){
			foreach($row as $cname => $cvalue){
				print "$cname: $cvalue\t";
			}
			print "\r\n";
		}*/
 
  mysqli_close($logcon);
?>
<div class="container">
  <div class="content">
    <h1 align="center">Service Log</h1>
    <table align="center" class="Service Log">
	<th class="serviceHeader">Date Replaced</th>
	<th class="serviceHeader">Part Replaced</th>
	<th class="serviceHeader">Odometer Reading</th>
	<th class="serviceHeader">Volvo PN</th>
	<th class="serviceHeader">New Part Store</th>
	<th class="serviceHeader">New Part Number</th>
	<tr class="serviceRow">
		<td class="serviceCell">129,708</td>
		<td class="serviceCell">5/7/2013</td>
		<td class="serviceCell">Serpentine Belt</td>
		<td class="serviceCell">Row 1 Col 4</td>
		<td class="serviceCell">Row 1 Col 5</td>
		<td class="serviceCell">Row 1 Col 6</td>
	</tr>
	<tr class="serviceRow">
		<td class="serviceCell">129,500</td>
		<td class="serviceCell">4/26/2013</td>
		<td class="serviceCell">Ignition Coils</td>
		<td class="serviceCell">Row 2 Col 4</td>
		<td class="serviceCell">Row 2 Col 5</td>
		<td class="serviceCell">Row 2 Col 6</td>
	</tr>
	<tr class="serviceRow">
		<td class="serviceCell">129,500</td>
		<td class="serviceCell">4/26/2013</td>
		<td class="serviceCell">Spark Plugs</td>
		<td class="serviceCell">Row 3 Col 4</td>
		<td class="serviceCell">Row 3 Col 5</td>
		<td class="serviceCell">Row 3 Col 6</td>
	</tr>
</table>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>