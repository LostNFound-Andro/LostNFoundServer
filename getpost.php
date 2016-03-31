
<?php

$con = new mysqli("localhost", "b130112cs", "b130112cs", "db_b130112cs");

if($con ->connect_error){
    die("error connectiong");
}






$con -> query($sql);

$res = $con -> query("SELECT Title, Description, CategoryID, EmailID, Time, Date , Location FROM `FoundPost`");
$o = array();

while($row = $res->fetch_assoc()){
    $o[] = $row;
    //print_r($row);
}
$final=array('postlist'=>$o);
print(json_encode($final));
?>
