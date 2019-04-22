<?php
//if there is a uname and pass then check it againts the db to see if they
//should go to page.php
//a session is an associatve array that will
//presist BETWEE pages.
$path = './';
session_start();
session_name("lijingzhangcloud6");
$_SESSION['test']="Hello RIT person";
//check if the passwords are the same:
if(!empty($_POST['uname']) && !empty($_POST['pass']) ){
    //they are making an attempt!
    //connect to the db
    require $path.'../../../../dbConnect.inc';

    $stmt=$mysqli->prepare("SELECT password FROM USER_INFO WHERE username=?");
    //bind
    $stmt->bind_param("s",$_POST['uname']);
    //go, do it
    $stmt->execute();
    //need the results from this
    $stmt->bind_result($res);
    $stmt->fetch();

    if (password_verify($_POST['pass'], $res)) {
        $_SESSION['login']=true;
        $_SESSION['name']=$_POST['uname'];
        header('Location: ../assets/include/quiz.php');
    }

    $stmt->close();
}else{
    //echo 'Nope uname/pass sent in';
}


?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        User Name:
        <input type="text" name="uname" size="30"  />
    </div>
    <div>
        Password:
        <input type="password" name="pass" size="30" />
    </div>
    <div class="clearfix">
<!--        <input class="button" type="reset" value="Reset Form" />-->
        <input class="button" type="submit" value="Enter Site" />
        <input class="button" type="button" value="Register" onclick="window.location.href='index.php?page=register'" />

<!--        <div>-->
<!---->
<!--        </div>-->
    </div>
</form>

