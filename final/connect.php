<?php
/*$con=mysqli_connect('localhost','root','');
if (!$con) {
    die("Database connection failed".mysqli_error($con));
}
$selectdb=mysqli_select_db($con,'crudphp');
if (!$selectdb) {
    die("Database Selection Failed".mysqli_error($con));
}*/
$dsn='mysql:host=localhost;dbname=crudphp';
$db=new PDO($dsn,'root','');
?>