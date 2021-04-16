<?php
try{
require_once 'config.php';
$sql="SELECT * FROM employe";
$result=$db->query($sql);
$errorinfo=$db->errorInfo();
//print_r($errorinfo); 
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
//firstColumnasdefault
while($col=$result->fetchColumn(3)){
   
    //print_r($col);
    echo "Email ".$col."<br>";
    //echo $row['firstname']." ".$row[2]."<br>";
    
}

?>