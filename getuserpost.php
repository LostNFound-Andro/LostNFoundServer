<?php
$con = new mysqli("localhost", "root", "sel-lfa", "maindb");
if($con ->connect_error){
    die("error connectiong");
}

$email = $_POST["email"];


$con -> query($sql);
$res = $con -> query("SELECT title, description, cid, email, time, date , location FROM `found_post` WHERE email = '$email'");
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
