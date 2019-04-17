<?php
    require "../../../../dbConnect.inc";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Photoshop Tutorial</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/basics.css">
    <link href="https://fonts.googleapis.com/css?family=Century+Gothic:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

</head>

<header >

    <!--<figure id="logo"> <img src="assets/images/logo_Cloud6%20(1).png"></figure>-->

    <div id="nav">
        <ul>
            <li><a href="../index.php">home</a></li>
            <li><a href="../form/index.php">survey</a></li>
            <li><a href="../blog/index.php">blog</a></li>
            <li><a href="../quiz/index.php">quiz</a></li>
            <li><a href="#">about</a></li>
        </ul>
    </div>

    <div id="contentNav">
        <ul>
            <li id="current"><a  href="../basics/index.php">Photoshop Basics</a></li>
            <li><a href="../color/index.php">Color Correction</a></li>
            <li><a href="../lasso/index.php">Lasso Tool</a></li>
        </ul>
    </div>


</header>

    <body>
        <form id="quizForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" onsubmit="return validateForm();">

            <?php


            $tutorial ="t1";
             #include ""
            ?>
            <p><input type="submit" value="Submit" /></p>
        </form>
    </body>
</html>



