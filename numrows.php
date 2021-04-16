<?php
try{
require_once 'config.php';
$sql="SELECT * FROM employe";
$result=$db->query($sql);
$count=$result->rowCount();

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
echo  "Total nr of results in crud table: ".$count

?>