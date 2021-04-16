<?php
try{
require_once 'config.php';
$sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES ('okpa','thiallé','okpa@gmail.dead','m','35')";
//Query Method
//$result=$db->query($sql);44
//EXec méthode
$result=$db->exec($sql);

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
//var_dump($result);
echo $result."Records inserted in db".$db->lastInsertID();
?>