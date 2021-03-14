<?php
require "init.php";
$user_name = $_GET["username"];
$user_password = $_GET["password"];
$user_email = $_GET["email"];

$sql = "select name from retrofit_user where username = '$user_email' and password ='$user_password'";
$result = mysqli_query($con, $sql);

if(!mysqli_num_rows($result) >0){
	$status = " failed";
	echo json_encode(array("response"=>$status));
}
else{
	$row =mysqli_fetch_assoc($result);
	$name =$row['name'];
	$status ="Ok";
	echo json_encode(array("Response "=> $status, "name "=>$name));
}
mysqli_close($con);
// html file - login.html
?>