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
	$title = $_POST["title"];
	$description = $_POST["description"];
	$location = $_POST["location"];
	$cid = $_POST["cid"];
	$time = $_POST["time"];
	$date = $_POST["date"];
	if($_POST["postType"]=="found")
	{
	$sql = "INSERT INTO `posts`(`post_id`, `description`, `email`, `cid`, `title`, `date`, `time`, `location`, `post_type`) VALUES ('','$description','$email','$cid','$title','$date','$time','$location', 0)";
	}
	else
	{
	$sql = "INSERT INTO `posts`(`post_id`, `description`, `email`, `cid`, `title`, `date`, `time`, `location`, `post_type`) VALUES ('','$description','$email','$cid','$title','$date','$time','$location', 1)";
	}
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
