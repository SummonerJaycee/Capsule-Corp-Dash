<?php session_start(); ?>
<?php include('db_access.php'); ?>


<?php
//These are the values from the login page.
$myusername=$_POST['username'];
$mypassword=$_POST['password'];



//To protect from MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);



//Start the select statement
$sql = "SELECT * FROM emp WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

//Count the table rows received. 
$count = mysql_num_rows($result);



//If result set matched $myusername and $mypassword, then table row must be 1
if($count==1){

	//Register username, password and the "in" session variable and redirect to the Dashboard page. 
$_SESSION['in'] = 1;
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

//Get the name based off of the Tech ID
while ($cdrow=mysql_fetch_array($result)) {
	$cdCust=$cdrow['id'];
	$_SESSION['id'] = $cdCust;		               	
}

// These variables are now in the session (Memory) - Move on to the Dashboard page.
header("location:../dashboard.php");
}
else {
	echo "Your username and password combination, is incorrect. hit the back button and try again.";
}
?>

