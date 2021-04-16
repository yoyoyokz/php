<?php
try{
require_once 'config.php';
$sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES (?,?,?,?,?)";
$result=$db->prepare($sql);
$result->bindValue(1,'Mr.'.$_GET['fname']);
$result->bindParam(2,$_GET['lname']);
$result->bindParam(3,$_GET['email']);
$result->bindParam(4,$_GET['gender']);
$result->bindParam(5,$_GET['age'],PDO::PARAM_INT);
$res=$result->execute();

//$count=$result->rowCount();

$errorinfo=$db->errorInfo();
if (isset($errorinfo[2])) {
    $error=$errorinfo[2];
}
}

catch(Exception $e){
   $error=$e->getMessage();
}

if(isset($error))
{
    echo "Errors ".$error;
}
var_dump($res);
?>