<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$con = mysqli_connect("localhost","","","");
if(!$con)
{
	echo "Failed to connect" . mysqli_connect_error();
}
else
{
	$email = $_POST["email"];
	$catid= $_POST["catid"];


	$sql = "INSERT INTO `subscription` (`email`, `cid`) VALUES ('$email', '$catid') ";
	echo $sql;
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo "Data post success";
	}
	else
	{
		echo "Data post failed";
	}
}
}
else
{
	echo "error";
}

?>
