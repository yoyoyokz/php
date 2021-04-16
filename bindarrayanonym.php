<?php
try{
require_once 'config.php';
$sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES (?,?,?,?,?)";
$result=$db->prepare($sql);
/*$values=array('Mr.'.$_GET['fname'],
                $_GET['lname'],
                $_GET['email'],
                $_GET['gender'],
                $_GET['age']
            );*/
//simpler without another variable
$res=$result->execute(array('Mr.'.$_GET['fname'],
$_GET['lname'],
$_GET['email'],
$_GET['gender'],
$_GET['age'])); 
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
