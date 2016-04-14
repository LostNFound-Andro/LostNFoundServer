<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$con = mysqli_connect("localhost","root","sel-lfa","maindb");
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

	$sql = "INSERT INTO `found_post`(`post_id`, `description`, `email`, `cid`, `title`, `date`, `time`, `location`) VALUES ('','$description','$email','$cid','$title','$date','$time','$location')";
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
