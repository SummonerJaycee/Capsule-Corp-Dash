<?php 
include 'db_access.php';

$sql = "INSERT INTO emp (first_name, last_name, username, password, email, kind) VALUES ('$first_name','$last_name','$username','$password','$email','$kind')";

$res = mysqli_query($mysqli, $sql);
	
	if ($res === TRUE) {
		$response = "It worked so far. #1";
		//echo $response;
	} else {
		$response = mysqli_error($mysqli);
	}
	mysqli_close($mysqli);
?>