<?php
try{
require_once 'config.php';
$sql="DELETE FROM employe WHERE lastname='thiallé'";
//Query Method
//$result=$db->query($sql);44
//EXec méthode
$delete=$db->exec($sql);

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
echo $delete. "Records Deleted from DB";
?>