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
$res = $con -> query("SELECT maintable.post_id as post_id, maintable.title as title, maintable.description as description, maintable.cid as cid, maintable.email as email, maintable.time as time, maintable.date as date , maintable.location as location, counttable.count as count
FROM
(SELECT posts.post_id as post_id, posts.title as title, posts.description as description, category.CategoryName as cid, posts.email as email, posts.time as time, posts.date as date , posts.location as location FROM `posts`, `subscription`, `category` WHERE subscription.email='$email' and  subscription.cid = posts.cid and category.CategoryID = posts.cid and posts.resolve = 0 and posts.email <> '$email' and posts.post_type=0) as maintable
LEFT JOIN (SELECT post_id,COUNT(*) as count FROM `report` GROUP BY `post_id`) as counttable
ON maintable.post_id = counttable.post_id ORDER BY maintable.post_id DESC");
}
else
{
$res = $con -> query("SELECT maintable.post_id as post_id, maintable.title as title, maintable.description as description, maintable.cid as cid, maintable.email as email, maintable.time as time, maintable.date as date , maintable.location as location, counttable.count as count
FROM
(SELECT posts.post_id as post_id, posts.title as title, posts.description as description, category.CategoryName as cid, posts.email as email, posts.time as time, posts.date as date , posts.location as location FROM `posts`, `subscription`, `category` WHERE subscription.email='$email' and  subscription.cid = posts.cid and category.CategoryID = posts.cid and posts.resolve = 0 and posts.email <> '$email' and posts.post_type=1) as maintable
LEFT JOIN (SELECT post_id,COUNT(*) as count FROM `report` GROUP BY `post_id`) as counttable
ON maintable.post_id = counttable.post_id ORDER BY maintable.post_id DESC") ;

}
$o = array();
while($row = $res->fetch_assoc()){
if($row['count']==NULL){
    $row['count']=0;
    $o[] = $row;}
else
{
	$o[]=$row;
}
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
