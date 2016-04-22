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
	$postid= $_POST["post_id"];
	$o = array();


	$sql = "INSERT INTO `report` (`email_id`, `post_id`) VALUES ('$email', '$postid') ";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		$o["status"]="success";
	}
	else
	{
		$o["status"] = "You've already reported this post!";
	}
print(json_encode($o));
}
}
else
{
	echo "error";
}

?>
