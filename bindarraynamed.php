<?php
try{
require_once 'config.php';
$sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES (:firstname,:lastname,:email,:gender,:age)";
$result=$db->prepare($sql);
$values=array(':firstname'=>'Mr.'.$_GET['fname'],
                'lastname'=>$_GET['lname'],
                'email'=>$_GET['email'],
                'gender'=>$_GET['gender'],
                'age'=>$_GET['age']
            );
$res=$result->execute($values);
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