<?php
try{
require_once 'config.php';
$sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES (:firstname,:lastname,:email,:gender,:age)";
$result=$db->prepare($sql);
$result->bindValue(':firstname','Mr.'.$_GET['fname']);
$result->bindParam('lastname',$_GET['lname']);
$result->bindParam('email',$_GET['email']);
$result->bindParam('gender',$_GET['gender']);
$result->bindParam('age',$_GET['age'],PDO::PARAM_INT);
$result->execute();

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

?>