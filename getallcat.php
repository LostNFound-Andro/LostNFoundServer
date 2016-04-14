<?php
$con = new mysqli("localhost", "root", "sel-lfa", "maindb");
if($con ->connect_error){
    die("error connectiong");
}




$con -> query($sql);
$res = $con -> query("SELECT CategoryID,CategoryName  FROM `category` ");
$o = array();
while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('category_list'=>$o);
print(json_encode($final));
?>
