<?php
$con = new mysqli("localhost", "root", "sel-lfa", "maindb");
if($con ->connect_error){
    die("error connectiong");
}


$email = $_POST['email'];

$con -> query($sql);
$res = $con -> query("SELECT category.CategoryID as CategoryID,category.CategoryName as CategoryName  FROM `category`, `subscription` WHERE subscription.email = '$email' and  subscription.cid = category.CategoryID");
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('category_list'=>$o);
print(json_encode($final));
?>
