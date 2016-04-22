<?php
$con = new mysqli("localhost", "", "", "");
if($con ->connect_error){
    die("error connectiong");
}

$email = $_POST["email"];
$con -> query($sql);
$res = $con -> query("SELECT posts.post_type as post_type, posts.title as title, posts.description as description, category.CategoryName as cid, posts.post_id as post_id, posts.time as time, posts.date as date , posts.location as location FROM `posts`, `category` WHERE posts.email='$email' AND category.CategoryID = posts.cid and posts.resolve = 0 ORDER BY post_id DESC");
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
