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

//Fetch data from database only firstname.lastname 
if(isset($errorx))
{
    echo "Errors ".$error;
}
while($row=$result->fetch(PDO::FETCH_NUM)){
    
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    //echo $row['firstname']." ".$row[2]."<br>";
    
}

?>