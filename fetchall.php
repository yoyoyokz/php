<?php
try{
require_once 'config.php';
$sql="SELECT * FROM employe";
$result=$db->query($sql);
//$all=$result->fetchAll(PDO::FETCH_ASSOC);
$all=$result->fetchAll(PDO::FETCH_NUM);
$errorinfo=$db->errorInfo();
//print_r($errorinfo); 
if (isset($errorinfo[2])) {
    $error=$errorinfo[2];
}
}

catch(Exception $e){
   $error=$e->getMessage();
}

//Fetch data from database only firstname.lastname 
if(isset($errorx))
{
    echo "Errors ".$error;
}
echo "<pre>";
print_r($all);
echo "</pre>";
?>