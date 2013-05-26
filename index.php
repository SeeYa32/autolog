<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Mileage Submission Form</title>
<link href="./css/indexstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <div class="content">
    <h1>Enter Mileage</h1>
    <form id="mileageInputForm" action="./index.php" method="post">
    Mileage: <input type="text" name="mileageInput" value="">
    <input type="submit">
    </form>
    <p><?php
	$mileageSubmission = $_POST["mileageInput"];
		if (empty($mileageSubmission) == false) { 
			echo "You entered $mileageSubmission!";
		}
	?></p>
   <?php
// Create connection
$con=mysqli_connect("mysql.idtso.com","","","");

 // Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else if ($mileageSubmission == "push") {
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
	  	mysqli_query($con, "INSERT INTO main (`ID`, `name`, `age`) VALUES (NULL, '$mileageSubmission', '12')");
		echo "Mileage successfully saved in database.";
  }
?>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>