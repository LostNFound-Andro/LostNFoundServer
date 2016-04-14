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
	$email = $_POST[email];
	$pwd = $_POST[password];
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$pwd';";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)==1)
	{
		echo "Success";
	}
	else
	{
		echo "Wrong credentials";
	}
}
}
else
{
	echo "error!";
}
?>