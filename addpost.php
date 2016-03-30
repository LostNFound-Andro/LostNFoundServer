<?php

$con = new mysqli("localhost", "b130112cs", "b130112cs", "db_b130112cs");

if($con ->connect_error){
    die("error connectiong");
}


$desc = $_POST["desc"];
$email = $_POST["email"];
$cat= $_POST["cat"];
$title= $_POST["title"];
$date= $_POST["date"];
$time= $_POST["time"];
$loc= $_POST["loc"];
//$timestamp = time();

$sql = "INSERT INTO `db_b130112cs`.`FoundPost` (`Description`, `EmailID`, `CategoryID`,`Title`,`Date`,`Time`,`Location`) VALUES ('$desc', '$email', '$cat', '$title', '$date', '$time', '$location');";

//$sql = "INSERT INTO `db_b130112cs`.`FoundPost` (`Description`, `EmailID`, `CategoryID`, `Title`, `Date`, `Time`, `Location`) VALUES ($desc, $email, $cat, $title, $date, $time, $loc);");

echo $sql;

$con -> query($sql);


?>
