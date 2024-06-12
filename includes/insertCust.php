<?php 
include 'db_access.php';

$sql = "INSERT INTO customer (cust_f_name, cust_l_name, cust_email, cust_address, cust_city, cust_state, cust_phone) VALUES ('$cust_f_name','$cust_l_name','$cust_email','$cust_address','$cust_city','$cust_state', '$cust_phone')";

$res = mysqli_query($mysqli, $sql);

	if ($res === TRUE) {
		$response = "It worked so far. #1";
		//echo $response;
	} else {
		$response = mysqli_error($mysqli);
	}
    mysqli_close($mysqli);
?>