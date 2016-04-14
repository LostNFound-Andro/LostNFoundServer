<?php
$con = new mysqli("localhost", "root", "sel-lfa", "maindb");
if($con ->connect_error){
    die("error connectiong");
}

$email = $_POST["email"];
$con -> query($sql);
$res = $con -> query("SELECT found_post.title as title, found_post.description as post, category.CategoryName as cid, found_post.email as email, found_post.time as time, found_post.date as date , found_post.location as location FROM `found_post`, `subscription`, `category` WHERE subscription.email='$email' and  subscription.cid = found_post.cid and category.CategoryID = found_post.cid");
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
