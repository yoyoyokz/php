<?php
try{
require_once 'config.php';
$sql="SELECT * FROM employe";
$rows=$db->query($sql);
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
if(isset($error))
{
    echo "Errors ".$error;
}
foreach ($rows as $row) {
  
    echo $row['firstname']." ".$row[2]."<br>";
}

//Fetch data from database in array
/*foreach ($db->query($sql) as $row) {
    # code...
    echo"<pre>";
    print_r($row);
    echo"</pre>";
}*/
?>