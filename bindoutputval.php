
<?php
//retrouver les valeurs d'1 table de la bdd
try{
require_once 'config.php';
$sql="SELECT * FROM employe";
$result=$db->prepare($sql);
$result->execute();
$result->bindColumn('firstname',$fname);
$result->bindColumn('lastname',$lname);
$result->bindColumn('ID',$id);
$result->bindColumn('3',$email);


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
while($result->fetch()){
    echo $id." ".$fname." ".$lname." ".$email."<br>";
}

?>