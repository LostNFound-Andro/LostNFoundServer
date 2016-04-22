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
	$postid = $_POST["post_id"];



	$sql = "UPDATE `posts` SET `resolve`=1 WHERE `post_id`='$postid'";
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
