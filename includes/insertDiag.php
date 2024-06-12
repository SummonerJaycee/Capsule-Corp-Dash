<?php 
include 'db_access.php';

$sql = "INSERT INTO diagnostic (device_type, device_manufacturer, device_model_num, device_username, device_password, diag_need, referral_website, other_issues, time_In, customer_ID, intake_ID) VALUES ('$device_type','$device_manufacturer','$device_model_num','$device_username','$device_password','$diag_need', '$referral_website', '$other_issues', '$time_In', '$custid', '$intake_ID')";

$res = mysqli_query($mysqli, $sql);

	if ($res === TRUE) {
		$response = "It worked so far. #1";
		//echo $response;
	} else {
		$response = mysqli_error($mysqli);
	}
    mysqli_close($mysqli);
?>