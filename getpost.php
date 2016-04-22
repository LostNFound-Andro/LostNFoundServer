<?php
$con = new mysqli("localhost", "", "", "");
if($con ->connect_error){
    die("error connectiong");
}

$email = $_POST["email"];
$type= $_POST["posttype"];
$con -> query($sql);
if($type=="found")
{
$res = $con -> query("SELECT posts.post_id as post_id, posts.title as title, posts.description as description, category.CategoryName as cid, posts.email as email, posts.time as time, posts.date as date , posts.location as location, counttable.count as count FROM `posts`, `subscription`, `category`, (SELECT post_id,COUNT(*) as count FROM `report` GROUP BY `post_id`) as counttable WHERE subscription.email='$email' and  subscription.cid = posts.cid and category.CategoryID = posts.cid and posts.resolve = 0 and posts.email <> '$email' and posts.post_type=0 and counttable.post_id = posts.post_id");
}
else
{
$res = $con -> query("SELECT posts.post_id as post_id, posts.title as title, posts.description as description, category.CategoryName as cid, posts.email as email, posts.time as time, posts.date as date , posts.location as location, counttable.count as count FROM `posts`, `subscription`, `category`, (SELECT post_id,COUNT(*) as count FROM `report` GROUP BY `post_id`) as counttable WHERE subscription.email='$email' and  subscription.cid = posts.cid and category.CategoryID = posts.cid and posts.resolve = 0 and posts.email <> '$email' and posts.post_type=1 and counttable.post_id = posts.post_id");

}
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
