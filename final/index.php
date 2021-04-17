<?php
try {
    require_once('connect.php');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    $error=$e->getMessage();
}
if (isset($_POST) & !empty($_POST)) {
    $sql="INSERT INTO employe  (firstname,lastname,email,gender,age) VALUES (:firstname,:lastname,:email,:gender,:age)";
    $result=$db->prepare($sql);
    $res=$result->execute(array(':firstname'=>'Mr.'.$_POST['fname'],
                                    'lastname'=>$_POST['lname'],
                                    'email'=>$_POST['email'],
                                    'gender'=>$_POST['gender'],
                                    'age'=>$_POST['age']
));
    if ($res) {
        echo "Successful inserted data";    
    }
    else {
        echo "failed to insert data";
    }
}
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
                    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
                    <h2>Create operation in crud application</h2>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10"><input type="text" name="fname" class="form control" id="input1" placeholder="First Name"></div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10"><input type="text" name="lname" class="form control" id="input1" placeholder="Last Name"></div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10"><input type="email" name="email" class="form control" id="input1" placeholder="E-mail"></div>
                    </div>
                    <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                        <label ><input type="radio" name="gender" class="form control" id="optionradio1" value="male" checked>Male</label>
                        <label ><input type="radio" name="gender" class="form control" id="optionradio1" value="female" checked>FeMale</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="age">
                        <option>Select your age</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="30">30</option>
                        </select>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit"/>
                    </form>
            </div>
        </div>
    </body>
</html>
