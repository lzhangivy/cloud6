<?php
$path = './';
//check if the passwords are the same:
//if there are uname, pass, pass2 and both pass same them put them in the database
if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch()){
    //connect to the db
    require $path.'../../../../dbConnect.inc';
    //put stuf into the database

    //Since data is comming form the user
    //you need to use prepare statements
    $useuser =$_POST['uname'];
    $usepass =$_POST['pass'];
    $stmt=$mysqli->prepare("INSERT INTO USER_INFO (username, password) VALUES(?, ?)");
    //bind params(type of think being sent "ss", uname, hassed pass
//    echo "lijing";
    $stmt->bind_param("ss",$useuser,password_hash($usepass,PASSWORD_DEFAULT));
    //go, do it
    $stmt->execute();
//    $stmt->close();
//    echo "I am in register for sure";
    //put them back to index to re-login
    header('Location: ../quiz/index.php');
}

function passMatch(){
    if(strcmp($_POST['pass'],$_POST['pass2'])==0){
        return true;
    }else{
        return false;
    }
}
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8" />-->
<!--    <title>Register-lijing</title>-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<form action = "--><?php //echo $_SERVER['PHP_SELF']; ?><!--" method="POST">-->
<form action = "index.php?page=register" method="POST" onsubmit="return validateForm();">
    <div>
        User Name:
        <input type="text" name="uname" size="30" id="uname"  />
    </div>
    <div>
        Password:
        <input type="password" name="pass" size="30" id="password" />
    </div>
    <div>
        Password (again):
        <input type="password" name="pass2" size="30" />
    </div>
    <div class="clearfix">
<!--        <input class="button" type="reset" value="Reset Form" />-->
        <input class="button" type="submit" value="Submit Form" />
        <input class="button" type="button" value="Back to Login" onclick="window.location='index.php'" />
    </div>
</form>
<!--</body>-->
<!--</html>-->
