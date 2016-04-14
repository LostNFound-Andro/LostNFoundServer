<?php
if($_SERVER[REQUEST_METHOD]=="POST")
{
$con = mysqli_connect("localhost","root","sel-lfa","maindb");
if(!$con)
{
	echo "Failed to connect" . mysqli_connect_error();
}
else
{
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$sql = "INSERT INTO users ('email','password') VALUES ('$email','$pwd');";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo "Success";
	}
	else
	{
		echo "Email already registered!";
	}
}
else
{
echo "error!";
}
?>