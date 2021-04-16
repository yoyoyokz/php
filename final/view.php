<?php
try {
    require_once('connect.php');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    $error=$e->getMessage();
}
if(isset($error)){
echo $error;
}
$sql="SELECT * FROM `employe`";
$result=$db->query($sql);
?>

<!doctype html>
<html lang="en">
    <head>
       <title>Crud Bro</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <div class="row">
        <table class="table">
            <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>E-Mail</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Extras</th>
            </tr>
            <?php
            while($r=$result->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
            <td><?php echo $r['ID'];?></td>
            <td><?php echo $r['firstname']."".$r['lastname']; ?></td>   
            <td><?php echo $r['email'];?></td>
            <td><?php echo $r['gender'];?></td>
            <td><?php echo $r['age'];?></td>
            <td>
            <a href="update.php?ID=<?php echo $r['ID'];?>">Edit</a>
            <a href="delete.php?ID=<?php echo $r['ID'];?>">Delete</a>
            </td>
            </tr>
            <?php } ?> 
        <table>
        </div>
        </div>
    </body>
</html>
