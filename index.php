<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Mileage Submission Form</title>
<link href="./css/indexstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<p><a href="./inputform.php">Input Form</a></p>
  <div class="content">
    <h1>Enter Mileage</h1>
    <form id="mileageInputForm" action="./index.php" method="get">
    Mileage: <input type="text" name="mileageInput" value="">
    <input type="submit">
    </form>
    <p><?php
	$mileageSubmission = $_GET["mileageInput"];
		if (empty($mileageSubmission) == false) { 
			echo "You entered $mileageSubmission!";
		}
	?></p>
   <?php
	// Create connection
	$con=mysqli_connect("mysql.idtso.com","","","idtsoservicelog");

	// Check connection
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	if ($mileageSubmission == "push") {
	    curl_setopt_array($pushPost = curl_init(), array(
		CURLOPT_URL => "https://api.pushover.net/1/messages.json",
   		CURLOPT_POSTFIELDS => array(
  		"token" => "", 
  		"user" => "",
  		"message" => "Your car needs servicing.",
		)));
		curl_setopt($pushPost, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($pushPost);
		curl_close($pushPost); 
	}
	else if (empty($mileageSubmission) == false) {

		$query =  "INSERT INTO `idtsoservicelog`.`mileage` (`ID`, `mileage`) VALUES (?,?)";
		$id = NULL;
	  	$stmt = mysqli_prepare($con, $query);
		mysqli_stmt_bind_param($stmt, 'si', $id, $mileageSubmission);
		mysqli_stmt_execute($stmt);
		echo "Mileage successfully saved in database.";
	}
?>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>